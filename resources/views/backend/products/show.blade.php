@extends('backend.layouts.master')
@section('title', 'Thông tin chi tiết sản phẩm')
@section('content')
<div class="page-container">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="header-title">{{ __('Thông tin sản phẩm') }}</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="backend.home" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ __('Home Admin') }}</a>
                                <a class="breadcrumb-item" href="{{ route('products.index') }}">{{ __('Quản lý sản phẩm') }}</a>
                                <span class="breadcrumb-item active">{{ __('Thông tin chi tiết') }}</span>
                            </nav>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row m-v-30">
                        <div class="col-sm-5">
                                <br>
                                <center><a href="{{ route('images.create') }}" class="btn btn-info">Thêm ảnh (  Vui lòng nhớ ID sản phẩm này là : {{ $product->id }} )</a></center>
                            @foreach ($image as $value)
                            <div class="carousel-inner">
                                    <img class="d-block w-100" src="{{ asset('source/img/product/' . $value->name) }}">
                                    <br>
                                    <center>
                                        <h4>Tên ảnh : {{$value->name}}</h4>
                                        @if($image->count() != 1)
                                        <a href="{{ route('images.destroy', $value->id) }}" data-toggle="modal" data-target="#basic-modal" data-url="{{ route('images.destroy', $value->id) }}" class="text-gray m-r-15"><i class="ti-trash"> Xóa ảnh này</i></a><br>
                                        @endif
                                    </center>
                                    <br>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-sm-7 text-center text-sm-left">
                            <br>
                            <h2 class="m-b-5">ID sản phẩm : {{ $product->id }} || Tên sản phẩm : {{ $product->name }}</h2>
                            <br>
                            <div class="form-group">
                                {{ Form::label(__('Danh mục :'), null, ['class' => 'control-label']) }}
                                <span>{{ $product->product_type->category->name }}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Loại sản phẩm :'), null, ['class' => 'control-label']) }}
                                <span>{{ $product->product_type->name }}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Giá tiền :'), null, ['class' => 'control-label']) }}
                                <span>{{ $product->price }}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Bảo hành :'), null, ['class' => 'control-label']) }}
                                <span>{{ $product->guaratee }}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Số lượng còn lại :'), null, ['class' => 'control-label']) }}
                                <span>{{ $product->unit }}</span>
                            </div>

                            <div class="form-group">
                                {{ Form::label(__('Mô tả ngắn :'), null, ['class' => 'control-label']) }}
                                <span>{!! str_limit($product->description, 50) !!}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Chiều cao :'), null, ['class' => 'control-label']) }}
                                <span>{{ $product->height }}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Cân nặng :'), null, ['class' => 'control-label']) }}
                                <span>{{ $product->weight }}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Xuất xứ :'), null, ['class' => 'control-label']) }}
                                <span>{{ $product->origin }}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Chất liệu :'), null, ['class' => 'control-label']) }}
                                <span>{{ $product->material }}</span>
                            </div>
                            <br>
                            <div class="col-lg-10 col-lg-offset-2">
                                <a href="{{ route('products.index') }}" class="btn btn-default">{{ __('Quay lại') }}</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">{{ __('Sửa thông tin') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="basic-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div>
                                <h4 class="d-flex align-items-center h-100 head">{{ __('Bạn có chắc chắn xóa ?') }}</h4>
                            </div>
                            <div class="container text-center">
                                <div class="text-center font-size-70">
                                    <i class="mdi mdi-checkbox-marked-circle-outline icon-gradient-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer no-border">
                            <div class="modal_button">
                                <div class="row"> 
                                    {{ Form::button(__('Hủy'), ['class' =>'btn btn-default', 'data-dismiss' => 'modal']) }}
                                    {!! Form::open(['id' => 'del-form', 'method' => 'delete']) !!}
                                        {{ Form::submit(__('Xóa'), ['class' =>'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
{{ Html::script('assets/demo-bower/assets/vendor/datatables/media/js/jquery.dataTables.js') }}
{{ Html::script('assets/demo-bower/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}
{{ Html::script('assets/demo-bower/assets/js/tables/data-table.js') }}
<script>
    $(function() {
        console.log('abc');
    $('#carousel').addClass('active');
    $('#carousel-1').addClass('active');
    });
</script>
<script type="text/javascript">
    $(function() {
        $('#basic-modal').on('show.bs.modal', function(e) {
            var url = $(e.relatedTarget).data('url');
            $('#del-form').attr('action', url);
        });
    });
    </script>
@endsection
