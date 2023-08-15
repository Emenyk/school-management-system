 {{-- <x-head_links/> --}}



   <!-- Start Left menu area -->
   <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="/">
                {{-- <img class="main-logo" src="{{ asset('app/img/logo/logo.png') }}" alt="" /> --}}
            </a>
            <strong>
                <a href="/">
                    <img src="{{ asset('app/img/logo/logosn.png') }}" alt="" />
                </a>
            </strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                               <span class="educate-icon educate-home icon-wrap"></span>
                               <span class="mini-click-non">Dashoard</span>
                            </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="dashboard" href="{{ route('dashboard') }}"><span class="mini-sub-pro"><i class="fa fa-arrow-right"></i> </span></a></li>
                            <li><a title="check result" href="{{ route('result.check') }}"><span class="mini-sub-pro">Check results</span></a></li>
                            @if (auth()->user() || auth('teacher')->user())
                            <li><a title="attendance" href="{{ route('student.attend') }}"><span class="mini-sub-pro">attendance</span></a></li>
                            <li><a title="assessment" href="{{ route('input.mark') }}"><span class="mini-sub-pro">assign mark</span></a></li>
                            @endif


                        </ul>
                    </li>
                    @if (auth()->user() || auth('teacher')->user() || auth('student')->user() || auth('parents')->user())
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="fa fa-wechat"></span> <span class="mini-click-non">Chat</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="{{ route('memo.index') }}"><span class="mini-sub-pro">Inbox</span></a></li>
                            {{-- <li><a title="View Memo" href="{{ route('memo.index') }}"><span class="mini-sub-pro">View</span></a></li> --}}
                            <li><a title="Compose Memo" href="{{ route('memo.create') }}"><span class="mini-sub-pro">Compose</span></a></li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="{{ route('students.index') }}"><span class="mini-sub-pro">All Students</span></a></li>
                            @if (auth()->user())
                            <li><a title="Add Students" href="{{ route('students.create') }}"><span class="mini-sub-pro">Add Student</span></a></li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Teacher</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All teachers" href="{{ route('teachers.index') }}"><span class="mini-sub-pro">All teachers</span></a></li>
                            @if (auth()->user())
                            <li><a title="Add teacher" href="{{ route('teachers.create') }}"><span class="mini-sub-pro">Add teacher</span></a></li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Parent</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All parents" href="{{ route('parents.index') }}"><span class="mini-sub-pro">All parents</span></a></li>
                            @if (auth()->user())
                            <li><a title="Add parent" href="{{ route('parents.create') }}"><span class="mini-sub-pro">Add parent</span></a></li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Subjects</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Subjects" href="{{ route('subjects.index') }}"><span class="mini-sub-pro">All subject</span></a></li>
                            @if (auth()->user())
                            <li><a title="Add Subject" href="{{ route('subjects.create') }}"><span class="mini-sub-pro">Add subject</span></a></li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Classroom</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Class List" href="{{ route('classrooms.index') }}"><span class="mini-sub-pro">class List</span></a></li>
                            @if (auth()->user())
                            <li><a title="Add Class" href="{{ route('classrooms.create') }}"><span class="mini-sub-pro">Add class</span></a></li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Library</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Library" href="{{ route('libraries.index') }}"><span class="mini-sub-pro">Library Assets</span></a></li>
                            @if (auth()->user())
                            <li><a title="Add Library" href="{{ route('libraries.create') }}"><span class="mini-sub-pro">Add Library Asset</span></a></li>
                            @endif
                        </ul>
                    </li>
                    @if (auth()->user())
                    <li>
                        <a title="event" href="{{ route('news.create') }}" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">News</span></a>
                    </li>
                    @else
                    <li>
                        <a title="event" href="{{ route('news.index') }}" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">News</span></a>
                    </li>
                    @endif

                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->


