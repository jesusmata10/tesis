<!DOCTYPE html>
<html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
  <!--<link rel="stylesheet" href="{{ asset('css/ionicons.css') }}">-->
  <!-- app 
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">-->
</head>

<body class="login-page" style="min-height: 512.8px;">


 <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script src="{{ asset('js/jquery.js') }}"></script>
<!-- Bootstrapt 4 -->
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.js') }}"></script>
    
</body>
</html>
