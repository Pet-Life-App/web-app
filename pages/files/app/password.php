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
                        Account Settings - Password & Security
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-xl px-4 mt-4">
    <div class="settings">
        <nav class="nav nav-borders">
            <a class="nav-link ms-0" href="/app/usersettings">Profile</a>
            <a class="nav-link" href="/app/billing">Billing</a>
            <a class="nav-link active" href="/app/password">Password & Security</a>
        </nav>
        <hr class="mt-0 mb-4">
    </div>
    <div class="row">
        <div class="col-lg-8">

            <div class="card mb-4">
                <div class="card-header bg-teal text-white">Change Password</div>
                <div class="card-body">
                    <form>

                        <div class="mb-3">
                            <label class="small mb-1" for="currentPassword">Current Password</label>
                            <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password">
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="newPassword">New Password</label>
                            <input class="form-control" id="newPassword" type="password" placeholder="Enter new password">
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                            <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password">
                        </div>
                        <button class="btn btn-primary" type="button">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header bg-teal text-white">Delete Account</div>
                <div class="card-body">
                    <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                    <button class="btn btn-danger-soft text-danger" type="button">I understand, delete my account</button>
                </div>
            </div>
        </div>
    </div>