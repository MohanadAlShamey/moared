<!DOCTYPE html>

<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale()=='ar'?'rtl':'ltr'}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{setting()->name}}</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="icon" href="{{setting()->img}}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    @if(app()->getLocale()=='ar')
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-rtl.min.css')}}">
    @endif
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800,900&amp;subset=arabic,latin-ext&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,400i,600,700">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet"
          href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <style>
        .navbar-light .navbar-nav .nav-link {
            color: white;
        }

        .col-div-logo {
            border-radius: 20px;
            box-shadow: 5px 10px 17px 6px rgba(33, 37, 41, .16);
            height: 100%;
            background: url('{{asset('assets/img/Pattern.svg')}}') center/cover no-repeat;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet"
          href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    @stack('css')
</head>

<body>
@php
    $parts=App\Models\Part::limit(12)->latest()->get();
@endphp
{{-- Top Header --}}
<section class="top-hero pt-3 pb-1 text-white">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-xl ">
            <div class="container">
                <div class="d-xl-flex align-items-center align-content-center  justify-content-xl-center px-1 mx-2 ">
                    <a class="navbar-brand" data-bss-hover-animate="wobble" href="{{route('theme.index')}}"
                       style="background: url({{setting()->img}}) center / contain no-repeat;"></a></div>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="500"><a
                                class="nav-link nav-link" href="{{route('theme.index')}}">{{lang('home')}}</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">
                                {{lang('service')}}
                            </a>
                            @if($parts->count()>0)
                                <div class="dropdown-menu">
                                    @foreach($parts as $part)
                                        <a class="dropdown-item"
                                           href="{{route('theme.parts.show',$part)}}">{{$part->name}}</a>


                                    @endforeach

                                </div>
                                @endif
                        </li>


                        {{--                        --}}
                        {{--                        <li class="nav-item dropdown px-3" data-aos="fade-left" data-aos-duration="450"--}}
                        {{--                            data-aos-delay="50"><a class="dropdown-toggle nav-link" aria-expanded="false"--}}
                        {{--                                                   data-toggle="dropdown" href="#">{{lang('service')}}</a>--}}

                        {{--                            <div class="dropdown-menu" style="z-index: 10000">--}}
                        {{--                                @forelse($parts as $part)--}}
                        {{--                                    <a class="dropdown-item"--}}
                        {{--                                       href="{{route('theme.parts.show',$part)}}">{{$part->name}} </a>--}}
                        {{--                                @empty--}}
                        {{--                                    <a class="dropdown-item" href="#">No Data </a>--}}

                        {{--                                        --}}{{-- <a class="dropdown-item" href="#">__itemTwo </a>--}}
                        {{--                                        <a class="dropdown-item" href="#">__ItemThree </a> --}}
                        {{--                                        @endforelse--}}

                        {{--                            </div>--}}

                        {{--                        </li>--}}

                        {{--                        --}}
                        <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="200"><a
                                class="nav-link" href="{{route('theme.products.index')}}">{{lang('product')}}</a></li>

                        <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="200"><a
                                class="nav-link" href="{{route('theme.posts.index')}}">{{lang('blog')}}</a></li>
                        <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="250"><a
                                class="nav-link" href="{{route('theme.abouts.index')}}">{{lang('about_us')}}</a></li>
                        <li class="nav-item" data-aos="zoom-in" data-aos-delay="350"><a
                                class="nav-link text-uppercase px-4 donate"
                                href="{{route('theme.contacts.index')}}">{{lang('call_us')}}</a></li>
                        <li class="nav-item dropdown px-3" data-aos="fade-left" data-aos-duration="450"
                            data-aos-delay="50"><a class="dropdown-toggle nav-link" aria-expanded="false"
                                                   data-toggle="dropdown" href="#">{{lang('lang')}}
                                @if(app()->getLocale()=='en')
                                    <img src="{{asset('assets/img/usa_flag.webp')}}" width="20" class="img-sm" alt="">
                                @elseif(app()->getLocale()=='ar')
                                    <img src="{{asset('assets/img/sa_flag.png')}}" width="20" class="img-sm" alt="">
                                @else

                                    <img src="{{asset('assets/img/turkey_flag.png')}}" width="20" class="img-sm" alt="">
                                @endif

                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('change.lang',['lang'=>'en'])}}">{{lang('en')}}
                                    <img src="{{asset('assets/img/usa_flag.webp')}}" width="20" class="img-sm" alt="">
                                </a></a>
                                <a class="dropdown-item" href="{{route('change.lang',['lang'=>'ar'])}}">{{lang('ar')}}
                                    <img src="{{asset('assets/img/sa_flag.png')}}" width="20" class="img-sm" alt="">
                                </a>
                                <a class="dropdown-item" href="{{route('change.lang',['lang'=>'tr'])}}">{{lang('tr')}}
                                    <img src="{{asset('assets/img/turkey_flag.png')}}" width="20" class="img-sm" alt="">
                                </a>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- <div class="row">
             <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center pt-2"><a href="tel:{{setting()->phone}}">
                     <p class="d-xl-flex align-items-xl-center text-white">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="mx-2">
                             <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                             <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path>
                         </svg>{{lang('call_us')}} :{{setting()->phone}}</p>
                 </a></div>
             <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center pt-2"><a  href="mailto:{{setting()->email}}">
                     <p class="d-xl-flex align-items-xl-center text-white"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="mx-2">
                             <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                             <path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path>
                         </svg>&nbsp;{{setting()->email}}<br></p>
                 </a></div>
             <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center align-items-center mb-3">
                 <div class="dropdown language-drop"><button class="btn dropdown-toggle language-btn text-white" aria-expanded="false" data-toggle="dropdown" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="mx-2">
                             <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                             <path d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM51.68 295.1L83.41 301.5C91.27 303.1 99.41 300.6 105.1 294.9L120.5 279.5C132 267.1 151.6 271.1 158.9 285.8L168.2 304.3C172.1 313.9 182.8 319.1 193.5 319.1C208.7 319.1 219.6 305.4 215.2 290.8L209.3 270.9C204.6 255.5 216.2 240 232.3 240H234.6C247.1 240 260.5 233.3 267.9 222.2L278.6 206.1C284.2 197.7 283.9 186.6 277.8 178.4L261.7 156.9C251.4 143.2 258.4 123.4 275.1 119.2L292.1 114.1C299.6 113.1 305.7 107.8 308.6 100.6L324.9 59.69C303.4 52.12 280.2 48 255.1 48C141.1 48 47.1 141.1 47.1 256C47.1 269.4 49.26 282.5 51.68 295.1L51.68 295.1zM450.4 300.4L434.6 304.9C427.9 306.7 420.8 304 417.1 298.2L415.1 295.1C409.1 285.7 398.7 279.1 387.5 279.1C376.4 279.1 365.1 285.7 359.9 295.1L353.8 304.6C352.4 306.8 350.5 308.7 348.2 309.1L311.1 330.1C293.9 340.2 286.5 362.5 294.1 381.4L300.5 393.8C309.1 413 331.2 422.3 350.1 414.9L353.5 413.1C363.6 410.2 374.8 411.8 383.5 418.1L385 419.2C422.2 389.7 449.1 347.8 459.4 299.7C456.4 299.4 453.4 299.6 450.4 300.4H450.4zM156.1 367.5L188.1 375.5C196.7 377.7 205.4 372.5 207.5 363.9C209.7 355.3 204.5 346.6 195.9 344.5L163.9 336.5C155.3 334.3 146.6 339.5 144.5 348.1C142.3 356.7 147.5 365.4 156.1 367.5V367.5zM236.5 328.1C234.3 336.7 239.5 345.4 248.1 347.5C256.7 349.7 265.4 344.5 267.5 335.9L275.5 303.9C277.7 295.3 272.5 286.6 263.9 284.5C255.3 282.3 246.6 287.5 244.5 296.1L236.5 328.1zM321.7 120.8L305.7 152.8C301.7 160.7 304.9 170.4 312.8 174.3C320.7 178.3 330.4 175.1 334.3 167.2L350.3 135.2C354.3 127.3 351.1 117.6 343.2 113.7C335.3 109.7 325.6 112.9 321.7 120.8V120.8z"></path>
                         </svg>{{lang('lang')}}</button>
                     <div class="dropdown-menu"><a class="dropdown-item" href="{{route('change.lang',['lang'=>'en'])}}">{{lang('en')}}</a><a class="dropdown-item" href="{{route('change.lang',['lang'=>'ar'])}}">{{lang('ar')}}</a><a class="dropdown-item" href="{{route('change.lang',['lang'=>'tr'])}}">{{lang('tr')}}</a></div>
                 </div>
             </div>
             <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center">
                 <div class="py-2">
                     @if(setting()->face)
                     <a class="link-top px-2" href="{{setting()->face}}"><i class="fab fa-facebook-f fa-lg" data-bss-hover-animate="wobble"></i></a>
                     @endif
                     @if(setting()->instagram)
                     <a class="link-top px-2" href="{{setting()->instagram}}"><i class="fab fa-instagram fa-lg" data-bss-hover-animate="wobble"></i></a>
                     @endif
                     @if(setting()->twitter)
                     <a class="link-top px-2" href="{{setting()->twitter}}"><i class="fa fa-twitter fa-lg"
                         data-bss-hover-animate="wobble"></i></a>
                         @endif

                         @if(setting()->linkedin)
                     <a class="link-top px-2" href="{{setting()->linkedin}}"><i class="fab fa-linkedin-in fa-lg" data-bss-hover-animate="wobble"></i></a>
                     @endif
                 </div>
             </div>
         </div>--}}
    </div>
</section>

{{-- End-TopHeader --}}


{{--NavBar --}}

{{-- <section>
<div class="container-fluid">
         <nav class="navbar navbar-light navbar-expand-xl">
             <div class="container">
                 <div class="d-xl-flex align-items-center align-content-center justify-content-xl-center px-1 mx-2 @if(app()->getLocale()!='ar') border-right @else border-left @endif"><a class="navbar-brand" data-bss-hover-animate="wobble" href="{{route('theme.index')}}" style="background: url({{setting()->img}}) center / contain no-repeat;width: 75px;"></a></div><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                 <div class="collapse navbar-collapse" id="navcol-1">
                     <ul class="navbar-nav mx-auto">
                         <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="500"><a class="nav-link nav-link" href="{{route('theme.index')}}">{{lang('home')}}</a></li>



                         <li class="nav-item dropdown px-3" data-aos="fade-left" data-aos-duration="450"
                         data-aos-delay="50"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">{{lang('service')}}</a>

                             <div class="dropdown-menu">
                                 @forelse($parts as $part)
                                 <a class="dropdown-item" href="{{route('theme.parts.show',$part)}}">{{$part->name}} </a>
                                 @empty
                                 <div class="dropdown-menu"><a class="dropdown-item" href="#">No Data </a>

                                 --}}{{-- <a class="dropdown-item" href="#">__itemTwo </a>
                                 <a class="dropdown-item" href="#">__ItemThree </a> --}}{{--
                                 @endforelse

                             </div>

                         </li>
                         <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="200"><a class="nav-link" href="{{route('theme.works.index')}}">{{lang('product')}}</a></li>

                         <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="200"><a class="nav-link" href="{{route('theme.posts.index')}}">{{lang('news')}}</a></li>
                         <li class="nav-item px-3" data-aos="fade-left" data-aos-duration="450" data-aos-delay="250"><a class="nav-link" href="{{route('theme.abouts.index')}}">{{lang('about_us')}}</a></li>
                         --}}{{-- <li class="nav-item" data-aos="zoom-in" data-aos-delay="350"><a class="nav-link text-uppercase px-4 donate" href="{{route('theme.contacts.index')}}">{{lang('call_us')}}</a></li> --}}{{--
                     </ul>
                 </div>
             </div>
         </nav>
     </div>
     </section>--}}

{{--End NavBar --}}





@yield('content')


{{-- Footer --}}

<section class="pt-5">
    <footer id="myFooter">
        <div class="container-fluid">
            {{-- <div class="row text-center border-bottom py-3">
                <div class="col-12 col-lg-4 align-self-center">
                    <div class="p-2">
                        <div class="p-2"><span class="text-muted">Manager :</span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="fa-lg mx-2">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                                </svg>+90123456789</a></div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 align-self-center">
                    <div class="p-2">
                        <div class="p-2"><span class="text-muted">The sales :</span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="fa-lg mx-2">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                                </svg>+90123456789</a></div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 align-self-center">
                    <div class="p-2">
                        <div class="p-2"><span class="text-muted">Support :</span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="fa-lg mx-2">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                                </svg>+90123456789</a></div>
                    </div>
                </div>
            </div> --}}
            <div class="row text-center pt-3">
                <div class="col-12 col-lg-2 d-flex flex-column justify-content-center">
                    <div class="d-flex flex-column justify-content-center align-items-center p-2">
                        <div class="d-flex flex-row justify-content-start align-items-center p-2"><a
                                href="{{route('theme.index')}}">&nbsp;
                                <img src={{asset('assets/img/Logo-white-text.svg')}} width="170px"></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-lg-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Downloads<br></a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Other Links</a></li>
                    </ul>
                </div> --}}
                <div class="col-12 col-lg-2">
                    <h5>{{setting()->name}}</h5>
                    <ul>
                        <li><a href="{{route('theme.abouts.index')}}">{{lang('about_us')}}</a></li>
                        <li><a href="{{route('theme.index')}}">{{lang('service')}}<br></a></li>
                        <li><a href="{{route('theme.posts.index')}}">{{lang('blog')}}</a></li>
                    </ul>
                </div>
                <div class="col-3 col-lg-2 align-self-center mx-auto">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <span class="mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" width="24" height="24"
                                 viewBox="0 0 24 24"><path
                                    d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
                            {{setting()->address}}</span>
                        <span class="mt-2">
<svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" width="24" height="24" viewBox="0 0 24 24"><path
        d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/></svg>
                            {{setting()->email}}</span>

                        <span class="mt-2">

                            <svg width="24" fill="#FFFFFF" height="24" xmlns="http://www.w3.org/2000/svg"
                                 fill-rule="evenodd" clip-rule="evenodd"><path
                                    d="M16 22.621l-3.521-6.795c-.007.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.082-1.026-3.492-6.817-2.106 1.039c-1.622.845-2.298 2.627-2.289 4.843.027 6.902 6.711 18.013 12.212 18.117.575.011 1.137-.098 1.677-.345.121-.055 2.102-1.029 2.11-1.033zm4-5.621h-1v-13h1v13zm-2-2h-1v-9h1v9zm4-1h-1v-7h1v7zm-6-1h-1v-5h1v5zm-2-1h-1v-3h1v3zm10 0h-1v-3h1v3zm-12-1h-1v-1h1v1z"/></svg>
                            <span dir="ltr">{{setting()->phone}}</span></span>

                    </div>
                </div>
                <div class="col-12 col-lg-3 social-networks">
                    <div class="d-flex flex-column justify-content-center align-items-center contact-dev">
                        <div>
                            <a class="facebook" href="{{setting()->face}}"><i class="fa fa-facebook fa-lg"></i></a><a
                                class="twitter" href="{{setting()->twitter}}"><i class="fa fa-twitter fa-lg"></i></a><a
                                class="google fa-lg" href="{{setting()->youtube}}"><i
                                    class="fa fa-youtube fa-lg"></i></a>

                            <a class="linkedin fa-lg" href="{{setting()->linkedin}}"><i
                                    class="fa fa-linkedin fa-lg"></i>
                            </a>

                        </div>
                        {{-- <div class="mt-4"><a class="contact-us" href="{{route('theme.contacts.index')}}">{{lang('call_us')}}</a></div> --}}
                        <div class="mt-2 pt-5"><a href="#" onclick="&quot;goTo(0);return false;&quot;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em"
                                     fill="currentColor" data-bss-hover-animate="bounce" class="fa-2x">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M54.63 246.6L192 109.3l137.4 137.4C335.6 252.9 343.8 256 352 256s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25l-160-160c-12.5-12.5-32.75-12.5-45.25 0l-160 160c-12.5 12.5-12.5 32.75 0 45.25S42.13 259.1 54.63 246.6zM214.6 233.4c-12.5-12.5-32.75-12.5-45.25 0l-160 160c-12.5 12.5-12.5 32.75 0 45.25s32.75 12.5 45.25 0L192 301.3l137.4 137.4C335.6 444.9 343.8 448 352 448s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L214.6 233.4z"></path>
                                </svg>
                            </a></div>
                    </div>
                </div>
            </div>


        </div>
        <div class=" footer-copyright">

            <p><a style="font-weight:bold " href="https://mada-company.com">© 2022 Copyright Mada company |For
                    Programing
                    And Media Services </a></p>


        </div>
    </footer>
</section>

{{--End --Footer--}}


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>
<script src="{{asset('assets/js/script.min.js')}}"></script>

@if(session()->has('send-email'))
    <script defer>
        setTimeout(() => {
            Swal.fire({
                title: '{{lang('send_success')}}',
                icon: 'success',
                text: '{{lang('thanks')}}',

            });
        }, 100);
    </script>
@endif

@if(session()->has('send-email-invalid'))
    <script defer>
        setTimeout(() => {
            Swal.fire({
                title: '{{lang('send_error')}}',
                icon: 'error',


            });
        }, 100);
    </script>
@endif

@if(session()->has('error'))
    <script defer>
        setTimeout(() => {
            Swal.fire({
                title: '{{lang('error')}}',
                icon: 'error',


            });
        }, 100);
    </script>
@endif

</body>

</html>
