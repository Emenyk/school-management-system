<x-app-layout>


    <div class="static-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="basic-login-inner">
                            <h3>Check Result</h3>
                            <p>put student unique ID</p>
                            <form action="{{ route('result.show') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="studentID" class="form-control" placeholder="######">
                                </div>

                                <br>
                                <div class="form-group-inner">

                                        <button class="btn btn-primary" type="submit">Select</button>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline9-list mt-b-30 res-mg-t-30 analysis-progrebar-ctn">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Student Name</h1>
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
                                        <tr>
                                            <td>1</td>
                                            <td>mark
                                            </td>
                                            <td>Roshid</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>mark
                                            </td>
                                            <td>Khan</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>mark
                                            </td>
                                            <td>Shak</td>
                                            <td>..........</td>
                                        </tr>

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
