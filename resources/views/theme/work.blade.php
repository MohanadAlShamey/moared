@extends('layouts.master')
@section('content');


    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col" style="z-index: -1000">
                    <div class="mine-image" style="background-image: url('{{$work->img}}');background-repeat: no-repeat;background-size: cover;"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="border-bottom pb-4">
        <div class="container-fluid p-4">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="desc-video p-2">
                        <h3 class="text-uppercase font-weight-bold">{{$work->title}}</h3>
                        <p>{!! $work->info !!}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="videoWrapper">
                        {!!$work->video!!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
