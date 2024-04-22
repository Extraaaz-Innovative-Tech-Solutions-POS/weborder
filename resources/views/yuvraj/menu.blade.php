<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/regfood/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 09:07:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>ExtraaazPos || Web Ordering </title>
    <link rel="icon" type="image/png" href="yuvraj/images/favicon.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link  href="{{ asset('yuvraj/css/style.css')}}" rel="stylesheet">
    <link  href="{{ asset('yuvraj/css/all.min.css')}}" rel="stylesheet">
    <link  href="{{ asset('yuvraj/css/animate.css')}}" rel="stylesheet">
    <link  href="{{ asset('yuvraj/css/bootstrap.css')}}" rel="stylesheet">
    <link  href="{{ asset('yuvraj/css/custom_spacing.css')}}" rel="stylesheet">
    <link  href="{{ asset('yuvraj/css/jquery.exzoom.css')}}" rel="stylesheet">
    <link  href="{{ asset('yuvraj/css/nice-select.css')}}" rel="stylesheet">
    <link  href="{{ asset('yuvraj/css/responsive.css')}}" rel="stylesheet">
    <link  href="{{ asset('yuvraj/css/slick.css')}}" rel="stylesheet">
    <link  href="{{ asset('yuvraj/css/venobox.css')}}" rel="stylesheet"> 
</head>

<body>

    <!--=============================
        TOPBAR START
    ==============================-->
    <section class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-6 col-md-8">
                    <ul class="topbar_info d-flex flex-wrap d-none d-sm-flex">
                        <li><a href="mailto:example@gmail.com"><i class="fas fa-envelope"></i> info@extraaazpos.com
                        </a>
                        </li>
                        <li class="d-none d-md-block"><a href="callto:123456789"><i class="fas fa-phone-alt"></i>
                            +91 77090 40699</a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-sm-6 col-md-4">
                    <ul class="topbar_icon d-flex flex-wrap">
                        <li><a href="https://www.facebook.com/ExtraaazPOS"><i class="fab fa-facebook-f"></i></a> </li>
                        <li><a href="https://twitter.com/ExtraaazPos"><i class="fab fa-twitter"></i></a> </li>
                        <li><a href="https://www.linkedin.com/company/extraaazpos/"><i class="fab fa-linkedin-in"></i></a> </li>
                        <li><a href="https://maps.app.goo.gl/BzJYraqDU7VgHo2S8"><i class="fa fa-map-marker"></i></a> </li>
                        <li><a href="https://www.instagram.com/extraaazpos/"><i class="fa fa-instagram"></i></a> </li>
                        

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TOPBAR END
    ==============================-->


    <!--=============================
        MENU START
    ==============================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/')}}">
                <img src="yuvraj/images/logo.png" alt="RegFood" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon_bar"></i>
                <i class="far fa-times close_icon_close"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ url('/')}}">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/menu')}}">menu</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="droap_menu">
                            <li><a href="{{ url('/menu_details')}}">menu details</a></li>
                             <li><a href="{{ url('/cart_view')}}">cart view</a></li>
                            <li><a href="{{ url('/check_out')}}">checkout</a></li>
                            <li><a href="{{ url('/payment')}}">payment</a></li>
                             <li><a href="{{ url('/404')}}">404/Error</a></li>
                             <!-- <li><a href="sign_in.html">sign in</a></li> -->
                            <!-- <li><a href="sign_up.html">sign up</a></li> -->
                            <!-- <li><a href="forgot_password.html">forgot password</a></li> -->
                         </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact')}}">contact</a>
                    </li>
                </ul>
                <ul class="menu_icon d-flex flex-wrap">
                    <li>
                        <a class="cart_icon" href="cart_view.html"><i class="fas fa-shopping-basket"></i>
                            <span>05</span></a>
                    </li>
                    <li>
                        <a href="dashboard.html"><i class="fas fa-user"></i></a>
                    </li>
                   
                    
                    
                </ul>
              
            </div>
        </div>
    </nav>
    <!--=============================
        MENU END
    ==============================-->


    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url(yuvraj/images/counter_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>Popular Foods menu</h1>
                    <ul>
                        <li><a href="{{ url('/')}}">home</a></li>
                        <li><a href="#">menu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        MENU PAGE START
    ==============================-->
    <section class="menu_page mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <form class="menu_search_area">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="menu_search">
                            <input type="text" placeholder="search...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="menu_search">
                            <div class="select_area">
                                <select class="select_js">
                                    <option value="AL">default shorting</option>
                                    <option value="">short by popularity</option>
                                    <option value="">short by avarage rating</option>
                                    <option value="">short by latest</option>
                                    <option value="">short by low to high</option>
                                    <option value="">short by high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="menu_search">
                            <button class="common_btn" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="yuvraj/images/menu2_img_1.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">Biryani</a>
                            <a class="title" href="menu_details.html">Hyderabadi biryani</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>24</span>
                            </p>
                            <h5 class="price">$65.00 <del>$90.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="yuvraj/images/menu2_img_2.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">Chicken</a>
                            <a class="title" href="menu_details.html">Daria Shevtsova</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>30</span>
                            </p>
                            <h5 class="price">$80.00</h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="yuvraj/images/menu2_img_3.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">burger</a>
                            <a class="title" href="menu_details.html">Spicy Burger</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>17</span>
                            </p>
                            <h5 class="price">$100.00 <del>$110.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="yuvraj/images/menu2_img_4.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">dressert</a>
                            <a class="title" href="menu_details.html">Fried Chicken</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>22</span>
                            </p>
                            <h5 class="price">$99.00</h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="yuvraj/images/menu2_img_5.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">kabab</a>
                            <a class="title" href="menu_details.html">Mozzarella Sticks</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>72</span>
                            </p>
                            <h5 class="price">$75.00</h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="yuvraj/images/menu2_img_6.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">kacchi</a>
                            <a class="title" href="menu_details.html">Popcorn Chicken</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>57</span>
                            </p>
                            <h5 class="price">$69.00 <del>$80.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="yuvraj/images/menu2_img_7.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">noodles</a>
                            <a class="title" href="menu_details.html">Chicken Wings</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>43</span>
                            </p>
                            <h5 class="price">$79.00 <del>$90.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="yuvraj/images/menu2_img_8.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">grill</a>
                            <a class="title" href="menu_details.html">Onion Rings</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>62</span>
                            </p>
                            <h5 class="price">$110.00</h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CART POPUT START -->
    <div class="cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="cart_popup_img">
                            <img src="yuvraj/images/popup_cart_img.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                        checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
                                    <label class="form-check-label" for="small">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                    <label class="form-check-label" for="coca-cola">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up">
                                    <label class="form-check-label" for="7up">
                                        7up <span>+ $15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li><a class="common_btn" href="#">add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->

    <!--=============================
        MENU PAGE END
    ==============================-->


    <!--=============================
        FOOTER START
    ==============================-->
    <footer style="background: url(yuvraj/images/footer_bg.jpg);">
        <div class="footer_overlay pt_100 xs_pt_70 pb_100 xs_pb_20">
            <div class="container wow fadeInUp" data-wow-duration="1s">
                <div class="row justify-content-between">
                    <div class="col-xxl-4 col-lg-4 col-sm-9 col-md-7">
                        <div class="footer_content">
                            <a class="footer_logo" href="{{ url('/')}}">
                                <img src="yuvraj/images/footer_logo.png" alt="RegFood" class="img-fluid w-100">
                            </a>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere delectus qui
                                placeat inventore consectetur repellendus optio debitis.</span>
                            <ul class="social_link d-flex flex-wrap">
                                <li><a href="https://www.facebook.com/ExtraaazPOS"><i class="fab fa-facebook-f"></i></a> </li>
                        <li><a href="https://twitter.com/ExtraaazPos"><i class="fab fa-twitter"></i></a> </li>
                        <li><a href="https://www.linkedin.com/company/extraaazpos/"><i class="fab fa-linkedin-in"></i></a> </li>
                        <li><a href="https://maps.app.goo.gl/BzJYraqDU7VgHo2S8"><i class="fa fa-map-marker"></i></a> </li>
                        <li><a href="https://www.instagram.com/extraaazpos/"><i class="fa fa-instagram"></i></a> </li>
                        
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-sm-5 col-md-5">
                        <div class="footer_content">
                            <h3>Short Link</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Our Service</a></li>
                                <li><a href="#">gallery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-sm-6 col-md-5 order-md-4">
                        <div class="footer_content">
                            <h3>Help Link</h3>
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-9 col-md-7 order-lg-4">
                        <div class="footer_content">
                            <h3>contact us</h3>
                            <p class="info"><i class="fas fa-phone-alt"></i> +91 77090 40699</p>
                            <p class="info"><i class="fas fa-envelope"></i> info@extraaazpos.com                            </p>
                            <p class="info"><i class="far fa-map-marker-alt"></i> Office No. 105 & 106, Vikas Galaxy, Sanewadi Badlapur - West District Thane - 421503</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom d-flex flex-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_bottom_text">
                            <p>Copyright ©<b> ExtraaazPOS</b> 2024. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=============================
        FOOTER END
    ==============================-->


    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
        SCROLL BUTTON END 
    ==============================-->

     <!--jquery library js-->
     <script src="{{ asset('yuvraj/js/jquery-3.6.0.min.js')}}"></script>
    <!--bootstrap js-->
     <script src="{{asset('yuvraj/js/bootstrap.bundle.min.js')}}"></script>

    <!--font-awesome js-->
     <script src="{{asset('yuvraj/js/Font-Awesome.js')}}"></script>
    <!-- slick slider -->
     <script src="{{asset('yuvraj/js/Font-Awesome.js')}}"></script>

    <!-- isotop js -->
     <script src="{{asset('yuvraj/js/isotope.pkgd.min.js')}}"></script>

    <!-- counter up js -->
     <script src="{{asset('yuvraj/js/jquery.waypoints.min.js')}}"></script>

     <script src="{{asset('yuvraj/js/jquery.countup.min.js')}}"></script>

    <!-- nice select js -->
     <script src="{{asset('yuvraj/js/jquery.nice-select.min.js')}}"></script>

    <!-- venobox js -->
     <script src="{{asset('yuvraj/js/venobox.min.js')}}"></script>

    <!-- sticky sidebar js -->
     <script src="{{asset('yuvraj/js/sticky_sidebar.js')}}"></script>

    <!-- wow js -->
     <script src="{{asset('yuvraj/js/wow.min.js')}}"></script>

    <!-- ex zoom js -->
     <script src="{{asset('yuvraj/js/jquery.exzoom.js')}}"></script>

      <script src="{{asset('yuvraj/js/slick.min.js')}}"></script>

    <!--main/custom js-->
     <script src="{{asset('yuvraj/js/main.js')}}"></script>

</body>


<!-- Mirrored from html.themefax.com/regfood/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 09:08:13 GMT -->
</html>