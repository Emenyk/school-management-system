<x-app-layout>


    <div class="static-table-area">
        <div class="container-fluid">
            <div class="row">
                @isset($classrooms)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="basic-login-inner">
                            <h3>Mark Attendance</h3>
                            <p>select class</p>
                            <form action="{{ route('Mark.attendance') }}" method="POST">
                                @csrf
                                <div class="form-select-list">
                                    <select class="form-control custom-select-value" name="classroom">
                                        @foreach ($classrooms as $classroom)

                                        <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                        @endforeach

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
           
            </div>


        </div>
    </div>
    </x-app-layout>
