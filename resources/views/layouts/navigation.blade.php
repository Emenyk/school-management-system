 {{-- <x-head_links/> --}}



   <!-- Start Left menu area -->
   <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{ asset('app/img/logo/logo.png') }}" alt="" /></a>
            <strong><a href="index.html"><img src="{{ asset('app/img/logo/logosn.png') }}" alt="" /></a></strong>
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
                            <li><a title="check result" href="{{ route('result.check') }}"><span class="mini-sub-pro">view results</span></a></li>
                            <li><a title="attendance" href="{{ route('student.attend') }}"><span class="mini-sub-pro">mark attendance</span></a></li>
                            <li><a title="mark" href="{{ route('input.mark') }}"><span class="mini-sub-pro">input mark</span></a></li>
                            {{-- <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">notify</span></a></li> --}}
                        </ul>
                    </li>
                    <li>
                        <a title="event" href="{{ route('event.index') }}" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="{{ route('students.index') }}"><span class="mini-sub-pro">All Students</span></a></li>
                            <li><a title="Add Students" href="{{ route('students.create') }}"><span class="mini-sub-pro">Add Student</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Teacher</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All teachers" href="{{ route('teachers.index') }}"><span class="mini-sub-pro">All teachers</span></a></li>
                            <li><a title="Add teacher" href="{{ route('teachers.create') }}"><span class="mini-sub-pro">Add teacher</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Parent</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All parents" href="{{ route('parents.index') }}"><span class="mini-sub-pro">All parents</span></a></li>
                            <li><a title="Add parent" href="{{ route('parents.create') }}"><span class="mini-sub-pro">Add parent</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Subjects</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Subjects" href="{{ route('subjects.index') }}"><span class="mini-sub-pro">All subject</span></a></li>
                            <li><a title="Add Subject" href="{{ route('subjects.create') }}"><span class="mini-sub-pro">Add subject</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Classroom</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Class List" href="{{ route('classrooms.index') }}"><span class="mini-sub-pro">class List</span></a></li>
                            <li><a title="Add Class" href="{{ route('classrooms.create') }}"><span class="mini-sub-pro">Add class</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Library</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Library" href="{{ route('libraries.index') }}"><span class="mini-sub-pro">Library Assets</span></a></li>
                            <li><a title="Add Library" href="{{ route('libraries.create') }}"><span class="mini-sub-pro">Add Library Asset</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="{{ route('mailing.show') }}"><span class="mini-sub-pro">Inbox</span></a></li>
                            <li><a title="View Mail" href="{{ route('mailing.index') }}"><span class="mini-sub-pro">View Mail</span></a></li>
                            <li><a title="Compose Mail" href="{{ route('mailing.create') }}"><span class="mini-sub-pro">Compose Mail</span></a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->


