@extends('layouts.master')
@section('content');


    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col" style="z-index: -1000">
                    <div class="mine-image" style="background-image: url('{{$product->img}}');background-repeat: no-repeat;background-size:  contain, cover; background-position: center"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="border-bottom pb-4">
        <div class="container-fluid p-4">
            <div class="row">
                <div class="col-12">
                    <div class="desc-video p-2">
                        <h3 class="text-uppercase font-weight-bold">{{$product->title}}</h3>
                        <p>{!! $product->info !!}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="videoWrapper">
                        {!!$product->video!!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
