@extends('backend.layouts.master')
@section('title', 'Quản lý sản phẩm')
@section('content')
<div class="page-container">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-header">
                        <h2 class="header-title">{{ __('Sản phẩm') }}</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="backend.home" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ __('Home Admin') }}</a>
                                <a class="breadcrumb-item" href="{{ route('products.index') }}">{{ __('Danh sách sản phẩm') }}</a>
                                <span class="breadcrumb-item active">{{ __('Tất cả sản phẩm') }}</span>
                            </nav>
                        </div>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="creat_button text-right button_create">
                        <a href="{{ route('products.create') }}" class="btn btn-success">{{ __('Tạo mới 1 sản phẩm') }}</a>
                    </div> 
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-overflow">
                        <table id="dt-opt" class="table table-hover table-xl">
                            <thead>
                                <tr>
                                    {{-- <th>{{ __('ID') }}</th> --}}
                                    <th>{{ __('Ảnh') }}</th>
                                    <th>{{ __('Danh mục') }}</th>
                                    {{-- <th>{{ __('Loại sản phẩm') }}</th> --}}
                                    <th>{{ __('Tên') }}</th>
                                    <th>{{ __('Giá') }}</th>
                                    {{-- <th>{{ __('Bảo hành') }}</th>s --}}
                                    <th>{{ __('Số lượng') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @if ($errors->has('name'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->get('name') as $name)
                                    <li>{{ $name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <tbody> 
                                @foreach($product as $value)
                                    <tr>
                                        {{-- <td>{{ $value->id }}</td> --}}
                                        <td><img src={{ asset('source/img/product/'. $value->avatar ) }} width="50px" height="50px"></td>
                                        <td><p>{{ $value->product_type->category->name }}</p><p>-><i>{{ $value->product_type->name }}</i></p></td>
                                        {{-- <td>{{ $value->product_type->name }}</td> --}}
                                        <td><a href="{{ route('products.show', $value->id) }}">{{ $value->name }}</a></td>
                                        <td>{{ $value->price }}</td>
                                        {{-- <td>{{ $value->guarantee }} tháng</td> --}}
                                        <td>{{ $value->unit }}</td>
                                        <td class="font-size-18 text-center">
                                            <a href="{{ route('products.edit', $value->id) }}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a data-toggle="modal" data-target="#basic-modal" data-url="{{ route('products.destroy', $value->id) }}" class="text-gray m-r-15"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>                        
                        </table>
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
@endsection

@section('script')
{{ Html::script('assets/demo-bower/assets/vendor/datatables/media/js/jquery.dataTables.js') }}
{{ Html::script('assets/demo-bower/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}
{{ Html::script('assets/demo-bower/assets/js/tables/data-table.js') }}

<script type="text/javascript">
$(function() {
    $('#basic-modal').on('show.bs.modal', function(e) {
        var url = $(e.relatedTarget).data('url');
        $('#del-form').attr('action', url);
    });
});
</script>
@endsection
