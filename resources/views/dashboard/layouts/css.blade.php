 <!-- Core CSS -->
@if (app()->getLocale() == 'ar')
<link rel="stylesheet" href="{{ asset('assets/vendor/css/core-rtl.css') }}" class="template-customizer-core-css" />

@else
<link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />

@endif
 <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
 <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

 <!-- Vendors CSS -->
 <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

 <!-- Page CSS -->
 <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
 <!-- Helpers -->
 <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
 <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
 <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
 <script src="{{ asset('assets/js/config.js') }}"></script>


 <link rel="stylesheet" href="{{ asset('assets/select2/css/select2.min.css') }}">
 <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" />


 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

</style>
