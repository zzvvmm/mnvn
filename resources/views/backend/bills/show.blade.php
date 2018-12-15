@extends('backend.layouts.master')
@section('title', 'Chi tiết hóa đơn')
@section('content')

<div class="page-container">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="header-title">{{ __('Chi tiết hóa đơn') }}</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="backend.home" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ __('Home Admin') }}</a>
                                <a class="breadcrumb-item" href="{{ route('bills.index') }}">{{ __('Hóa đơn đặt hàng') }}</a>
                                <span class="breadcrumb-item active">{{ __('Chi tiết') }}</span>
                            </nav>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row m-v-30">
                        
                        <div class="col-sm-12 text-center text-sm-left">
                            <br>
                            <h3 class="m-b-9">ID Hóa đơn: {{ $bill->id }}  -  Ngày đặt hàng: {{ $bill->date_order }}</h3>
                            <br>
                            <div class="form-group">
                                {{ Form::label(__('ID khách hàng :'), null, ['class' => 'control-label']) }}
                                <span>{{ $bill->customer->id }}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Email khách hàng :'), null, ['class' => 'control-label']) }}
                                <span>{{ $bill->customer->email }}</span>
                            </div>

                            <div class="form-group">
                                {{ Form::label(__(' Tên khách hàng :'), null, ['class' => 'control-label']) }}
                                <span>{{ $bill->customer->full_name }}</span>
                            </div>

                            <div class="form-group">
                                {{ Form::label(__(' Số điện thoại :'), null, ['class' => 'control-label']) }}
                                <span>{{ $bill->customer->phone_number }}</span>
                            </div>
                            <div class="form-group">
                                {{ Form::label(__(' Địa chỉ :'), null, ['class' => 'control-label']) }}
                                <span>{{ $bill->customer->address }}</span>
                            </div>

                            <div class="form-group">
                                {{ Form::label(__('Sản phẩm :'), null, ['class' => 'control-label']) }}
                                <br>
                                @foreach($bill->bill_detail as $value)
                                    <h5><span>* 
                                    Tên sản phẩm : {{ $value->product->name }} || 
                                    Danh mục : {{ $value->product->product_type->category->name }} ||
                                    Loại sản phẩm : {{ $value->product->product_type->name }} ||
                                    Số lượng mua : {{ $value->quantity }} ||
                                    Giá sản phẩm  : {{ $value->product->price }} 

                                </span> 
                                    <br></h5>
                                @endforeach
                            </div>
                            <div class="form-group">
                                {{ Form::label(__('Tổng tiền :'), null, ['class' => 'control-label']) }}
                                <span>{{ $bill->total }}</span>
                            </div>

                            <div class="form-group">
                                {{ Form::label(__(' Yêu cầu từ khách hàng :'), null, ['class' => 'control-label']) }}
                                <span>{{ $bill->note }}</span>
                            </div>

                            <div class="form-group">
                                {{ Form::label(__(' Trạng thái đơn hàng :'), null, ['class' => 'control-label']) }}
                                @if ($bill->status == 1) 
                                    <i>Đã chấp nhận đơn hàng</i>
                                @else
                                    <a href="{{ route('bills.edit', $bill->id) }}"><i>Chưa chấp nhận</i></a>
                                @endif

                            </div>

                            <div class="col-lg-10 col-lg-offset-2">
                                <a href="{{ route('bills.index') }}" class="btn btn-default">{{ __('Quay lại') }}</a>
                                {{-- <a href="{{ route('bills.edit', $bill->id) }}" class="btn btn-success">{{ __('Edit') }}</a> --}}
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
@endsection
