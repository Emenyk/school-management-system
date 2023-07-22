<x-app-layout>
    <div class="static-table-area">
        <div class="container-fluid">
            <div class="row">
                @isset($classrooms)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="basic-login-inner">
                            <h3>Add Mark</h3>
                            <p>select class and subject</p>
                            <form action="{{ route('record.mark') }}" method="POST">
                                @csrf
                                <div class="form-select-list">
                                    <select class="form-control custom-select-value" name="class">
                                        @if ($classrooms)
                                            @foreach ($classrooms as $classroom)
                                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                            @endforeach
                                        @else
                                        <option>No classroom</option>
                                        @endif

                                    </select>
                                </div>
                                <br>
                                <div class="form-group-inner">

                                    <button class="btn btn-primary" type="submit">Select</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endisset
                @isset($students)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Student Mark</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="static-table-list">
                                <table class="table sparkle-table">

                                    <form action="{{ route('input.mark') }}" method="POST">
                                        @csrf
                                        <div class="form-select-list">
                                            <select class="form-control custom-select-value" name="type">
                                                <option>Assement Type</option>
                                                <option>assignment</option>
                                                <option>test</option>
                                                <option>first term exam</option>
                                                <option>second term exam</option>
                                                <option>third term exam</option>
                                            </select>
                                        </div>
                                        <div class="form-select-list">
                                            <select class="form-control custom-select-value" name="subject">
                                                @if (count($subjects) > 0)
                                                    @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                    @endforeach
                                                @else
                                                <option>No Subject</option>
                                                @endif
                                            </select>
                                        </div>
                                        <br>
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>#</th>
                                            <th>User</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <input type="text" value="2023/2024" name="session" hidden>
                                        </tr>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="marks[]" placeholder="input data" class="form-control">
                                                </div>
                                            </td>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->name }}
                                                <input type="number" name="students[]" value="{{ $student->id }}" hidden>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
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
                @endisset
            </div>
        </div>
    </div>
    </x-app-layout>
