@extends('layouts.master')

@section('content')

    <section id="carousel" class="mt-2">
        <div class="carousel slide" data-ride="carousel" id="carousel-1" style="z-index: -5;">
            <div class="carousel-inner">
                @foreach ($slider as $slide)
                
                    <div class="carousel-item @if ($loop->first) active @endif  ">
                        <div class="jumbotron pulse animated hero-technology carousel-hero "
                            style="background-image: url('{{ $slide->getFirstMediaUrl('sliders') }}'); ">
                                <h1 class="hero-title">{{ $slide->info }}</h1>
                                <p class="hero-subtitle">{{ $slide->info }}</p>
                                </div>

                    </div>
                    @endforeach

            </div>

            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i
                        class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a
                    class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i
                        class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                @foreach ($slider as $slide)
                <li data-target="#carousel-1" data-slide-to="{{$loop->index}}" @if($loop->index) data-class="active" @endif></li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="pt-5">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-uppercase" data-aos="fade-up" data-aos-duration="400">
                        {{ lang('last_news') }}<br></h2>
                    <div class="d-flex flex-row justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-duration="600">
                        <div class="divider"></div><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512"
                            width="1em" height="1em" fill="currentColor" class="mx-2">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M16 319.1C16 245.9 118.3 89.43 166.9 19.3C179.2 1.585 204.8 1.585 217.1 19.3C265.7 89.43 368 245.9 368 319.1C368 417.2 289.2 496 192 496C94.8 496 16 417.2 16 319.1zM112 319.1C112 311.2 104.8 303.1 96 303.1C87.16 303.1 80 311.2 80 319.1C80 381.9 130.1 432 192 432C200.8 432 208 424.8 208 416C208 407.2 200.8 400 192 400C147.8 400 112 364.2 112 319.1z">
                            </path>
                        </svg>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel slide" data-ride="carousel" id="carousel-4">
            <div class="carousel-inner">
                @foreach ($posts as $post)
                    @if ($loop->index % 3 == 0)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <section class="card-section-imagia" style="color: white;background: rgba(0,0,0,0);">
                                <div class="container">
                                    <div class="row">
                    @endif

                    <div class="col-sm-6 col-md-4">
                       
                        <a href= {{route('theme.posts.show',$post)}}>
                        <div data-aos="fade-up" data-aos-duration="900" class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="flex-column front-imagia">
                                    <div class="cover-imagia cover-gradient"
                                        style="background: url('{{ $post->getFirstMediaUrl('posts') }}') center / cover no-repeat;">
                                    </div>
                                    <div class="content-imagia">
                                        <h3 class="text-left name-imagia text-uppercase text-dark my-2">
                                            {{ Str::limit($post->title, 25, '...') }}<br></h3>
                                        <p class="text-left subtitle-imagia my-4">{!! Str::limit($post->info, 100, '...') !!}<br></p>
                                        <div class="progres-bar mb-3"></div>
                                        <div><a class="d-flex flex-row justify-content-end" href="news.html">
                                                <p class="text-left subtitle-redmore">{{ lang('read_more') }}&nbsp;</p><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512"
                                                    width="1em" height="1em" fill="currentColor"
                                                    data-bss-hover-animate="wobble" class="mx-2 fa-lg">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z">
                                                    </path>
                                                </svg>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    @if ($loop->iteration % 3 == 0)
            </div>
        </div>
    </section>
    </div>
    @endif
    @endforeach
    </div>
    <div><a class="carousel-control-prev" href="#carousel-4" role="button" data-slide="prev"><span
                class="carousel-control-prev-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512"
                    width="1em" height="1em" fill="currentColor" class="text-dark fa-2x">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                    </path>
                </svg></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-4"
            role="button" data-slide="next"><span class="carousel-control-next-icon text-dark"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em" height="1em"
                    fill="currentColor" class="text-dark fa-2x">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                    </path>
                </svg></span><span class="sr-only text-dark">Next</span></a></div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-4" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-4" data-slide-to="1"></li>
    </ol>
    </div>
    </section>

    <section id="portfolio" class="py-5">
        <div class="intro">
            <h2 class="text-center text-white">{{ lang('porto') }}</h2>

        </div>
        <div class="container">

            <div class="filtr-controls text-center lead text-uppercase mb-4"><span
                    class="active d-inline-block mx-3 position-relative" data-filter="all">{{ lang('all') }} </span>

                @foreach ($parts as $part)
                    <span class="d-inline-block mx-3 position-relative"
                        data-filter="{{ $part->id }}">{{ $part->name }}&nbsp;</span>
                @endforeach

                {{-- <span 
                class="d-inline-block mx-3 position-relative" data-filter="2">App</span><span class="d-inline-block mx-3 position-relative" data-filter="3">icon&nbsp;</span> --}}
            </div>


            <div class="row filtr-container @if(app()->getLocale()=='ar') justify-content-end @endif" >
                @foreach ($works as $work)
                    <div  class="col-sm-12 col-md-6 col-lg-4 col-xl-4 filtr-item" data-category="{{ $work->part_id }}"><a
                            href="news.html">
                            <div class="card cards-shadown cards-hover" data-aos="flip-right" data-aos-duration="950">
                                <div class="card-header" style="background-image: url('{{ $work->img }}')">
                                    <div class="cardheader-text"></div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text sub-text-color">{{ $work->title }}</p>
                                    <p class="card-text cardbody-sub-text">{!! Str::limit($work->info, 25, '...') !!}</p>
                                </div>
                            </div>
                        </a></div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="partners">
        <h1 class="text-center text-uppercase" data-aos="fade-up" data-aos-duration="400">{{ lang('partner') }}</h1>

        <div class="client-section">
            <div class="container d-flex justify-content-center client-container">
                <div class="row d-flex justify-content-center client-row">
                    {{-- PAretner --}}
                    @foreach ($partners as $partner)
                        <div
                            class="col-6 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex justify-content-center align-items-start no-pad">
                            <div @if ($loop->iteration % 2 == 0) data-aos="slide-up" @elseif($loop->iteration % 3 == 0) data-aos="flip-up" @else data-aos="flip-left" @endif
                                @if ($loop->first) data-aos-duration="450" @else data-aos-delay="{{ $loop->iteration * 50 }}" @endif>
                                <a href="#"><img class="img-fluid client-image" src="{{ $partner->img }}">
                                    <h3 class="text-center client-heading">{{ $partner->name }}</h3>
                                </a></div>
                        </div>
                    @endforeach
                    {{--  --}}
                </div>

            </div>
        </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center text-uppercase font-weight-bold" data-aos="fade-up" data-aos-duration="400">
                        {{ lang('testimonial') }}<br></h4>
                    <div class="d-flex flex-row justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-duration="600">
                        <div class="divider"></div><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512"
                            width="1em" height="1em" fill="currentColor" class="mx-2">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M16 319.1C16 245.9 118.3 89.43 166.9 19.3C179.2 1.585 204.8 1.585 217.1 19.3C265.7 89.43 368 245.9 368 319.1C368 417.2 289.2 496 192 496C94.8 496 16 417.2 16 319.1zM112 319.1C112 311.2 104.8 303.1 96 303.1C87.16 303.1 80 311.2 80 319.1C80 381.9 130.1 432 192 432C200.8 432 208 424.8 208 416C208 407.2 200.8 400 192 400C147.8 400 112 364.2 112 319.1z">
                            </path>
                        </svg>
                        <div class="divider"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="carousel slide mb-5" data-ride="carousel" data-interval="10000" id="carousel-t">
            <div class="carousel-inner">

                @foreach ($testimonials as $testimonial)
                    <div class="carousel-item @if ($loop->first) active @endif">


                        <div class="col-9 text-center mx-auto testimonial-content">
                            <p class="text-center"><em>{{ $testimonial->info }}</em><br></p>
                            <p class="signature">{{ $testimonial->name }}</p>
                        </div>



                    </div>
                @endforeach



            </div>




            <div><a class="carousel-control-prev" href="#carousel-t" role="button" data-slide="prev"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em" height="1em"
                        fill="currentColor"
                        class="d-flex d-lg-flex justify-content-center align-items-center fa-lg text-dark">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                        </path>
                    </svg></a><a class="carousel-control-next" href="#carousel-t" role="button" data-slide="next"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em" height="1em"
                        fill="currentColor"
                        class="d-flex d-lg-flex justify-content-center align-items-center fa-lg text-dark">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                        </path>
                    </svg></a></div>
            <ol class="carousel-indicators">
                @foreach ($testimonials as $testimonial)
                    <li data-target="#carousel-t" data-slide-to="{{ $loop->iteration }}"
                        @if ($loop->first) class="active" @endif></li>

                    {{-- <li data-target="#carousel-t" data-slide-to="1"></li>
                <li data-target="#carousel-t" data-slide-to="2"></li> --}}
                @endforeach
            </ol>
        </div>
        <hr class="my-5">
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col col-md-8">
                    <div class="sectionTitle text-center">
                        <h2 data-aos="zoom-in">{{ lang('team') }}</h2>

                    </div>
                </div>
            </div>
        </div>
        <div class="carousel slide" data-ride="carousel" data-interval="10000" id="carousel-t-1">
            <div class="carousel-inner">

                @foreach ($teams as $team)
                    @if ($loop->index % 4 == 0)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <div class="container ">
                                <div class="row">
                    @endif
                    <div class="col-md-6 col-lg-3">
                        <div data-aos="fade-up" data-aos-duration="400" class="card card-style2 team-card p-3">
                            <div class="card_img"><img class="img-fluid img-full loaded"
                                    data-original={{ $team->img }} data-was-processed="true" src={{ $team->img }}
                                    alt="Team one">
                                <div class="hover-overlay effect-scale">
                                    <a class="overlay_icon" href="mailto:{{ $team->email }}"><i
                                            class="fa fa-google"></i></a>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 data-aos="fade-up" data-aos-duration="400" data-aos-delay="50"
                                    class="card-title text-uppercase"><span
                                        style="color: rgb(0, 86, 179);">{{ $team->name }}</span></h4><span
                                    data-aos="fade-up" data-aos-duration="400"
                                    data-aos-delay="100">{{ $team->job }}</span>
                            </div>
                        </div>
                    </div>




                    @if ($loop->iteration % 4 == 0)
            </div>

        </div>

        </div>
        @endif
        @endforeach

        </div>


        <div><a class="carousel-control-prev" href="#carousel-t-1" role="button" data-slide="prev"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em" height="1em"
                    fill="currentColor"
                    class="d-flex d-lg-flex justify-content-center align-items-center fa-lg text-dark">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z">
                    </path>
                </svg></a><a class="carousel-control-next" href="#carousel-t-1" role="button" data-slide="next"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em" height="1em"
                    fill="currentColor"
                    class="d-flex d-lg-flex justify-content-center align-items-center fa-lg text-dark">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                    </path>
                </svg></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-t-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-t-1" data-slide-to="1"></li>
        </ol>
        </div>
    </section>

@stop
