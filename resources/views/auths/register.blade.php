<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/assets/img/login.png') }}">
</head>
<body>
    <div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{ asset('admin/img/login.png') }}" width="50" alt="Klorofil Logo"></div>
								<p class="lead">Silahkan Daftar di bawah ini</p>
							</div>
                            <form class="form-auth-small" action="/postregister" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="signin-name" class="control-label sr-only">Nama</label>
                                    <input name="name" type="name" class="form-control" id="signin-name"  placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input name="email" type="email" class="form-control" id="signin-email"  placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input name="password" type="password" class="form-control" id="signin-password"  placeholder="Password">
                                </div>
                                <div class="form-group clearfix">
                                    
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">DAFTAR</button>
                                
                            </form>
                            <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">SELAMAT DATANG</h1>
                            <p>Anda Belum memiliki akun? Silahkan Daftar di sini</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
   </div>
</body>
</html>