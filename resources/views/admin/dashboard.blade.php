<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.body.head')
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      @include('admin.body.header')
      @include('admin.body.sidebar')

      <!-- Main Content -->
    <div class="main-content">  
     @yield('content')
    </div>

    @include('admin.body.footer')
  </div>
  
  @include('admin.body.foot')
</body>
</html>