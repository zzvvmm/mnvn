@extends('backend.layouts.master')
@section('title', 'Tạo sản phẩm')
@section('style')
{!! Html::style('assets/demo-bower/assets/vendor/selectize/dist/css/selectize.default.css') !!} 
{!! Html::style('assets/demo-bower/assets/vendor/summernote/dist/summernote-bs4.css') !!} 
@endsection
@section('content')
<div class="page-container">
    <div class="main-content">
        <div class="container-fluid">
            <div class="container">
                <div class="well well bs-component">
                    <div class="page-header">
                        <div class="panel-heading">
                        <h2 class="header-title">{{ __('Tạo mới sản phẩm') }}</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="backend.home" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ __('Home Admin') }}</a>
                                <a class="breadcrumb-item" href="{{ route('products.index') }}">{{ __('Quản lý sản phẩm') }}</a>
                                <span class="breadcrumb-item active">{{ __('Tạo mới sản phẩm') }}</span>
                            </nav>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border bottom">
                            <h4 class="card-title">{{ __('Tạo mới sản phẩm') }}</h4>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['url' => route('products.store'),'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Tên (*)'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                                                @if ($errors->has('name'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('name') as $name)
                                                        <li>{{ $name }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                {{-- <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Avatar'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::file('avatar', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('avatar'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('avatar') as $avatar)
                                                        <li>{{ $avatar }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div> --}}
                                <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                <label class="control-label">Danh mục (*)</label>
                                                <select class="form-control" name="category" id="category">
                                                    @foreach($category as $cate)
                                                        <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('category'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('category') as $category)
                                                        <li>{{ $category }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                <label class="control-label">Loại sản phẩm (*)</label>
                                                <select class="form-control" name="id_type" id="id_type">
                                                    @foreach($product_type as $id_type)
                                                        <option value="{{ $id_type->id }}">{{ $id_type->name }}</option>
                                                    @endforeach
                                                </select>

                                                {{-- {{ Form::label(__('Loại'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('id_type', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div> --}}
                                                @if ($errors->has('id_type'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('id_type') as $id_type)
                                                        <li>{{ $id_type }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div>
                                {{-- <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                <label>Loại sản phẩm</label>
                                                <select class="form-control" name="id_type" id="id_type">
                                                    @foreach($product_type as $id_type)
                                                        <option value="{{ $id_type->id }}">{{ $id_type->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('id_type'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('id_type') as $id_type)
                                                        <li>{{ $id_type }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div> --}}
                                <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                            <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Giá(VNĐ)***'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('price', null, ['class' => 'form-control']) }}
                                                @if ($errors->has('price'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('price') as $price)
                                                        <li>{{ $price }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Số lượng'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('unit', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('unit'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('unit') as $unit)
                                                        <li>{{ $unit }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Bảo hành(Tháng)'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('guarantee', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('guarantee'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('guarantee') as $guarantee)
                                                        <li>{{ $guarantee }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                        <div class="form-group">
                                            {{ Form::label(__('Bao gồm'), null, ['class' => 'control-label']) }}
                                            {{ Form::text('include', null, ['class' => 'form-control']) }}
                                            @if ($errors->has('include'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get('include') as $include)
                                                    <li>{{ $include }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-2"></div>  
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                        <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Chiều cao(cm)'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('height', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('height'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('height') as $height)
                                                        <li>{{ $height }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Cân nặng(kg)'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('weight', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('weight'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('weight') as $weight)
                                                        <li>{{ $weight }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Màu'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('color', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('color'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('color') as $color)
                                                        <li>{{ $color }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Chất liệu'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('material', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('material'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('material') as $material)
                                                        <li>{{ $material }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div>
                                {{-- <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Cân nặng(kg)'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('weight', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('weight'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('weight') as $weight)
                                                        <li>{{ $weight }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div> --}}
                                {{-- <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Xuất xứ'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('origin', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('origin'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('origin') as $origin)
                                                        <li>{{ $origin }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div> --}}
                                {{-- <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Chất liệu'), null, ['class' => 'control-label']) }}
                                                <div class="input-group">
                                                    {{ Form::text('material', null, ['class' => 'form-control']) }}
                                                    <div class="input-group-append">
                                                    </div>
                                                </div>
                                                @if ($errors->has('material'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('material') as $material)
                                                        <li>{{ $material }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div> --}}
                                {{-- <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Mô tả ngắn'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('description', null, ['class' => 'form-control']) }}
                                                @if ($errors->has('description'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('description') as $description)
                                                        <li>{{ $description }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div> --}}

                                <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Mô tả chi tiết (*)'), null, ['class' => 'control-label']) }}
                                                <textarea name="detail_description" class="ckeditor" id="editor1"></textarea>
                                                {{-- <script type="text/javascript"></script> --}}
                                                @if ($errors->has('detail_description'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('detail_description') as $detail_description)
                                                        <li>{{ $detail_description }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Image (*)'), null, ['class' => 'control-label']) }}
                                                <div class="input-group control-group increment" >
                                                    <input type="file" name="image[]" class="form-control">
                                                    <div class="input-group-btn"> 
                                                        <button class="btn btn-success img-button" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                                    </div>
                                                </div>
                                                <div class="clone hide">
                                                    <div class="control-group input-group" style="margin-top:10px">
                                                        <input type="file" name="image[]" class="form-control">
                                                        <div class="input-group-btn"> 
                                                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($errors->has('image'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->get('image') as $image)
                                                        <li>{{ $image }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div>
                                <div class="text-center">
                                    {{ Form::reset(__('Reset'), ['class' => 'btn btn-default']) }}
                                    {{ Form::submit(__('Add'), ['class' => 'btn btn-success']) }}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
{{ Html::script('assets/demo-bower/assets/vendor/moment/min/moment.min.js') }}
{{ Html::script('assets/demo-bower/assets/vendor/selectize/dist/js/standalone/selectize.min.js') }}
{{ Html::script('assets/demo-bower/assets/vendor/summernote/dist/summernote-bs4.min.js') }}
{{ Html::script('assets/demo-bower/assets/js/forms/form-elements.js') }}
<script type="text/javascript">
    $(document).ready(function() {
        $(".img-button").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".control-group").remove();
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#category").change(function(){
            var idcategory = $(this).val();
            // alert(idcategory);
            $.ajax({
                method: 'POST', // Type of response and matches what we said in the route
                url: '/manager/ajax/product_type/'+idcategory, // This is the url we gave in the route
                // data: {'idcategory' : idcategory}, // a JSON object to send back
                success: function(response){ // What to do if we succeed
                    console.log(response);
                    $("#id_type").html(response); 
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    }); 
</script>
@endsection
