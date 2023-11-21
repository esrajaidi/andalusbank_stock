@extends('layouts.dashboard_app')
@section('title', 'إضافة اصل')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('assets') }}"> الرجوع  </a>
        </div>
    </div>
</div>

<br>
<br>
<div class="row" >
    <div class="col-md-8">
        <div class="card">
            <div class="header" >
                
                <h4 class="title"> اصل جديدة</h4>
            </div>
            <div class="content">
                    <form  method="post" action="{{ route('assets/store') }}" >
                        @csrf
                        <div class="row">
                            
                        
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> اسم الاصل </label>

                                <input type="text" class="form-control" name="name"  maxlength="50" value="{{old('name')}}"  placeholder="اسم الاصل " >
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                            </div>
                        </div>
                     
                       
                      
                    </div>
                  

                    <button type="submit" class="btn btn-info btn-fill pull-left">إضافة اصل </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection

