<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $data['categories'] = DB::table('categories')->get();
        $data['products'] = DB::table('products')
            ->orderBy('products.id_category','ASC')
            ->orderBy('products.updated_at', 'ASC')
            ->paginate(24);
        $data['categories_name'] = array();
        foreach ($data['categories'] as $item)
        {
            $data['categories_name'][$item->id] = $item->name;
        }
        return view('backend.content.product.index',$data);
    }

    public function slugify($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $item = new ProductModel();
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->barcode = $input['barcode'];
        $item->star = 5;
        $item->id_category = $input['id_category'];
        $item->images = isset($input['images']) ? json_encode($input['images']) : '';
        $item->country = $input['country'];
        $item->intro = $input['intro'];
        $item->desc = $input['desc'];
        $item->cost = $input['cost'];
        $item->price = $input['price'];
        $item->quantity = $input['quantity'];
        $item->id_tag = 0;
        $item->seo_title = $input['seo_title'];
        $item->seo_keyword = $input['seo_keyword'];
        $item->seo_desc = $input['seo_desc'];
        $item->status = 1;
        $item->save();
        return redirect()->route('admin.product.index')->with('success-message','Thêm sản phẩm '.$input['name'].' thành công!');
    }

    public function edit($id)
    {
        $data['product'] = ProductModel::find($id);
        $data['categories'] = DB::table('categories')->get();
        return view('backend.content.product.edit',$data);
    }
    public function update($id, Request $request)
    {
        $input = $request->all();
        $item = ProductModel::find($id);
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->barcode = $input['barcode'];
        $item->star = 5;
        $item->id_category = $input['id_category'];
        $item->images = isset($input['images']) ? json_encode($input['images']) : '';
        $item->country = $input['country'];
        $item->intro = $input['intro'];
        $item->desc = $input['desc'];
        $item->cost = $input['cost'];
        $item->price = $input['price'];
        $item->quantity = $input['quantity'];
        $item->id_tag = 0;
        $item->seo_title = $input['seo_title'];
        $item->seo_keyword = $input['seo_keyword'];
        $item->seo_desc = $input['seo_desc'];
        $item->status = 1;
        $item->save();
        return redirect()->route('admin.product.index')->with('success-message','Đã sửa thông tin sản phẩm '.$input['name'].' thành công!');
    }
    public function destroy($id)
    {
        $item = ProductModel::find($id);
        $item->delete();
        return redirect()->route('admin.product.index')->with('success-message','Đã xóa sản phẩm thành công!');
    }
}

