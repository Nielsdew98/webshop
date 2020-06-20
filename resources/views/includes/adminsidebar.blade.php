<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-chess-board"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Boardgamers Delight</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        USERS
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>All Users</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('users.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add User</span></a>
    </li>
    <div class="sidebar-heading">
        CATEGORIES
    </div>
    <hr class="sidebar-divider">

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('categories.index')}}">
            <i class="fas fa-tags"></i>
            <span>All categories</span></a>
    </li>

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('categories.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add category</span></a>
    </li>
    <div class="sidebar-heading">
        DISCOUNTS
    </div>
    <hr class="sidebar-divider">

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('discounts.index')}}">
            <i class="fas fa-percentage"></i>
            <span>All discounts</span></a>
    </li>

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('discounts.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add discount</span></a>
    </li>
    <div class="sidebar-heading">
        PRODUCTS
    </div>
    <hr class="sidebar-divider">

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('products.index')}}">
            <i class="fas fa-box-open"></i>
            <span>All products</span></a>
    </li>

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('products.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add product</span></a>
    </li>
    <!-- Divider -->
    <div class="sidebar-heading">
        MEDIA
    </div>
    <hr class="sidebar-divider">

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('medias.index')}}">
            <i class="fas fa-camera"></i>
            <span>All media</span></a>
    </li>
    <div class="sidebar-heading">
        All Awards
    </div>
    <hr class="sidebar-divider">

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('awards.index')}}">
            <i class="fas fa-award"></i>
            <span>All awards</span></a>
    </li>

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('awards.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add award</span></a>
    </li>
    <div class="sidebar-heading">
        Reviews
    </div>
    <hr class="sidebar-divider">

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('reviews.index')}}">
            <i class="fas fa-comment"></i>
            <span>All Reviews</span></a>
    </li>
    <!-- Divider -->
    <div class="sidebar-heading">
        ORDERS
    </div>
    <hr class="sidebar-divider">

    <!-- Nav Item - Categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('adminorder.index')}}">
            <i class="fas fa-shopping-basket"></i>
            <span>All orders</span></a>
    </li>


    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
