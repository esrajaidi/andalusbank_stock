@extends('layouts.dashboard_app')
@section('title', 'إدارة العمليات')


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
                <a class="btn btn-success" href="{{ route('transactiones/create') }}">   إضافة فرع جديد </a>
                </div>
              <div class="content table-responsive table-full-width">
              
                  <table class="table table-hover table-striped">
                    <tr>
                     <th>ر.ق</th>
                     <th>كود العملية</th>
                     <th>وصف العملية </th>
                     <th width="300px"></th>
                   </tr>
                   @foreach ($transactiones as $key => $transactione)
                   <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $transactione->code }}</td>
                      <td>{{ $transactione->description }}</td>
                  
               
                     

                      <td>
                            <a class="btn btn-primary" href="{{ route('transactiones/edit',encrypt($transactione->id)) }}">تعديل</a>
                       
                     
                            {!! Form::open(['method' => 'DELETE','route' => ['transactiones/destroy', encrypt($transactione->id)],'style'=>'display:inline']) !!}
                            {!! Form::submit('الغاء', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}


                    </td>
                    </tr>
                   @endforeach
                  </table>
                  
                  
                  {!! $transactiones->render() !!}
              </div>
          </div>
      </div>


     


  </div>
</div>









@endsection

