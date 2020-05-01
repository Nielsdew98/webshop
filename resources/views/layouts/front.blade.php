<!doctype html>
<html lang="en">
<head>
    @include('includes.front.front-header')
</head>
<body>
<header>
    @include('includes.front.front-top')
</header>
<main>
    @yield('content')
</main>

@include('includes.front.front-footer')

<script src="{{asset('js/frontapp.js')}}"></script>
</body>
</html>
