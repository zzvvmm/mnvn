@extends('backend.layouts.master')
@section('title', 'Sửa sản phẩm')
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
                        <h2 class="header-title">{{ __('Sửa thông tin sản phẩm') }}</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="{{ route('products.index') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ __('Home Admin') }}</a>
                                <a class="breadcrumb-item" href="{{ route('products.index') }}">{{ __('Quản lý sản phẩm') }}</a>
                                <span class="breadcrumb-item active">{{ __('Sửa thông tin sản phẩm') }}</span>
                            </nav>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border bottom">
                            <h4 class="card-title">{{ __('Sửa thông tin sản phẩm') }}</h4>
                        </div>
                        <div class="card-body">
                            {!! Form::model($product, ['route' => ['products.update', $product->id]]) !!}
                                {{ method_field('PUT') }}
                                <div class="row m-t-30">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Tên sản phẩm (*)'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('name', null, ['class' => 'form-control', 'value' => $product->name]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

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
                                                {{ Form::label(__('Loại sản phẩm (*)'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('id_type', null, ['class' => 'form-control', '
                                                ' => $product->id_type]) }}
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
                                                {{ Form::label(__('Giá (*)'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('price', null, ['class' => 'form-control', 'value' => $product->price]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Bảo hành (tháng)'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('guarantee', null, ['class' => 'form-control', 'value' => $product->guarantee]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Số lượng còn lại'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('unit', null, ['class' => 'form-control', 'value' => $product->unit]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Chiều cao(cm)'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('height', null, ['class' => 'form-control', 'value' => $product->height]) }}
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
                                                {{ Form::label(__('Cân nặng(kg)'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('weight', null, ['class' => 'form-control', 'value' => $product->weight]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Màu'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('color', null, ['class' => 'form-control', 'value' => $product->color]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Chất liệu'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('material', null, ['class' => 'form-control', 'value' => $product->material]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="p-h-10">
                                            <div class="form-group">
                                                {{ Form::label(__('Bao gồm'), null, ['class' => 'control-label']) }}
                                                {{ Form::text('include', null, ['class' => 'form-control', 'value' => $product->include]) }}
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
                                                {{ Form::label(__('Mô tả chi tiết (*)'), null, ['class' => 'control-label']) }}
                                                {{ Form::textarea('detail_description', $product->detail_description, ['id' => 'editor1', 'class' => 'ckeditor', 'value' => $product->detail_description]) }}
                                                {{-- <textarea name="detail_description" class="ckeditor" id="editor1" value="{{ $product->detail_description }}"></textarea> --}}
                                                {{-- <script type="text/javascript"></script> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div>
                                <div class="text-center">
                                    {{ Form::reset(__('Reset'), ['class' => 'btn btn-default']) }}
                                    {{ Form::submit(__('Sửa'), ['class' => 'btn btn-success']) }}
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
