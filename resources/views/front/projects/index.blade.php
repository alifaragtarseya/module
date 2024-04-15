@extends('front.layouts.master')
@section('css')
    <style>
        /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 9999; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        }
        @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        }

        .close:hover,
        .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
        }

        .team-item{
            border-radius: 8px;
            background: rgba(217, 217, 217, 0.30);
            /* Main-shadow */
            box-shadow: 0px 10px 8px 0px rgba(0, 0, 0, 0.08);
            padding:10px;
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->



     <section class="container mb-5 py-5">
        <div class="row">
            @foreach ($projects as $project)
            <div class="col-lg-4 col-md-6 pt-4 wow zoomInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="{{ route('front.project.show', $project->id) }}">
                    <div class=" rounded">
                        <img class="img-fluid rounded-3 " id="myImg-{{ $project->id }}"  src="{{ $project->image }}" style="height: 350px;width: 100%;" alt="">

                        <b>{{ $project->title }}</b>
                    </div>
                </a>
            </div>
            @endforeach
        </div>


     </section>

         <!-- The Modal -->
<div id="myModal" class="modal">

    <!-- The Close Button -->
   <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
  </div>
    <!-- About End -->
@endsection
@section('js')
<script>
    // Get the modal

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    function showImag(id){
        var modal = document.getElementById("myModal");
        var img = document.getElementById(id);
        var modalImg = document.getElementById('img01');
        // img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = img.src;
        // }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }
     }
    </script>
@endsection
