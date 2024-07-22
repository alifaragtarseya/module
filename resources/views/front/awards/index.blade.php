@extends('front.layouts.master')
@section('css')

@endsection
@section('content')

<div class="container">
    <div class="row pt-5 mb-5">

        @foreach ($awards as $award)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="contact-info-box mb-30">
                    <div class="icon">
                        <img src="{{ asset($award->image) }}" class="w3-round-xlarge" style="width: 100%;height: 400px; object-fit: cover" alt="">
                    </div>
                    <h3>{{ $award->title }}</h3>
                    <p class="text-muted">
                        {!! $award->description !!}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection


