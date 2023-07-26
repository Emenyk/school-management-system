<x-app-layout>
    <div class="analytics-sparkle-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>Todays Attendance</h5>
                            <h2>Students: <span class="counter">{{ $todaysAttendance }}</span> <span class="tuition-fees">students</span></h2>
                            <span class="text-info">{{ $attendancePercentage }}%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{ $attendancePercentage }}%;"> <span class="sr-only">{{ $attendancePercentage }}% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>Total Students</h5>
                            <h2>Students: <span class="counter">{{ $allStudents }}</span> <span class="tuition-fees">students</span></h2>
                            {{-- <span class="text-danger">30%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                        <div class="analytics-content">
                            <h5>Total Teachers</h5>
                            <h2>Teachers: <span class="counter">{{ $allTeachers }}</span> <span class="tuition-fees">teachers</span></h2>
                            {{-- <span class="text-info">60%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                        <div class="analytics-content">
                            <h5>Total Subjects</h5>
                            <h2>Subjects: <span class="counter">{{ $allSubjects }}</span> <span class="tuition-fees">subjects</span></h2>
                            {{-- <span class="text-inverse">80%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mailbox-compose-area mg-t-15 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="admin-pro-accordion-wrap shadow-inner responsive-mg-b-30">

                        <div class="panel-group edu-custon-design" id="accordion">
                            @if ($memos->count() > 0)
                            @foreach ($memos as $memo)
                            <div class="panel panel-default">
                               <div class="panel-heading accordion-head">
                                   <h4 class="panel-title">
                                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        <i>{{ $memo->created_at }}</i> {{ $memo->subject }}
                                    </a>
                                   </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse panel-ic collapse in">
                                 <div class="panel-body admin-panel-content animated bounce">
                                  <p>{{ $memo->body }}</p>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div><h1>No Message for you</h1></div>
                        @endif
                    </div>
                    </div>
                </div>
                <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="hpanel email-compose">
                        <form action="{{ route('memo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="panel-heading hbuilt">
                                <div class="p-xs h4">
                                    New message
                                </div>
                            </div>
                            <div class="panel-heading hbuilt">
                                <div class="p-xs">
                                    <div method="get" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">To:</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" class="form-control input-sm" placeholder="Type admin to message administration" name="admin">
                                                <input name="teacher" type="number" class="form-control input-sm" placeholder="Teacher ID">
                                                <input name="student" type="number" class="form-control input-sm" placeholder="Student ID">
                                                <input name="parent" type="number" class="form-control input-sm" placeholder="Parent ID">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">Topic:</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" name="subject" class="form-control input-sm" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body no-padding">
                                <textarea name="body" class="summernote6">
                                    write here
                                </textarea>
                            </div>
                            <br>
                            <div class="panel-body no-padding">
                                <input type="file" name="attachment" id="">
                            </div>
                            <br>
                            <div class="panel-footer">
                                <button class="btn btn-primary ft-compse">Send memo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Class List</h4>
                        <div class="add-product">
                            <a href="{{ route('classrooms.create') }}">Add Classroom</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Class ID</th>
                                    <th>Class Name.</th>
                                    <th>Status</th>
                                    <th>Class Teacher</th>
                                    <th>No. of Students</th>
                                    <th>Setting</th>
                                </tr>
                                @foreach ($classrooms as $classroom)

                                <tr>
                                    <td>{{ $classroom->id }}</td>
                                    <td>{{ $classroom->name }}</td>
                                    <td>
                                        @if ($classroom->status == 'inactive')
                                        <button class="btn btn-warning">{{ $classroom->status }}</button>
                                        @else
                                        <button class="pd-setting">{{ $classroom->status }}</button>
                                        @endif
                                    </td>
                                    <td>{{ $classroom->classTeacher }}</td>

                                    {{-- <td>01962067309</td> --}}
                                    <td>{{ $classroom->students()->count() }}</td>
                                    <td style="display: flex">
                                        <a href="{{ route('classrooms.edit', ['classroom' => $classroom]) }}">
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        </a>
                                        <form method="POST" action="{{ route('classrooms.destroy', ['classroom' => $classroom]) }}">
                                            @method('delete')
                                            @csrf
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                        </div>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">

                                    <a class="page-item">{{ $classrooms->links() }}</a>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
