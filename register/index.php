<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register For Pet Life!</title>
    <link rel="stylesheet" href="/assets/css/background.css?<?php echo filemtime(__DIR__ . "/../assets/css/background.css") ?>">
    <link rel="stylesheet" href="/assets/css/theme.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>

<body class="bg-teal" data-new-gr-c-s-check-loaded="8.899.0" data-gr-ext-installed="">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">

                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">

                                    <form id="register-form">

                                        <div class="row gx-3">
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter first name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputLastName">Last Name</label>
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter last name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter email address">
                                        </div>

                                        <div class="row gx-3">
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputMobile">Moblie Number</label>
                                                    <input class="form-control" id="inputMobile" type="phone" placeholder="Enter Moblie Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputCity">Town</label>
                                                    <input class="form-control" id="inputCity" type="text" placeholder="Enter Your Town">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gx-3">
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Enter password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputConfirmPassword">Confirm
                                                        Password</label>
                                                    <input class="form-control" id="inputConfirmPassword" type="password" placeholder="Confirm password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=".offset-md-3">
                                            <input type="submit" class="btn btn-teal btn-block" value="Create Account">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a class="text-teal" href="/login">Have an account? Go to
                                            login</a></div>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        let cities = [];

        // https://stackoverflow.com/questions/46155/how-can-i-validate-an-email-address-in-javascript
        const checkEmail = (email) => {
            return String(email)
                .toLowerCase()
                .match(
                    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
        };
        // Has to have at least one number and one uppercase and lowercase letter and 6 characters long
        const checkPassword = (password) => {
            return String(password)
                .match(
                    /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/
                )
        }

        $(() => {
            $.getJSON("/assets/nz-cities.json", function(citiesList) {
                //filter out only city name

                citiesList.forEach(function(city) {
                    cities.push(city.city);
                })

                console.log(cities);
            });

            $("#inputCity").autocomplete({
                source: cities
            });

            $("#register-form").on("submit", function(e) {
                e.preventDefault();
                $("#register-form input").removeClass("is-invalid")
                // Inputs for register 
                let first_name = $("#inputFirstName").val()
                let last_name = $("#inputLastName").val()
                let email_address = $("#inputEmailAddress").val()
                let mobile_number = $("#inputMobile").val()
                let city = $("#inputCity").val()
                let password = $("#inputPassword").val()
                let confirm_password = $("#inputConfirmPassword").val()

                if (checkEmail(email_address)) {
                    $("[for='inputEmailAddress']").html("Email")

                } else {
                    $("#register-form #inputEmailAddress").addClass("is-invalid")
                    $("[for='inputEmailAddress']").html("Email - Does not meet rquired format")
                }

                if (checkPassword(password)) {
                    $("[for='inputPassword']").html("Password")
                } else {
                    $("[for='inputPassword']").html("Password - Password must be 6 or more characters long and contain one number and one uppercase and lowercase letter")
                    $("#register-form #inputPassword").addClass("is-invalid")
                }

                if (password == confirm_password) {
                    $("[for='inputConfirmPassword']").html("Confirm Password")
                } else {
                    $("#register-form #inputConfirmPassword").addClass("is-invalid")
                    $("[for='inputConfirmPassword']").html("Confirm Password - Passwords do not match")
                }

                if (mobile_number.length > 0 && mobile_number.length < 15) {
                    $("[for='inputMobile']").html("Mobile Number");
                } else {
                    $("#register-form #inputMobile").addClass("is-invalid");
                    $("[for='inputMobile']").html("Mobile Number - Is not valid");
                }

                if (first_name.length > 0 && first_name.length < 36) {
                    $("[for='inputMobile']").html("First Name")
                } else {
                    $("#register-form #inputFirstName").addClass("is-invalid")
                    $("[for='inputFirstName']").html("First Name - Is not valid")
                }

                if (last_name.length > 0 && last_name.length < 36) {
                    $("[for='inputlastName']").html("Last Name")
                } else {
                    $("#register-form #inputLastName").addClass("is-invalid")
                    $("[for='inputLastName']").html("Last Name - Is not valid")
                }

                if (!$("input").hasClass("is-invalid")) {
                    $.post("/api/register.php", {
                        first_name,
                        last_name,
                        email_address,
                        mobile_number,
                        city,
                        password,
                        confirm_password
                    }, (data) => {
                        if (data.success) {
                            window.location = "/app";
                        } else {
                            data.errors.forEach((error) => {
                                alert(error.text);
                            })
                        }
                    })
                }
            })
        })
    </script>
</body>