<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barangay Raw-an Management System</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>landing-page/assets/img/gallery/logo-icon.png">
    <meta name="theme-color" content="#ffffff">

    <link href="<?= base_url(); ?>landing-page/assets/css/theme.css" rel="stylesheet" />
</head>


<body>

    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-light opacity-85" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="index.html"><img class="d-inline-block align-top img-fluid" src="<?= base_url(); ?>landing-page/assets/img/gallery/logo-icon.png" alt="" width="50" /><span class="text-theme font-monospace fs-4 ps-2">BRMS</span></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#header">Home</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#services">Services</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#About">About</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#map">Map</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#request">Track My Request</a></li>
                    </ul>
                    <a href="<?= base_url() ?>authenticationcontroller/login"><button class="btn btn-outline-success" type="submit">Account</button></a>
                </div>
            </div>
        </nav>
        <section class="py-0" id="header">
            <div class="bg-holder d-none d-md-block" style="background-image:url(<?= base_url(); ?>landing-page/assets/img/illustrations/hero-header.png);background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-md-none" style="background-image:url(<?= base_url(); ?>landing-page/assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center min-vh-75 min-vh-lg-100">
                    <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center">
                        <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Welcome to <br class="d-block d-lg-block" />Barangay Raw-an</h1>
                        <p class="mb-4 fs-1">Lala, Lanao del Norte <br /> Open Hours of Barangay: Monday to Friday (8am-5pm) <br /> barangayrawan@gmail.com / 221-1212 </p>
                        <a class="btn btn-outline-success" href="#About" role="button">About Us</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" id="services">
            <div class="bg-holder d-none d-sm-block" style="background-image:url(<?= base_url(); ?>landing-page/assets/img/illustrations/bg.png);background-position:top left;background-size:225px 755px;margin-top:-17.5rem;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto text-center mb-3">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Services</h5>
                        <p class="mb-5">Online Documents Offered</p>
                    </div>
                </div>
                <div class="row flex-center h-100">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-md-4 mb-5">
                                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="<?= base_url(); ?>landing-page/assets/img/icons/document.webp" height="60" alt="" />
                                        <div class="card-body">
                                            <h6 class="fw-bold fs-1 heading-color">Barangay Certificate</h6>
                                            <p class="mt-3 mb-md-0 mb-lg-2">View the requirements needed for Barangay Clerance and acquire online now.</p>
                                            <a class="btn btn-lg btn-success" href="<?= base_url() ?>login-resident" role="button">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="<?= base_url(); ?>landing-page/assets/img/icons/document.webp" height="60" alt="" />
                                        <div class="card-body">
                                            <h6 class="fw-bold fs-1 heading-color">Barangay Clearance</h6>
                                            <p class="mt-3 mb-md-0 mb-lg-2">View the requirements needed for Barangay Clerance and acquire online now.</p>
                                            <a class="btn btn-lg btn-success" href="<?= base_url() ?>login-resident" role="button">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="<?= base_url(); ?>landing-page/assets/img/icons/document.webp" height="60" alt="" />
                                        <div class="card-body">
                                            <h6 class="fw-bold fs-1 heading-color">Barangay <br /> Indigency</h6>
                                            <p class="mt-3 mb-md-0 mb-lg-2">View the requirements needed for Barangay Clerance and acquire online now.</p>
                                            <a class="btn btn-lg btn-success" href="<?= base_url() ?>login-resident" role="button">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="py-0" id="About">
            <!-- <div class="bg-holder" style="background-image:url(assets/img/illustrations/how-it-works.png);background-position:center bottom;background-size:cover;">
        </div> -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Left side with photo slider -->
                    <div class="col-md-6 image-container">
                        <!-- Add your photo slider here (e.g., using Bootstrap Carousel) -->
                        <div id="photoCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url(); ?>landing-page/assets/img/gallery/img1.jpg" class="d-block w-100" alt="Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url(); ?>landing-page/assets/img/gallery/img2.jpg" class="d-block w-100" alt="Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url(); ?>landing-page/assets/img/gallery/img3.jpg" class="d-block w-100" alt="Image 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url(); ?>landing-page/assets/img/gallery/img4.jpg" class="d-block w-100" alt="Image 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url(); ?>landing-page/assets/img/gallery/img5.jpg" class="d-block w-100" alt="Image 5">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url(); ?>landing-page/assets/img/gallery/img6.jpg" class="d-block w-100" alt="Image 6">
                                </div>

                                <!-- Add more items as needed -->
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <!-- Right side with text -->
                    <div class="col-md-6">
                        <div class="text-container">
                            <h2>About Us</h2>
                            <p>
                                Welcome to our website! We are dedicated to providing quality services and products.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Vision</h2>
                                    <p>
                                        Our vision is to ...
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h2>Mission</h2>
                                    <p>
                                        Our mission is to ...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="py-8">
            <div class="container-lg">
                <div class="row flex-center">
                    <div class="col-12 col-lg-10 col-xl-12">
                        <div class="bg-holder" style="background-image:url(<?= base_url(); ?>landing-page/assets/img/illustrations/testimonial-bg.png);background-position:top left;background-size:120px 83px;">
                        </div>
                        <!--/.bg-holder-->

                        <h6 class="fs-3 fs-lg-4 fw-bold lh-sm">Meet Our <br />Barangay Officials</h6>
                    </div>
                    <div class="carousel slide pt-3" id="carouselExampleDark" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card h-100 shadow">
                                            <div class="card-body my-3">
                                                <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url(); ?>landing-page/assets/img/gallery/boy.jpg" width="150" alt="" />

                                                </div>
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Jeanry March Flores</h5>
                                                    <p class="fw-normal text-black">Brgy. Kagawad</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card h-100 shadow">
                                            <div class="card-body my-3">
                                                <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url(); ?>landing-page/assets/img/gallery/boy.jpg" width="150" alt="" />

                                                </div>
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Johnny Caneda</h5>
                                                    <p class="fw-normal text-black">Brgy. Kagawad</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card h-100 shadow">
                                            <div class="card-body my-3">
                                                <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url(); ?>landing-page/assets/img/gallery/boy.jpg" width="150" alt="" />

                                                </div>
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Rogelio Nisnisan</h5>
                                                    <p class="fw-normal text-black">Brgy. Kagawad</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card h-100 shadow">
                                            <div class="card-body my-3">
                                                <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url(); ?>landing-page/assets/img/gallery/girl.jpg" width="150" alt="" />

                                                </div>
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Sarah Dolaota</h5>
                                                    <p class="fw-normal text-black">Brgy. Kagawad</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card h-100 shadow">
                                            <div class="card-body my-3">
                                                <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url(); ?>landing-page/assets/img/gallery/girl.jpg" width="150" alt="" />

                                                </div>
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Meregin Secuya</h5>
                                                    <p class="fw-normal text-black">Brgy. Kagawad </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card h-100 shadow">
                                            <div class="card-body my-3">
                                                <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url(); ?>landing-page/assets/img/gallery/boy.jpg" width="150" alt="" />

                                                </div>
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Hanz Honculada</h5>
                                                    <p class="fw-normal text-black">Brgy. Kagawad</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card h-100 shadow">
                                            <div class="card-body my-3">
                                                <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url(); ?>landing-page/assets/img/gallery/boy.jpg" width="150" alt="" />

                                                </div>
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Jet Malazarte</h5>
                                                    <p class="fw-normal text-black">Brgy. Kagawad</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card h-100 shadow">
                                            <div class="card-body my-3">
                                                <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url(); ?>landing-page/assets/img/gallery/girl.jpg" width="150" alt="" />

                                                </div>
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">Nova Mae Pangasian</h5>
                                                    <p class="fw-normal text-black">Brgy. Kagawad</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card h-100 shadow">
                                            <div class="card-body my-3">
                                                <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url(); ?>landing-page/assets/img/gallery/boy.jpg" width="150" alt="" />

                                                </div>
                                                <div class="flex-1 align-items-center pt-2">
                                                    <h5 class="mb-0 fw-bold text-success">John Rhoger Aragon</h5>
                                                    <p class="fw-normal text-black">SK Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-3 px-sm-6 px-md-0 px-lg-5 px-xl-4">
                            <div class="col-12 position-relative"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="map">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7901.977602559228!2d123.778922!3d8.00009095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32544b2390389855%3A0x18da586c0ffda48!2sRaw-an%2C%20Lala%2C%20Lanao%20del%20Norte!5e0!3m2!1sen!2sph!4v1708668162820!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->

        <section id="request">
            <div class="col-lg-9 mx-auto text-center mb-3">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Track Requested Document</h5>
            </div>
            <div class="d-flex justify-content-center">

                <form class="d-flex" style="width: 60%;">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->



        <section class="py-0" id="contact">

            <div class="row flex-center py-5">
                <div class="col-12 col-sm-8 col-md-6 text-center text-md-start"> <a class="text-decoration-none" href="#"><img class="d-inline-block align-top img-fluid" src="<?= base_url(); ?>landing-page/assets/img/gallery/logo-icon.png" alt="" width="40" /><span class="text-theme font-monospace fs-3 ps-2">BRMS</span></a></div>

            </div>
            </div>
        </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?= base_url(); ?>landing-page/vendors/@popperjs/popper.min.js"></script>
    <script src="<?= base_url(); ?>landing-page/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>landing-page/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?= base_url(); ?>landing-page/assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
</body>

</html>