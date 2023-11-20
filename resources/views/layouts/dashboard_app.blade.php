<!DOCTYPE html>
<html lang="ar">
    <head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'لوحة التحكم / مصرف الاندلس') }} - @yield('title')</title>


	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">

	
		<!-- Bootstrap RTL core CSS     -->
    <link href="{{ asset('dashboard/assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet">


    <!-- Animation library for notifications   -->
    <link href="{{ asset('dashboard/assets/css/animate.min.css') }}" rel="stylesheet">


    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('dashboard/assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet">

	
	  <!--  Light Bootstrap RTL Version CSS    -->
      <link href="{{ asset('dashboard/assets/css/light-bootstrap-dashboard-rtl.css') }}" rel="stylesheet">



    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('dashboard/assets/css/demo.css') }}" rel="stylesheet">



    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet">

<body style="">
    @include('sweetalert::alert')

<div class="wrapper">
    <div class="sidebar" data-color="blue">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    لوحة تحكم
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{route('dashboradhome')}}">
                        <i class="pe-7s-graph"></i>
                        <p>الرئسية</p>
                    </a>
                </li>
                <li>
                    <a href={{ route('users') }}>
                        <i class="pe-7s-users"></i>
                        <p>إدارة المستخدمين</p>
                    </a>
                </li>
                <li>
                    <a href={{ route('roles') }}>
                        <i class="pe-7s-key"></i>
                        <p>إدارة الصلاحيات</p>
                    </a>
                </li>
                <li>
                    <a href={{ route('branches') }}>
                        <i class="pe-7s-home"></i>
                        <p>إدارة الفروع</p>
                    </a>
                </li>
                <li>
                    <a href={{ route('assets') }}>
                        <i class="pe-7s-home"></i>
                        <p>إدارة الاصول</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    <div class="sidebar-background" style=""></div></div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-left">
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                {{ Auth::user()->name }} 

                                  <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                              <li class="divider"></li>
                              <li><a href="{{route('change-password')}}">تغير كلمة المرور </a></li>
                            </ul>
                      </li>
                      <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            خروج
                        </a>


                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    </li>
                    
                </div>
            </div>
        </nav>


         <div class="content">
            @yield('content')

           
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
             
                <p class="copyright pull-left">
 
مصرف الاندلس                    <a href="">حقوق   </a>
                </p>
            </div>
        </footer>

    </div>
</div>




    <!--   Core JS Files   -->
    <script src="{{ asset('dashboard/assets/js/jquery-1.10.2.js') }}" defer></script>

    <script src="{{ asset('dashboard/assets/js/bootstrap.min.js') }}" defer></script>

	<!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{ asset('dashboard/assets/js/bootstrap-checkbox-radio-switch.js') }}" defer></script>


	<!--  Charts Plugin -->
    <script src="{{ asset('dashboard/assets/js/chartist.min.js') }}" defer></script>


    <!--  Notifications Plugin    -->
    <script src="{{ asset('dashboard/assets/js/bootstrap-notify.js') }}" defer></script>



    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{ asset('dashboard/assets/js/light-bootstrap-dashboard.js') }}" defer></script>


	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="{{ asset('dashboard/assets/js/demo.js') }}" defer></script>



	

</body></html>