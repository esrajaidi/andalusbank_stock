@extends('layouts.dashboard_app')
@section('title', 'إدارة الفروع')


@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-right">
        <h2>@yield('title')</h2>
        </div>
       
    </div>
</div>
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="header">
                <a class="btn btn-success" href="{{ route('branches/create') }}">   إضافة فرع جديد </a>
                </div>
              <div class="content table-responsive table-full-width">
              
                  <table class="table table-hover table-striped">
                    <tr>
                     <th>ر.ق</th>
                     <th>رقم الفرع</th>
                     <th>اسم الفرع</th>
                     <th> حالة فرع</th>
                     <th width="300px"></th>
                   </tr>
                   @foreach ($branches as $key => $branche)
                   <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $branche->branche_number }}</td>
                      <td>{{ $branche->branche_name }}</td>
                  
                        @if($branche->active==1)          
                    <td>  <span class="badge badge-success">مفعل</span> </td>         
              @else
              <td>  <span class="badge badge-danger">معطل</span> </td>         
              @endif
                     

                      <td>
                            <a class="btn btn-primary" href="{{ route('branches/edit',encrypt($branche->id)) }}">تعديل</a>
                       
                      @if($branche->active==1)          
                      <a class="btn btn-danger" href="{{ route('branches/changeStatus',encrypt($branche->id)) }}"> الغاء تفعيل</a>
                      @else
                      <a class="btn btn-success" href="{{ route('branches/changeStatus',encrypt($branche->id)) }}">  تفعيل</a>
                      @endif
                             

                    </td>
                    </tr>
                   @endforeach
                  </table>
                  
                  
                  {!! $branches->render() !!}
              </div>
          </div>
      </div>


     


  </div>
</div>









@endsection

