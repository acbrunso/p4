<!doctype html>
<html>
<head>
  <title>Brunstar Hosting</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body style="background-color:#E0F0FF">
  @if(Session::has('flash_message'))
    <p style="color: green;background-color:yellow;">{{ Session::get('flash_message') }} </p>
    @endif




  <div id="header">
    <h1>Brunstar Hosting</h1>
  </div>
  <div id="nav" class="top">
    <ul>
      <li><a href="home">Home</a></li>
      <li><a href="plans">Plans</a></li>

      @if(Auth::check())
      <li><a href="updateplans">Update Plans</a></li>
        <li><a href="logout">Log out</a></li>
        <li class="right">Logged in as <?php echo Auth::user()->first_name; ?> | <a href="profile">My Profile</a></li>
      @else
        <li><a href="login">Login/Sign up</a></li>
      @endif

    </ul>
  </div>

  <div id="main">
    <div id="section">
      @yield('content')
    </div>
  </div>
</body>
</html>
