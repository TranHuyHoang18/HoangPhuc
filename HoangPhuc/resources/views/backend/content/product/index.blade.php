@extends('backend.layouts.NewHomePageLayout')
@section('title')
    Quản lý sản phẩm
@endsection
@section('style')
    h4
    {
    color: #656565;
    float: left;
    margin-left: 2%;
    font-weight: bold;
    }
    td
    {
    text-align: center;
    border-right:1px dashed black;
    }

@endsection
@section('content')
    @if(session()->has('success-message'))
        <div class="alert alert-success">
            {{ session()->get('success-message') }}
        </div>
    @endif
    <div id="new-post" style="display: none">
        <div class="uk-card uk-card-default" style="background: none; box-shadow: none">
            <div class="uk-card-body uk-padding-small uk-box-shadow" style="padding-top: 2%;padding-bottom: 5%">
                <form action="{{url('admin/san-pham/store')}}" method="post" class="uk-grid-small uk-grid" uk-grid>
                    @csrf
                    <div class="uk-text-left" style="background: #D6D6D6;padding: 10px 5px 10px 5px;border-radius:20px 0px 0px 0px;border: 1px solid #707070; width: 100%">
                        <div class="uk-text-middle" style="float: left">
                            <h5 style="margin: 0px auto"><span style="border-right: 2px solid black;padding-right: 10px;">
                                <button type="button" style="background: none;border: none;outline: none;color:black;font-weight: bold" onclick="openAddDetail()"  onsubmit="false" >THÔNG TIN SẢN PHẨM</button>
                            </span> <button type="button" style="background: none;border: none;outline: none;color:black;font-weight: bold" onclick="openSeoDetail()"  onsubmit="false">SEO</button></h5>
                        </div>
                        <div style="float: right">
                            <button type="submit"  class="btn uk-text-center" style="background: #FFAA00;color: white;font-size: large;padding-left: 15px; padding-right: 15px;">Thêm Sản Phẩm</button>
                        </div>
                    </div>
                    <div id="add-detail" style="width: 100%; margin-left: 0px;margin-top: 0px; padding-left: 0px">
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large"> Tên sản phẩm</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="name" placeholder="Nhập tên sản phẩm ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large"> Mã sản phẩm</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="barcode" placeholder="Nhập mã sản phẩm ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large" >
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Hình ảnh</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-1-2@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px">
                                <span class="input-group-btn">
                                    <a id="lfm1" data-input="thumbnail1" data-preview="hhh1"
                                       class="lfm-btn btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                    <a class="btn btn-warning remove-image">
                                         <i class="fa fa-remove"></i> Xóa
                                    </a>
                                </span>
                                    <input id="thumbnail1" class="form-control" type="text" name="images[]"
                                           value="{{ old('image') }}" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-1-4@m" style=" margin-top: 0px;border: 1px solid #707070;border-radius: 5px 5px 5px;height: 120px; width: 18%;padding: 10px 10px 10px 10px;">
                                <span  class="uk-text-center uk-text-middle" id="hhh1" style="max-height:120px;"></span>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large" >
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Thêm ảnh</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px">
                                    <a id="plus-image" class="btn btn-success">
                                        <i class="fa fa-plus"></i> Thêm
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large"> Danh mục Cha</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m"  style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px; width: 90%" uk-form-custom="target: > * > span:first-child" >
                                    <select name="id_category" style="float: left;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5; min-height: 40px">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" style="padding-left: 20px">
                                                <?php
                                                for ($i=1;$i<=$category->level;$i++)
                                                    echo "____";
                                                ?>
                                                <h5>{{$category->name}}</h5>
                                            </option>
                                        @endforeach
                                    </select>
                                    <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1" style="float: left;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5; min-height: 40px">
                                        <span class="uk-text-left"></span>
                                        <span uk-icon="icon: menu" style="float: right;margin-top: 10px"></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large"> Xuất xứ</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="country" placeholder="Nhập nơi sản xuất ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>

                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                        <div class="uk-width-1-1@s uk-width-1-4@m">
                            <div class="uk-text-left uk-text-large">
                                <label class="uk-form-label uk-text-large" style="font-size: large">Thông tin</label>
                            </div>
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-4@m" style=" margin-top: 0px">
                            <div class="uk-form-controls" style="margin-left: 0px;">
                                <input class="uk-input" type="text" name="cost" placeholder="Giá nhập ..." required="" style="width: 67%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                            </div>
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-4@m" style=" margin-top: 0px">
                            <div class="uk-form-controls" style="margin-left: 0px;">
                                <input class="uk-input" type="text" name="price" placeholder="Giá bán ..." required="" style="width: 67%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                            </div>
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-4@m" style=" margin-top: 0px">
                            <div class="uk-form-controls" style="margin-left: 0px;">
                                <input class="uk-input" type="text" name="quantity" placeholder="Số lượng ..." required="" style="width: 67%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                            </div>
                        </div>
                    </div>

                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px;">
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Mô tả ngắn</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <textarea type="text" name="intro" class="form-control mytinymce2"
                                              required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5; height:200px!important;">Mô tả ngắn</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px;padding-bottom: 3%; border-radius:0px 0px 20px 20px" >
                            <div class="uk-width-1-1@s uk-width-1-1@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Thông tin chi tiết</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-1-1@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <textarea type="text" name="desc" class="form-control mytinymce"
                                              required="" style="width: 93%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">Viết bài </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="seo-detail" style="width: 100%; margin-left: 0px;margin-top: 0px; padding-left: 0px; display: none">
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Title</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="seo_title" placeholder="Seo Title ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Keywords</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <textarea class="uk-input" type="text" name="seo_keyword" required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5;height: 100px">Keywords nhập cách nhau dấu ,</textarea>

                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px;padding-bottom: 3%; border-radius:0px 0px 20px 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Description</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <textarea class="uk-input" type="text" name="seo_desc" required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5;height: 80px">Descriptions</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="uk-card uk-card-default cardBox uk-margin" style="margin-bottom: 5%">
        <div class="cardBox__header uk-card-header uk-background-mySin">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">Danh sách các sản phẩm</span>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 0px">
                    <div class="uk-text-right">
                        <button id="btn-add"  class="btn btn-success"  onsubmit="false" onclick="openId('new-post')">Thêm sản phẩm</button>
                        <button id="btn-cancel"  class="btn btn-danger" onsubmit="false" onclick="CloseId('new-post')" style="display:none">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardBox__body uk-card-body uk-padding-remove">
            <div class="uk-overflow-auto">
                <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                    <thead>
                    <tr>
                        <th class="uk-text-center">STT</th>
                        <th class="uk-text-center">Tên</th>
                        <th class="uk-text-center">Mã</th>
                        <th class="uk-text-center">Danh Mục</th>
                        <th class="uk-text-center">Hình Ảnh</th>
                        <th class="uk-text-center">Giá Nhập</th>
                        <th class="uk-text-center">Giá Bán</th>
                        <th class="uk-text-center">Số lượng</th>
                        <th class="uk-text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0; ?>
                    @foreach($products as $product)
                        <?php $i++; ?>
                        <tr>
                            <td class="uk-text-center uk-text-middle">{{$i}}</td>
                            <td class="uk-text-center uk-text-middle">{{$product->name}}</td>
                            <td class="uk-text-center uk-text-middle">{{$product->barcode}}</td>
                            <td class="uk-text-left uk-text-middle">
                                {{$categories_name[$product->id_category]}}
                            </td>

                            <td class="uk-text-center uk-text-middle">
                                <?php
                                $images = isset($product->images) ? json_decode($product->images) : array();
                                ?>
                                @if(!empty($images))
                                    <img src="{{ asset($images[0]) }}" style="max-height:100px;">
                                @endif
                            </td>
                            <td class="uk-text-right uk-text-middle">{{number_format($product->cost)}}</td>
                            <td class="uk-text-right uk-text-middle">{{number_format($product->price)}}</td>
                            <td class="uk-text-center uk-text-middle">{{number_format($product->quantity)}}</td>
                            <td class="uk-text-center uk-text-middle">
                                <a href="{{url('admin/san-pham/edit/'.$product->id)}}" ><button class="btn btn-success">Sửa</button></a>
                                <a href="{{url('admin/san-pham/delete/'.$product->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này? ')"><button class="btn btn-danger">Xóa</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function openSeoDetail()
        {
            document.getElementById('add-detail').style.display="none";
            document.getElementById('seo-detail').style.display="block";
        }
        function openAddDetail()
        {
            document.getElementById('add-detail').style.display="block";
            document.getElementById('seo-detail').style.display="none";
        }
        function openform()
        {
            document.getElementById('formdichvu').style.display="block";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('details').style.display="none";
            document.getElementById('add-detail').style.display="block";
        }
        function openformedit(id)
        {
            document.getElementById('formedit-'+id).style.display="block";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('details').style.display="none";
        }
        function closeformedit(id)
        {
            document.getElementById('formedit-'+id).style.display="none";
            document.getElementById('btn-add').style.display="block";
            document.getElementById('details').style.display="block";
        }
        function closeform()
        {
            document.getElementById('formdichvu').style.display="none";
            document.getElementById('btn-add').style.display="block";
            document.getElementById('details').style.display="block";
        }
    </script>
    <script type="text/javascript">

        let route_prefix = "{{url('/filemanager')}}";
        $('.lfm-btn').filemanager('image', {prefix: route_prefix});
        $('#plus-image').on('click', function (e) {
            let lfm_count = parseInt($('.lfm-btn').length);
            let next = lfm_count + 1;
            let html = '';
            for (let i = 0; i< 1000;i++) {
                if ( $('#lfm'+next).length < 1)
                {
                    html += '<div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >\n' +
                        '                            <div class="uk-width-1-1@s uk-width-1-4@m">\n' +
                        '                                <div class="uk-text-left uk-text-large" >\n' +
                        '                                    <label class="uk-form-label uk-text-large" style="font-size: large">Hình ảnh</label>\n' +
                        '                                </div>\n' +
                        '                            </div>\n' +
                        '                            <div class="uk-width-1-1@s uk-width-1-2@m" style=" margin-top: 0px">\n' +
                        '                                <div class="uk-form-controls" style="margin-left: 0px">\n' +
                        '                                <span class="input-group-btn">\n' +
                        '                                    <a id="lfm'+next+'" data-input="thumbnail'+next+'" data-preview="hhh'+next+'"\n' +
                        '                                       class="lfm-btn btn btn-primary">\n' +
                        '                                        <i class="fa fa-picture-o"></i> Choose\n' +
                        '                                    </a>\n' +
                        '                                    <a class="btn btn-warning remove-image">\n' +
                        '                                         <i class="fa fa-remove"></i> Xóa\n' +
                        '                                    </a>\n' +
                        '                                </span>\n' +
                        '                                    <input id="thumbnail'+next+'" class="form-control" type="text" name="images[]"\n' +
                        '                                           value="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">\n' +
                        '                                </div>\n' +
                        '                            </div>\n' +
                        '                            <div class="uk-width-1-1@s uk-width-1-4@m" style=" margin-top: 0px;border: 1px solid #707070;border-radius: 5px 5px 5px;height: 120px; width: 18%;padding: 10px 10px 10px 10px;">\n' +
                        '                                <span  class="uk-text-center uk-text-middle" id="hhh'+next+'" style="max-height:120px;"></span>\n' +
                        '                            </div>\n' +
                        '                        </div>';
                    break;
                }else {
                    next++;
                }
            }
            let box = $(this).closest('.uk-card-default');
            $(html).insertBefore(box);
            $('.lfm-btn').filemanager('image', {prefix: route_prefix});
            $('.remove-image').on('click', function (e) {
                e.preventDefault();
                $(this).closest('.uk-card-default').remove();

            });

        });

        $('.remove-image').on('click', function (e) {
            e.preventDefault();
            $(this).closest('.uk-card-default').remove();

        });
    </script>
    <script type="text/javascript">
        function openId(id)
        {
            document.getElementById(id).style.display="inline";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('btn-cancel').style.display="inline";
        }
        function CloseId(id)
        {
            document.getElementById(id).style.display="none";
            document.getElementById('btn-add').style.display="inline";
            document.getElementById('btn-cancel').style.display="none";
        }
    </script>
@endsection


















