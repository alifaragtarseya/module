@extends('front.layouts.master')
@section('css')
<style>
    .text-muted {
        color: #1f1c1c !important
    }
</style>
@endsection
@section('content')

<div class="container">
    <div class="row pt-5 mb-5">

            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="contact-info-box mb-30">
                    <div class="icon ">
                        <img src="{{ asset($resource->image) }}" class="w3-round-xlarge" style="width: 100%;height: 450px; object-fit: cover" alt="">
                    </div>
                    <br>
                    <h3><b>{{ $resource->title }}</b></h3>
                    <p class="text-muted">
                        {{ $resource->short_description }}
                    </p>
                    <div>
                        {!! $resource->description !!}
                    </div>

                </div>
            </div>
    </div>
</div>


@endsection


