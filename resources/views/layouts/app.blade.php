<!DOCTYPE html>
<html class="no-js"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SMS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <x-head_links/>
    </head>
    <body>
        @include('layouts.navigation')
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="{{ '/' }}">
                                <img class="main-logo" src="{{ asset('app/img/logo/logo.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            <div class="header-top-menu tabl-d-n">
                                                <ul class="nav navbar-nav mai-top-nav">
                                                    <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                    </li>
                                                    <li class="nav-item dropdown res-dis-nn">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                        <div role="menu" class="dropdown-menu animated zoomIn">
                                                            <a href="#" class="dropdown-item">Documentation</a>
                                                            <a href="#" class="dropdown-item">Expert Backend</a>
                                                            <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                            <a href="#" class="dropdown-item">Contact Support</a>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    <li class="nav-item dropdown">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                        <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                            <div class="message-single-top">
                                                                <h1>Message</h1>
                                                            </div>
                                                            <ul class="message-menu">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="message-img">
                                                                            <img src="img/contact/1.jpg" alt="">
                                                                        </div>
                                                                        <div class="message-content">
                                                                            <span class="message-date">16 Sept</span>
                                                                            <h2>Advanda Cro</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="message-img">
                                                                            <img src="img/contact/4.jpg" alt="">
                                                                        </div>
                                                                        <div class="message-content">
                                                                            <span class="message-date">16 Sept</span>
                                                                            <h2>Sulaiman din</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="message-img">
                                                                            <img src="img/contact/3.jpg" alt="">
                                                                        </div>
                                                                        <div class="message-content">
                                                                            <span class="message-date">16 Sept</span>
                                                                            <h2>Victor Jara</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="message-img">
                                                                            <img src="img/contact/2.jpg" alt="">
                                                                        </div>
                                                                        <div class="message-content">
                                                                            <span class="message-date">16 Sept</span>
                                                                            <h2>Victor Jara</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="message-view">
                                                                <a href="#">View All Messages</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                        <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                            <div class="notification-single-top">
                                                                <h1>Notifications</h1>
                                                            </div>
                                                            <ul class="notification-menu">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">16 Sept</span>
                                                                            <h2>Advanda Cro</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">16 Sept</span>
                                                                            <h2>Sulaiman din</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">16 Sept</span>
                                                                            <h2>Victor Jara</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">16 Sept</span>
                                                                            <h2>Victor Jara</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="notification-view">
                                                                <a href="#">View All Notification</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            @if (auth()->user())
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">{{ Auth::user()->name }}</span>
                                                            @endif
                                                            @if(auth('student')->user())
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">{{ auth('student')->user()->name }}</span>
                                                            @endif
                                                            @if(auth('teacher')->user())
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">{{ auth('teacher')->user()->name }}</span>
                                                            @endif
                                                            @if(auth('parents')->user())
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">{{ auth('parents')->user()->name }}</span>
                                                            @endif
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                            <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                            </li>
                                                            <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                            </li>
                                                            <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>User Billing</a>
                                                            </li>
                                                            <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                            </li>
                                                            @if(auth()->user())
                                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                <span class="edu-icon edu-locked author-log-ic"></span>Logout</a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>

                                                            </li>
                                                            @endif
                                                            @if(auth('student')->user())
                                                            <li><a href="{{ route('student.logout') }}"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                            </li>
                                                            @endif
                                                            @if(auth('teacher')->user())
                                                            <li><a href="{{ route('teacher.logout') }}"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                            </li>
                                                            @endif
                                                            @if(auth('parents')->user())
                                                            <li><a href="{{ route('parents.logout') }}"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                            </li>
                                                            @endif

                                                        </ul>
                                                    </li>
                                                    <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                                                        <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                            <ul class="nav nav-tabs custon-set-tab">
                                                                <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                                </li>
                                                                <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                                </li>
                                                                <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                                </li>
                                                            </ul>

                                                            <div class="tab-content custom-bdr-nt">
                                                                <div id="Notes" class="tab-pane fade in active">
                                                                    <div class="notes-area-wrap">



                                                                    </div>
                                                                </div>
                                                                <div id="Projects" class="tab-pane fade">
                                                                    <div class="projects-settings-wrap">


                                                                    </div>
                                                                </div>
                                                                <div id="Settings" class="tab-pane fade">
                                                                    <div class="setting-panel-area">


                                                                    </div>
                                                                </div>
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
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Dashboard <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul class="collapse dropdown-header-top">
                                                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-arrow-right"></i> </a></li>
                                                    <li><a href="{{ route('result.check') }}">View Results</a></li>
                                                    <li><a href="{{ route('student.attend') }}">Mark Attendance</a></li>
                                                    <li><a href="{{ route('input.mark') }}">Assessment</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="{{ route('event.index') }}">Event</a></li>
                                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Teachers <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demoevent" class="collapse dropdown-header-top">
                                                    <li><a href="{{ route('teachers.index') }}">All Teachers</a>
                                                    </li>
                                                    <li><a href="{{ route('teachers.create') }}">Add Teacher</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demopro" class="collapse dropdown-header-top">
                                                    <li><a href="{{ route('students.index') }}">All Students</a>
                                                    </li>
                                                    <li><a href="{{ route('students.create') }}">Add Student</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Subjects <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="democrou" class="collapse dropdown-header-top">
                                                    <li><a href="{{ route('subjects.index') }}">All Subjects</a>
                                                    </li>
                                                    <li><a href="{{ route('subjects.create') }}">Add Subjects</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demolibra" class="collapse dropdown-header-top">
                                                    <li><a href="{{ route('libraries.index') }}">Library Assets</a>
                                                    </li>
                                                    <li><a href="{{ route('libraries.create') }}">Add Library Asset</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demodepart" href="#">Classroom <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demodepart" class="collapse dropdown-header-top">
                                                    <li><a href="{{ route('classrooms.index') }}">Class List</a>
                                                    </li>
                                                    <li><a href="{{ route('classrooms.create') }}">Add Class</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demo" href="#">Memo <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demo" class="collapse dropdown-header-top">
                                                    <li><a href="{{ route('memo.index') }}">Inbox</a>
                                                    </li>
                                                    <li><a href="{{ route('memo.show') }}">View Memo</a>
                                                    </li>
                                                    <li><a href="{{ route('memo.create') }}">Compose Memo</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="breadcome-heading">
                                                <form role="search" class="sr-input-func">
                                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="breadcome-menu">
                                                <li><a href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> BACK / </a><span class="bread-slash"></span>
                                                </li>
                                                <li><span class="bread-blod">{{ Route::currentRouteName() }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Copyright © 2023. All rights reserved. contact us<a href="#">SMS</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-javascript_links/>

    </body>
</html>
