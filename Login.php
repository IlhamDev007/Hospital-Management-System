<?php
session_start();
error_reporting(0);
include("./hms/include/config.php");
if (isset($_POST['submit'])) {
    $ret = mysqli_query($con, "SELECT * FROM users WHERE email='" . $_POST['username'] . "' and password='" . md5($_POST['password']) . "'");
    $num = mysqli_fetch_array($ret);
    if ($num > 0) {
        $extra = "dashboard.php"; //
        $_SESSION['login'] = $_POST['username'];
        $_SESSION['id'] = $num['id'];
        $host = $_SERVER['HTTP_HOST'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 1;
        // For stroing log if user login successfull
        $log = mysqli_query($con, "insert into userlog(uid,username,userip,status) values('" . $_SESSION['id'] . "','" . $_SESSION['login'] . "','$uip','$status')");
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("location:http://$host$uri/hms/$extra");
        exit();
    } else {

        $ret = mysqli_query($con, "SELECT * FROM receptionist WHERE email='" . $_POST['username'] . "' and password='" . md5($_POST['password']) . "'");
        $num = mysqli_fetch_array($ret);
        if ($num > 0) {
            $extra = "receptionist/dashboard.php"; //
            $_SESSION['login'] = $_POST['username'];
            $_SESSION['id'] = $num['id'];
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            header("location:http://$host$uri/hms/$extra");
            exit();
        } else {

            $ret = mysqli_query($con, "SELECT * FROM doctors WHERE docEmail='" . $_POST['username'] . "' and password='" . md5($_POST['password']) . "'");
            $num = mysqli_fetch_array($ret);
            if ($num > 0) {
                $extra = "doctor/dashboard.php";
                $_SESSION['dlogin'] = $_POST['username'];
                $_SESSION['id'] = $num['id'];
                $uip = $_SERVER['REMOTE_ADDR'];
                $status = 1;
                $log = mysqli_query($con, "insert into doctorslog(uid,username,userip,status) values('" . $_SESSION['id'] . "','" . $_SESSION['dlogin'] . "','$uip','$status')");
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                header("location:http://$host$uri/hms/$extra");
                exit();
            } else {

                $ret = mysqli_query($con, "SELECT * FROM admin WHERE username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'");
                $num = mysqli_fetch_array($ret);
                if ($num > 0) {
                    $extra = "admin/dashboard.php"; //
                    $_SESSION['login'] = $_POST['username'];
                    $_SESSION['id'] = $num['id'];
                    $host = $_SERVER['HTTP_HOST'];
                    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    header("location:http://$host$uri/hms/$extra");
                    exit();
                } else {
                    $_SESSION['errmsg'] = "Invalid username or password";
                    $extra = "index.php";
                    $host  = $_SERVER['HTTP_HOST'];
                    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    header("location:http://$host$uri/$extra");
                    exit();
                }
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 14px;
        }

        .input-container {
            position: relative;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #0077ff;
        }

        .email-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #0077ff;
            font-size: 18px;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #0077ff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            margin: 20px 0;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #0066dd;
        }

        .signup-text {
            color: #666;
            font-size: 14px;
        }

        .signup-link {
            color: #0077ff;
            text-decoration: none;
            font-weight: 500;
        }

        .signup-link:hover {
            text-decoration: underline;
        }

        .form-group a {
            text-decoration: none;
            color: #0077ff;
            font-size: 14px;
            display: inline-block;
            margin-top: 10px;
        }

        .form-group a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Welcome Back!</h1>
        <p class="subtitle">Login with your details to continue</p>

        <form method="post" action="Login.php">
            <div class="form-group">
                <label for="email">Username:</label>
                <div class="input-container">
                    <input type="text" id="username" name="username" placeholder="Username">
                    <span class="email-icon">✉️</span>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <div class="input-container">
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <a href="#">
                    Forgot Password ?
                </a>
            </div>

            <button type="submit" name="submit" class="login-button">Login</button>
        </form>

        <p class="signup-text">
            Don't have an account? <a href="Signup.php" class="signup-link">Sign Up</a>
        </p>
    </div>
</body>

</html>