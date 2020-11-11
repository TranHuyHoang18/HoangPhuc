<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index(){
        $data['categories'] =DB::table('categories')->paginate(40);
        return view('backend.content.category.index',$data);
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
    public function store(Request  $request)
    {
        $input = $request->all();
        $item = new CategoryModel();
        $item->id_parent = $input['id_parent'];
        if ($input['id_parent']!= 0){
            $cate_parent = CategoryModel::find($input['id_parent']);
            if ($cate_parent != null)
                $item->level = $cate_parent->level + 1;
            else $item->level = 0;
        }else $item->level = 0;
       $item->name = $input['name'];
       $item->slug = $this->slugify($input['name']);
       $item->icon = $input['icon'];
       $item->intro = $input['intro'];
       $item->seo_title = $input['seo_title'];
       $item->seo_keyword = $input['seo_keyword'];
       $item->seo_desc = $input['seo_desc'];
       $item->seo_desc = $input['seo_desc'];
       $item->status = "0";
       $item->save();
       return redirect()->route('admin.category.index')->with('success-message','Thêm danh mục thành công!');
    }
    public function edit($id)
    {
        $data['item'] = CategoryModel::find($id);
        $data['categories'] =DB::table('categories')->paginate(40);
        return view('backend.content.category.edit',$data);
    }
    public function update($id, Request $request)
    {
        $input = $request->all();
        $item =CategoryModel::find($id);
        $item->id_parent = $input['id_parent'];
        if ($input['id_parent']!= 0){
            $cate_parent = CategoryModel::find($input['id_parent']);
            if ($cate_parent != null)
                $item->level = $cate_parent->level + 1;
            else $item->level = 0;
        }else $item->level = 0;
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->icon = $input['icon'];
        $item->intro = $input['intro'];
        $item->seo_title = $input['seo_title'];
        $item->seo_keyword = $input['seo_keyword'];
        $item->seo_desc = $input['seo_desc'];
        $item->seo_desc = $input['seo_desc'];
        $item->status = "0";
        $item->save();
        return redirect()->route('admin.category.index')->with('success-message','Đã cập nhật thông tin danh mục thành công!');
    }
    public function destroy($id)
    {
        $category = CategoryModel::find($id);
        $category->delete();
        return redirect()->route('admin.category.index')->with('success-message','Đã xóa danh mục thành công!');
    }
}
