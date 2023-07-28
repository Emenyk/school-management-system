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
                                    
                                    <form action="{{ route('attendance.store') }}" method="POST" >
                                        @csrf
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
                                        
                                        <thead>
                                            <tr>
                                                <th>Roll No</th>
                                                <th>Data</th>
                                                <th>Student</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                            @if (count($subjects) < 1)
                                            <td><input type="submit" disabled value="Submit" class="btn btn-warning"></td>
                                            @else   
                                            <td><input type="submit" value="Submit" class="btn btn-primary"></td>
                                            @endif
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
