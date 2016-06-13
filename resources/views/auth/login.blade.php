<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iniciar sesión</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/auth/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/auth/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/auth/assets/css/form-elements.css">
        <link rel="stylesheet" href="/auth/assets/css/style.css">
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Iniciar Sesión</strong></h1>
                            <div class="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Ingresa a nuestro sitio</h3>
                            		<p>Ingresa tu correo y contraseña para iniciar sesión:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                             @if ($errors->any())
                                <div class="alert alert-danger m-b-sm">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-bottom">
                                {!! Form::open([ 'url' => '/auth/login', 'method' => 'POST', 'class' => 'login-form' ]) !!}
			                    	<div class="form-group">
			                    		<label class="sr-only" for="email">Email</label>
                                        {!! Form::text('email', null, ['class' => 'form-username form-control', 'placeholder' => 'Email']) !!}
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">Contraseña</label>
                                        {!! Form::password('password', ['class' => 'form-password form-control', 'placeholder' => 'Contraseña']) !!}
			                        </div>
			                        <button type="submit" class="btn">Entrar</button>
                                {!! Form::close() !!}

		                    </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div> -->
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>