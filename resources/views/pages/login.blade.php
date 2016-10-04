<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('public/css/bootstrap.min.css')!!}

    <!-- MetisMenu CSS -->
     {!! Html::style('public/css/metisMenu.min.css')!!}

    <!-- Custom CSS -->
    {!! Html::style('public/css/sb-admin-2.css')!!}

    <!-- Custom Fonts -->
   {!! Html::style('public/font/css/font-awesome.min.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                       {!! Form::open(array('route' => 'login','class'=>'form-horizontal','method'=>'POST'))  !!}
                        {!! Form::token(); !!}
                        {!!   csrf_field() ; !!} 
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password"  required >
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->                          
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        	{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- jQuery -->
    {!! HTML::script('public/js/jquery.min.js'); !!} 

    <!-- Bootstrap Core JavaScript -->
    {!! HTML::script('public/js/bootstrap.min.js'); !!}

    <!-- Metis Menu Plugin JavaScript -->
    {!! HTML::script('public/js/metisMenu.min.js'); !!} 

    <!-- Custom Theme JavaScript -->
    {!! HTML::script('public/js/sb-admin-2.js'); !!}

</body>

</html>