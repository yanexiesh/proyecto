<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Bootstrap css --}}
    <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet">
    <link href="{{asset('css/bootstrap-table.min.css')}}" rel="stylesheet">
    {{-- Select2 Css --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}"> --}}
    {{-- css  --}}
    <link  href="{{asset('css/page.css')}}" rel="stylesheet">

    

    @yield('css')
</head>
<body>
    @yield('header')
        
	<nav class="navbar sticky-top navbar-expand-lg navbar-page flex-md-nowrap">
        <button type="button" id="sidebarCollapse" class="btn">
            <i class=""></i>
            <span><img src="{{asset('img/menu-button.png')}}" alt=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Pasteleria Yanexi<span class="sr-only">(current)</span></a>
                </li>            
            </ul>
            <span class="navbar-text">
                    {{-- Hola ,  {{ Auth::user()->name }} :) --}}
            </span>
            <div class="dropdown">
                <button class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 
                    <span><img src="{{asset('img/setting.png')}}" alt=""></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="d-none d-md-block  bg-light sidebar">     
            <div class="sidebar-sticky">
                <ul class="list-unstyled components">
                    <p>Panel Administrativo</p>
                    <div class="center">
                    <li class="nav-item">
                        <a class="nav-link }}"  href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <span data-feather="file"><img src="{{asset('img/Group 24.png')}}" alt=""></span>
                            Productos
                        </a>
                        <ul class="collapse list-unstyled" id="userSubmenu">
                            <li class="nav-item">
                                <a href="{{route('producto.create')}}">Crear Producto</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('producto.index')}}">Listado de Productos</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    </div>  
                </ul>                    
            </div>               
        </nav>
       
        @yield('content')
       
    </div>

   

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    {{-- <script src="/tableExport.min.js"></script> --}}
    <script src="{{asset('js/bootstrap-table.js')}}"></script>
    <script src="{{asset('js/bootstrap-table-locale-all.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-table-export.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-table-filter-control.min.js')}}"></script>
    <script src="{{asset('js/FileSaver.min.js')}}"></script>
    <script src="{{asset('js/Blob.min.js')}}"></script>
    <script src="{{asset('js/xls.core.min.js')}}"></script>
    <script src="{{asset('js/tableexport.js')}}"></script>
    @yield('scripts')
</body>
</html>