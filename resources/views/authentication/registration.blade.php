<!-- Create Account Modal (Step 1) -->
<div class="modal fade" id="createAccountModal" tabindex="-1" aria-labelledby="createAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="createAccountModalLabel">Create Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Step Indicator -->
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="step-circle active">1</div>
                    <div class="step-line"></div>
                    <div class="step-circle">2</div>
                    <div class="step-line"></div>
                    <div class="step-circle">3</div>
                    <div class="step-line"></div>
                    <div class="step-circle">4</div>
                </div>

                <!-- Step 1: Account Creation Requirement -->
                <h5 class="mt-4">Account Creation Requirement</h5>
                <p>
                    To create an account, you must connect your account to a family member buried in the Roman Catholic Cemetery.
                    Please search for your family member in the next step. If their record is not found, you can add their information.
                </p>

                <!-- Next Button -->
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAccountDeceasedModal" data-bs-dismiss="modal">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Account Deceased Modal (Step 2) -->
<div class="modal fade" id="createAccountDeceasedModal" tabindex="-1" aria-labelledby="createAccountDeceasedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="createAccountDeceasedModalLabel">Create Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Step Indicator -->
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="step-circle active">1</div>
                    <div class="step-line active"></div>
                    <div class="step-circle active">2</div>
                    <div class="step-line"></div>
                    <div class="step-circle">3</div>
                    <div class="step-line"></div>
                    <div class="step-circle">4</div>
                </div>

                <!-- Roman Catholic Cemetery Deceased Info Form -->
                <h5 class="mt-4">Roman Catholic Cemetery Deceased</h5>

                <form>
                    <!-- Deceased Name -->
                    <div class="mb-3 row align-items-center">
                        <label for="deceasedName" class="col-sm-5 col-form-label">Deceased Name</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="deceasedName" placeholder="Enter deceased name">
                        </div>
                    </div>

                    <!-- Deceased Birth Date -->
                    <div class="mb-3 row align-items-center">
                        <label for="deceasedBirthDate" class="col-sm-5 col-form-label">Deceased Birth Date</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="deceasedBirthDate">
                        </div>
                    </div>

                    <!-- Deceased Death Date -->
                    <div class="mb-3 row align-items-center">
                        <label for="deceasedDeathDate" class="col-sm-5 col-form-label">Deceased Death Date</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="deceasedDeathDate">
                        </div>
                    </div>

                <!-- Tomb Location with Tooltip and Find Deceased Button -->
<div class="mb-3 row align-items-center">
    <label for="tombLocation" class="col-sm-5 col-form-label">
        Tomb Location
        <i class="fa-solid fa-info-circle ms-2" 
           data-bs-toggle="tooltip" 
           data-bs-placement="bottom" 
           data-bs-html="true" 
           title="<strong>Tomb Location Format:</strong> Color - Tomb Floor.<br>
           <strong>Color:</strong> From the RCC cemetery map, showing sections by color.<br>
           <strong>Tomb Floor:</strong> The floor level of the tomb. If the tomb is a single-level tomb (i.e., no other tombs above or below it), it is on the 1st floor.<br>
           <strong>Example:</strong> 'Green - 3' means the tomb is in the green section and on the third floor.">
        </i>
    </label>
    <div class="col-sm-7">
        <input type="text" class="form-control" id="tombLocation" placeholder="Enter tomb location">
    </div>
</div>

<!-- Find Deceased Button -->
<div class="row">
    <div class="col-sm-12 d-flex justify-content-center">
        <button type="button" class="btn btn-secondary">Find Deceased</button>
    </div>
</div>


                </form>

                <!-- Back and Next Buttons -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#createAccountModal" data-bs-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAccountFamilyMemberModal" data-bs-dismiss="modal">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Create Account Deceased Family Member Modal (Step 3) -->
<div class="modal fade" id="createAccountFamilyMemberModal" tabindex="-1" aria-labelledby="createAccountFamilyMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="createAccountFamilyMemberModalLabel">Create Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Step Indicator -->
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="step-circle active">1</div>
                    <div class="step-line active"></div>
                    <div class="step-circle active">2</div>
                    <div class="step-line active"></div>
                    <div class="step-circle active">3</div>
                    <div class="step-line"></div>
                    <div class="step-circle">4</div>
                </div>

                <!-- Deceased Family Member Info Form -->
                <h5 class="mt-4">Deceased Family Member</h5>

                <form>
                    <!-- Deceased Name -->
                    <div class="mb-3 row align-items-center">
                        <label for="deceasedName" class="col-sm-5 col-form-label">Deceased Name</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="deceasedName" placeholder="Enter deceased name">
                        </div>
                    </div>

                    <!-- Deceased Birth Date -->
                    <div class="mb-3 row align-items-center">
                        <label for="deceasedBirthDate" class="col-sm-5 col-form-label">Deceased Birth Date</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="deceasedBirthDate">
                        </div>
                    </div>

                    <!-- Deceased Death Date -->
                    <div class="mb-3 row align-items-center">
                        <label for="deceasedDeathDate" class="col-sm-5 col-form-label">Deceased Death Date</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="deceasedDeathDate">
                        </div>
                    </div>

                    <!-- Tomb Location -->
                    <div class="mb-3 row align-items-center">
                        <label for="tombLocation" class="col-sm-5 col-form-label">
                            Tomb Location
                            <i class="fa-solid fa-info-circle ms-2" 
                               data-bs-toggle="tooltip" 
                               data-bs-placement="bottom" 
                               data-bs-html="true" 
                               title="<strong>Tomb Location Format:</strong> Color - Tomb Floor.<br>
                               <strong>Color:</strong> From the RCC cemetery map, showing sections by color.<br>
                               <strong>Tomb Floor:</strong> The floor level of the tomb. If the tomb is a single-level tomb (i.e., no other tombs above or below it), it is on the 1st floor.<br>
                               <strong>Example:</strong> 'Green - 3' means the tomb is in the green section and on the third floor.">
                            </i>
                        </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="tombLocation" placeholder="Enter tomb location">
                        </div>
                    </div>
                
                    <!-- Tomb Image with Tooltip -->
                    <div class="mb-3 row align-items-center">
                        <label for="tombImage" class="col-sm-5 col-form-label">
                            Tomb Image
                            <i class="fa-solid fa-info-circle ms-2" 
                               data-bs-toggle="tooltip" 
                               data-bs-placement="bottom" 
                               data-bs-html="true" 
                               title="Upload an image of the tomb if available. This will help verify the details.">
                            </i>
                        </label>
                        <div class="col-sm-7">
                            <input type="file" class="form-control" id="tombImage">
                        </div>
                    </div>

                    <!-- Relationship to the Deceased (Dropdown) -->
                    <div class="mb-3 row align-items-center">
                        <label for="relationshipToDeceased" class="col-sm-5 col-form-label">Relationship to the Deceased</label>
                        <div class="col-sm-7">
                            <select class="form-select" id="relationshipToDeceased">
                                <option value="relative1">Relative 1</option>
                                <option value="relative2">Relative 2</option>
                                <option value="relative3">Relative 3</option>
                            </select>
                        </div>
                    </div>
                </form>

                <!-- Back and Next Buttons -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#createAccountDeceasedModal" data-bs-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAccountInformationModal" data-bs-dismiss="modal">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Account - Account Information Modal (Step 4) -->
<div class="modal fade" id="createAccountInformationModal" tabindex="-1" aria-labelledby="createAccountInformationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="createAccountInformationModalLabel">Create Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Step Indicator -->
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <div class="step-circle active">1</div>
                    <div class="step-line active"></div>
                    <div class="step-circle active">2</div>
                    <div class="step-line active"></div>
                    <div class="step-circle active">3</div>
                    <div class="step-line active"></div>
                    <div class="step-circle active">4</div>
                </div>

                <!-- Account Information Form -->
                <h5 class="mt-4">Account Information</h5>

                <form>
                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password">
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                    </div>

                    <!-- Create Account Button -->
                    <div class="d-flex justify-content-center mt-4">
                        <!-- Create Account Button in Step 4 -->
<button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#successAccountModal" data-bs-dismiss="modal">Create Account</button>
                    </div>
                </form>

                <!-- Back Button -->
                <div class="d-flex justify-content-start mt-3">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#createAccountFamilyMemberModal" data-bs-dismiss="modal">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal (Account Creation) -->
<div class="modal fade" id="successAccountModal" tabindex="-1" aria-labelledby="successAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="successAccountModalLabel">
                    <i class="fa-solid fa-circle-check"></i> Success
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Your account has been created successfully!</p>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>