<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/feb075130b.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="homepage1.css">
    <script src="homepage1.js" async defer></script>
</head>

<body>
  <?php
  session_start();
  $errorMessages = array(
    1 => "Tài khoản không tồn tại.",
    2 => "Mật khẩu không chính xác.",
    3 => "Tài khoản đã tồn tại.",
    4 => "Mật khẩu phải ít nhất 6 kí tự.",
    5 => "Mật khẩu không đồng nhất.",
    6 => "Không có tài khoản này.",
    7 => "Mã vừa nhập không trùng khớp.",
    // Thêm các mã số lỗi và thông báo lỗi khác tại đây
  );
  if (isset($_SESSION['login_error']) && isset($errorMessages[$_SESSION['login_error']])) {
    $errorCode = $_SESSION['login_error'];
    $errorMessage = $errorMessages[$errorCode];
    echo "<script>$(document).ready(function() {";
    echo 'error("' . $errorMessage . '", ' . $errorCode . ');';
    echo "});</script>";
    if ($errorCode >= 3 && $errorCode <= 5) {
      echo "<script>$(document).ready(function() {";
        echo 'registerForm()';
        echo "});</script>";
    }
    if ($errorCode ==6) {
      echo "<script>$(document).ready(function() {";
        echo 'forgotPassword()';
        echo "});</script>";
    }
    unset($_SESSION['login_error']); 
  }

  if (isset($_SESSION['success'])) {
    echo "<script>$(document).ready(function() {";
    echo "success();";
    echo "});</script>";
    unset($_SESSION['success']);
  } 
  ?>
  <script>
    $(document).ready(function() {
      var a = 1;
      eye();

      function eye() {
        $('.eye').click(function() {
          if (a == 1) {
            $('#password').attr('type', 'text');
            a = 0;
          } else {
            $('#password').attr('type', 'password');
            a = 1;
          }
          $('.fa-eye-slash').toggleClass('close');
          $('.fa-eye').toggle();
        });
      }
    });

    function registerForm() {
      $("#formTitle").text("Registration");
      $('.Login_form').hide();
      $('.Registration_form').toggle();
      $('.forgotpassword_form').hide();
    }

    function forgotPassword() {
      $("#formTitle").text("ForgotPassword");
      $('.Login_form').toggle();
      $('.forgotpassword_form').toggle();

    }

    function loginForm() {
      $("#formTitle").text("Login");
      $('.Login_form').toggle();
      $('.forgotpassword_form').hide();
      $('.Registration_form').hide();
    }

    function error(errorMessage, errorCode) {
      $("#error" + errorCode).text(errorMessage);
    }
  

    function success() {
      swal({
        title: "tràu quâu",
        text: "thành công rầu",
        icon: "success",
        button: null,
      });
    }
  </script>
  <style>
    .error {
      margin-left: 12%;
      color: red;
    }

    .ico {
      width: 25px;
    }

    .close {
      display: none;
    }

    .custom-input {
      margin-left: 10%;
      width: 80%;
      font-size: 24;
      padding: 8px 5px;
    }

    #formTitle {
      text-align: center;
      padding-top: 10px;
      padding-bottom: 10%;
      letter-spacing: 1px;
      color: white;
      font-weight: bold;
    }

    input[type="submit"] {
      width: 55%;
      padding: 10px 15px;
    }

    .parent-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10px 5px;
    }

    p {
      padding: 8px 15px;
    }

    .remefor {
      display: flex;
      justify-content:end;
      width: 80%;
      margin: 2% 0 8% 0;
    }

    .row {
      height: 100vh;
      width: 100%;

    }

    .container {
      background-color: rgba(255, 255, 255, 0.2);
      height: 625px;
      border-radius: 15px;
      padding-top: 10%;
      margin-left: 20%;
      color: #20223C;
    }

    .left {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    body {
      background-image: url("WebpageMedia/lgn.png");
      background-size: cover;
      overflow: hidden;
    }

    .custom-input input {
      background-color: rgba(255, 255, 255, 0.5);
      /* Màu nền với độ mờ 0.5 */
    }
  </style>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 left">
        <div class="container">
          <h1 id="formTitle">Login</h1>
          <div class="Login_form">
            <form method="post" action="sqlevent.php">
              <div class="input-group flex-nowrap custom-input">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope ico"></i></span>
                <input type="text" name="email" placeholder="Email here" class="form-control"  required />

              </div>
              <div class="error" id="error1"></div>
              <div class="input-group flex-nowrap custom-input" style="display: flex; overflow: hidden;">
                <span class="input-group-text eye" id="addon-wrapping">
                  <i class="fa-solid  fa-eye-slash ico"></i>
                  <i class="fa-solid fa-eye ico" style="display: none;"></i>
                </span>
                <input type="password" name="password" id="password" placeholder="Password here" class="form-control"  required/>

              </div>
              <div class="error" id="error2"></div>
              <div class="small remefor">
              

                <div onclick="forgotPassword()"><a class="text-white-50" href="#!">Forgot password?</a></div>
              </div>

              <div class="parent-container">
                <input type="submit" name="login" value="Login" class="btn btn-outline-light">
              </div>

            </form>

            <div class="small text-white-50 parent-container">
              Don't have an account?
              <a href="#" onclick="registerForm()">Registration now</a>
            </div>

          </div>
          <div class="Registration_form" style="display: none;">
            <form method="post" action="sqlevent.php">
              <div class="input-group flex-nowrap custom-input">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope ico"></i></span>
                <input type="email" name="Email" placeholder="Email Address" class="form-control"  required/>

              </div>
              <div class="error" id="error3"></div>
              <div class="input-group flex-nowrap custom-input">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-unlock-keyhole ico"></i></span>
                <input type="password" name="Password" placeholder="Password here" class="form-control" required />

              </div>
              <div class="error" id="error4"></div>
              <div class="input-group flex-nowrap custom-input">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-key ico"></i></span>
                <input type="password" name="confirm-password" placeholder="Password here too" class="form-control"  required/>
              </div>
              <div class="error" id="error5"></div>
              <div class="parent-container">
                <input type="submit" name="register" value="Register" class="btn btn-outline-light">
              </div>
            </form>
            <p class="center mt-20 text-white-50 small parent-container">
              Already have an account?
              <a href="#" onclick="loginForm() ">Login now</a>
            </p>
          </div>

          <div class="forgotpassword_form" style="display: none;">
            <form method="post" action="sqlevent.php">
              <div class="input-group flex-nowrap custom-input">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" name="Emailc" placeholder="Email Address" class="form-control"  required/>
              </div>
              <div class="error" id="error6"></div>
              <div class="parent-container">
              <input type="submit" name="confirm-send" value="Send" class="btn btn-outline-light">
              </div>

            </form>

            <p class=" text-white-50 small parent-container">
              Back to the
              <a href="#" onclick="loginForm() "> Login</a> | <a href="#" onclick=" registerForm()">Registration</a>
            </p>

          </div>
        </div>
      </div>

      <div class="col-md-7 left">
      </div>
    </div>

  </div>

</body>

</html>