 <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js')}}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/tinymce/tiny-init.js') }}"></script>


    <script>
        function changeImage(element, id) {
           if (element.files && element.files[0]) {
               var reader = new FileReader();
               console.log(id);
               reader.onload = function(e) {
                   $('.image-preview-' + id).attr('src', e.target.result);
               }

               reader.readAsDataURL(element.files[0]);
           }
       }


       $(".image").change(function () {
           if (this.files && this.files[0]) {
               var reader = new FileReader();

               reader.onload = function (e) {
                   $('.image-preview').attr('src', e.target.result);
               }

               reader.readAsDataURL(this.files[0]);
           }
       });

       @if(count($errors) > 0)
       var list = {!! $errors !!};
       var values = '';
       jQuery.each(list, function (key, value) {
            values += value + '\n';
        });
               $(document).ready(function() {
               swal.fire({
                   // title: 'Error!',
                   text: values,
                   icon: 'error'
               });
           });


       @endif
       $(document).ready(function() {
           $('.select2').select2();
       });

       $(document).on('click', '.btn-modal', function(e) {
           e.preventDefault();
           var container = $(this).data('container');
           $.ajax({
               url: $(this).data('href'),
               dataType: 'html',
               success: function(result) {
                   $(container)
                       .html(result)
                       .modal('show');
               },
           });
       });


   </script>

@yield('js')
