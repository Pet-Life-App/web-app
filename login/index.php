<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!</title>
    <link rel="stylesheet" href="/assets/css/background.css?<?php echo filemtime(__DIR__."/../assets/css/background.css") ?>">
    <link rel="stylesheet" href="/assets/css/theme.css">
</head>

<body class="bg-teal">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">

                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">Login</h3>
                                </div>
                                <div class="card-body">

                                    <form>

                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter email address">
                                        </div>

                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Enter password">
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" value="">
                                                <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small text-teal" href="auth-password-basic.html">Forgot Password?</a>
                                            <a class="btn btn-teal" href="/">Login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a class="text-teal" href="/register">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright © Pet Life 2022</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            ·
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <div>
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >

</body>

</html>