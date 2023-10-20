<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<head>
        <title>Instructor - Messages</title>
       <?php include 'header1.php'; ?>
    </head>
    <body class="app-messages layout-fluid">
       
        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">
 
            <div id="header"
                 data-fixed
                 class="mdk-header js-mdk-header mb-0">
                <div class="mdk-header__content">

                    <!-- Navbar -->
                    <nav id="default-navbar"
                         class="navbar navbar-expand navbar-dark bg-primary m-0">
                        <div class="container-fluid">
                            <!-- Toggle sidebar -->
                            <button class="navbar-toggler d-block"
                                    data-toggle="sidebar"
                                    type="button">
                                <span class="material-icons">menu</span>
                            </button>

                            <!-- Brand -->
                            <a href="instructor-dashboard.html"
                               class="navbar-brand">
                                <img src="assets/images/logo/white.svg"
                                     class="mr-2"
                                      />
                                
                            </a>

                            <ul class="nav navbar-nav navbar-nav-stats d-none d-md-flex flex-nowrap">
                                <li class="nav-item">
                                    <div class="nav-stats">$591 <small>GROSS</small></div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-stats">$31 <small>TAXES</small></div>
                                </li>
                                <li class="nav-item mr-3">
                                    <div class="nav-stats">$560 <small>NET</small></div>
                                </li>
                            </ul>

                            <!-- Search -->
                            <form class="search-form d-none d-md-flex">
                                <input type="text"
                                       class="form-control"
                                       placeholder="Search">
                                <button class="btn"
                                        type="button"><i class="material-icons font-size-24pt">search</i></button>
                            </form>
                            <!-- // END Search -->

                            <div class="flex"></div>

                            <!-- Menu -->
                            <ul class="nav navbar-nav flex-nowrap d-none d-lg-flex">
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="instructor-forum.html">Forum</a>
                                </li>
                            </ul>

                            <!-- Menu -->
                            <ul class="nav navbar-nav flex-nowrap">

                                <!-- Notifications dropdown -->
                                <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                                    <button class="nav-link btn-flush dropdown-toggle"
                                            type="button"
                                            data-toggle="dropdown"
                                            data-dropdown-disable-document-scroll
                                            data-caret="false">
                                        <i class="material-icons">notifications</i>
                                        <span class="badge badge-notifications badge-danger">2</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div data-perfect-scrollbar
                                             class="position-relative">
                                            <div class="dropdown-header"><strong>Messages</strong></div>
                                            <div class="list-group list-group-flush mb-0">

                                                <a href="instructor-messages.html"
                                                   class="list-group-item list-group-item-action unread">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 minutes ago</small>

                                                        <span class="ml-auto unread-indicator bg-primary"></span>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Michelle</strong>
                                                            <span class="text-black-70">Clients loved the new design.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="instructor-messages.html"
                                                   class="list-group-item list-group-item-action unread">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 minutes ago</small>

                                                        <span class="ml-auto unread-indicator bg-primary"></span>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Michelle</strong>
                                                            <span class="text-black-70">🔥 Superb job..</span>
                                                        </span>
                                                    </span>
                                                </a>

                                            </div>

                                            <div class="dropdown-header"><strong>System notifications</strong></div>
                                            <div class="list-group list-group-flush mb-0">

                                                <a href="instructor-messages.html"
                                                   class="list-group-item list-group-item-action border-left-3 border-left-danger">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">3 minutes ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-danger">account_circle</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">

                                                            <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="instructor-messages.html"
                                                   class="list-group-item list-group-item-action">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 hours ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-success">group_add</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Adrian. D</strong>
                                                            <span class="text-black-70">Wants to join your private group.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="instructor-messages.html"
                                                   class="list-group-item list-group-item-action">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">1 day ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-warning">storage</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">

                                                            <span class="text-black-70">Your deploy was successful.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- // END Notifications dropdown -->
                                <!-- User dropdown -->
                                <li class="nav-item dropdown ml-1 ml-md-3">
                                    <a class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       href="#"
                                       role="button"><img src="assets/images/people/50/guy-6.jpg"
                                             alt="Avatar"
                                             class="rounded-circle"
                                             width="40"></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"
                                           href="instructor-account-edit.html">
                                            <i class="material-icons">edit</i> Edit Account
                                        </a>
                                        <a class="dropdown-item"
                                           href="instructor-profile.html">
                                            <i class="material-icons">person</i> Public Profile
                                        </a>
                                        <a class="dropdown-item"
                                           href="guest-login.html">
                                            <i class="material-icons">lock</i> Logout
                                        </a>
                                    </div>
                                </li>
                                <!-- // END User dropdown -->
                            </ul>
                        </div>
                    </nav>
                    <!-- // END Navbar -->

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div data-push
                             data-responsive-width="768px"
                             class="mdk-drawer-layout js-mdk-drawer-layout">
                            <div class="mdk-drawer-layout__content">

                                <div class="app-messages__container d-flex flex-column h-100 pb-4">
                                    <div class="navbar navbar-light bg-white navbar-expand-sm navbar-shadow z-1">
                                        <div class="container-fluid flex-wrap px-sm-0">
                                            <div class="nav py-2">
                                                <div class="nav-item align-items-center mr-3">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-online avatar-sm">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column"
                                                         style="max-width: 200px; font-size: 15px">
                                                        <strong class="text-body">Michelle Smith</strong>
                                                        <span class="text-muted text-ellipsis">Personal Development Teacher since 2014</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2 flex d-flex align-items-center">
                                                <div class="flex search-form form-control-rounded search-form--light"
                                                     style="min-width: 200px;">
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="Search messages"
                                                           id="searchSample02">
                                                    <button class="btn pr-3"
                                                            type="button"
                                                            role="button"><i class="material-icons">search</i></button>
                                                </div>
                                                <button data-target="#messages-drawer"
                                                        class="navbar-toggler d-block d-md-none ml-3 p-0"
                                                        data-toggle="sidebar"
                                                        type="button">
                                                    <i class="material-icons">people_outline</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex pt-4"
                                         style="position: relative;"
                                         data-perfect-scrollbar>
                                        <div class="container-fluid page__container">
                                            <div class="jumbotron">
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-xl">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <h4 class="mb-0">Michelle Smith</h4>
                                                        <p class="text-muted mb-0">Personal Development Teacher since 2014</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="d-flex flex-column list-unstyled"
                                                id="messages">

                                                <li class="message d-inline-flex">
                                                    <div class="message__aside">
                                                        <a href="instructor-profile.html"
                                                           class="avatar">
                                                            <img src="assets/images/people/110/guy-6.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="message__body card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex mr-3">
                                                                    <a href="instructor-profile.html"
                                                                       class="text-body"><strong>Laza Bogdan</strong></a>
                                                                </div>
                                                                <div>
                                                                    <small class="text-muted">1 hour ago</small>
                                                                </div>
                                                            </div>
                                                            <span class="text-black-70">Coming along nicely, we&#39;ve got a draft for the client design completed, take a look! 🤓</span>

                                                            <a href="#"
                                                               class="media align-items-center mt-2 text-decoration-0 bg-white px-3">
                                                                <span class="avatar mr-2">
                                                                    <span class="avatar-title rounded-circle">
                                                                        <i class="material-icons font-size-24pt">attach_file</i>
                                                                    </span>
                                                                </span>
                                                                <span class="media-body"
                                                                      style="line-height: 1.5">
                                                                    <span class="text-primary">draft.sketch</span><br>
                                                                    <span class="text-muted">5 MB</span>
                                                                </span>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="message d-inline-flex">
                                                    <div class="message__aside">
                                                        <a href="instructor-profile.html"
                                                           class="avatar">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="message__body card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex mr-3">
                                                                    <a href="instructor-profile.html"
                                                                       class="text-body"><strong>Michelle</strong></a>
                                                                </div>
                                                                <div>
                                                                    <small class="text-muted">5 minutes ago</small>
                                                                </div>
                                                            </div>
                                                            <span class="text-black-70">Clients loved the new design.</span>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="message d-inline-flex">
                                                    <div class="message__aside">
                                                        <a href="instructor-profile.html"
                                                           class="avatar">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="message__body card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex mr-3">
                                                                    <a href="instructor-profile.html"
                                                                       class="text-body"><strong>Michelle</strong></a>
                                                                </div>
                                                                <div>
                                                                    <small class="text-muted">5 minutes ago</small>
                                                                </div>
                                                            </div>
                                                            <span class="text-black-70">🔥 Superb job..</span>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="message d-inline-flex">
                                                    <div class="message__aside">
                                                        <a href="instructor-profile.html"
                                                           class="avatar">
                                                            <img src="assets/images/people/110/guy-6.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="message__body card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex mr-3">
                                                                    <a href="instructor-profile.html"
                                                                       class="text-body"><strong>Laza Bogdan</strong></a>
                                                                </div>
                                                                <div>
                                                                    <small class="text-muted">just now</small>
                                                                </div>
                                                            </div>
                                                            <span class="text-black-70">Glad it all worked out 😉</span>

                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="container-fluid page__container">
                                        <form action="#"
                                              id="message-reply">
                                            <div class="input-group input-group-merge">
                                                <input type="text"
                                                       class="form-control form-control-appended"
                                                       autofocus=""
                                                       required=""
                                                       placeholder="Type message">
                                                <div class="input-group-append">
                                                    <div class="input-group-text pr-2">
                                                        <button class="btn btn-flush"
                                                                type="button"><i class="material-icons">tag_faces</i></button>
                                                    </div>
                                                    <div class="input-group-text pl-0">
                                                        <div class="custom-file custom-file-naked d-flex"
                                                             style="width: 24px; overflow: hidden;">
                                                            <input type="file"
                                                                   class="custom-file-input"
                                                                   id="customFile">
                                                            <label class="custom-file-label"
                                                                   style="color: inherit;"
                                                                   for="customFile">
                                                                <i class="material-icons">attach_file</i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="mdk-drawer js-mdk-drawer"
                                 data-align="end"
                                 id="messages-drawer">
                                <div class="mdk-drawer__content top-0">
                                    <div class="sidebar sidebar-right sidebar-light bg-white o-hidden">
                                        <div class="d-flex flex-column h-100">
                                            <div class="d-flex flex-column justify-content-center navbar-height">
                                                <div class="px-3 form-group mb-0">
                                                    <div class="input-group input-group-merge input-group-rounded flex-nowrap">
                                                        <input type="text"
                                                               class="form-control form-control-prepended"
                                                               placeholder="Filter members">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <span class="material-icons">filter_list</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex"
                                                 data-perfect-scrollbar>
                                                <div class="sidebar-heading">Online</div>
                                                <ul class="list-group list-group-fit mb-3">

                                                    <li class="list-group-item px-4 py-3 bg-light">
                                                        <a href="#"
                                                           class="d-flex align-items-center position-relative">
                                                            <span class="avatar avatar-sm avatar-online mr-3 flex-shrink-0">

                                                                <img src="assets/images/people/50/woman-5.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </span>
                                                            <span class="flex d-flex flex-column"
                                                                  style="max-width: 175px;">
                                                                <strong class="text-body">Michelle Smith</strong>

                                                                <span class="text-muted text-ellipsis">Personal Development Teacher Since 2014</span>

                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li class="list-group-item px-4 py-3">
                                                        <a href="#"
                                                           class="d-flex align-items-center position-relative">
                                                            <span class="avatar avatar-sm avatar-online mr-3 flex-shrink-0">

                                                                <span class="avatar-title rounded-circle">AD</span>

                                                            </span>
                                                            <span class="flex d-flex flex-column"
                                                                  style="max-width: 175px;">
                                                                <strong class="text-body">Andrew Brain</strong>

                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li class="list-group-item px-4 py-3">
                                                        <a href="#"
                                                           class="d-flex align-items-center position-relative">
                                                            <span class="avatar avatar-sm avatar-online mr-3 flex-shrink-0">

                                                                <img src="assets/images/people/50/guy-2.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </span>
                                                            <span class="flex d-flex flex-column"
                                                                  style="max-width: 175px;">
                                                                <strong class="text-body">Jimmy Carter</strong>

                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li class="list-group-item px-4 py-3">
                                                        <a href="#"
                                                           class="d-flex align-items-center position-relative">
                                                            <span class="avatar avatar-sm avatar-online mr-3 flex-shrink-0">

                                                                <img src="assets/images/people/50/woman-2.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </span>
                                                            <span class="flex d-flex flex-column"
                                                                  style="max-width: 175px;">
                                                                <strong class="text-body">Samantha Doe</strong>

                                                            </span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <div class="sidebar-heading d-flex">
                                                    <div class="flex text-muted">21 OFFLINE</div>
                                                    <a href="#"
                                                       class="text-primary">Hide offline</a>
                                                </div>
                                                <ul class="list-group list-group-fit mb-3">

                                                    <li class="list-group-item px-4 py-3">
                                                        <a href="#"
                                                           class="d-flex align-items-center position-relative">
                                                            <span class="avatar avatar-sm avatar-offline mr-3 flex-shrink-0">

                                                                <span class="avatar-title rounded-circle">XD</span>

                                                            </span>
                                                            <span class="flex d-flex flex-column"
                                                                  style="max-width: 175px;">
                                                                <strong class="text-body">Xander Dale</strong>

                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li class="list-group-item px-4 py-3">
                                                        <a href="#"
                                                           class="d-flex align-items-center position-relative">
                                                            <span class="avatar avatar-sm avatar-offline mr-3 flex-shrink-0">

                                                                <img src="assets/images/people/50/woman-1.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </span>
                                                            <span class="flex d-flex flex-column"
                                                                  style="max-width: 175px;">
                                                                <strong class="text-body">Beatriz Summers</strong>

                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li class="list-group-item px-4 py-3">
                                                        <a href="#"
                                                           class="d-flex align-items-center position-relative">
                                                            <span class="avatar avatar-sm avatar-offline mr-3 flex-shrink-0">

                                                                <img src="assets/images/people/50/woman-3.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </span>
                                                            <span class="flex d-flex flex-column"
                                                                  style="max-width: 175px;">
                                                                <strong class="text-body">Cassie Wills</strong>

                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li class="list-group-item px-4 py-3 bg-light">
                                                        <a href="#"
                                                           class="d-flex align-items-center position-relative">
                                                            <span class="avatar avatar-sm avatar-offline mr-3 flex-shrink-0">

                                                                <img src="assets/images/people/50/guy-1.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </span>
                                                            <span class="flex d-flex flex-column"
                                                                  style="max-width: 175px;">
                                                                <strong class="text-body">Jarrod Forrest</strong>

                                                                <span class="text-muted text-ellipsis">Arts Teacher</span>

                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li class="list-group-item px-4 py-3">
                                                        <a href="#"
                                                           class="d-flex align-items-center position-relative">
                                                            <span class="avatar avatar-sm avatar-offline mr-3 flex-shrink-0">

                                                                <img src="assets/images/people/50/guy-3.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </span>
                                                            <span class="flex d-flex flex-column"
                                                                  style="max-width: 175px;">
                                                                <strong class="text-body">Ziva Ochoa</strong>

                                                            </span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="mdk-drawer js-mdk-drawer"
                         id="default-drawer">
                        <div class="mdk-drawer__content ">
                            <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden"
                                 data-perfect-scrollbar>
                                <div class="sidebar-p-y">
                                    <div class="sidebar-heading">APPLICATIONS</div>
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="student-dashboard.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Student
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="instructor-dashboard.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Instructor
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Account menu -->
                                    <div class="sidebar-heading">Account</div>
                                    <ul class="sidebar-menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse"
                                               data-toggle="collapse"
                                               href="#account_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                                                Account
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse"
                                                id="account_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="guest-login.html">
                                                        <span class="sidebar-menu-text">Login</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="guest-signup.html">
                                                        <span class="sidebar-menu-text">Sign Up</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="guest-forgot-password.html">
                                                        <span class="sidebar-menu-text">Forgot Password</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="instructor-account-edit.html">
                                                        <span class="sidebar-menu-text">Edit Account</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="student-account-edit-basic.html">
                                                        <span class="sidebar-menu-text">Basic Information</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="student-account-edit-profile.html">
                                                        <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="student-account-billing-subscription.html">
                                                        <span class="sidebar-menu-text">Subscription</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="student-account-billing-upgrade.html">
                                                        <span class="sidebar-menu-text">Upgrade Account</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="student-account-billing-payment-information.html">
                                                        <span class="sidebar-menu-text">Payment Information</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="student-billing.html">
                                                        <span class="sidebar-menu-text">Payment History</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="student-invoice.html">
                                                        <span class="sidebar-menu-text">Student Invoice</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="instructor-invoice.html">
                                                        <span class="sidebar-menu-text">Instructor Invoice</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="instructor-edit-invoice.html">
                                                        <span class="sidebar-menu-text">Edit Invoice</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item open">
                                            <a class="sidebar-menu-button"
                                               data-toggle="collapse"
                                               href="#messages_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">comment</i> Messages
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse show"
                                                id="messages_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="instructor-messages.html">
                                                        <span class="sidebar-menu-text">Conversation</span>
                                                        <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="instructor-messages-2.html">
                                                        <span class="sidebar-menu-text">Conversation - 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="sidebar-heading">Instructor</div>
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="instructor-courses.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Course Manager
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="instructor-quizzes.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">help</i> Quiz Manager
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="instructor-earnings.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">trending_up</i> Earnings
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="instructor-statement.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">receipt</i> Statement
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               data-toggle="collapse"
                                               href="#forum_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                                                Community
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse"
                                                id="forum_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="instructor-forum.html">
                                                        <span class="sidebar-menu-text">Forum</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="instructor-forum-thread.html">
                                                        <span class="sidebar-menu-text">Discussion</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="instructor-forum-ask.html">
                                                        <span class="sidebar-menu-text">Ask Question</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="student-profile.html">
                                                        <span class="sidebar-menu-text">Student Profile - Courses</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="student-profile-posts.html">
                                                        <span class="sidebar-menu-text">Student Profile - Posts</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="instructor-profile.html">
                                                        <span class="sidebar-menu-text">Instructor Profile</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="instructor-help-center.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Help Center
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="guest-login.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Components menu -->
                                    <div class="sidebar-heading">Components</div>
                                    <ul class="sidebar-menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse"
                                               data-toggle="collapse"
                                               href="#components_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                                Components
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse"
                                                id="components_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-avatars.html">
                                                        <span class="sidebar-menu-text">Avatars</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-forms.html">
                                                        <span class="sidebar-menu-text">Forms</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-loaders.html">
                                                        <span class="sidebar-menu-text">Loaders</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-tables.html">
                                                        <span class="sidebar-menu-text">Tables</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-cards.html">
                                                        <span class="sidebar-menu-text">Cards</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-tabs.html">
                                                        <span class="sidebar-menu-text">Tabs</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-icons.html">
                                                        <span class="sidebar-menu-text">Icons</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-buttons.html">
                                                        <span class="sidebar-menu-text">Buttons</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-alerts.html">
                                                        <span class="sidebar-menu-text">Alerts</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-badges.html">
                                                        <span class="sidebar-menu-text">Badges</span>
                                                    </a>
                                                </li>
                                                
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-progress.html">
                                                        <span class="sidebar-menu-text">Progress Bars</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-pagination.html">
                                                        <span class="sidebar-menu-text">Pagination</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse"
                                               data-toggle="collapse"
                                               href="#plugins_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">folder</i>
                                                Plugins
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse"
                                                id="plugins_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-charts.html">
                                                        <span class="sidebar-menu-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-drag.html">
                                                        <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-calendar.html">
                                                        <span class="sidebar-menu-text">Calendar</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-nestable.html">
                                                        <span class="sidebar-menu-text">Nestable</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-tree.html">
                                                        <span class="sidebar-menu-text">Tree</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-maps-vector.html">
                                                        <span class="sidebar-menu-text">Vector Maps</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="ui-sweet-alert.html">
                                                        <span class="sidebar-menu-text">Sweet Alert</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- // END Components Menu -->

                                    <div class="sidebar-heading">Layout</div>
                                    <ul class="sidebar-menu">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button"
                                               href="instructor-messages.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="fixed-instructor-messages.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fixed Layout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- App Settings FAB -->
                <div id="app-settings">
                    <app-settings layout-active="default"
                                  :layout-location="{
      'fixed': 'fixed-instructor-messages.html',
      'default': 'instructor-messages.html'
    }"
                                  sidebar-variant="bg-transparent border-0"></app-settings>
                </div>

            </div>
        </div>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/dom-factory.js"></script>
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

        <script id="template-message"
                type="text/x-jsrender">
            <li class="message d-inline-flex">
    <div class="message__aside">
      <a href="instructor-profile.html" class="avatar">
        <img src="{{:avatar}}" alt="people" class="avatar-img rounded-circle">
      </a>
    </div>
    <div class="message__body card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex mr-3">
            <a href="instructor-profile.html" class="text-body"><strong>{{:name}}</strong></a>
          </div>
          <div>
            <small class="text-muted">{{:date}}</small>
          </div>
        </div>
        <span class="text-black-70">{{:message}}</span>
        {{if file}}
        <a href="#" class="media align-items-center mt-2 text-decoration-0 bg-white px-3">
          <span class="avatar mr-2">
            <span class="avatar-title rounded-circle">
              <i class="material-icons font-size-24pt">attach_file</i>
            </span>
          </span>
          <span class="media-body" style="line-height: 1.5">
            <span class="text-primary">{{:file.name}}</span><br>
            <span class="text-muted">{{:file.size}}</span>
          </span>
        </a>
        {{/if}}
      </div>
    </div>
  </li>
</script>

        <!-- Messages App -->
        <script src="assets/js/messages.js"></script>

    </body>


</html>