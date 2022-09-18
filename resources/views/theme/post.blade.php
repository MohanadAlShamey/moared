@extends('layouts.master')
@section('content');
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <hr>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="mine-image" style="background-image: url('{{$post->img}}');background-repeat: no-repeat;background-size: cover;"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="border-bottom pb-4">
        <div class="container-fluid p-4">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="desc-video p-2">
                        <h3 class="text-uppercase font-weight-bold">{{$post->title}}</h3>
                        <p>{!! $post->info !!}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="videoWrapper">
                        {!!$post->video!!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop