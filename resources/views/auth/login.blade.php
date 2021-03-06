<!doctype html>
<html class="no-js" lang="en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login | Live Sensor Security</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ asset('img/favicon.jpeg') }}" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @SIGN WRAPPER -->


     <div>
  <style type="text/css">
      * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

body {
  background-color: #fff;
  font-family: Montserrat;
  overflow-x: hidden;
}

article,
aside,
details,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
  display: block;
}

h1,
h2,
h3,
h4,
h5,
h6,
p,
a {
  -ms-word-wrap: break-word;
  word-wrap: break-word;
  text-decoration: none;
}

img {
  border: none;
}

*:focus {
  outline: none;
}

h1{
  text-transform: uppercase;
  font-size: 25px;
  color: #000;
}
.clearfix::after {
  content: "";
  display: table;
  clear: both;
}

.bg-illustration {
  position: relative;
  height: 100vh;
  width: 1194px;
  /*background: url("assets/img/login.jpg") no-repeat center center scroll;*/
  background-size: cover;
  float: left;
  -webkit-animation: bgslide 2.3s forwards;
          animation: bgslide 2.3s forwards;
}
.bg-illustration img {
  width: 248px;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  height: auto;
  margin: 19px 0 0 25px;
}

@-webkit-keyframes bgslide {
  from {
    left: -100%;
    width: 0;
    opacity: 0;
  }
  to {
    left: 0;
    width: 1194px;
    opacity: 1;
  }
}

@keyframes bgslide {
  from {
    left: -100%;
    width: 0;
    opacity: 0;
  }
  to {
    left: 0;
    width: 1194px;
    opacity: 1;
  }
}


.login {
  max-height: 100vh;
  overflow-Y: auto;
  float: left;
  margin: 0 auto;
  width: calc(100% - 1194px);
}
.login .container {
  width: 505px;
  margin: 0 auto;
  position: relative;
}
.login .container h1 {
  margin-top: 100px;
  font-size: 35px;
  font-weight: bolder;
}
.login .container .login-form {
  margin-top: 12px;
}
.login .container .login-form form {
  display: -ms-grid;
  display: grid;
}
.login .container .login-form form input, .login-form select {
  font-size: 16px;
  font-weight: normal;
  background: rgba(57, 57, 57, 0.07);
  margin: 12.5px 0;
  height: 50px;
  border: none;
  padding: 0 30px;
  border-radius: 10px;
  color: #000!important;
  font-weight: 600;
}
.login .container .login-form form button[type=submit] {
  background: #000;
  border: none;
  margin-top: 14px;
  margin-bottom: 20px;
 /* width: 241px;*/
  height: 58px;
  text-transform: uppercase;
  color: white;
  border-radius: 30px;
  position: relative;
  z-index: 2;
  font-weight: normal;
  font-size: 20px;
  font-weight: 600;
}
.login .container .login-form form button[type=submit]:hover::after {
  opacity: 0.6;
}
.login .container .login-form form button[type=submit]::after {
  content: "";
  position: absolute;
  z-index: -1;
 border-radius: 30px;
  opacity: 0;
  top: 0;
  left: 0;
  -webkit-transition: 0.3s ease-in-out;
  -o-transition: 0.3s ease-in-out;
  transition: 0.3s ease-in-out;
  right: 0;
  bottom: 0;
   background: #b9aa5b;
}
.login .container .remember-form {
  position: relative;
  margin-top: -30px;
  width: 50%;
  float: left;
}
.login .container .remember-form input[type=checkbox] {
  margin-top: 9px;
}
.login .container .remember-form span {
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  top: 25px;
  color: #808080;
  margin-left: 15px;
}

.forgetss{
 width: 100%;
 display:inline-block;
 margin-top: 10px;
}
.login .container .forget-pass {
  position: absolute;
  right: 0;
   color: #808080!important;


     width: 50%;
    text-align: end;
    float: right;
}
.login .container .forget-pass a {
  font-size: 16px;
  position: relative;
  font-weight: normal;
  color: #918F8F;
}
.login .container .forget-pass a::after {
  content: "";
  position: absolute;
  height: 2px;
  width: 100%;
  border-radius: 100px;
  background: -webkit-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
  background: -o-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
  background: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);
  bottom: -4px;
  left: 0;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  opacity: 0;
  right: 0;
}
.login .container .forget-pass a:hover::after {
  opacity: 1;
}

@media only screen and (min-width: 1024px) and (max-width: 1680px) {
  .bg-illustration {
    width: 50%;
    -webkit-animation: none;
            animation: none;
  }

  .login {
    width: 50%;
  }
}
/* Display 12", iPad PRO Portrait, iPad landscape */
@media only screen and (max-width: 1024px) {
  body {
    overflow-x: hidden;
  }

  @-webkit-keyframes slideIn {
    from {
      left: -100%;
      opacity: 0;
    }
    to {
      left: 0;
      opacity: 1;
    }
  }

  @keyframes slideIn {
    from {
      left: -100%;
      opacity: 0;
    }
    to {
      left: 0;
      opacity: 1;
    }
  }
  .bg-illustration {
    float: none;
   /* background: url("https://i.ibb.co/rwncw7s/bg-mobile.png") center center;*/
    background-size: cover;
    -webkit-animation: slideIn 0.8s ease-in-out forwards;
            animation: slideIn 0.8s ease-in-out forwards;
    width: 100%;
    height: 190px;
    text-align: center;
  }
  .bg-illustration img {
    width: 100px;
    height: auto;
    margin: 20px auto !important;
    text-align: center;
  }
  
  
  .login {
    float: none;
    margin: 0 auto;
    width: 100%;
  }
  .login .container {
    -webkit-animation: slideIn 0.8s ease-in-out forwards;
            animation: slideIn 0.8s ease-in-out forwards;
    width: 85%;
    float: none;
  }
  .login .container h1 {
    font-size: 25px;
    margin-top: 40px;
  }
  .login .container .login-form {
    margin-top: 90px;
  }
  .login .container .login-form form input {
    height: 45px;
  }
  .login .container .login-form form button[type=submit] {
    height: 45px;
    margin-top: 100px;
  }
  .login .container .login-form .remember-form {
    position: relative;
    margin-top: -21px;
  }
  .login .container .login-form .remember-form span {
    font-size: 16px;
    margin-top: 22px;
    top: inherit;
  }

  .forget-pass a {
    font-size: 16px;
    position: relative;
    font-weight: normal;
    color: #918F8F;
  }
  .forget-pass a::after {
    content: "";
    position: absolute;
    height: 2px;
    width: 100%;
    border-radius: 100px;
    background: -webkit-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
    background: -o-linear-gradient(110deg, #f794a4 0%, #fdd6bd 100%);
    background: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);
    bottom: -4px;
    left: 0;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    opacity: 0;
    right: 0;
  }
  .forget-pass a:hover::after {
    opacity: 1;
  }
}
.parent 
{
 background: url('{{url('img/login.jpg')}}');
   background-repeat: no-repeat;
 
       background-size: 85% 100%;
  }

  .login input[type="text"], .login input[type="password"],.login select{
    border-radius: 0px!important;
    border-left:6px solid!important; 
   /* text-transform: uppercase;*/
    color: #000;
    font-weight: bolder;
  }

  ::placeholder {
       color: #000!important;
   font-weight: bolder;
}


@media  (min-width: 300px)  and (max-width: 928px) {
  .parent {
    background: #fff;
  }
.bg-illustration {
  display: none;
}
.login-form {
  margin-top: 40px!important;
}

.login button{
  margin-top: 30px!important;
}
}
  </style>
         

           <div class="parent clearfix" style="">
    <div class="bg-illustration" >
     

    
    </div>
    
    <div class="login">
      <div class="container">
        <div style="text-align: center;">
        <h1>Member Area</h1>
         <h4 style="color: #bfbfbf;">"Your Complete Security Solution"</h4>
       </div>
    
        <div class="login-form">
          <form class="sign-in" method="POST" action="{{ route('login') }}">

  @csrf
          <select name="role" id="role" required="">
            <option value="">Select Role</option>
            <option value="founder">Founder</option>
            <option value="hr">HR</option>
            <option value="Admin">Admin</option>
            <option value="Supervisor">Supervisor</option>
            <option value="employee">Employee</option>
          </select>

            <input type="text" value="{{ old('email') }}" placeholder="IC Number"  name="email">

                

             

            <input type="password" name="password" class="form-control" placeholder="Password">
            

            <div *ngIf="password.invalid && (password.dirty || password.touched)"
                              class="form-text text-muted">
                            <div *ngIf="password.errors?.required">
                              
                            </div>
                            <div *ngIf="password.errors?.minlength">
                            
                            </div>
                      </div>
             
             <div class="forgetss">
            <div class="remember-form">
              <input type="checkbox">
              <span>keep Signed in</span>
            </div>
            <div class="forget-pass">
              <a href="{{url('password/forget')}}" style="color: #808080;">Forgot Password ?</a>
            </div>
          </div>

            <button type="submit"  [disabled] = "!loginForm.valid" id="login-btn">LOGIN</button>

          </form>
        </div>
    
      </div>
      </div>
  </div>


                  
   

     
        
        
        
    </body>
</html>
