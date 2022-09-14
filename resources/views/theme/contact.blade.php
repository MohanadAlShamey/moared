@extends('layouts.master')

    <section class="top-hero pt-3 pb-1 text-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center pt-2"><a href="#">
                        <p class="d-xl-flex align-items-xl-center text-white">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="mx-2">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path>
                            </svg>Call us :+90 123 456 78 90</p>
                    </a></div>
                <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center pt-2"><a href="#">
                        <p class="d-xl-flex align-items-xl-center text-white"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="mx-2">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path>
                            </svg>&nbsp;info@almawaridtech.com<br></p>
                    </a></div>
                <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center align-items-center mb-3">
                    <div class="dropdown language-drop"><button class="btn dropdown-toggle language-btn text-white" aria-expanded="false" data-toggle="dropdown" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="mx-2">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM51.68 295.1L83.41 301.5C91.27 303.1 99.41 300.6 105.1 294.9L120.5 279.5C132 267.1 151.6 271.1 158.9 285.8L168.2 304.3C172.1 313.9 182.8 319.1 193.5 319.1C208.7 319.1 219.6 305.4 215.2 290.8L209.3 270.9C204.6 255.5 216.2 240 232.3 240H234.6C247.1 240 260.5 233.3 267.9 222.2L278.6 206.1C284.2 197.7 283.9 186.6 277.8 178.4L261.7 156.9C251.4 143.2 258.4 123.4 275.1 119.2L292.1 114.1C299.6 113.1 305.7 107.8 308.6 100.6L324.9 59.69C303.4 52.12 280.2 48 255.1 48C141.1 48 47.1 141.1 47.1 256C47.1 269.4 49.26 282.5 51.68 295.1L51.68 295.1zM450.4 300.4L434.6 304.9C427.9 306.7 420.8 304 417.1 298.2L415.1 295.1C409.1 285.7 398.7 279.1 387.5 279.1C376.4 279.1 365.1 285.7 359.9 295.1L353.8 304.6C352.4 306.8 350.5 308.7 348.2 309.1L311.1 330.1C293.9 340.2 286.5 362.5 294.1 381.4L300.5 393.8C309.1 413 331.2 422.3 350.1 414.9L353.5 413.1C363.6 410.2 374.8 411.8 383.5 418.1L385 419.2C422.2 389.7 449.1 347.8 459.4 299.7C456.4 299.4 453.4 299.6 450.4 300.4H450.4zM156.1 367.5L188.1 375.5C196.7 377.7 205.4 372.5 207.5 363.9C209.7 355.3 204.5 346.6 195.9 344.5L163.9 336.5C155.3 334.3 146.6 339.5 144.5 348.1C142.3 356.7 147.5 365.4 156.1 367.5V367.5zM236.5 328.1C234.3 336.7 239.5 345.4 248.1 347.5C256.7 349.7 265.4 344.5 267.5 335.9L275.5 303.9C277.7 295.3 272.5 286.6 263.9 284.5C255.3 282.3 246.6 287.5 244.5 296.1L236.5 328.1zM321.7 120.8L305.7 152.8C301.7 160.7 304.9 170.4 312.8 174.3C320.7 178.3 330.4 175.1 334.3 167.2L350.3 135.2C354.3 127.3 351.1 117.6 343.2 113.7C335.3 109.7 325.6 112.9 321.7 120.8V120.8z"></path>
                            </svg>Languages</button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">English</a><a class="dropdown-item" href="#">Arabic</a><a class="dropdown-item" href="#">Turkey</a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center">
                    <div class="py-2"><a class="link-top px-2" href="#"><i class="fab fa-facebook-f fa-lg" data-bss-hover-animate="wobble"></i></a><a class="link-top px-2" href="#"><i class="fab fa-instagram fa-lg" data-bss-hover-animate="wobble"></i></a><a class="link-top px-2" href="#"><i class="fab fa-google-plus-g fa-lg" data-bss-hover-animate="wobble"></i></a><a class="link-top px-2" href="#"><i class="fab fa-linkedin-in fa-lg" data-bss-hover-animate="wobble"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-xl">
                <div class="container">
                    <div class="d-xl-flex align-items-center align-content-center justify-content-xl-center px-1 mx-2 border-right"><a class="navbar-brand" data-bss-hover-animate="wobble" href="index.html" style="background: url(&quot;assets/img/Logo.svg&quot;) center / contain no-repeat;width: 75px;"></a></div><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="500"><a class="nav-link nav-link" href="index.html">Home</a></li>
                            <li class="nav-item dropdown px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="50"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">Services</a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">__itemOne </a><a class="dropdown-item" href="#">__itemTwo </a><a class="dropdown-item" href="#">__ItemThree </a></div>
                            </li>
                            <li class="nav-item dropdown px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="100"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">Products</a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">__itemOne </a><a class="dropdown-item" href="#">__itemTwo </a><a class="dropdown-item" href="#">__ItemThree </a></div>
                            </li>
                            <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="150"><a class="nav-link" href="#">Blog</a></li>
                            <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="200"><a class="nav-link" href="#">News</a></li>
                            <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="250"><a class="nav-link" href="about.html">About Us</a></li>
                            <li class="nav-item" data-aos="zoom-in" data-aos-delay="350"><a class="nav-link text-uppercase px-4 donate" href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section class="getintouch">
        <div class="container modern-form px-3">
            <div class="text-center">
                <h4 style="color: #212529;font-size: 45px;">Get in touch</h4>
            </div>
            <hr class="modern-form__hr">
            <div class="modern-form__form-container">
                <form>
                    <div class="form-row">
                        <div class="col-12 col-md-6 col-contact">
                            <div class="form-group modern-form__form-group--padding-r"><input class="form-control input input-tr" type="text" placeholder="First Name">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-contact">
                            <div class="form-group modern-form__form-group--padding-l"><input class="form-control input input-tr" type="text" placeholder="Email">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group modern-form__form-group--padding-t"><textarea class="form-control input modern-form__form-control--textarea" placeholder="Message"></textarea>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col text-center"><button class="btn pulse animated submit-now" type="submit">Submit Now</button></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="assets/js/script.min.js"></script>
    @stop