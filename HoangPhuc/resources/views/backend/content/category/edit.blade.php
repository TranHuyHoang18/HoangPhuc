@extends('backend.layouts.NewHomePageLayout')
@section('title')
    Sửa Danh Mục
@endsection
@section('style')
    h4
    {
    color: #656565;
    float: left;
    margin-left: 2%;
    font-weight: bold;
    }
@endsection
@section('content')
    <div class="" style="padding-bottom: 5%">
        <div class="uk-card uk-card-default">
            <div class="uk-card-body uk-padding-small uk-box-shadow" style="padding-top: 2%;padding-bottom: 5%">
                <form action="{{url('/admin/danh-muc/edit/'.$item->id)}}" method="post" class="uk-grid-small uk-grid" uk-grid>
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
                                <input class="uk-input"  name="name" type="text"  style="background: #e6e3e3" required="" value="{{$item->name}}">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Danh Mục cha</label>
                            <div class="uk-form-controls">
                                <select style="background: #e6e3e3;height: 40px;width: 100%;padding-left: 10px" name="id_parent">
                                    <option value="0">Không có danh mục cha</option>
                                    @foreach($categories as $category)
                                        @if($item->id_parent == $category->id)
                                        <option value="{{$category->id}}" selected>
                                            <?php
                                            for ($i=1; $i<=$category->level*4; $i++){
                                                echo "_";
                                            }
                                            ?>
                                            {{$category->name}}
                                        </option>
                                        @else
                                            <option value="{{$category->id}}" >
                                                <?php
                                                for ($i=1; $i<=$category->level*4; $i++){
                                                    echo "_";
                                                }
                                                ?>
                                                {{$category->name}}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Icon</label>
                            <div class="uk-form-controls">
                                <input class="uk-input"  name="icon" type="text"  style="background: #e6e3e3" required="" value="{{$item->icon}}">
                            </div>
                        </div>

                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Thông tin</label>
                            <div class="uk-form-controls">
                                <input class="uk-input"  name="intro" type="text"  style="background: #e6e3e3" required="" value="{{$item->intro}}">
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
                                <input class="uk-input" name="seo_title" type="text"  style="background: #e6e3e3" required="" value="{{$item->seo_title}}">
                            </div>
                        </div>

                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">KeyWords</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="seo_keyword" type="text"  style="background: #e6e3e3" required="" value="{{$item->seo_keyword}}">
                            </div>
                        </div>

                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Descriptions</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="seo_desc" type="text"  style="background: #e6e3e3" required="" value="{{$item->seo_desc}}">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">_</label>
                            <div class="uk-form-controls">
                                <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn" style="background:#FBB03B;width: 60%;margin-left: 20%;border-radius: 10px 10px 10px 10px">Cập Nhật</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
