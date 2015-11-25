<!doctype html>
<html>
<head>
  <title>Developer's Best Friend</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body style="background-color:#E0F0FF">
  @if(Session::has('message'))
    <p style-"color: green;">{{ Session::get('message') }} </p>
    @endif
  <div id="header">
    <h1>Developer's Best Friend</h1>
  </div>
  <div id="nav" class="top">
    <ul>
      <li><a href="home">Home</a></li>
      <li><a href="plans">Plans</a></li>
      <li><a href="about">About</a></li>
      <li><a href="user-generator">Login/Sign up</a></li>
    </ul>
  </div>
  <div id="main">
    <div id="section">
      @yield('content')
    </div>
  </div>
</body>
</html>
