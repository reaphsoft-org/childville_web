<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ChildVille Admin Profile Access </title>
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/select.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="../asset/img/Logo2.png" />
</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="#">
                        <img src="../asset/img/Logo2.png" width="50" height="50" alt="logo" />
                    </a>

                    <a class="navbar-brand brand-logo-mini" href="Javascript:void();">
                        <img src="../asset/img/Logo2.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div v-if="adminDetails" class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Hello, <span class="text-black fw-bold">John Doe</span></h1>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="count"></span>
                        </a>
                        <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item py-3 border-bottom">
                                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                                <span class="badge badge-pill badge-primary float-right">View all</span>
                            </a>
                            <a class="dropdown-item preview-item py-3">
                                <div class="preview-thumbnail">
                                    <i class="mdi mdi-alert m-auto text-primary"></i>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                                    <p class="fw-light small-text mb-0"> Just now </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item py-3">
                                <div class="preview-thumbnail">
                                    <i class="mdi mdi-settings m-auto text-primary"></i>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                                    <p class="fw-light small-text mb-0"> Private message </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item py-3">
                                <div class="preview-thumbnail">
                                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                                    <p class="fw-light small-text mb-0"> 2 days ago </p>
                                </div>
                            </a>
                        </div> -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-mail icon-lg"></i>
                        </a>
                        <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                            <a class="dropdown-item py-3">
                                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                                <span class="badge badge-pill badge-primary float-right">View all</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow py-2">
                                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow py-2">
                                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow py-2">
                                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                                </div>
                            </a>
                        </div> -->
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="asset/img/img2.jpg" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-xs rounded-circle" src="asset/img/img2.jpg" alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">{{adminDetails.fname}} {{adminDetails.lname}}</p>
                                <p class="fw-light text-muted mb-0">{{adminDetails.email}}</p>
                            </div>
                            <a href="staff-details.php?id={{adminDetails.user_id}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                                Profile </a>
                            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i>
                                Messages</a>
                            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>
                                Activity</a>
                            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="../assets/images/faces/face1.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face2.jpg" alt="image"><span class="offline"></span>
                                </div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face3.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face4.jpg" alt="image"><span class="offline"></span>
                                </div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face5.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face6.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-index.php">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="menu-icon mdi mdi-account-circle-outline"></i>
                            <span class="menu-title">Pupils</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="mdi mdi-airplane-takeoff menu-icon"></i>
                            <span class="menu-title">All Staff</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="menu-icon mdi mdi-alert-octagon"></i>
                            <span class="menu-title">Pay Roll</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="menu-icon mdi mdi-application"></i>
                            <span class="menu-title">All Events</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="menu-icon mdi mdi-arrange-send-backward"></i>
                            <span class="menu-title">Performance And Reviews </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="menu-icon mdi mdi-airballoon"></i>
                            <span class="menu-title">Staff Goals </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="mdi mdi-airplane-takeoff menu-icon"></i>
                            <span class="menu-title">All Request </span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">

                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                        <div class="row">
                                            <div class="col-lg-8 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">Performance Overview</h4>
                                                                        <p class="card-subtitle card-subtitle-dash">Know Your Performance</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                                <h6 class="dropdown-header">Settings</h6>
                                                                                <a class="dropdown-item" href="#">Last Month</a>
                                                                                <a class="dropdown-item" href="#">Last Week</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                                    <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                                        <h2 class="me-2 fw-bold"></h2>
                                                                        <h4 class="me-2"></h4>
                                                                        <h4 class="text-success"></h4>
                                                                    </div>
                                                                    <div class="me-3">
                                                                        <div id="marketingOverview-legend"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="chartjs-bar-wrapper mt-3">
                                                                    <canvas id="marketingOverview"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">Child Ville Pupils</h4>
                                                                        <p class="card-subtitle card-subtitle-dash">You have 3 Pupils</p>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new Pupils</button>
                                                                    </div>
                                                                </div>
                                                                <div class="table-responsive  mt-1">
                                                                    <table class="table select-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>PuPils Name</th>
                                                                                <th>Sex</th>
                                                                                <th>Parents Contact</th>
                                                                                <th>Status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="d-flex ">
                                                                                        <img src="assets/images/faces/face1.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>Brandon Washington</h6>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h6>Female</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-success">+23729474</p>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p>Washington James</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="d-flex ">
                                                                                        <img src="assets/images/faces/face1.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>Brandon Washington</h6>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h6>Female</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-success">+23729474</p>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p>Washington James</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="d-flex ">
                                                                                        <img src="assets/images/faces/face1.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>Brandon Washington</h6>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h6>Female</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-success">+23729474</p>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p>Washington James</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                                </td>
                                                                            </tr>



                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body card-rounded">
                                                                <h4 class="card-title  card-title-dash">Recent Events</h4>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Change in Directors
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Other Events
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Quarterly Report
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Change in Directors
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="list align-items-center pt-3">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-0">
                                                                            <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <h4 class="card-title card-title-dash">Activities</h4>
                                                                    <p class="mb-0">20 finished, 5 remaining</p>
                                                                </div>
                                                                <ul class="bullet-line-list">
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                            <p>Just now</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="list align-items-center pt-3">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-0">
                                                                            <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <h4 class="card-title card-title-dash">Todo list</h4>
                                                                            <div class="add-items d-flex mb-0">
                                                                                <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                                                                <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="list-wrapper">
                                                                            <ul class="todo-list todo-list-rounded">
                                                                                <li class="d-block">
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                            <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                                                                            <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="d-block">
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">23 June 2020</div>
                                                                                            <div class="badge badge-opacity-success me-3">Done</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                            <div class="badge badge-opacity-success me-3">Done</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="border-bottom-0">
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                            <div class="badge badge-opacity-danger me-3">Expired</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                                            <div>
                                                                                <h4 class="card-title card-title-dash">Leave Report</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-3">
                                                                            <canvas id="leaveReport"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                                            <div>
                                                                                <h4 class="card-title card-title-dash">Top Performer</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-3">
                                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face1.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                                                                        <small class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
                                                                                </div>
                                                                            </div>
                                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face2.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                                                                        <small class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
                                                                                </div>
                                                                            </div>
                                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face3.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                                                                        <small class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
                                                                                </div>
                                                                            </div>
                                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face4.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                                                                        <small class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
                                                                                </div>
                                                                            </div>
                                                                            <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face5.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                                                                        <small class="text-muted mb-0">Alaska, USA</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/proBanner.js"></script>
</body>

</html>