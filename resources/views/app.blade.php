<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/bootstrap.css.map">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/css/bootstrap-theme.css.map">
  <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="/css/bootstrap-theme.min.css.map">
  <link rel="stylesheet" href="/css/select2.min.css">


  <style type="text/css">
    * {
      border-radius:1px !important;
    }
  </style>
</head>
<body>
  @if(Auth::user())
  @include('partials.authNav')
  @else
  @include('partials.nav')
  @endif

  <div class="container">
    @include('flash::message')
    @yield('content')
    <div class="row" >
      <div class="col-md-8" >
        @yield('content-left')
      </div>
      <div class="col-md-4">
        @yield('content-right')
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        @yield('pagins')
      </div>
    </div>
  </div>
  <script src="/js/libs/jquery-2.1.4.min.js"></script>
  <script src="/js/libs/bootstrap.js"></script>
  <script src="/js/libs/bootstrap.min.js"></script>
  <script src="/js/libs/select2.min.js"></script>
  <script src="/js/msgDisplay.js"></script>
  <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js" type="text/javascript"></script>

  <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
  {{-- {!! HTML::script('ckeditor/ckeditor.js') !!} --}}
  {{-- // <script src="ckeditor/ckeditor.js" type="text/javascript"></script> --}}
  <script src="/js/articles.js"></script>
  @yield('footer')
</body>
</html>