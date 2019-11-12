<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.head')
</head>
<body id="page-top">
  <div id="wrapper">
  @include('layout.sidebar')
  <div class="main-panel">
    @include('layout.navbar')
      <div id="content">
      
        <div class="container-fluid pt-4">
          @yield('content')
        </div>
      </div>
      @include('layout.footer')     
    </div>
  </div>
  @include('layout.js')
    
</body>

</html>