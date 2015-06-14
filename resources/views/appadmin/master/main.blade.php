<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>ElsyHair Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/adminstyle.css') }}">
  
  </head>

  <body>

    <section id="vertical-nav">
      <div id="logo-box">
        <h3>Admin</h3>
      </div>

      <div id="nav-box">
        <ul class="nav-list">
          <li @if ($pagename == 'dashboard') class="active" @endif><a href="/app/dashboard" ><i class="fa fa-bars"></i> Dashboard</a></li>
          <li @if ($pagename == 'pages') class="active" @endif ><a href="/app/pages"><i class="fa fa-file-o"></i> Pages</a></li>
          <li @if ($pagename == 'posts') class="active" @endif><a href="/app/posts"><i class="fa fa-file-text-o"></i> Posts</a></li>
          <li @if ($pagename == 'products') class="active" @endif><a href="/app/products"><i class="fa fa-shopping-cart"></i> Products</a></li>
          <li @if ($pagename == 'mail') class="active" @endif><a href="/app/mail"><i class="fa fa-envelope"></i> Mail</a></li>
          <li @if ($pagename == 'settings') class="active" @endif><a href="/app/setting"><i class="fa fa-cogs"></i> Setting</a></li>
        </ul>
      </div>
    </section>

    <section id="header">
      <div class="profile-box">
        <ul class="profile-items pull-right">
          <li class="item"><a href="/user/profile"><i class="fa fa-user"></i></a></li>
          <li class="item"><a href="/signout"><i class="fa fa-log-out"></i></a></li>
          <li class="item"><a href="/"><i class="fa fa-desktop"></i></a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </section>
    
    <section id="admincontents">
      <div class="container">
        <div class="col-md-12">
          @yield('admincontent')
        </div>
      </div>
      
    </section>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    @yield('scripts')
  </body>

  </html>