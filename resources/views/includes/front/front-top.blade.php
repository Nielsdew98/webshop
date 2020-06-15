<nav class="navbar  navbar-dark navbar-expand-lg">
    <div class="border-bottom w-75  d-lg-flex align-items-center justify-content-around mx-auto">
        <a href="tel:050252525"><i class="mr-2 fas fa-phone-alt"></i><span class="d-none d-lg-inline-flex">050 25 25 25</span></a>
        <a class="navbar-brand d-flex align-items-center p-0" href="{{route('homepage')}}">
            <p id="brand" class="text-uppercase">Boardgamers Delight</p>
        </a>
        <div class="d-flex align-items-center just">
            <form method="POST" action="{{route('searchProduct')}}" class="mb-0">
                @csrf
                @method('POST')
                 <div class="searchbar mr-2">
                    <input class="search_input" type="text" name="zoeken" placeholder="Zoek">
                    <button type="submit"
                       class="search_icon bg-transparent border-0 d-flex justify-content-center align-items-center rounded-circle"><i class="fas
                       fa-search"></i></button>
                </div>
            </form>

            <a href="{{route('shoppingCart')}}">
                 <span class="fa-stack custom_width"
                       data-count="{{Session::has('cart') ? Session::get('cart')->totalQuantity : '0' }}">
                    <i class="fas fa-shopping-bag primary-cart"></i>
                 </span>
            </a>
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="dropdown show">
                    <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far
                    fa-user"></i> Welcome {{Auth::user()->first_name . ' ' . Auth::user()->last_name }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">View profile</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"><i class="far fa-user"></i></a>
            @endif

        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg d-flex align-items-center justify-content-center">
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mr-5">
            <li class="nav-item active">
                <a class="nav-link text-uppercase" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{route('shopPage')}}">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{route('contactPage')}}">contact</a>
            </li>
        </ul>
    </div>
</nav>
