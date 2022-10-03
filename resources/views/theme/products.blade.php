@extends('layouts.master')
@section('content');
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center py-3">
                        <h1>{{lang('product')}} </h1>
                    </div>
                </div>
            </div>
            <div class="row">
@foreach($products as $product)
                <div class="col-md-4 pulse animated">
                    <div class="card-news">
                        <div class="card mb-3">
                            <img src="{{$product->img}}" class="card-img-top" alt="{{Str::limit($product->title,10,'...')}}">
                            <div class="card-body">
                                <h5 class="card-title">{{Str::limit($product->title,30,'...')}}</h5>
                                <p class="card-text">
                                    {!! Str::limit($product->info,100,'...') !!}
                                </p>
                                <p class="card-text"><a class="text-muted" href="{{route('theme.products.show',$product)}}">{{lang('read_more')}}
                                        <svg  class="mx-2 fa-lg" xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512"
                                            width="1em" height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z">
                                            </path>
                                        </svg></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

@endforeach

            </div>
        </div>
    </section>





@stop
