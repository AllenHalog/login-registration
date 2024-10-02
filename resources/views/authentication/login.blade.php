<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <!-- Show Password Checkbox -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="showPasswordCheck">
                        <label class="form-check-label" for="showPasswordCheck">Show Password</label>
                    </div>
                    <!-- Forgot Password Link -->
                    <div class="d-flex justify-content-between mb-3">
                        <div></div>
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" data-bs-dismiss="modal">Forgot Password?</a>
                    </div>
                    <!-- Login Button -->
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center w-100">Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#createAccountModal" class="text-decoration-none">Sign up</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Forgot Password Modal -->
<div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="forgotPasswordModalLabel">Forgot Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Step Indicator -->
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="step-circle active">1</div>
                    <div class="step-line"></div>
                    <div class="step-circle">2</div>
                </div>

                <!-- Reset Password Text -->
                <h5 class="mt-4">Reset your password</h5>
                <p>We will send a verification code to the email associated with your account. Please check your email to receive the code and reset your password.</p>

                <!-- Enter Code Input -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter code here" aria-label="Enter code">
                    <button class="btn btn-outline-secondary" type="button">Send Code</button>
                    <span class="input-group-text">
                        <!-- Tooltip for info icon -->
                        <i class="fa-solid fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="The verification code will expire after 10 minutes. If you do not receive the code within this time, please click 'Send Code' again."></i>
                    </span>
                </div>

                <!-- Back to Login and Verify Buttons -->
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">
                        <i class="fa-solid fa-chevron-left"></i> Back to Login
                    </a>
                    <!-- Open New Password Modal when Verify button is clicked -->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPasswordModal" data-bs-dismiss="modal">Verify</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- New Password Modal -->
<div class="modal fade" id="newPasswordModal" tabindex="-1" aria-labelledby="newPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="newPasswordModalLabel">Forgot Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Step Indicator -->
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="step-circle active">1</div>
                    <div class="step-line active"></div>
                    <div class="step-circle active">2</div>
                </div>

                <!-- Enter New Password Form -->
                <h5>Enter New Password</h5>
                <form>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                    </div>
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#successModal" data-bs-dismiss="modal">Save Changes</button>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">
                    <i class="fa-solid fa-chevron-left"></i> Back to Login
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="successModalLabel">
                    <i class="fa-solid fa-circle-check"></i> Success
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Your password has been successfully changed!</p>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>