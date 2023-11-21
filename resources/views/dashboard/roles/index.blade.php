@extends('layouts.dashboard_app')
@section('title', 'إدارة الصلاحيات')


@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>@yield('title')</h2>
        </div>
       
    </div>
</div>
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="header">
                  @can('role-create')
                <a class="btn btn-success" href="{{ route('roles/create') }}">   إضافة صلاحية جديد </a>
            @endcan    
            </div>
              <div class="content table-responsive table-full-width">
              
                  <table class="table table-hover table-striped">
                    <tr>
                     <th>ر.ق</th>
                     <th>الاسم</th>
                     <th width="280px"></th>
                   </tr>
                   @foreach ($roles as $key => $role)
                   <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $role->name }}</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('roles/show',encrypt($role->id)) }}">عرض</a>
                        @can('role-edit')
                            <a class="btn btn-primary" href="{{ route('roles/edit',encrypt($role->id)) }}">تعديل</a>
                        @endcan
                        @can('role-delete')
                            {!! Form::open(['method' => 'DELETE','route' => ['roles/destroy', encrypt($role->id)],'style'=>'display:inline']) !!}
                                {!! Form::submit('الغاء', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                    </tr>
                   @endforeach
                  </table>
                  
                  
                  {!! $roles->render() !!}
              </div>
          </div>
      </div>


     


  </div>
</div>









@endsection

