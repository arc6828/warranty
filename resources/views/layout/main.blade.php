<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.head')
</head>
<body >
  <div class="wrapper">
    @include('layout.sidebar')
    <div class="main-panel">
        @include('layout.navbar')
        <div class="content" >
        
          <div class="container-fluid pt-4">
            @yield('content')
          </div>
        </div>
        @include('layout.footer')     
      </div>
    </div>
  </div>
  @include('layout.js')
    
</body>

</html>