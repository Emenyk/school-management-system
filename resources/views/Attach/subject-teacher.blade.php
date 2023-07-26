<x-app-layout>
    <div class="static-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Assign Subjects to Teacher</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="static-table-list">
                                <table class="table sparkle-table">
                                    <form action="{{ route('teacherToSubject') }}" method="POST" >
                                        @csrf
                                        <div class="form-select-list">
                                            <select class="form-control custom-select-value" name="teacher">
                                                @if (count($teachers) > 0)
                                                @foreach ($teachers as $teacher)
                                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                @endforeach
                                                @else
                                                <option>no teachers</option>
                                                @endif
                                                </select>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tick</th>
                                                <th>subject</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @if(count($subjects) > 0)
                                        @foreach ($subjects as $subject)
                                        <tbody>
                                        <tr>
                                            <td>{{ $subject->id }}</td>
                                            <td><input type="checkbox" value="{{ $subject->id }}" name="attachs[]" id="">
                                            </td>
                                            <td>{{ $subject->name }}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="4">No subjects found.</td>
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
            </div>
        </div>
    </div>
    </x-app-layout>
