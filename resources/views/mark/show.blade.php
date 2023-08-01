<x-app-layout>


    <div class="static-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="basic-login-inner">
                            <h3>Check Result</h3>
                            <p>Fill the form</p>
                            <form action="{{ route('evaluate.pin') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="number" name="Id" class="form-control" placeholder="student Id" required>
                                </div>

                                <br>
                                <div class="form-group">
                                    <input type="text" name="pin" class="form-control" placeholder="######">
                                </div>

                                <br>
                                <div class="form-group-inner">
                                    <button class="btn btn-primary" type="submit">Check Result</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                        @isset($marks)
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>{{ $student->name }}</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="static-table-list">
                                <table class="table sparkle-table">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Assignment</th>
                                            <th>Test</th>
                                            <th>Examination</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($marks as $mark)

                                        <tr>
                                            <td>{{ $mark->subject->name }}</td>
                                            <td>{{ $mark->assignment }}</td>
                                            <td>{{ $mark->test }}</td>
                                            <td>{{ $mark->test }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endisset
                    </div>
                </div>
            </div>


        </div>
    </div>
    </x-app-layout>
