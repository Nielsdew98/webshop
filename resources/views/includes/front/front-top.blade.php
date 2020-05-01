<nav class="navbar  navbar-dark navbar-expand-lg">
    <div class="border-bottom w-75  d-lg-flex align-items-center justify-content-around mx-auto">
        <a href="tel:050252525"><i class="mr-2 fas fa-phone-alt"></i><span class="d-none d-lg-inline-flex">050 25 25 25</span></a>
        <a class="navbar-brand d-flex align-items-center p-0" href="{{route('homepage')}}">
            <p id="brand" class="text-uppercase">Boardgamers Delight</p>
        </a>
        <div class="d-flex align-items-center just">
            <div class="searchbar mr-2">
                <input class="search_input" type="text" name="Zoeken" placeholder="Zoek">
                <a href="#"
                   class="search_icon d-flex justify-content-center align-items-center rounded-circle"><i class="fas fa-search"></i></a>
            </div>
            <a href="winkelmand.html" class="mr-4"><i class="fas fa-shopping-bag"></i></a>
            <a href="{{ route('login') }}"><i class="far fa-user"></i></a>
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
