<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>seek coding</title>
    <link rel="stylesheet" href="Login_style.css">

</head>

<body>
    <div class="full-page">
        <div class='navbar'>

            <div>
                <img src="./img/logo.jpg" alt="logo" class="logo">
            </div>
            
        </div>


        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login'>
                    <input type='text' class='input-field' placeholder='Email Id' required>
                    <input type='password' class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span class="rem-pass">Remember Password</span>
                    <button type='submit' class='submit-btn'>Log In</button>
                </form>

                <form id='register' class='input-group-register'>
                    <input type='text' class='input-field' placeholder='First Name' required>
                    <input type='text' class='input-field' placeholder='Last Name' required>
                    <input type='email' class='input-field' placeholder='Email Id' required>
                    <input type='password' class='input-field' placeholder='Enter Password' required>
                    <input type='password' class='input-field' placeholder='Confirm Password' required>
                    <input type='checkbox' class='check-box'><span class="rem-pass">I agree to the terms and conditions</span>

                    <button type='submit' class='submit-btn'>Register</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');
        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }
        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>

    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function (event) {

            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>
</body>

</html>