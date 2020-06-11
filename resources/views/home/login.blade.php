<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="http://localhost/webtravel/public/js/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/webtravel/public/js/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/webtravel/public/js/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/webtravel/public/js/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost/webtravel/public/js/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/webtravel/public/js/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/webtravel/public/css/login/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/webtravel/public/css/login/main.css">
<!--===============================================================================================-->
<link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
<meta name="csrf_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
            <form class="login100-form validate-form" action="{{route('xulilogin')}}" method="post">
                {{ csrf_field() }}
					<span class="login100-form-title p-b-55" style="font-family: 'Abril Fatface'">
						<b>Đăng nhập</b>
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="user" placeholder="Tên truy cập">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1" style="font-family: 'Poppins'">
							Nhớ mật khẩu
						</label>
					</div>
                    @if(isset($error))
                    <p style="color:red">{{$error}}</p>
                    @endif
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" type="submit" style="font-family: 'Poppins'">
							<b>Đăng nhập</b>
						</button>
					</div>

					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1" style="font-family: 'Poppins'">
							<b>Hoặc</b>
						</span>
					</div>

					<button type="button" class="btn-face m-b-10" style="font-family: 'Poppins'" id="btnFacebook">
						<i class="fa fa-facebook-official"></i>
						<b>Facebook</b>
					</button>
                    
                    <button type="button" class="btn-google m-b-10" style="font-family: 'Poppins'" id="btnGoogle">
                        <a href="{{url('auth/google')}}">
                        <img src="http://localhost/webtravel/public/image/icon-google.png">
                        
                        <b>Google</b>
                    </a>
                    </button>
                

					<div class="text-center w-full p-t-115">
						<span class="txt1" style="font-family: 'Poppins'">
							Chưa có tài khoản? 
						</span>

						<a class="txt1 bo1 hov1" href="#" style="font-family: 'Poppins'">
							Đăng kí ngay						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="http://localhost/webtravel/public/js/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/webtravel/public/js/login/vendor/bootstrap/js/popper.js"></script>
	<script src="http://localhost/webtravel/public/js/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/webtravel/public/js/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/webtravel/public/js/login/js/main.js"></script>
    {{-- <script type="text/javascript">
        (function() {
        console.log('Start file login with firebase');
        $.ajaxSetup({
             headers:{
             	'X-CSRF-TOKEN':$('[name=csrf_token]').attr('content')
             }
		 });
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyB3YjWkMAiYcYFNtpiizt7M00CLP0unY6A",
            authDomain: "basic-project-1e47b.firebaseapp.com",
            databaseURL: "https://basic-project-1e47b.firebaseio.com",
            projectId: "basic-project-1e47b",
            storageBucket: "basic-project-1e47b.appspot.com",
            messagingSenderId: "348167646533"
        };
        firebase.initializeApp(config);
        var database = firebase.database();
    
        //Google singin provider
        var ggProvider = new firebase.auth.GoogleAuthProvider();
        //Facebook singin provider
        var fbProvider = new firebase.auth.FacebookAuthProvider();
        //Login in variables
        const btnGoogle = document.getElementById('btnGoogle');
        const btnFaceBook = document.getElementById('btnFacebook');
    
            //Sing in with Google
            btnGoogle.addEventListener('click', e => {
                firebase.auth().signInWithPopup(ggProvider).then(function(result) {
                    var token = result.credential.accessToken;
                    var user = result.user;
                    console.log('User>>Google>>>>', user);
                    event.preventDefault()
                    $.ajax({
                        url:'{{route('logingg')}}',
                        type:'post',
                        data: {u:user},
                        success:function(kq){
                            console.log(kq); 
                        }
                        });
                    userId = user.uid;
                }).catch(function(error) {
                    // console.error('Error: hande error here>>>', error.code);
                    // console.error('Error: hande error here>Facebook>>', error.message);
                })
            }, false)
    
            //Sing in with Facebook
            btnFaceBook.addEventListener('click', e => {
                firebase.auth().signInWithPopup(fbProvider).then(function(result) {
                    // This gives you a Facebook Access Token. You can use it to access the Facebook API.
                    var token = result.credential.accessToken;
                    // The signed-in user info.
                    var user = result.user;
                    console.log('User>>Facebook>', user);
                    // ...
                    userId = user.uid;
                
                }).catch(function(error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    // The email of the user's account used.
                    var email = error.email;
                    // The firebase.auth.AuthCredential type that was used.
                    var credential = error.credential;
                    // ...
                    console.error('Error: hande error here>Facebook>>', error.code);
                   
                });
            }, false)
            //jquery 
    }())
    </script> --}}
</body>
</html>