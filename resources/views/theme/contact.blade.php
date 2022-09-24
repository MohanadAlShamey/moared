@extends('layouts.master')

@section('content')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h1 class="text-center pulse animated text-uppercase">{{lang('contact_us')}}<br></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5">
        <div class="container">
            <div class="row text-center pt-3">
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-duration="400">
                    <div class="p-2 ">
                        <h3 clas="">{{lang('address')}}</h3>
                        <hr>
                        <p class="p-2 d-flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor" class="fa-lg mr-2">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path>
                            </svg>{{setting()->address}} </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-duration="400" data-aos-delay="50">
                    <div class="p-2">
                        <h3>{{lang('email_support')}}</h3>
                        <hr>
                        <div>
                            <p class="p-2 d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fa-lg mr-2">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path>
                                </svg>
                                <span class="mx-2 d-inline-block" ><a href="mailto:{{setting()->email}}">{{setting()->email}}</a></span></p>
                            <p class="p-2 d-flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fa-lg mr-2">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path>
                                </svg><span class="mx-2 d-inline-block"><a href="mailto:{{setting()->sub_email}}">{{setting()->sub_email}}</a></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">
                    <div class="p-2">
                        <h3><span style="font-style: normal !important;">{{lang('support')}}</span><br></h3>
                        <hr>
                        <p class="p-2 d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp"
                                 viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                            <span class="mx-2 d-inline-block" dir="ltr">{{setting()->phone}}</span>
                        </p>
                        <p class="p-2 d-flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#fab932"><path d="M8 2c-1.105 0-2 .896-2 2v14.678c-.001 2.213 2.503 3.322 6.005 3.322 3.499 0 5.995-1.106 5.995-3.322v-14.678c0-1.104-.895-2-2-2h-8zm4 18c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1zm4-4h-8v-10h8v10zm4-7.459c.496.495.803 1.179.803 1.935.001.755-.305 1.44-.8 1.936l.814.814c.703-.704 1.139-1.677 1.139-2.751-.001-1.075-.436-2.046-1.141-2.749l-.815.815zm1.427-1.426c.86.859 1.393 2.046 1.393 3.358.001 1.313-.532 2.502-1.391 3.363l.834.835c1.074-1.075 1.738-2.56 1.737-4.198 0-1.639-.664-3.121-1.737-4.193l-.836.835zm-18.241.611c-.705.703-1.14 1.674-1.141 2.748s.435 2.047 1.139 2.751l.814-.814c-.495-.496-.8-1.18-.8-1.936s.307-1.44.802-1.935l-.814-.814zm-1.447-1.447c-1.075 1.073-1.738 2.554-1.739 4.194-.001 1.638.664 3.124 1.737 4.198l.834-.835c-.859-.861-1.391-2.05-1.39-3.363 0-1.312.531-2.5 1.392-3.358l-.834-.836z"/></svg>
                        <span class="mx-2 d-inline-block" dir="ltr">{{setting()->sub_phone}}</span>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <hr class="my-5">
                    <div class="text-center p-3" data-aos="zoom-in">
                        <div class="py-2 px-4 social-div1">
                            <div class="text-center p-3 social-div"><span>{{lang('meet_us')}}</span></div>
                            <div class="py-2 social-div">
                                <a class="link-top-1 px-2" href="{{setting()->face}}">
                                    <i style="color:#005cbf" class="fab fa-facebook-f fa-2x" data-bss-hover-animate="wobble"></i></a>
                                <a class="link-top-1 px-2" href="{{setting()->instagram}}">
                                    <i style="color:#721c24" class="fab fa-instagram fa-2x" data-bss-hover-animate="wobble"></i></a>
                                <a class="link-top-1 px-2" href="{{setting()->twitter}}">
                                    <i style="color:#0f6674" class="fab fa-twitter fa-2x" data-bss-hover-animate="wobble"></i></a>
                                <a class="link-top-1 px-2" href="{{setting()->linkedin}}">
                                    <i style="color:#0000ff" class="fab fa-linkedin-in fa-2x" data-bss-hover-animate="wobble"></i></a>
                                <a class="link-top-1 px-2" href="{{setting()->youtube}}">
                                    <i style="color:#cc0000" class="fab fa-youtube fa-2x" data-bss-hover-animate="wobble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6" data-bss-hover-animate="pulse">
                    <div class="d-flex flex-column justify-content-center align-items-center col-div-logo mb-5">
                        <div><img class="img-fluid" src="{{setting()->img}}" width="300"></div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6" data-bss-hover-animate="pulse">
                    <div class="p-4 form-div">
                        <div class="modern-form__form-container">
                            <div class="mb-5">
                                <h3><span style="color: rgb(0, 0, 0);">{{lang('have_question')}}</span><br><span style="color: rgb(0, 0, 0);">{{lang('write_us')}}</span><br></h3>
                            </div>
                            <form action="{{route('theme.contacts.store')}}" method="post">
                                @method('post')
                                @csrf
                                <div class="form-row">
                                    <div class="col-12 col-contact">
                                        <div class="form-group modern-form__form-group--padding-r">
                                            <input name="name" class="form-control input input-tr"  value="{{session('name')}}" type="text" placeholder="{{lang('full_name')}}">
                                            <div class="border border-gray border-1 mb-1"></div>
                                            <input  name="phone" class="form-control input input-tr" value="{{session('phone')}}"  type="text" placeholder="{{lang('phone_number')}}">
                                            <div class="border border-gray border-1 mb-1"></div>
                                            <input name="email" class="form-control input input-tr"  value="{{session('email')}}" type="email" placeholder="{{lang('email_address')}}">
                                            <div class="border border-gray border-1 mb-1"></div>
                                            <textarea name="msg" class="form-control input modern-form__form-control--textarea"  placeholder="Message">{{session('msg')}}</textarea>
                                            <div class="border border-gray border-1 mb-1"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">{{lang('send')}}</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="mb-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-21by9">
                        {!! setting()->map !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@push('css')
    <style>

        input:active,input:focus,.form-control:focus{
            outline: none !important;
            box-shadow: none;
        }
    </style>
@endpush
