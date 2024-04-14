@extends('front.layouts.master')
@section('css')
    <style>
        .image {
            background-size: contain;
            background-position: center;
            width: 100%;
            height: 400px;
            background-repeat: no-repeat;
            border-radius: 10px;
        }
    </style>
@endsection
@section('content')
  


     <section class="container pt-5 mb-5 py-5">
        <div class="row">
            <div class="col-12">
                <div class="image" style="background-image: url({{ asset($project->image) }})"></div>
            </div>

            
            <div class="desc pt-4">
                {!! $project->description !!}
            </div>
            <div class="desc pt-4">
               <div class="row">
                @foreach ($project->images as $item)
                    <div class="col-md-12 pt-4 text-center">
                        <img src="{{ asset($item->image) }}"  alt="">
                    </div>
                @endforeach
               </div>
            </div>
        </div>
     </section>
@endsection
