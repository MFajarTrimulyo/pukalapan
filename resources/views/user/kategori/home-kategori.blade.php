<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pukulapan - Kategori</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet"  href="{{asset ('css/normalize.css')}}">
    <link rel="stylesheet"  href="{{asset ('icomoon/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset ('css/vendor.css')}}">
    <link rel="stylesheet"  href="{{asset ('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{asset ('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset ('js/plugins.js')}}"></script>
    <script src="{{asset ('js/script.js')}}"></script>
    <script src="{{asset ('js/modernizr.js')}}"></script>

</head>
<body style="background-color: white;">

@include('user.layout.t-header')

<!-- Banner Kategori -->

<section class="site-banner jarallax min-height300 padding-large" style="background: url({{asset ('img/cover.jpg')}}) no-repeat; background-position: top;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 style="Color: white;"class="page-title">Kategori</h1>
            <div class="breadcrumbs">
              <span class="item">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Conten -->

@include('user.kategori.isi')

@include('layout.footer')
</html>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
