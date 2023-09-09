<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.js"
        integrity="sha512-kWH92pHUC/rcjpSMu19lT+H6TlZwZCAftg9AuSw+AVYSdEKSlXXB8o6g12mg5f+Pj5xO40A7ju2ot/VdodCthw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="index.css">
    <script src="index.js" async defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php
session_start();
if(isset($_SESSION['login_error']) && $_SESSION['login_error']) {
    echo '<script> sai() </script>';
    unset($_SESSION['login_error']);
}
?>

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">

            <form id="loginForm" class="card container-transparent text-white p-5"
                style="border-radius: 10px; width: 480px; height: 600px;" method="post" action="sqlevent.php">
                <div class="background-overlay">
                    <div class="card-body p-5 text-center">

                        <div class="pb-3">

                            <h2 class="fw-bold mb-2 text-uppercase">よー！</h2>
                            <p class="text-white-50 mb-5">Hello user, welcome to our webpage. </p>

                            <div class="form-outline form-white mb-4">
                                <input type="email" name="email" placeholder="Email" class="form-control " />
                            </div>

                            <div class="form-outline form-white" style="display: flex; overflow: hidden;">
                                <input type="password" id="passWord" name="password" placeholder="Password"
                                    class="form-control" />

                                <i style="position: absolute; right: 15px; margin-top: 10px;" class='bx bx-show'
                                    onclick="togglePasswordVisibility()"></i>
                                <i style="position: absolute; right: 15px; margin-top: 10px; display: none;"
                                    class='bx bx-hide' onclick="togglePasswordVisibility()"></i>

                            </div>
                            <p class="small" style="margin-top: 40px;" onclick="forgotPassword()"><a class="text-white-50" href="#!">Forgot
                                    password?</a>
                            </p>

                            <input type="submit" name="login" value="Login" class="btn btn-outline-light btn-lg px-5" >
                            <div class="justify-content-center text-center mt-4">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>

                        </div>

                        <p>
                            Don't have an account? <a href="#!" class="text-white-50 fw-bold"
                                onclick="registerForm()">Sign Up</a>
                        </p>

                    </div>
                </div>
            </form>

            <form id="registerForm" class="card container-transparent text-white p-5"
                style="border-radius: 10px; display:none; width: 480px; height: 600px;">
                <div class="background-overlay">
                    <div class="card-body p-4 text-center">

                        <div class="pb-3">

                            <h2 class="fw-bold mb-2 text-uppercase">よー！</h2>
                            <p class="text-white-50 mb-5">You can register your own account here !</p>

                            <div class="form-outline form-white mb-4">
                                <input type="email" name="email" placeholder="Email" class="form-control " />
                            </div>

                            <div class="form-outline form-white mb-4" style="display: flex; overflow: hidden;">
                                <input type="password" id="passWord" name="password" placeholder="Password"
                                    class="form-control" />

                            </div>

                            <div class="form-outline form-white" style="display: flex; overflow: hidden;">
                                <input type="password" id="confirm-password" name="confirm-password"
                                    placeholder="Confirm password" class="form-control" />

                            </div>

                            <p class="small" style="margin-top: 40px;" onclick="forgotPassword()"><a class="text-white-50" href="#!">Forgot
                                    password?</a>
                            </p>

                            <input type="submit" name="register" value="Register"
                                class="btn btn-outline-light btn-lg px-5">
                            <div class="justify-content-center text-center mt-4">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>

                        </div>

                        <p>
                            <a href="#!" class="text-white-50 fw-bold" onclick="loginForm()">Back</a>
                        </p>

                    </div>
                </div>
            </form>

            <form id="forgotPasswordForm" class="card container-transparent text-white p-5"
                style="border-radius: 10px; display: none">
                <div class="background-overlay">
                    <div class="card-body p-5 text-center">
                        <div class="pb-3">
                            <h2 class="fw-bold mb-2 text-uppercase">よー！</h2>
                            <p class="text-white-50 mb-5">Forgot your password? Enter your email here. </p>

                            <div class="form-outline form-white mb-4">
                                <input type="email" name="email" placeholder="Email" class="form-control mb-4" />
                            </div>
                                <button class="btn btn-outline-light btn-lg px-5"type="submit" name="confirm-send">Confirm</button>
                                                                
                        </div>
                        <p>
                            Don't have an account? <a href="#!" class="text-white-50 fw-bold"
                                onclick="loginForm()">Back</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>