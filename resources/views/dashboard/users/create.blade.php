@extends('layouts.dashboard_app')
@section('title', 'إضافة مستخدم')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users') }}"> الرجوع  </a>
        </div>
    </div>
</div>

<br>
<br>
<div class="row" >
    <div class="col-md-8">
        <div class="card">
            <div class="header" >
                
                <h4 class="title"> مستخدم جديد</h4>
            </div>
            <div class="content">
                    <form  method="post" action="{{ route('users/store') }}" >
                        @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label> اسم المستخدم</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}"  placeholder="اسم المستخدم" >
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <input type="email" class="form-control" name="email"  value="{{old('email')}}"  placeholder="البريد الالكتروني" >
                                @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                            </div>
                        </div>
                      
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>كلمةالمرور</label>

                                <input type="password"  class="form-control" name="password"   placeholder="كلمةالمرور" >
                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label> تاكيد كلمةالمرور</label>
                                <input type="password"  class="form-control" name="confirm-password"   placeholder="تاكيد كلمة المرور" >
                                @error('confirm-password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> الصلاحية</label>
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                @error('roles')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-left">إضافة مستخدم </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
