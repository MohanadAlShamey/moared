@extends('layouts.master')
@section('content')

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

    @stop