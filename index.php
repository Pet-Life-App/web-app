<!DOCTYPE html>
<html lang="en">
<style>
    .d-flex .nav-link.active {
        color: teal;
        border-color: teal;
    }
    .d-flex .sidenav-light .sidenav-menu .nav-link.active.active {
        color: teal;
    }
</style>

<head>
    <link href="https://kit-pro.fontawesome.com/releases/v6.1.0/css/pro.min.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Life</title>
    <link rel="stylesheet" href="/assets/css/theme.css">
    <link rel="stylesheet" href="/assets/css/stuffwork.css?<?php echo filemtime("assets/css/stuffwork.css") ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="d-flex">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav-menu-heading">General</div>
                    <a class="nav-link active" href="/">
                    <i class="fa-regular fa-house me-3" ></i>
                        Home
                    </a>
                    <div class="sidenav-menu-heading">Your Pet</div>
                    <a class="nav-link" href="/pets">
                    <i class="fa-regular fa-paw me-3"></i>
                        Your Pets
                    </a>
                    <a class="nav-link" href="/walks">
                    <i class="fa-regular fa-dog-leashed me-3"></i>
                        Walks
                    </a>
                    <a class="nav-link" href="/petshop">
                    <i class="fa-regular fa-shop me-3"></i>
                        Pet Shops
                    </a>
                    <a class="nav-link" href="/vet">
                    <i class="fa-regular fa-syringe me-3"></i>
                        Vet Visits
                    </a>
                    <div class="sidenav-menu-heading">User</div>
                    <a class="nav-link" href="/settings">
                    <i class="fa-regular fa-gear me-3"></i>
                        Settings
                    </a>
                    <a class="nav-link" href="/usersettings">
                    <i class="fa-regular fa-user-gear me-3"></i>
                        Account
                    </a>
                    <div class="sidenav-menu-heading">Documentation</div>
                    <a class="nav-link" href="/">
                    <i class="fa-regular fa-circle-question me-3"></i>
                        FAQ
                    </a>
                    <a class="nav-link" href="/">
                    <i class="fa-regular fa-file-lines me-3"></i>
                        Terms and Conditions
                    </a>

                </div>
            </div>

            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title">Valerie Luna</div>
                </div>
            </div>
        </nav>
        <main></main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/assets/js/scripts.js?<?php echo filemtime("assets/js/scripts.js") ?>"></script>
    <script src="https://cdn.rawgit.com/visionmedia/page.js/master/page.js"></script>
    <script src="/assets/js/router.js?<?php echo filemtime("assets/js/router.js") ?>"></script>
</body>

</html>