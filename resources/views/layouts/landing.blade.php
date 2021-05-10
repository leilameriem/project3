<!DOCTYPE html>
<html lang="en">
 @include('front.head')
 
    <body id="page-top">
        <!-- Navigation-->
        @include('front.nav')
        <!-- Masthead-->
         @include('front.header')
        <!-- Portfolio Section-->
       @include('front.section.portfolio')
        <!-- About Section-->
          @include('front.section.about')
       
        <!-- Contact Section-->
          @include('front.section.contact')
        
        <!-- Footer-->
         @include('front.footer')
       
        <!-- Copyright Section-->
         <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright &copy; Your Website
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </small>
            </div>
        </div>
         @yield('content')
       
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{asset('assests/frontend/assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('assests/frontend/assets/mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{asset('assests/frontend/js/scripts.js')}}"></script>
    </body>
</html>
