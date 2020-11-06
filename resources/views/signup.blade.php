<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Sign up</title>
        <style>
            @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
            body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-image: url("images/color3.jpg");
      background-size: cover;
    }
    .login-box {
      width: 280px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 13px;
    }
    .login-box h1 {
      float: left;
      font-size: 40px;
      border-bottom: 6px solid #4caf50;
      margin-bottom: 50px;
      padding: 13px;
    }
    .textbox {
      width: 100%;
      overflow: hidden;
      font-size: 20px;
      padding: 8px 0;
      margin: 8px 0;
      border-bottom: 1px solid #4caf50;
    }
    .textbox i {
      width: 26px;
      float: left;
      text-align: center;
    }
    .textbox input {
      border: none;
      outline: none;
      background: none;
      color: white;
      font-size: 18px;
      width: 80%;
      float: left;
      margin: 0 10px;
    }
    .btn {
      width: 100%;
      background: none;
      border: 2px solid #4caf50;
      color: white;
      padding:  5px;
      font-size: 18px;
      cursor: pointer;
      margin: 12px 0;
    }
    h1 {
      color: white;
      text-align: center;
    }
    a {
        color: red;
        font-size: 17px;
    }
    .p{
        color: red;
        border-radius: 10px;
    }
    .p:hover {
        cursor:pointer;
        color: blue;
    }
    .text_color {
      color:red;
      font-size: 13px;
    }
        </style>
    </head>
<body>
    <form action="/validation" method="POST">
    @csrf
    <div class="login-box">
		  <h1>Sign Up</h1>
		  <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input id="t1" type="text" name="name" placeholder="Full name" value="">
		  </div>
      @error('name')
      <div class="text_color">{{$message}}</div>
      @enderror
        <div class="textbox">
			      <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <input id="t3" type="text" name="email" placeholder="Email" value="">
        </div>
        @error('email')
        <div class="text_color">{{$message}}</div>
        @enderror
        <!-- <input class="p" type="submit" name="verify" value="verify email"> -->
        <div class="textbox">
          	<i class="fa fa-lock" aria-hidden="true"></i>
          	<input id="t4" type="password" name="password" placeholder="Password" value="">
        </div>
        <div class="textbox">
          	<i class="fa fa-lock" aria-hidden="true"></i>
          	<input id="t5" type="password" name="password_confirmation" placeholder="Confirm Password" value="">
        </div>
        @error('password')
        <div class="text_color">{{$message}}</div>
        @enderror
          <input class="btn" type="submit" value="SignUp" name="submit"><br>
          If you have already an account please <a style="text-decoration: none" href="signin">Login</a>
        </div>
      </div>
    </form>
  </body>
</html>
