<!-- resources/views/partials/header.blade.php -->
<!-- First Row: Title and Icons -->
<div class="container-fluid py-2">
    <div class="d-flex justify-content-between align-items-center">
        <a class="navbar-brand fs-4 fw-bold" href="#">ROMAN CATHOLIC CEMETERY</a>
        <div class="d-flex align-items-center">
            <!-- Map Icon -->
            <a href="" class="icon-link me-3"><i class="fa-regular fa-map"></i></a>
            <!-- Search Icon -->
            <a href="#" class="icon-link me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa-solid fa-magnifying-glass"></i></a>
            <!-- User Icon with Dropdown -->
            <div class="dropdown">
                <a href="#" class="icon-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-regular fa-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#createAccountModal">Create an Account</a></li>
                </ul>
            </div>

            <!-- Include Login Modal -->
            @include('authentication.login')
            @include('authentication.registration')
           
        </div>
    </div>
</div>

<!-- First Horizontal Line -->
<hr class="m-0">

<!-- Second Row: Navigation and "Partner with Us" -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Home</a>
                </li>
                <!-- Cemetery Info Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="cemeteryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cemetery Info
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="cemeteryDropdown">
                        <li><a href="" class="dropdown-item" href="#">About RCC</a></li>
                        <li><a href="" class="dropdown-item" href="#">Available Services</a></li>
                        <li><a href="" class="dropdown-item" href="#">Available Tomb</a></li>
                        <li><a class="dropdown-item" href="#">Burial Space</a></li>
                        <li><a href="" class="dropdown-item" href="#">Tomb & Niche Care</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Cost Estimator</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Remains Removal Info</a></li>
                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Burial Info</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">List of Funerals</a></li>
                                <li><a class="dropdown-item" href="#">Funeral Homes</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">Flower Delivery</a></li>
                        <li><a class="dropdown-item" href="#">Tomb Cleaning</a></li>
                        <li><a class="dropdown-item" href="#">Tomb Request</a></li>
                    </ul>
                </li>
            </ul>
            <a href="#" class="btn btn-outline-dark">Partner with Us</a>
        </div>
    </div>
</nav>
<!-- Second Horizontal Line -->
<hr class="m-0">