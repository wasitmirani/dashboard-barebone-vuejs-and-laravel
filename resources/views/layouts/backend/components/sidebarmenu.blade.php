<div data-simplebar="" class="h-100">
@php
$sidebar=sideBarMenu();

@endphp
    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            @foreach ($sidebar as $menu)
            @if(!empty($menu['heading']))
            <li class="menu-title" data-key="t-menu">{{$menu['heading']}}</li>
            @endif
            <li>
                <a href="index.html">
                    <i data-feather="home"></i>
                    <span class="badge rounded-pill bg-soft-warning text-warning float-end">9+</span>
                    <span data-key="t-dashboard">Dashboard</span>
                </a>
            </li>

            <li class="menu-title" data-key="t-apps">Apps</li>
            
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="shopping-cart"></i>
                    <span data-key="t-ecommerce">Ecommerce</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="ecommerce-products.html" key="t-products">Products</a></li>
                    <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product Detail</a></li>
                    <li><a href="ecommerce-orders.html" data-key="t-orders">Orders</a></li>
                    <li><a href="ecommerce-customers.html" data-key="t-customers">Customers</a></li>
                    <li><a href="ecommerce-cart.html" data-key="t-cart">Cart</a></li>
                    <li><a href="ecommerce-checkout.html" data-key="t-checkout">Checkout</a></li>
                    <li><a href="ecommerce-shops.html" data-key="t-shops">Shops</a></li>
                    <li><a href="ecommerce-add-product.html" data-key="t-add-product">Add Product</a></li>
                </ul>
            </li>

            <li>
                <a href="apps-chat.html">
                    <i data-feather="message-square"></i>
                    <span data-key="t-chat">Chat</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="mail"></i>
                    <span data-key="t-email">Email</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="apps-email-inbox.html" data-key="t-inbox">Inbox</a></li>
                    <li><a href="apps-email-read.html" data-key="t-read-email">Read Email</a></li>
                </ul>
            </li>

            <li>
                <a href="apps-calendar.html">
                    <i data-feather="calendar"></i>
                    <span data-key="t-calendar">Calendar</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="users"></i>
                    <span data-key="t-contacts">Contacts</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="apps-contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                    <li><a href="apps-contacts-list.html" data-key="t-user-list">User List</a></li>
                    <li><a href="apps-contacts-profile.html" data-key="t-profile">Profile</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="trello"></i>
                    <span data-key="t-tasks">Tasks</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tasks-list.html" key="t-task-list">Task List</a></li>
                    <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                    <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                </ul>
            </li>

            <li class="menu-title" data-key="t-pages">Pages</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="layers"></i>
                    <span data-key="t-authentication">Authentication</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                    <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                    <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a></li>
                    <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                    <li><a href="auth-logout.html" data-key="t-logout">Log Out</a></li>
                    <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                    <li><a href="auth-email-verification.html" data-key="t-email-verification">Email Verification</a></li>
                    <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two Step Verification</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="file-text"></i>
                    <span data-key="t-pages">Pages</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                    <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                    <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                    <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                    <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                    <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                    <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                    <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                </ul>
            </li>

            <li>
                <a href="layouts-horizontal.html">
                    <i data-feather="layout"></i>
                    <span data-key="t-horizontal">Horizontal</span>
                </a>
            </li>

            <li class="menu-title mt-2" data-key="t-components">Components</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="briefcase"></i>
                    <span data-key="t-components">Bootstrap</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                    <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                    <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                    <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                    <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                    <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                    <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                    <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                    <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                    <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                    <li><a href="ui-placeholders.html" data-key="t-progress-bars">Placeholders</a></li>
                    <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
                    <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                    <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                    <li><a href="ui-general.html" data-key="t-general">General</a></li>
                    <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="gift"></i>
                    <span data-key="t-ui-elements">Extended</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                    <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                    <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">SweetAlert 2</a></li>
                    <li><a href="extended-session-timeout.html" data-key="t-session-timeout">Session Timeout</a></li>
                    <li><a href="extended-rating.html" data-key="t-rating">Rating</a></li>
                    <li><a href="extended-notifications.html" data-key="t-notifications">Notifications</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);">
                    <i data-feather="box"></i>
                    <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                    <span data-key="t-forms">Forms</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="form-elements.html" data-key="t-form-elements">Basic Elements</a></li>
                    <li><a href="form-validation.html" data-key="t-form-validation">Validation</a></li>
                    <li><a href="form-advanced.html" data-key="t-form-advanced">Advanced Plugins</a></li>
                    <li><a href="form-editors.html" data-key="t-form-editors">Editors</a></li>
                    <li><a href="form-uploads.html" data-key="t-form-upload">File Upload</a></li>
                    <li><a href="form-wizard.html" data-key="t-form-wizard">Wizard</a></li>
                    <li><a href="form-mask.html" data-key="t-form-mask">Mask</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="sliders"></i>
                    <span data-key="t-tables">Tables</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html" data-key="t-basic-tables">Bootstrap Basic</a></li>
                    <li><a href="tables-datatable.html" data-key="t-data-tables">DataTables</a></li>
                    <li><a href="tables-responsive.html" data-key="t-responsive-table">Responsive</a></li>
                    <li><a href="tables-editable.html" data-key="t-editable-table">Editable</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="pie-chart"></i>
                    <span data-key="t-charts">Charts</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="charts-apex.html" data-key="t-apex-charts">Apexcharts</a></li>
                    <li><a href="charts-echart.html" data-key="t-e-charts">Echarts</a></li>
                    <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">Chartjs</a></li>
                    <li><a href="charts-knob.html" data-key="t-knob-charts">Jquery Knob</a></li>
                    <li><a href="charts-sparkline.html" data-key="t-sparkline-charts">Sparkline</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="cpu"></i>
                    <span data-key="t-icons">Icons</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="icons-feather.html" data-key="t-feather">Feather</a></li>
                    <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                    <li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
                    <li><a href="icons-dripicons.html" data-key="t-dripicons">Dripicons</a></li>
                    <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font Awesome 5</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="map"></i>
                    <span data-key="t-maps">Maps</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="maps-google.html" data-key="t-g-maps">Google</a></li>
                    <li><a href="maps-vector.html" data-key="t-v-maps">Vector</a></li>
                    <li><a href="maps-leaflet.html" data-key="t-l-maps">Leaflet</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="share-2"></i>
                    <span data-key="t-multi-level">Multi Level</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="javascript: void(0);" data-key="t-level-1-1">Level 1.1</a></li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">Level 1.2</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="javascript: void(0);" data-key="t-level-2-1">Level 2.1</a></li>
                            <li><a href="javascript: void(0);" data-key="t-level-2-2">Level 2.2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>

        <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
            <div class="card-body">
                <img src="assets/images/giftbox.png" alt="">
                <div class="mt-4">
                    <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                    <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                    <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar -->
</div>




<nav>
  <div class="main-navbar">
    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
    <div id="mainnav">
      <ul class="nav-menu custom-scrollbar">
        <li class="back-btn">
          <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
        </li>

        @foreach ($sidebar as $menu)
         @if(!empty($menu['heading']))
         <li class="sidebar-main-title">
            <div>
              <h6>{{$menu['heading']}}</h6>
            </div>
          </li>
        @endif
        @if(!empty($menu['menu']))
          <li class="dropdown" ><a class="nav-link menu-title" href="javascript:void(0)"> <i data-feather="{{$menu['menu']['icon']}}" ></i> <span>{{$menu['menu']['title']}}</span></a>
            <ul class="nav-submenu menu-content">
                @foreach ($menu['menu']['sub_menu'] as $item)
                  <li @if(isset($item['v-can'])) v-can="'{{$item['v-can']}}'" @endif><router-link to="{{$item['v-route']}}" >{{$item['title']}}</router-link></li>
                @endforeach

            </ul>
          </li>
        @endif
        @if(!empty($menu['single_link']))

        <li class="dropdown" @if(isset($item['v-can'])) v-can="'{{$item['v-can']}}'" @endif><router-link to="{{$menu['single_link']['v-route']}}" class="nav-link menu-title link-nav" > <i data-feather="{{$menu['single_link']['icon']}}" ></i>   <span>{{$menu['single_link']['title']}}</span></router-link></li>
        @endif
        @endforeach
