@extends('layouts.dashboard_app')
@section('title', 'تعديل بيانات عملية')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('transactiones') }}"> الرجوع  </a>
        </div>
    </div>
</div>

<br>
<br>
<div class="row" >
    <div class="col-md-8">
        <div class="card">
            <div class="header" >
                
                <h4 class="title"> تعديل بيانات عملية </h4>
            </div>
            <div class="content">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal ">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> كود  العملية </label>
                                <input type="text" class="form-control" maxlength="10" name="code" value="{{ $transactione->code }}"  placeholder="كود العملية " >
                                @error('code')
                                    <span class="text-danger" transactione="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>  وصف العملية </label>
                                <textarea type="text" class="form-control" name="description"   cols="50" rows="10"   placeholder="وصف العملية  " >
                                    {{ $transactione->description}}
                                 </textarea>
                                 @error('description')
                                    <span class="text-danger" transactione="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-left">تعديل  عملية </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection

