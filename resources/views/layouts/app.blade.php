<!DOCTYPE html>
<html lang="en">

<head>
<title>Laravel-10</title>
@include('includes.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    @include('includes.header')
  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('includes.sidebar')
  <!-- End Sidebar-->
  <!-- ======= Main ======= -->
  <main id="main" class="main">
    @yield('content')
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  @include('includes.footer')
  </footer>
  <!-- End Footer -->

<!-- ======= script ======= -->
@include('includes.script')
<!-- End script -->

</body>

</html>