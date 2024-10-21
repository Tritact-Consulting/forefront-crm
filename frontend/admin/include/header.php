<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
        <title>Fore Front - Admin Dashboard</title>
        <!-- Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="../assets/css/scrollbar.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="../assets/css/date-picker.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/dropzone.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    </head>
    <body>
        <!-- loader starts-->
        <div class="loader-wrapper">
            <div class="loader">
                <div class="loader4"></div>
            </div>
        </div>
        <!-- loader ends-->
        <!-- tap on top starts-->
        <div class="tap-top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
        <!-- tap on tap ends-->
        <!-- page-wrapper Start-->
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <!-- Page Header Start-->
            <div class="page-header">
                <div class="header-wrapper row m-0">
                    <form class="form-inline search-full col" action="#" method="get">
                        <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative">
                                    <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Riho .." name="q" title="" autofocus>
                                    <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading... </span></div>
                                    <i class="close-search" data-feather="x"></i>
                                </div>
                                <div class="Typeahead-menu"> </div>
                            </div>
                        </div>
                    </form>
                    <div class="header-logo-wrapper col-auto p-0">
                        <div class="logo-wrapper"> <a href="#">
                            <img class="img-fluid for-light" src="../assets/images/logo/logo_dark.png" alt="logo-light">
                            <img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt="logo-dark"></a>
                        </div>
                        <div class="toggle-sidebar"> <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                    </div>
                    <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
                        <div>
                            <a class="toggle-sidebar" href="#"> <i class="iconly-Category icli"> </i></a>
                            <div class="d-flex align-items-center gap-2 ">
                                <h4 class="f-w-600">Welcome Admin</h4>
                                <img class="mt-0" src="../assets/images/hand.gif" alt="hand-gif">
                            </div>
                        </div>
                    </div>
                    <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                        <ul class="nav-menus">
                            <li class="d-md-none d-block">
                                <div class="form search-form mb-0">
                                    <div class="input-group">
                                        <span class="input-show">
                                            <svg id="searchIcon">
                                                <use href="../assets/svg/icon-sprite.svg#search-header"></use>
                                            </svg>
                                            <div id="searchInput">
                                                <input type="search" placeholder="Search">
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="onhover-dropdown d-none">
                                
                                <div class="onhover-show-div bookmark-flip">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="front">
                                                <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                                <ul class="bookmark-dropdown">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-4 text-center">
                                                                <div class="bookmark-content">
                                                                    <div class="bookmark-icon"><i data-feather="file-text"></i></div>
                                                                    <span>Forms</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 text-center">
                                                                <div class="bookmark-content">
                                                                    <div class="bookmark-icon"><i data-feather="user"></i></div>
                                                                    <span>Profile</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 text-center">
                                                                <div class="bookmark-content">
                                                                    <div class="bookmark-icon"><i data-feather="server"></i></div>
                                                                    <span>Tables</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                                                </ul>
                                            </div>
                                            <div class="back">
                                                <ul>
                                                    <li>
                                                        <div class="bookmark-dropdown flip-back-content">
                                                            <input type="text" placeholder="search...">
                                                        </div>
                                                    </li>
                                                    <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="onhover-dropdown notification-down">
                                <div class="notification-box">
                                    <svg>
                                        <use href="../assets/svg/icon-sprite.svg#notification-header"></use>
                                    </svg>
                                    <span class="badge rounded-pill badge-secondary">4 </span>
                                </div>
                                <div class="onhover-show-div notification-dropdown">
                                    <div class="card mb-0">
                                        <div class="card-header">
                                            <div class="common-space">
                                                <h4 class="text-start f-w-600">Notitications</h4>
                                                <div><span>4 New</span></div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="notitications-bar">
                                                <ul class="nav nav-pills nav-primary p-0" id="pills-tab" role="tablist">
                                                    <li class="nav-item p-0"> <a class="nav-link active" id="pills-aboutus-tab" data-bs-toggle="pill" href="#pills-aboutus" role="tab" aria-controls="pills-aboutus" aria-selected="true">All(3)</a></li>
                                                    <li class="nav-item p-0"> <a class="nav-link" id="pills-blog-tab" data-bs-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-blog" aria-selected="false">
                                                        Messages</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-aboutus" role="tabpanel" aria-labelledby="pills-aboutus-tab">
                                                        <div class="user-message">
                                                            <ul>
                                                                <li>
                                                                    <div class="user-alerts">
                                                                        <img class="user-image rounded-circle img-fluid me-2" src="../assets/images/user/5.jpg" alt="user"/>
                                                                        <div class="user-name">
                                                                            <div>
                                                                                <h6><a class="f-w-500 f-14" href="#">Floyd Miles</a></h6>
                                                                                <span class="f-light f-w-500 f-12">Sir, Can i remove part in des...</span>
                                                                            </div>
                                                                            <div>
                                                                                <svg>
                                                                                    <use href="../assets/svg/icon-sprite.svg#more-vertical"></use>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="user-alerts">
                                                                        <img class="user-image rounded-circle img-fluid me-2" src="../assets/images/user/6.jpg" alt="user"/>
                                                                        <div class="user-name">
                                                                            <div>
                                                                                <h6><a class="f-w-500 f-14" href="#">Dianne Russell</a></h6>
                                                                                <span class="f-light f-w-500 f-12">So, what is my next work ?</span>
                                                                            </div>
                                                                            <div>
                                                                                <svg>
                                                                                    <use href="../assets/svg/icon-sprite.svg#more-vertical"></use>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog-tab">
                                                        <div class="notification-card">
                                                            <ul>
                                                                <li class="notification d-flex w-100 justify-content-between align-items-center">
                                                                    <div class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                                        <div class="user-alerts flex-shrink-0"><img class="rounded-circle img-fluid img-40" src="../assets/images/user/3.jpg" alt="user"/></div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="common-space user-id w-100">
                                                                                <div class="common-space w-100"> <a class="f-w-500 f-12" href="#">Robert D. Hambly</a></div>
                                                                            </div>
                                                                            <div><span class="f-w-500 f-light f-12">Hello Miss...😊</span></div>
                                                                        </div>
                                                                        <span class="f-light f-w-500 f-12">44 sec</span>
                                                                    </div>
                                                                </li>
                                                                <li class="notification d-flex w-100 justify-content-between align-items-center">
                                                                    <div class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                                        <div class="user-alerts flex-shrink-0"><img class="rounded-circle img-fluid img-40" src="../assets/images/user/7.jpg" alt="user"/></div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="common-space user-id w-100">
                                                                                <div class="common-space w-100"> <a class="f-w-500 f-12" href="#">Courtney C. Strang</a></div>
                                                                            </div>
                                                                            <div><span class="f-w-500 f-light f-12">Wishing You a Happy Birthday Dear.. 🥳🎊</span></div>
                                                                        </div>
                                                                        <span class="f-light f-w-500 f-12">52 min</span>
                                                                    </div>
                                                                </li>
                                                                <li class="notification d-flex w-100 justify-content-between align-items-center">
                                                                    <div class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                                        <div class="user-alerts flex-shrink-0"><img class="rounded-circle img-fluid img-40" src="../assets/images/user/5.jpg" alt="user"/></div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="common-space user-id w-100">
                                                                                <div class="common-space w-100"> <a class="f-w-500 f-12" href="#">Raye T. Sipes</a></div>
                                                                            </div>
                                                                            <div><span class="f-w-500 f-light f-12">Hello Dear!! This Theme Is Very beautiful</span></div>
                                                                        </div>
                                                                        <span class="f-light f-w-500 f-12">48 min</span>
                                                                    </div>
                                                                </li>
                                                                <li class="notification d-flex w-100 justify-content-between align-items-center">
                                                                    <div class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                                        <div class="user-alerts flex-shrink-0"><img class="rounded-circle img-fluid img-40" src="../assets/images/user/6.jpg" alt="user"/></div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="common-space user-id w-100">
                                                                                <div class="common-space w-100"> <a class="f-w-500 f-12" href="#">Henry S. Miller</a></div>
                                                                            </div>
                                                                            <div><span class="f-w-500 f-light f-12">You’re older today than yesterday, happy birthday!</span></div>
                                                                        </div>
                                                                        <span class="f-light f-w-500 f-12">3 min</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pb-0 pr-0 pl-0">
                                                        <div class="text-center"> <a class="f-w-700" href="#">
                                                            <button class="btn btn-primary" type="button" title="btn btn-primary">Check all</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="profile-nav onhover-dropdown">
                                <div class="media profile-media">
                                    <img class="b-r-10" src="../assets/images/profile.png" alt="">
                                    <div class="media-body d-xxl-block d-none box-col-none">
                                        <div class="d-flex align-items-center gap-2"> <span>Alex Mora </span><i class="middle fa fa-angle-down"> </i></div>
                                        <p class="mb-0 font-roboto">Admin</p>
                                    </div>
                                </div>
                                <ul class="profile-dropdown onhover-show-div">
                                    <li><a href="#"><i data-feather="user"></i><span>My Profile</span></a></li>
                                    <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                    <li> <a href="#"> <i data-feather="settings"></i><span>Settings</span></a></li>
                                    <li><a class="btn btn-pill btn-outline-primary btn-sm" href="#">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <script class="result-template" type="text/x-handlebars-template">
                        <div class="ProfileCard u-cf">                        
                        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                        <div class="ProfileCard-details"> 
                        <div class="ProfileCard-realName">{{name}}</div>
                        </div> 
                        </div>
                    </script>
                    <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                </div>
            </div>
            <!-- Page Header Ends                              -->
            <!-- Page Body Start-->
            <div class="page-body-wrapper">
                <!-- Page Sidebar Start-->
                <div class="sidebar-wrapper" data-layout="stroke-svg">
                    <div class="logo-wrapper">
                        <a href="#"><img class="img-fluid" src="../assets/images/logo/logo-white.png" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn">
                                    <a href="#"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="pin-title sidebar-main-title">
                                    <div>
                                        <h6>Pinned</h6>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1"></h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"> </i>
                                    <a class="sidebar-link" href="dashboard.php">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-home"></use>
                                        </svg>
                                        <span class="lan-3">Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"> </i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                                        </svg>
                                        <span>Users</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="auditor-view.php">Auditor</a></li>
                                        <li><a href="reviewers-view.php">Reviewers</a></li>
                                        <li><a href="sales-view.php">Sales</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"> </i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-editors"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-editors"></use>
                                        </svg>
                                        <span>Clients</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="active-clients.php">Active Clients</a></li>
                                        <li><a href="potential-clients.php">Potential Clients</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"> </i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-icons"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-icons"></use>
                                        </svg>
                                        <span>Settings</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="#">Roles</a></li>
                                        <li><a href="#">Permission</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"> </i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                                        </svg>
                                        <span>Certifications</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="#">Add Certificate</a></li>
                                        <li><a href="#">Generate Certificate</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"></i>
                                    <a class="sidebar-link" href="projects.php">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-file"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-file"></use>
                                        </svg>
                                        <span>Projects</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"></i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-widget"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-widget"></use>
                                        </svg>
                                        <span>Audit</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="add-audit.php">Create Audit</a></li>
                                        <li><a href="audit.php">Audit List</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-8">Applications</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"> </i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                                        </svg>
                                        <span>ISO Standards</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"> </i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                                        </svg>
                                        <span>EA Codes</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="ea-codes-form.php">EA Code List</a></li>
                                        <li><a href="ea-code-paper.php">EA Code</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa fa-thumb-tack"></i>
                                    <a class="sidebar-link" href="chat.php">
                                        <svg class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-chat"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-chat"></use>
                                        </svg>
                                        <span>Chat</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                        </div>
                    </nav>
                </div>
                <!-- Page Sidebar Ends-->