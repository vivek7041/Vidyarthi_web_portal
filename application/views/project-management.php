<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets2/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets2/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets2/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets2/img/favicons/favicon.ico">
    <link rel="manifest" href="<?=base_url()?>assets2/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?=base_url()?>assets2/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>../../../unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="<?=base_url()?>assets2/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="<?=base_url()?>assets2/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="<?=base_url()?>vendors/dhtmlx-gantt/dhtmlxgantt.css" rel="stylesheet">
    <link rel="<?=base_url()?>stylesheet" href="../../../cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <!-- navbar -->
    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
        <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Dashboard</span>
                    </div>
                  </a>
                  
                </li>
                
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent" id="basic">
                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/form-control.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Form control</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/input-group.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Input group</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/select.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Select</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/basic/checks.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Checks</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        
                         
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">Advance</span>
                        </div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent" id="advance">
                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/advance-select.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Advance select</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/date-picker.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Date picker</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/editor.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Editor</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/file-uploader.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">File uploader</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/forms/advance/rating.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Rating</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#icons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="grid"></span></span><span class="nav-link-text">Icons</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="icons">
                    <li class="nav-item"><a class="nav-link" href="modules/icons/feather.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Feather</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/icons/font-awesome.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Font awesome</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/icons/unicons.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Unicons</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="columns"></span></span><span class="nav-link-text">Tables</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="tables">
                    <li class="nav-item"><a class="nav-link" href="modules/tables/basic-tables.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Basic tables</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/tables/advance-tables.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Advance tables</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="package"></span></span><span class="nav-link-text">Components</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="components">
                    <li class="nav-item"><a class="nav-link" href="modules/components/accordion.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Accordion</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/avatar.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Avatar</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/alerts.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Alerts</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/badge.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Badge</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/breadcrumb.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Breadcrumb</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/button.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Buttons</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/card.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Card</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">Carousel</span>
                        </div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent" id="carousel">
                        <li class="nav-item"><a class="nav-link" href="modules/components/carousel/bootstrap.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Bootstrap</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/carousel/swiper.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Swiper</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/collapse.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Collapse</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/dropdown.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Dropdown</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/list-group.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">List group</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/modal.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Modals</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">Navs &amp; Tabs</span>
                        </div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent" id="navs-_and_-Tabs">
                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/navs.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Navs</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/navbar.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Navbar</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="modules/components/navs-and-tabs/tabs.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Tabs</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/offcanvas.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Offcanvas</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/progress-bar.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Progress bar</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/placeholder.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Placeholder</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/pagination.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Pagination</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/popovers.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Popovers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/scrollspy.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Scrollspy</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/spinners.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Spinners</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/toast.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Toast</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/components/tooltips.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Tooltips</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="tool"></span></span><span class="nav-link-text">Utilities</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="utilities">
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/background.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Background</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/borders.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Borders</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/colors.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Colors</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/display.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Display</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/flex.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Flex</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/float.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Float</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/interactions.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Interactions</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/opacity.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Opacity</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/overflow.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Overflow</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/position.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Position</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/shadows.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Shadows</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/sizing.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Sizing</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/spacing.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Spacing</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/typography.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Typography</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/vertical-align.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical align</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="modules/utilities/visibility.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Visibility</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#multi-level" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="layers"></span></span><span class="nav-link-text">Multi level</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="multi-level">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">Level two</span>
                        </div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent" id="level-two">
                        <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 1</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 2</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">Level three</span>
                        </div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent" id="level-three">
                        <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 3</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-three">
                            <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">Item 4</span>
                            </div>
                          </a><!-- more inner pages-->
                          <ul class="nav collapse parent" id="item-4">
                            <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 5</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 6</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">Level four</span>
                        </div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent" id="level-four">
                        <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 6</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-four">
                            <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">Item 7</span>
                            </div>
                          </a><!-- more inner pages-->
                          <ul class="nav collapse parent" id="item-7">
                            <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 8</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="item-7">
                                <div class="d-flex align-items-center">
                                  <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">Item 9</span>
                                </div>
                              </a><!-- more inner pages-->
                              <ul class="nav collapse parent" id="item-9">
                                <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-text">Item 10</span></div>
                                  </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-text">Item 11</span></div>
                                  </a><!-- more inner pages-->
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <p class="navbar-vertical-label">Documentation</p><!-- parent pages--><a class="nav-link" href="documentation/getting-started.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="life-buoy"></span></span><span class="nav-link-text">Getting started</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text">Customization</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="customization">
                    <li class="nav-item"><a class="nav-link" href="documentation/customization/styling.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Styling</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="documentation/customization/plugin.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Plugin</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="documentation/gulp.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon font-awesome"><span class="fa-brands fa-gulp fs-0 ms-1"></span></span><span class="nav-link-text">Gulp</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="documentation/design-file.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="figma"></span></span><span class="nav-link-text">Design file</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="changelog.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="git-merge"></span></span><span class="nav-link-text">Changelog</span></div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="pages/authentication/simple/sign-out.html"><span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Sign out</span></a></div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-top navbar-expand vertical-navbar">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="assets2/img/icons/logo.png" alt="phoenix" width="32" />
                  <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                </div>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse">
            <div class="search-box d-none d-lg-block" style="width:25rem;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control search-input search min-h-auto" type="search" placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="#525b75"></circle>
                    <circle cx="2" cy="8" r="2" fill="#525b75"></circle>
                    <circle cx="2" cy="14" r="2" fill="#525b75"></circle>
                    <circle cx="8" cy="8" r="2" fill="#525b75"></circle>
                    <circle cx="8" cy="14" r="2" fill="#525b75"></circle>
                    <circle cx="14" cy="8" r="2" fill="#525b75"></circle>
                    <circle cx="14" cy="14" r="2" fill="#525b75"></circle>
                    <circle cx="8" cy="2" r="2" fill="#525b75"></circle>
                    <circle cx="14" cy="2" r="2" fill="#525b75"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                      <div class="row text-center align-items-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/behance.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/google-cloud.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/slack.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/github.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Github</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/bitbucket.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/google-drive.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/trello.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/figma.png" alt="" width="20" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/twitter.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/pinterest.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/linkedin.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/google-maps.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/google-photos.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets2/img/nav-icons/spotify.png" alt="" width="30" />
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l ">
                    <img class="rounded-circle" src="assets2/img/team/57.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body p-0">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl ">
                          <img class="rounded-circle" src="assets2/img/team/57.png" alt="" />
                        </div>
                        <h6 class="mt-2">Jerry Seinfield</h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                      </ul>
                      <hr />
                      <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                      <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content pt-5">
          <div class="row gy-3 mb-6 justify-content-between">
            <div class="col-md-9 col-auto">
              <h2 class="mb-2 text-1100">Projects Dashboard</h2>
              <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
            </div>
            
          </div>
         
            <div class="col-12 col-xl-6 col-xxl-5">
              <div class="card border border-300 h-100 w-100">
                <div class="bg-holder" style="background-image:url(assets2/img/spot-illustrations/20.png);background-position: top right; background-size: auto;"></div>
                <!--/.bg-holder-->
                <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block" style="background-image:url(assets2/img/spot-illustrations/21.png);background-position: bottom right; background-size: auto;"></div>
                <!--/.bg-holder-->
                <div class="card-body px-5 position-relative">
                  <div class="badge badge-phoenix fs--2 badge-phoenix-warning mb-4"><span class="fw-bold">Coming soon</span><span class="fa-solid fa-award ms-1"></span></div>
                  <h3 class="mb-5">Early bird gets the warm leads!</h3>
                  <p class="text-700 fw-semi-bold">Phoenix CRM Dashboard is coming to <br />market soon for fulfilling your every <br />CRM related needs. </p>
                </div>
                <div class="card-footer border-0 py-0 px-5 z-index-1">
                  <p class="text-700 fw-semi-bold">Follow <a href="https://themewagon.com/">ThemeWagon </a>at <br class="d-none d-xxl-block" />Bootstrap Marketplace for updates.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 pb-3 border-y border-300">
            <div class="row">
              <div class="col-12 col-xl-7 col-xxl-6">
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <h3 class="text-1100 text-nowrap">Issues Discovered</h3>
                    <p class="text-700 mb-md-7">Newly found and yet to be solved</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-bold">Issue type </p>
                      <p class="mb-0 fs--1">Total count <span class="fw-bold">257</span></p>
                    </div>
                    <hr class="bg-200 mb-2 mt-2" />
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets2/img/icons/green.png" alt="" height="8" width="16" />Product design</p>
                      <h5 class="mb-0 text-900">78</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets2/img/icons/blue.png" alt="" height="8" width="16" />Development</p>
                      <h5 class="mb-0 text-900">63</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets2/img/icons/skyblue.png" alt="" height="8" width="16" />QA & Testing</p>
                      <h5 class="mb-0 text-900">56</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets2/img/icons/red.png" alt="" height="8" width="16" />Customer queries</p>
                      <h5 class="mb-0 text-900">36</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets2/img/icons/yellow.png" alt="" height="8" width="16" />R & D </p>
                      <h5 class="mb-0 text-900">24</h5>
                    </div><button class="btn btn-outline-primary mt-5">See Details<span class="fas fa-angle-right ms-2 fs--2 text-center"></span></button>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="position-relative">
                      <div class="echart-issue-chart" style="min-height:390px;width:100%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-5 col-xxl-6">
                <h3>Project: zero Burnout</h3>
                <p class="text-700 mb-0 mb-xl-3">Deadline & progress</p>
                <div class="echart-zero-burnout-chart" style="min-height:320px;width:100%"></div>
              </div>
            </div>
          </div>
          <div class="mx-lg-n4 mt-3">
            <div class="row g-3">
              <div class="col-12 col-xl-6 col-xxl-7">
                <div class="card todo-list h-100">
                  <div class="card-header border-bottom-0 pb-0">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h3 class="text-1100">To do</h3>
                        <p class="mb-md-0 mb-lg-2 mb-xxl-0 text-700">Task assigned to me</p>
                      </div>
                      <div class="col-auto w-100 w-md-auto">
                        <div class="row align-items-center justify-content-between g-0">
                          <div class="col-12 col-sm-auto">
                            <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                              </form>
                            </div>
                          </div>
                          <div class="col-auto d-flex">
                            <p class="mb-0 ms-sm-3 fs--1 text-700 fw-bold"><span class="fas fa-filter me-1 fw-extra-bold fs--2"></span>23 tasks</p><button class="btn btn-link p-0 ms-3 fs--1 text-primary fw-bold text-decoration-none"><span class="fas fa-sort me-1 fw-extra-bold fs--2"></span>Sorting</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-6 pb-0 scrollbar to-do-list-body">
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" /><label class="form-check-label mb-0 fs-0" for="checkbox-todo-0">Designing the dungeon</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center">
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" /><label class="form-check-label mb-0 fs-0" for="checkbox-todo-1">Hiring a motion graphic designer</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button><button class="btn p-0 text-warning fs--2 me-2"><span class="fas fa-tasks me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" /><label class="form-check-label mb-0 fs-0" for="checkbox-todo-2">Finalizing the geometric shapes</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" /><label class="form-check-label mb-0 fs-0" for="checkbox-todo-3">Finalizing the geometric shapes</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button><button class="btn p-0 text-warning fs--2 me-2"><span class="fas fa-tasks me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" /><label class="form-check-label mb-0 fs-0" for="checkbox-todo-4">Procrastinate for a month</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" /><label class="form-check-label mb-0 fs-0" for="checkbox-todo-5">warming up</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top border-bottom">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" /><label class="form-check-label mb-0 fs-0" for="checkbox-todo-6">Make ready for release</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">2o Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">1:00 AM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer border-0"><a class="fw-bold fs--1 mt-4 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a></div>
                </div>
              </div>
              <div class="col-12 col-xl-6 col-xxl-5">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="card-title mb-1">
                      <h3 class="text-1100">Activity</h3>
                    </div>
                    <p class="text-700 mb-4">Recent activity across all projects</p>
                    <div class="timeline-vertical">
                      <div class="timeline-item position-relative">
                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                            <div class="timeline-start-item order-1 order-md-0 me-md-4">
                              <p class="fs--2 fw-semi-bold text-600">23 August,<br />2023 10:30AM</p>
                            </div>
                            <div class="timeline-icon-item position-md-relative me-3 me-md-0">
                              <div class="icon-item icon-item-sm border rounded-7 shadow-none bg-primary-200"><span class="text-primary fas fa-chess"></span></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="timeline-content-item ps-7 ps-md-3">
                              <h5 class="fs--1">Assigned as a director for Project The Chewing Gum Attack</h5>
                              <p class="fs--1">by <span class="fw-semi-bold text-primary">Shantinon Mekalan</span></p>
                              <p class="fs--1 text-800 mb-5">Contrary to popular belief, Lorem Ipsum is not simply random text. o popular belief, Lorem Ipsum is not simply random text.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item position-relative">
                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                            <div class="timeline-start-item order-1 order-md-0 me-md-4">
                              <p class="fs--2 fw-semi-bold text-600">23 August,<br />2023 10:30AM</p>
                            </div>
                            <div class="timeline-icon-item position-md-relative me-3 me-md-0">
                              <div class="icon-item icon-item-sm border rounded-7 shadow-none bg-primary-200"><span class="text-primary fas fa-chess"></span></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="timeline-content-item ps-7 ps-md-3">
                              <h5 class="fs--1">Assigned as a director for Project The Chewing Gum Attack</h5>
                              <p class="fs--1">by <span class="fw-semi-bold text-primary">Shantinon Mekalan</span></p>
                              <p class="fs--1 text-800 mb-5">Contrary to popular belief, Lorem Ipsum is not simply random text. o popular belief, Lorem Ipsum is not simply random text.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item position-relative">
                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                            <div class="timeline-start-item order-1 order-md-0 me-md-4">
                              <p class="fs--2 fw-semi-bold text-600">23 August,<br />2023 10:30AM</p>
                            </div>
                            <div class="timeline-icon-item position-md-relative me-3 me-md-0">
                              <div class="icon-item icon-item-sm border rounded-7 shadow-none bg-primary-200"><span class="text-primary fas fa-chess"></span></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="timeline-content-item ps-7 ps-md-3">
                              <h5 class="fs--1">Assigned as a director for Project The Chewing Gum Attack</h5>
                              <p class="fs--1">by <span class="fw-semi-bold text-primary">Shantinon Mekalan</span></p>
                              <p class="fs--1 text-800 mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. o popular belief, Lorem Ipsum is not simply random text.</p>
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
          <div class="row mt-3">
            <div class="col-12">
              <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-6 border-top border-300">
                <div id="projectSummary" data-list='{"valueNames":["project","assigness","start","deadline","calculation","projectprogress","statuses","action"],"page":6,"pagination":true}'>
                  <div class="row align-items-end justify-content-between pb-4 g-3">
                    <div class="col-auto">
                      <h3>Projects</h3>
                      <p class="text-700 lh-sm mb-0">Brief summary of all projects</p>
                    </div>
                  </div>
                  <div class="table-responsive mx-n1 px-1 scrollbar">
                    <table class="table fs--1 mb-0 border-top border-200">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="project" style="min-width:360px;">PROJECT NAME</th>
                          <th class="sort align-middle" scope="col" data-sort="assigness" style="min-width:150px;">ASSIGNESS</th>
                          <th class="sort align-middle" scope="col" data-sort="start" style="min-width:140px;">START DATE</th>
                          <th class="sort align-middle" scope="col" data-sort="deadline" style="max-width:350px;">DEADLINE</th>
                          <th class="sort align-middle" scope="col" data-sort="calculation" style="min-width:110px;">CALCULATION</th>
                          <th class="sort align-middle" scope="col" data-sort="projectprogress" style="min-width:110px;">PROGRESS</th>
                          <th class="sort align-middle" scope="col" data-sort="statuses" style="min-width:90px;">STATUSES</th>
                          <th class="sort align-middle text-end" scope="col" data-sort="action" style="min-width:110px;">ACTION</th>
                        </tr>
                      </thead>
                      <tbody class="list" id="table-latest-review-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Making the Butterflies shoot each other dead</a></td>
                          <td class="align-middle white-space-nowrap assigness">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/9.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/25.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/32.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/avatar-placeholder.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <div class="avatar-name rounded-circle "><span>+3</span></div>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start">
                            <p class="mb-0 fs--1 text-900">Dec 12, 2018</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline">
                            <p class="mb-0 fs--1 text-900">Dec 12, 2026</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation">
                            <p class="fw-bold text-1100 fs--1 mb-0">$4</p>
                            <p class="fw-semi-bold fs--2 text-700 mb-0">Cost</p>
                          <td class="align-middle white-space-nowrap projectprogress">
                            <p class="text-800 fs--2 mb-0">145 / 145</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap statuses">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div data-bs-toggle="tooltip" data-bs-placement="top" title="30% Damage">
                                <div class="progress-bar bg-info" style="width:30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Project Doughnut Dungeon</a></td>
                          <td class="align-middle white-space-nowrap assigness">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/22.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/28.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <div class="avatar-name rounded-circle"><span>R</span></div>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start">
                            <p class="mb-0 fs--1 text-900">Jan 9, 2019</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline">
                            <p class="mb-0 fs--1 text-900">Dec 9, 2022</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation"><button class="btn btn-sm btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button>
                          <td class="align-middle white-space-nowrap projectprogress">
                            <p class="text-800 fs--2 mb-0">148 / 223</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 66.3677130044843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap statuses">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div data-bs-toggle="tooltip" data-bs-placement="top" title="30% Damage">
                                <div class="progress-bar bg-info" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">The Chewing Gum Attack</a></td>
                          <td class="align-middle white-space-nowrap assigness">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/34.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/59.png" alt="" />
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start">
                            <p class="mb-0 fs--1 text-900">Sep 4, 2019</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline">
                            <p class="mb-0 fs--1 text-900">Dec 4, 2021</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation">
                            <p class="fw-bold text-1100 fs--1 mb-0">$657k</p>
                            <p class="fw-semi-bold fs--2 text-700 mb-0">Estimation</p>
                          <td class="align-middle white-space-nowrap projectprogress">
                            <p class="text-800 fs--2 mb-0">277 / 539</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 51.39146567717996%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap statuses">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div data-bs-toggle="tooltip" data-bs-placement="top" title="30% Damage">
                                <div class="progress-bar bg-info" style="width:10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="progress-bar bg-danger" style="width:10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Execution of Micky the foul mousie</a></td>
                          <td class="align-middle white-space-nowrap assigness">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/1.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/avatar-placeholder.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/5.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/11.png" alt="" />
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start">
                            <p class="mb-0 fs--1 text-900">Nov 1, 2019</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline">
                            <p class="mb-0 fs--1 text-900">Dec 1, 2024</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation"><button class="btn btn-sm btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button>
                          <td class="align-middle white-space-nowrap projectprogress">
                            <p class="text-800 fs--2 mb-0">16 / 56</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 28.57142857142857%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap statuses">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div data-bs-toggle="tooltip" data-bs-placement="top" title="30% Damage">
                                <div class="progress-bar bg-info" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Harnessing stupidity from Jerry</a></td>
                          <td class="align-middle white-space-nowrap assigness">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/21.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/23.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/25.png" alt="" />
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start">
                            <p class="mb-0 fs--1 text-900">Dec 28, 2019</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline">
                            <p class="mb-0 fs--1 text-900">Nov 28, 2021</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation"><button class="btn btn-sm btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button>
                          <td class="align-middle white-space-nowrap projectprogress">
                            <p class="text-800 fs--2 mb-0">169 / 394</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 42.89340101522843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap statuses">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div data-bs-toggle="tooltip" data-bs-placement="top" title="30% Damage">
                                <div class="progress-bar bg-info" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="progress-bar bg-danger" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
                          <?=base_url()?>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Water resistant mosquito killer gun</a></td>
                          <td class="align-middle white-space-nowrap assigness">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/30.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/avatar-placeholder.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/59.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="assets2/img/team/31.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <div class="avatar-name rounded-circle"><span>R</span></div>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start">
                            <p class="mb-0 fs--1 text-900">Feb 24, 2020</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline">
                            <p class="mb-0 fs--1 text-900">Nov 24, 2021</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation">
                            <p class="fw-bold text-1100 fs--1 mb-0">$55k</p>
                            <p class="fw-semi-bold fs--2 text-700 mb-0">Budget</p>
                          <td class="align-middle white-space-nowrap projectprogress">
                            <p class="text-800 fs--2 mb-0">600 / 600</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap statuses">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div data-bs-toggle="tooltip" data-bs-placement="top" title="30% Damage">
                                <div class="progress-bar bg-info" style="width:24%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none" />2022 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.2.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?=base_url()?>vendors/popper/popper.min.js"></script>
    <script src="<?=base_url()?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?=base_url()?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?=base_url()?>vendors/is/is.min.js"></script>
    <script src="<?=base_url()?>vendors/fontawesome/all.min.js"></script>
    <script src="<?=base_url()?>vendors/lodash/lodash.min.js"></script>
    <script src="<?=base_url()?>../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="<?=base_url()?>vendors/list.js/list.min.js"></script>
    <script src="<?=base_url()?>vendors/feather-icons/feather.min.js"></script>
    <script src="<?=base_url()?>vendors/dayjs/dayjs.min.js"></script>
    <script src="<?=base_url()?>vendors/echarts/echarts.min.js"></script>
    <script src="<?=base_url()?>vendors/dhtmlx-gantt/dhtmlxgantt.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="<?=base_url()?>assets2/js/projectmanagement-dashboard.js"></script>
    <script src="<?=base_url()?>assets2/js/phoenix.js"></script>
  </body>
 
</html>