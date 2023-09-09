<?php
    include('db/connect.php');
    session_start();
   
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $reslt = $conn->query($sql);
        if ($reslt->num_rows == 0) {
            $errorCode = 1; // Tài khoản không tồn tại
            $_SESSION['login_error'] = $errorCode;
            header("Location: Login.php");
            exit(); // Kết thúc kịch bản sau khi chuyển hướng
        }else{$result = $conn->query($sql)->fetch_assoc();
            if($result['pass'] == $password)
                {    $_SESSION['email'] = $email; header("Location: homepage1.php");}
                else{   
                    $errorCode = 2; // Mật khẩu không chính xác
                    $_SESSION['login_error'] = $errorCode;
                    header("Location: Login.php");
                    exit(); // Kết thúc kịch bản sau khi chuyển hướng
                }}
            $conn->close();             
    }
    if(isset($_POST['register'])){
        $email=$_POST['Email'];
        $password=$_POST['Password']; 
        $passwordconf=$_POST['confirm-password'];
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            if (strlen($password) < 6) {
                $errorCode = 4; 
                $_SESSION['login_error'] = $errorCode;
                header("Location: Login.php");
                exit(); // Kết thúc kịch bản sau khi chuyển hướng
            }
            else{
                if( $password==$passwordconf){
                    $sql_register = "INSERT INTO user(email,pass) VALUES ('$email', '$password')";
                    $result_register = $conn->query($sql_register); 
                    if ($result_register) {
                        header("Location: Login.php");  
                        $_SESSION['success'] =true;
                    } else {
                        header("Location: Login.php");  
                        $_SESSION['success'] =false;
                    } 
                }
                else{ 
                    $errorCode = 5; 
                    $_SESSION['login_error'] = $errorCode;
                    header("Location: Login.php");
                    exit(); // Kết thúc kịch bản sau khi chuyển hướng
                }
            }           
        }
        else{    
            $errorCode = 3; 
            $_SESSION['login_error'] = $errorCode;
            header("Location: Login.php");
            exit(); // Kết thúc kịch bản sau khi chuyển hướng
        }
        $conn->close();      
    }
if(isset($_POST['confirm-send'])){    
    $email=$_POST['Emailc'];
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            $errorCode = 6; 
            $_SESSION['login_error'] = $errorCode;
            header("Location: Login.php");
            exit(); 
    }
        else{
        $_SESSION['email'] = $email;
            try{
              require("PHPMailer-master/src/PHPMailer.php");
              require("PHPMailer-master/src/SMTP.php");
              require("PHPMailer-master/src/Exception.php");
              $mail = new PHPMailer\PHPMailer\PHPMailer();
              $mail->IsSMTP(); // enable SMTP
                $mail->SMTPDebug = 0;
                $mail->SMTPAuth = true; // authentication enabled
                $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; // or 587
                $mail->IsHTML(true);
                $mail->Username = "tjapan268@gmail.com";
                $mail->Password = "tigubbujetlvwyqs";
                $mail->SetFrom("tjapan268@gmail.com");
                $mail->Subject = "Test";
                $randomNumber = mt_rand(10000, 99999);
                $_SESSION['code'] = $randomNumber;
                $mail->Body = "Chúng tôi đã nhận được yêu cầu đăng kí từ bạn. <br> Mã xác nhận của bạn là:  $randomNumber";
                $mail->AddAddress($email);
            $mail->send();
            header("Location: Login_resetpass.php");
           } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
        
    }
    $conn->close();  
    }

 if(isset($_POST['confirm-change'])){
               $email = $_SESSION['email'];
               $code=$_POST['code'];
                 $password=$_POST['passwordn'];
                 $passwordconf=$_POST['passwordconfn'];
                if($code!= $_SESSION['code'] ) {
                    $errorCode = 7; 
                    $_SESSION['login_error'] = $errorCode;
                    header("Location: Login_resetpass.php");
                    exit(); 
                }
                 else{
                    if (strlen($password) < 6) {
                        $errorCode = 4; 
                        $_SESSION['login_error'] = $errorCode;
                        header("Location: Login_resetpass.php");
                        exit(); 
                    }
                    else{
                     if( $password==$passwordconf){
                         $sql_doimk = " UPDATE user SET pass='$password' WHERE  email = '$email'";
                         $result_doi = $conn->query( $sql_doimk); 
                         if ( $result_doi) {
                              header("Location: Login.php");
                              $_SESSION['success'] =true;
                         } else {
                             echo "Đổi mật khẩu  thất bại!";
                         } 
                     }
                     else{
                        $errorCode = 5;
                        $_SESSION['login_error'] = $errorCode;
                        header("Location: Login_resetpass.php");
                        exit();    
                     }
                    }
                 }
                 
                 $conn->close();   
             }  
    ?>