<x-app-layout>
<div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            @foreach ($teachers as $teacher)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="{{ route('teachers.edit', ['teacher' => $teacher->id]) }}"><i class="fa fa-edit"></i></a>
                            {{-- <a href="#"><i class="fa fa-twitter"></i></a> --}}
                            {{-- <a href="#"><i class="fa fa-pinterest"></i></a> --}}
                        </div>

                        @isset($teacher->image)
                            <img src="{{ asset('storage/images/teacher/'. $teacher->image)  }}">
                        @endisset
                        @empty($teacher->image)
                            {{-- <img src="{{ asset('app/img/student/student1.jpg') }}" alt="logo" class=""> --}}
                            <img alt="logo" class="" src="{{ asset('app/img/contact/1.jpg') }}">
                        @endempty

                        <h3><a href="">{{ $teacher->name }}</a></h3>
                        <p class="all-pro-ad">{{ $teacher->gender }}</p>
                        <p>
                            {{ $teacher->email }}
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds" style="margin-right: 10px">
                                <div class="contact-stat"><span>ID: </span> <strong>{{ $teacher->id }}</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Telephone: </span> <strong>{{ $teacher->telephone }}</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
</x-app-layout>
