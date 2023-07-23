<x-app-layout>
<div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            @foreach ($students as $student)
            <a href="{{ route('students.show', ['student' => $student->id]) }}">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-mg-b-30">
                    <div class="student-img">
                        @isset($student->image)
                            <img src="{{ asset('storage/images/students/'. $student->image)  }}">
                        @endisset
                        @empty($student->image)
                            <img src="{{ asset('app/img/student/student1.jpg') }}" alt="" srcset="">
                        @endempty
                    </div>
                    <div class="student-dtl" >
                        <h2>{{ $student->name }}</h2>
                        <p class="dp-ag"><b>Age:</b> {{ $student->age }} Years</p>
                        <p class="dp">Roll No: {{ $student->id }} <span style="margin-left: 10px">Gender: {{ $student->gender }}</span></p>
                    </div>
                </div>
            </div>
            </a>
            @endforeach

        </div>
       
    </div>
</div>
</x-app-layout>
