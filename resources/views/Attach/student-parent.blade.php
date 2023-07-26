<x-app-layout>
    <div class="static-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Assign Students to Parent</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="static-table-list">
                                <table class="table sparkle-table">
                                    <form action="{{ route('parentToStudent') }}" method="POST" >
                                        @csrf
                                        <div class="form-select-list">
                                            <select class="form-control custom-select-value" name="parent">
                                                @if (count($parents) > 0)
                                                @foreach ($parents as $parent)
                                                <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                                @endforeach
                                                @else
                                                <option>no parents</option>
                                                @endif
                                                </select>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>Roll No</th>
                                                <th>Tick</th>
                                                <th>Student</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @if(count($students) > 0)
                                        @foreach ($students as $student)
                                        <tbody>
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td><input type="checkbox" value="{{ $student->id }}" name="attachs[]" id="">
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
            </div>
        </div>
    </div>
    </x-app-layout>
