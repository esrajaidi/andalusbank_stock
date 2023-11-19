@extends('layouts.dashboard_app')
@section('title', 'إدارة المستخدمين')


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
                <a class="btn btn-success" href="{{ route('users/create') }}">   إضافة مستخدم جديد </a>
                </div>
              <div class="content table-responsive table-full-width">
              
                  <table class="table table-hover table-striped">
                    <tr>
                     <th>ر.ق</th>
                     <th>الاسم</th>
                     <th>البريدالالكتروني</th>
                     <th>الصلاحية</th>
                     <th> حالة الحساب</th>

                     <th width="350px"></th>
                   </tr>
                   @foreach ($data as $key => $user)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        @if(!empty($user->getRoleNames()))
                          @foreach($user->getRoleNames() as $v)
                             <label class="badge badge-info">{{ $v }}</label>
                          @endforeach
                        @endif
                      </td>
                      @if($user->active==1)          
                    <td>  <span class="badge badge-success">مفعل</span> </td>         
                    @else
                    <td>  <span class="badge badge-danger">معطل</span> </td>         
                    @endif
                      <td>
                         <a class="btn btn-info" href="{{ route('users/show',encrypt($user->id)) }}">عرض</a>
                         <a class="btn btn-primary" href="{{ route('users/edit',encrypt($user->id)) }}">تعديل</a>
                         @if($user->active==1)          
                          <a class="btn btn-danger" href="{{ route('users/changeStatus',encrypt($user->id)) }}"> الغاء تفعيل</a>
                          @else
                          <a class="btn btn-success" href="{{ route('users/changeStatus',encrypt($user->id)) }}">  تفعيل</a>
                          @endif
                        
                          {!! Form::open(['method' => 'DELETE','route' => ['users/destroy', encrypt($user->id)],'style'=>'display:inline']) !!}
                          {!! Form::submit('الغاء', ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                      </td>
                    </tr>
                   @endforeach
                  </table>
                  
                  
                  {!! $data->render() !!}
              </div>
          </div>
      </div>


     


  </div>
</div>









@endsection
