@extends('backend.layouts.master')
@section('title', 'Thay đổi thông tin')
@section('content')

<div class="page-container">
    <div class="main-content">
        <div class="container-fluid">
            <div class="container">
                <div class="well well bs-component">
                    <div class="page-header">
                        <h2 class="header-title">{{ __('user') }}</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="{{ route('employee.home') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ __('Home') }}</a>
                                <a class="breadcrumb-item" href="{{ route('profile.index') }}">{{ __('Thông tin nhân viên') }}</a>
                                <span class="breadcrumb-item active">{{ __('Chỉnh sửa') }}</span>
                            </nav>
                        </div>
                    </div>
                    {!! Form::model($employee, ['route' => ['profile.update', $employee->id], 'enctype' => 'multipart/form-data']) !!}
                        {{ method_field('PUT') }}
                        <fieldset>
                            <div class="card">
                                <div class="card-body"> 
                                    <legend class="text-center">  {{ __('Chỉnh sửa thông tin') }} </legend>
                                    <hr>
                                    <div class="form-group">
                                        {{ Form::label(__('Tên'), null, ['class' => 'col-lg-2 control-label']) }}
                                        <div class="col-lg-12">
                                        {{ Form::text('name', $employee->name, ['class' => 'form-control', 'placeholder' => 'Tên' ]) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('email'), null, ['class' => 'col-lg-2 control-label']) }}  

                                        <div class="col-lg-12">
                                            {{ Form::text('email', $employee->email, ['class' => 'form-control', 'placeholder' => 'Email', 'disabled' => 'disabled']) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('Thay đổi password'), null, ['class' => 'col-lg-3 control-label']) }}
                                        <div class="col-lg-12">
                                            {{ Form::checkbox('changepassword', null, false, ['id' => 'changepassword']) }}
                                            {{ Form::password('password', ['class' => 'form-control password', 'required' => '', 'placeholder' => 'Password', 'disabled' => 'disabled' ]) }}
                                        </div>
                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->get('password') as $repeatpassword)
                                                    <li>{{ $password }}</li>
                                                @endforeach
                                            </ul>
                                        
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        {{ Form::label(__('Confirm_Password'), null, ['class' => 'col-lg-3 control-label']) }}
                                        <div class="col-lg-12">
                                            {{ Form::password('repeatpassword', ['class' => 'form-control password', 'required' => '', 'placeholder' => 'Confirm Password', 'disabled' => 'disabled' ]) }}
                                        </div>
                                    </div>
                                    @if ($errors->has('repeatpassword'))
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->get('repeatpassword') as $repeatpassword)
                                                    <li>{{ $repeatpassword }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        {{ Form::label(__('Điện thoại'), null, ['class' => 'col-lg-2 control-label']) }}
                                        <div class="col-lg-12">
                                            {{ Form::text('phone', $employee->phone, ['class' => 'form-control', 'placeholder' => 'Phone Number' ]) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('Giới tính'), null, ['class' => 'col-lg-2 control-label']) }}
                                        <div class="col-lg-12">
                                            {{ Form::select('gender', ['nam' => __('Nam'), 'nữ' => __('Nữ')], null, ['class' => 'form-control']) }}  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('address'), null, ['class' => 'col-lg-2 control-label']) }}
                                        <div class="col-lg-12">
                                            {{ Form::text('address', $employee->address, ['class' => 'form-control', 'placeholder' => 'Address' ]) }}
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        {{ Form::reset(__('Cancel'), ['class' => 'btn btn-warning']) }}
                                        {{ Form::submit(__('Submit'), ['class' => 'btn btn-success']) }}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#changepassword').change(function() {
                if($(this).is(':checked')) {
                    $('.password').removeAttr('disabled');
                }
                else{
                    $('.password').attr('disabled', '');
                }
            });
        });
    </script>
@endsection

@section('script')
    {{ Html::script('assets/demo-bower/assets/vendor/datatables/media/js/jquery.dataTables.js') }}
    {{ Html::script('assets/demo-bower/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}
    {{ Html::script('assets/demo-bower/assets/js/tables/data-table.js') }}
@endsection
