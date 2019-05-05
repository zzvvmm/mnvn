@extends('backend.layouts.master')
@section('title', 'Thông tin nhân viên')
@section('style')
    {!! Html::style('assets/demo-bower/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css') !!} 
@endsection
@section('content')
<div class="page-container">
    <div class="main-content">
        <div class="container-fluid">
            <div class="container">
                <div class="well well bs-component">
                    <div class="page-header">
                        <div class="panel-heading">
                            <h2 class="header-title">{{ __('User') }}</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="{{ route('employee.home') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ __('Home') }}</a>
                                    <a class="breadcrumb-item" href = "{{ route('profile.index') }}">{{ __('Thông tin nhân viên') }}</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="avata-name">
                                        <legend class="avata text-center">{{ __('Avatar') }}</legend>
                                        <hr>
                                        </div>
                                        <div class="avata text-center">
                                        <img src="{{ asset('source/img/product/' . 'avatar.png') }}" class="avata-img img-circle" alt="">  
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                    <legend class="avata text-center">{{ __('Information') }}</legend>
                                    <hr>
                                        <div class="form-group">
                                            {{ Form::label(__('Tên nhân viên :'), null, ['class' => 'control-label']) }}
                                            {{ Auth::user()->name }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label(__('Email :'), null, ['class' => 'control-label']) }}
                                            {{ Auth::user()->email }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label(__('Điện thoại:'), null, ['class' => 'control-label']) }}
                                            {{ Auth::user()->phone }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label(__('giới tính :'), null, ['class' => 'control-label']) }}
                                            {{ Auth::user()->gender }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label(__('Địa chỉ :'), null, ['class' => 'control-label']) }}
                                            {{ Auth::user()->address }}
                                        </div>
                                        {{-- <div class="form-group">
                                            {{ Form::label(__('role :'), null, ['class' => 'control-label']) }}
                                            {{ Auth::user()->role }}
                                        </div> --}}
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <a href="{{ route('employee.home') }}" class="btn btn-default">{{ __('Back') }}</a>
                                            <a href="{{  route('profile.edit', Auth::user()->id) }}" class="btn btn-success">{{ __('Edit') }}</a>
                                        </div>
                                    </div>
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
@endsection