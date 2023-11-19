@extends('layouts.dashboard_app')
@section('title', 'إضافة صلاحية')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles') }}"> الرجوع  </a>
        </div>
    </div>
</div>

<br>
<br>
<div class="row" >
    <div class="col-md-8">
        <div class="card">
            <div class="header" >
                
                <h4 class="title"> صلاحية جديدة</h4>
            </div>
            <div class="content">
                    <form  method="post" action="{{ route('roles/store') }}" >
                        @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label> الاسم </label>

                                <input type="text" class="form-control" name="name" value="{{old('name')}}"  placeholder="الاسم " >
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                            </div>
                        </div>
                     
                       
                      
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>الاذونات:</strong>
                            <br/>
                            @foreach($permission as $value)
                                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                {{ $value->name }}</label>
                            <br/>
                            @endforeach
                            @error('permission')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-left">إضافة صلاحية </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection

