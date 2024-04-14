@extends('front.layouts.master')

@section('css')

@endsection
@section('content')
    <!-- Page Header Start -->



     <section class="container mb-5 py-5">


        <div class="row">
            @forelse ($projects as $pro)

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset($pro->image) }}" class="card-img-top" alt="{{ $pro->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pro->title }}</h5>
                        </div>
                    </div>
                </div>


            @empty
            @endforelse
        </div>
     </section>
@endsection
