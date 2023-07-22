<x-app-layout>
    <div class="static-table-area">
        <div class="container-fluid">
            <div class="row">
                @empty($classrooms)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Attendance</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="static-table-list">
                                <table class="table sparkle-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Data</th>
                                            <th>User</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <form action="{{ url('dashboard/attendanceStore') }}" method="POST" >
                                        @csrf
                                        <tr>
                                            <td colspan="4">
                                                <div class="form-select-list">
                                                    <select class="form-control custom-select-value" name="subject">
                                                        @if (count($subjects) > 0)
                                                        @foreach ($subjects as $subject)
                                                        <option value="$subject->id">{{ $subject->name }}</option>

                                                        @endforeach
                                                        @else
                                                        <option>no subjects</option>
                                                        @endif
                                                        </select>
                                                </div>
                                            </td>
                                        </tr>
                                        @if(count($students) > 0)
                                        @foreach ($students as $student)

                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td><input type="checkbox" value="1" name="marks[]" id="">
                                            </td>
                                            <td>{{ $student->name }}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="4">No students found.</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <td><input type="submit" value="Submit" class="btn btn-primary"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endempty
            </div>


        </div>
    </div>
    </x-app-layout>
