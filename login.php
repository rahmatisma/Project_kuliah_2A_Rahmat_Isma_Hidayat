<?php 
    session_start();
    if(!empty($_SESSION['username_TLine'])){
        header('location: Home');
    }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- bosstrap -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="/assets/css/login.css">

</head>

<body>
    <div class="container" id="container">
        <!-- Form Registasi-->
        <div class="form-container sign-up-container">
            <form action="proses/proses_regis.php" method="post" class="needs-validation" novalidate>
                <div class="header-form">
                    <h3>Create Account</h3>
                    <span>or use your email for registration</span>
                </div>
                <div class="form-floating">
                    <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Name" required>
                    <label for="floatingInput">Name</label>
                    <div class="invalid-feedback">
                        Masukan yg bener
                    </div>
                </div>
                <div class="form-floating">
                    <input name="username" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                    <div class="invalid-feedback">
                        Masukkan Email yang valid.
                    </div>
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    <div class="invalid-feedback">
                        Masukkan Password.
                    </div>
                </div>
                <button type="submit" name="regis_validate" value="123">Sign Up</button>
                <p class="button-responsive">Anda sudah memiliki Akun? <a href="#"><b id="signInRes">Sign In</b></a></p>
            </form>
        </div>
        <!-- Akhir Form Registasi -->

        <!-- Form Login -->
        <div class="form-container sign-in-container">
            <form action="proses/proses_login.php" method="post" class="needs-validation" novalidate>
                <img style="width: 75px; height: auto; margin: 20px ;" src="/assets/img/logo/Logo login.png" alt="">
                <div class="header-form">
                    <h3>Sign in</h3>
                    <span>or use your account</span>
                </div>
                <div class="form-floating">
                    <input name="username" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                    <div class="invalid-feedback">
                        Masukkan Email yang valid.
                    </div>
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    <div class="invalid-feedback">
                        Masukkan Password.
                    </div>
                </div>
                <button type="submit" name="login_validate" value="123" >Sign In</button>
                <p class="button-responsive">Anda belum memiliki akun? <a href="#"><b id="signUpRes">Register</b></a></p>
            </form>
        </div>
        <!-- Akhir form login -->

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h3>Welcome Back!</h3>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h3>Hello, Friend!</h3>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Js Login -->
    <script src="/assets/js/login.js"></script>
    <!-- js Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>

</html>