@extends('layouts.dashboard_app')
@section('title', 'إدارة الاصول')


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
              @can('asset-create')
              <a class="btn btn-success" href="{{ route('assets/create') }}">   إضافة الاصل جديد </a>
              @endcan  
            </div>
              <div class="content table-responsive table-full-width">
              
                  <table class="table table-hover table-striped">
                    <tr>
                     <th>ر.ق</th>
                     <th>رقم الاصل</th>

                     <th>اسم الاصل</th>
                     <th> حالة الاصل</th>
                     <th width="300px"></th>
                   </tr>
                   @foreach ($assets as $key => $asset)
                   <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $asset->id }}</td>
                      <td>{{ $asset->name }}</td>
                  
                        @if($asset->active==1)          
                    <td>  <span class="badge badge-success">مفعل</span> </td>         
              @else
              <td>  <span class="badge badge-danger">معطل</span> </td>         
              @endif
                     

                      <td>
                        @can('asset-edit')
                        <a class="btn btn-primary" href="{{ route('assets/edit',encrypt($asset->id)) }}">  تعديل</a>
                        @endcan
                        @can('asset-changestatus')
                      @if($asset->active==1)          
                      <a class="btn btn-danger" href="{{ route('assets/changeStatus',encrypt($asset->id)) }}"> الغاء تفعيل</a>
                      @else
                      <a class="btn btn-success" href="{{ route('assets/changeStatus',encrypt($asset->id)) }}">  تفعيل</a>
                      @endif
                      @endcan
                             

                    </td>
                    </tr>
                   @endforeach
                  </table>
                  
                  
                  {!! $assets->render() !!}
              </div>
          </div>
      </div>


     


  </div>
</div>









@endsection

