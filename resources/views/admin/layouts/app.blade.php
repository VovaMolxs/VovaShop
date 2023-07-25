<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:33:00 GMT -->
<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('../admin/imgs/theme/favicon.svg') }}">
    <!-- Template CSS -->
    @vite([
        'resources/css/admin_css/main.css',
        'resources/css/admin_css/vendors/bootstrap.css',
        'resources/css/admin_css/vendors/material-icon-round.css',
        'resources/css/admin_css/vendors/normalize.css',
        'resources/css/admin_css/vendors/perfect-scrollbar.css',
        'resources/css/admin_css/vendors/select2.min.css',
        'resources/js/admin_js/main.js',
        'resources/js/admin_js/custom-chart.js',
        'resources/js/admin_js/vendors/bootstrap.bundle.min.js',
        'resources/js/admin_js/vendors/chart.js',
        'resources/js/admin_js/vendors/jquery-3.6.0.min.js',
        'resources/js/admin_js/vendors/perfect-scrollbar.js',
        'resources/js/admin_js/vendors/select2.min.js',

    ])
</head>

<body>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<div class="screen-overlay"></div>
<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="{{ url('../assets/imgs/theme/logo.svg') }}" class="logo" alt="Evara Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item active">
                <a class="menu-link" href="{{ route('admin.index') }}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-products-list.html"> <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Products</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('products.index')}}">Product List</a>
                    <a href="{{ route ('categories.index')}}">Categories</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-orders-1.html"> <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Orders</span>
                </a>
                <div class="submenu">
                    <a href="page-orders-1.html">Order list 1</a>
                    <a href="page-orders-2.html">Order list 2</a>
                    <a href="page-orders-detail.html">Order detail</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                    <span class="text">Sellers</span>
                </a>
                <div class="submenu">
                    <a href="page-sellers-cards.html">Sellers cards</a>
                    <a href="page-sellers-list.html">Sellers list</a>
                    <a href="page-seller-detail.html">Seller profile</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>
                    <span class="text">Add product</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('products.create') }}">Add product 1</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-transactions-1.html"> <i class="icon material-icons md-monetization_on"></i>
                    <span class="text">Transactions</span>
                </a>
                <div class="submenu">
                    <a href="page-transactions-1.html">Transaction 1</a>
                    <a href="page-transactions-2.html">Transaction 2</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>
                    <span class="text">Account</span>
                </a>
                <div class="submenu">
                    <a href="page-account-login.html">User login</a>
                    <a href="page-account-register.html">User registration</a>
                    <a href="page-error-404.html">Error 404</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-reviews.html"> <i class="icon material-icons md-comment"></i>
                    <span class="text">Reviews</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-brands.html"> <i class="icon material-icons md-stars"></i>
                    <span class="text">Brands</span> </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" disabled href="#"> <i class="icon material-icons md-pie_chart"></i>
                    <span class="text">Statistics</span>
                </a>
            </li>
        </ul>
        <hr>
        <ul class="menu-aside">
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                </a>
                <div class="submenu">
                    <a href="page-settings-1.html">Setting sample 1</a>
                    <a href="page-settings-2.html">Setting sample 2</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-blank.html"> <i class="icon material-icons md-local_offer"></i>
                    <span class="text"> Starter page </span>
                </a>
            </li>
        </ul>
        <br>
        <br>
    </nav>
</aside>
<main class="main-wrap">
    <header class="main-header navbar">
        <div class="col-search">
            <form class="searchform">
                <div class="input-group">
                    <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                    <button class="btn btn-light bg" type="button"> <i class="material-icons md-search"></i></button>
                </div>
                <datalist id="search_terms">
                    <option value="Products">
                    <option value="New orders">
                    <option value="Apple iphone">
                    <option value="Ahmed Hassan">
                </datalist>
            </form>
        </div>
        <div class="col-nav">
            <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link btn-icon" href="#">
                        <i class="material-icons md-notifications animation-shake"></i>
                        <span class="badge rounded-pill">3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                </li>
                <li class="dropdown nav-item">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                        <a class="dropdown-item text-brand" href="#"><img src="{{ url('../assets/imgs/theme/flag-us.png') }}" alt="English">English</a>
                        <a class="dropdown-item" href="#"><img src="{{ url('../assets/imgs/theme/flag-fr.png') }}" alt="Français">Français</a>
                        <a class="dropdown-item" href="#"><img src="{{ url('../assets/imgs/theme/flag-jp.png') }}" alt="Français">日本語</a>
                        <a class="dropdown-item" href="#"><img src="{{ url('../assets/imgs/theme/flag-cn.png') }}" alt="Français">中国人</a>
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{ url('../assets/imgs/people/avatar2.jpg') }}" alt="User"></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                        <a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                        <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
                        <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                        <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                        <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
@yield('content')
    <footer class="main-footer font-xs">
        <div class="row pb-30 pt-15">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> ©, Evara - HTML Ecommerce Template .
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end">
                    All rights reserved
                </div>
            </div>
        </div>
    </footer>
</main>

</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:33:12 GMT -->
</html>
