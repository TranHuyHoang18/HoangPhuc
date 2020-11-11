@extends('backend.layouts.NewHomePageLayout')
@section('title')
    Danh Mục
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
    <div id="new-category" style="display: none">
        <div class="uk-card uk-card-default">
            <div class="uk-card-body uk-padding-small uk-box-shadow" style="padding-top: 2%;padding-bottom: 5%">
                <form action="{{url('/admin/danh-muc/store/')}}" method="post" class="uk-grid-small uk-grid" uk-grid>
                    @csrf
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div >
                            <div class="uk-text-center uk-text-large uk-text-uppercase" style="padding-bottom: 20px; border-bottom: 2px solid #FBB03B; width: 80%;margin-left: 10%;">
                                Thông tin Danh mục
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Tên danh mục</label>
                            <div class="uk-form-controls">
                                <input class="uk-input"  name="name" type="text"  style="background: #e6e3e3" required="">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Danh Mục cha</label>
                            <div class="uk-form-controls">
                                <select style="background: #e6e3e3;height: 40px;width: 100%;padding-left: 10px" name="id_parent">
                                    <option value="0">Không có danh mục cha</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            <?php
                                            for ($i=1; $i<=$category->level*4; $i++){
                                                echo "_";
                                            }
                                            ?>
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Icon</label>
                            <div class="uk-form-controls">
                                <div class="uk-form-controls">
                                 <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="hhh"
                                       class="lfm-btn btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                    <a class="btn btn-warning remove-image" >
                                        <i class="fa fa-remove"></i> Xóa
                                    </a>
                                </span>
                                    <input id="thumbnail" class="uk-input" type="text" name="icon" style="background: #e6e3e3" value="">
                                    <span id="hhh" style="max-height:60px;margin-top: 10px"></span>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Thông tin</label>
                            <div class="uk-form-controls">
                                 <textarea type="text" name="intro" class="uk-input" required="" style="background: #e6e3e3;height: 80px">Viết bài </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div>
                            <div class="uk-text-center uk-text-large" style="padding-bottom: 20px; border-bottom: 2px solid #FBB03B; width: 80%;margin-left: 10%;">
                                SEO
                            </div>
                        </div>

                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Title</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="seo_title" type="text"  style="background: #e6e3e3" required="">
                            </div>
                        </div>

                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">KeyWords</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="seo_keyword" type="text"  style="background: #e6e3e3" required="">
                            </div>
                        </div>

                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Descriptions</label>
                            <div class="uk-form-controls">
                                <textarea type="text" name="seo_desc" class="uk-input" required="" style="background: #e6e3e3;height: 80px">Descriptions</textarea>
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">_</label>
                            <div class="uk-form-controls">
                                <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn" style="background:#FBB03B;width: 60%;margin-left: 20%;border-radius: 10px 10px 10px 10px">Thêm mới</button>
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
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">Danh mục trang Tin Tức</span>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 0px">
                    <div class="uk-text-right">
                        <button id="btn-add"  class="btn btn-success"  onsubmit="false" onclick="openId('new-category')">Thêm danh mục</button>
                        <button id="btn-cancel"  class="btn btn-danger" onsubmit="false" onclick="CloseId('new-category')" style="display:none">Hủy</button>
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
                        <th class="uk-text-center">Tên danh mục </th>
                        <th class="uk-text-center">Icon</th>
                        <th class="uk-text-center">Hành Động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0; ?>
                    @foreach($categories as $category)
                        <?php $i++; ?>
                        <tr>
                            <td class="uk-text-center uk-text-middle">{{$i}}</td>
                            <td class="uk-text-left uk-text-middle">
                                <?php
                                for($tk = 1; $tk <=$category->level*4;$tk++)
                                    echo"_";
                                ?>
                                {{$category->name}}
                            </td>
                            <td class="uk-text-center uk-text-middle"><img src="{{asset($category->icon)}}" style="max-height:50px;"></td>
                            <td class="uk-text-center uk-text-middle">
                                <a href="{{url('admin/danh-muc/edit/'.$category->id)}}" ><button class="btn btn-success">Sửa</button></a>
                                <a href="{{url('admin/danh-muc/delete/'.$category->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa danh mục? ')"><button class="btn btn-danger">Xóa</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        let route_prefix = "{{url('/filemanager')}}";
        $('.lfm-btn').filemanager('image', {prefix: route_prefix});

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


















