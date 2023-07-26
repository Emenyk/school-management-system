<x-app-layout>
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                @foreach ($parents as $parent)

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                        <div class="panel-body custom-panel-jw">
                            <div class="social-media-in">
                                <a href="{{ route('parents.edit', [$parent->id]) }}"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('parents.show', [$parent->id]) }}"><i class="fa fa-clone"></i></a>
                            </div>

                            @isset($parent->image)
                                <img src="{{ asset('storage/images/parents/'. $parent->image)  }}">
                            @endisset
                            @empty($parent->image)
                                <img alt="logo" class="" src="{{ asset('app/img/parents/parent2.jpeg') }}">
                            @endempty

                            <h3><a href="">{{ $parent->name }}</a></h3>
                            <p class="all-pro-ad">{{ $parent->gender }}</p>
                            <p>
                                {{ $parent->email }}
                            </p>
                        </div>
                        <div class="panel-footer contact-footer">
                            <div class="professor-stds-int">
                                <div class="professor-stds" style="margin-right: 10px">
                                    <div class="contact-stat"><span>ID: </span> <strong>{{ $parent->id }}</strong></div>
                                </div>
                                <div class="professor-stds">
                                    <div class="contact-stat"><span>Telephone: </span> <strong>{{ $parent->telephone }}</strong></div>
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
