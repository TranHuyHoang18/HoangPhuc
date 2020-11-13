@extends('backend.layouts.NewHomePageLayout')
@section('title')
    Sửa thông tin sản phẩm
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
    <div id="new-post">
        <div class="uk-card uk-card-default" style="background: none; box-shadow: none">
            <div class="uk-card-body uk-padding-small uk-box-shadow" style="padding-top: 2%;padding-bottom: 5%">
                <form action="{{url('admin/san-pham/edit/'.$product->id)}}" method="post" class="uk-grid-small uk-grid" uk-grid>
                    @csrf
                    <div class="uk-text-left" style="background: #D6D6D6;padding: 10px 5px 10px 5px;border-radius:20px 0px 0px 0px;border: 1px solid #707070; width: 100%">
                        <div class="uk-text-middle" style="float: left">
                            <h5 style="margin: 0px auto"><span style="border-right: 2px solid black;padding-right: 10px;">
                                <button type="button" style="background: none;border: none;outline: none;color:black;font-weight: bold" onclick="openAddDetail()"  onsubmit="false" >THÔNG TIN SẢN PHẨM</button>
                            </span> <button type="button" style="background: none;border: none;outline: none;color:black;font-weight: bold" onclick="openSeoDetail()"  onsubmit="false">SEO</button></h5>
                        </div>
                        <div style="float: right">
                            <button type="submit"  class="btn uk-text-center" style="background: #FFAA00;color: white;font-size: large;padding-left: 15px; padding-right: 15px;">Cập nhật thông tin</button>
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
                                    <input class="uk-input" type="text" name="name" placeholder="Nhập tên sản phẩm ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5" value="{{$product->name}}">
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
                                    <input class="uk-input" type="text" name="barcode" placeholder="Nhập mã sản phẩm ..." value="{{$product->barcode}}" required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <?php
                        $images = isset($product->images) ? json_decode($product->images) : array();
                        ?>
                        @if(!empty($images))
                            <?php $i=0; ?>
                            @foreach($images as $image)
                                <?php $i++; ?>
                                <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                                    <div class="uk-width-1-1@s uk-width-1-4@m">
                                        <div class="uk-text-left uk-text-large" >
                                            <label class="uk-form-label uk-text-large" style="font-size: large">Hình ảnh</label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1@s uk-width-1-2@m" style=" margin-top: 0px">
                                        <div class="uk-form-controls" style="margin-left: 0px">
                                            <span class="input-group-btn">
                                                <a id="lfm{{$i}}" data-input="thumbnail{{$i}}" data-preview="hhh{{$i}}"
                                                   class="lfm-btn btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                <a class="btn btn-warning remove-image">
                                                     <i class="fa fa-remove"></i> Xóa
                                                </a>
                                            </span>
                                            <input id="thumbnail{{$i}}" class="form-control" type="text" name="images[]"
                                                   value="{{$image}}" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1@s uk-width-1-4@m" style=" margin-top: 0px;border: 1px solid #707070;border-radius: 5px 5px 5px;height: 120px; width: 18%;padding: 10px 10px 10px 10px;">
                                        <span  class="uk-text-center uk-text-middle" id="hhh{{$i}}" style="max-height:120px;">
                                            <img src="{{ asset($image) }}" style="max-height:100px;">
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        @endif


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
                                            @if($category->id == $product->id_category)
                                                <option value="{{$category->id}}" style="padding-left: 20px" selected>
                                                    <?php
                                                    for ($i=1;$i<=$category->level;$i++)
                                                        echo "____";
                                                    ?>
                                                    <h5>{{$category->name}}</h5>
                                                </option>
                                            @else
                                                <option value="{{$category->id}}" style="padding-left: 20px">
                                                    <?php
                                                    for ($i=1;$i<=$category->level;$i++)
                                                        echo "____";
                                                    ?>
                                                    <h5>{{$category->name}}</h5>
                                                </option>
                                            @endif
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
                                    <input class="uk-input" type="text" name="country" placeholder="Nhập nơi sản xuất ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5" value="{{$product->country}}">
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
                                <input class="uk-input" type="text" name="cost" placeholder="Giá nhập ..." required="" style="width: 67%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5" value="{{$product->cost}}">
                            </div>
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-4@m" style=" margin-top: 0px">
                            <div class="uk-form-controls" style="margin-left: 0px;">
                                <input class="uk-input" type="text" name="price" placeholder="Giá bán ..." required="" style="width: 67%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5" value="{{$product->price}}">
                            </div>
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-4@m" style=" margin-top: 0px">
                            <div class="uk-form-controls" style="margin-left: 0px;">
                                <input class="uk-input" type="text" name="quantity" placeholder="Số lượng ..." required="" style="width: 67%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5" value="{{$product->quantity}}">
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
                                              required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5; height:200px!important;">{{$product->intro}}</textarea>
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
                                              required="" style="width: 93%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">{{$product->desc}} </textarea>
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
                                    <input class="uk-input" type="text" name="seo_title" placeholder="Seo Title ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5" value="{{$product->seo_title}}">
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
                                    <textarea class="uk-input" type="text" name="seo_keyword" required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5;height: 100px">{{$product->seo_keyword}}</textarea>

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
                                    <textarea class="uk-input" type="text" name="seo_desc" required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5;height: 80px">{{$product->seo_desc}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
@endsection


















