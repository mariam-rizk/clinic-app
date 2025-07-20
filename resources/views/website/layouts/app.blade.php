<!DOCTYPE html>
<html lang="en">
@include('website.layouts.head')

<body>
    <div class="page-wrapper">
@include('website.layouts.nav')
@yield('content')
@include('website.layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('website/assets/scripts/home.js')}}"></script>
</body>

</html>