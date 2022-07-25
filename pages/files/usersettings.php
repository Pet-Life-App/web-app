<title>Settings</title>
<style>
    .settings .nav-link.active {
        color: teal;
        border-color: teal;
    }
</style>
<div class="page-header page-header-compact page-header-dark border-bottom bg-teal mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg></div>
                        Account Settings - Profile
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xl px-4 mt-4">
    <div class="settings">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="/settings">Profile</a>
            <a class="nav-link" href="/billing">Billing</a>
            <a class="nav-link" href="/password">Password & Security</a>
        </nav>
        <hr class="mt-0 mb-4">
    </div>
    <div class="row">
        <div class="col-xl-4">

            <div class="card mb-4 mb-xl-0">
                <div class="card-header bg-teal text-white">Profile Picture</div>
                <div class="card-body text-center">

                    <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="">

                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

                    <button class="btn btn-teal" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">

            <div class="card mb-4">
                <div class="card-header bg-teal text-white">Account Details</div>
                <div class="card-body">
                    <form>
                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Phone Number</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your phone number" value="Start Bootstrap">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">City</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                            </div>
                        </div>

                        <button class="btn btn-teal" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>