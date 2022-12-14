@extends('layouts.master')

@section('content')


<section>

    <div class="container-fluid">
        <div class="row">
            <div class="col" style="z-index: -1000">
                <div class="mine-image" style="background: url({{setting()->ImgAbout}}) center / cover no-repeat;"></div>
            </div>
        </div>
    </div>
</section>
<section class="border-bottom pb-4">
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col">
                <div class="desc-video p-2">
                    <h3 class="text-uppercase font-weight-bold">{{lang('about_us')}}</h3>

                            @if(setting()->info!=null)
                    <p>{!!setting()->info!!}</p>
                    @endif


                </div>
            </div>
        </div>
    </div>
</section>


@stop
