<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
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

        .signup-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
            text-align: center;
        }

        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 14px;
        }

        .name-group {
            display: flex;
            gap: 15px;
        }

        .name-group>div {
            flex: 1;
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

        input[type="date"] {
            color: #666;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .reset-button {
            flex: 1;
            padding: 12px;
            background-color: #e3f2fd;
            color: #0077ff;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .next-button {
            flex: 1;
            padding: 12px;
            background-color: #0077ff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .reset-button:hover {
            background-color: #d4e9fc;
        }

        .next-button:hover {
            background-color: #0066dd;
        }

        .login-text {
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        .login-link {
            color: #0077ff;
            text-decoration: none;
            font-weight: 500;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        .test {
            display: inline-flex;
            align-items: center;
            margin-right: 20px;
        }

        .test label {
            margin-right: 5px;
        }
    </style>

    <script type="text/javascript">
        function valid() {
            if (document.registration.password.value != document.registration.password_again.value) {
                alert("Password and Confirm Password Field do not match  !!");
                document.registration.password_again.focus();
                return false;
            }
            return true;
        }

        function validateAndSubmit() {
            if (valid()) {
                // If validation passes, allow form submission
                return true;
            } else {
                // If validation fails, prevent form submission
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="signup-container">
        <h1>Let's Get Started</h1>
        <p class="subtitle">Add Your Personal Details to Continue</p>

        <form name="registration" id="registration" method="post" action="./hms/registration.php" onSubmit="return validateAndSubmit();">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
            </div>

            <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" name="address" placeholder="Address" required>
            </div>

            <div class="form-group">
                <label>City:</label>
                <input type="text" class="form-control" name="city" placeholder="City" required>
            </div>

            <div class="form-group">
                <label class="block">
                    Gender
                </label>
                <div>
                    <div class="test">
                        <label for="rg-female">
                            Female
                        </label>
                        <input type="radio" id="rg-female" name="gender" value="female">
                    </div>
                    <div class="test">
                        <label for="rg-male">
                            Male
                        </label>
                        <input type="radio" id="rg-male" name="gender" value="male">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <span class="input-icon">
                    <input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()" placeholder="Email" required>
                    <i class="fa fa-envelope"></i> </span>
                <span id="user-availability-status1" style="font-size:12px;"></span>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <span class="input-icon">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <i class="fa fa-lock"></i> </span>
            </div>
            <div class="form-group">
                <label>Password Again:</label>
                <span class="input-icon">
                    <input type="password" class="form-control" id="password_again" name="password_again" placeholder="Password Again" required>
                    <i class="fa fa-lock"></i> </span>
            </div>

            <div class="form-actions">
                <button type="submit" class="next-button" id="submit" name="submit">
                    Submit <i class="fa fa-arrow-circle-right"></i>
                </button>
            </div>
        </form>

        <p class="login-text">
            Already have an account? <a href="Login.php" class="login-link">Login</a>
        </p>
    </div>
</body>

</html>