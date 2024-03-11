<!doctype html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    @include('partials.sidebar')
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
        @include('partials.header')
      <!--  Header End -->
      @yield('content')

    </div>
  </div>
    <!-- Script -->
    @include('partials.scripts')
</body>

</html>