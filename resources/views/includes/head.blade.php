<meta charset="UTF-8">
<meta name="description" content="">
<meta name="author" content="erwien">
<title>Larablade</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class='fa fa-linux'></i> LARABLADE - (LARAVEL BLADE TEMPLATE)</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('/')}}"></i> Home</a></li>
         <li><a href="{{URL::to('/about')}}"></i> About</a></li>
      </ul>
    </div>
  </div>
</nav>
{{!! HTML::style('bootstrap/css/bootstrap.min.css') !!}}
{{!! HTML::style('bootstrap/css/bootstrap-theme.min.css') !!}}