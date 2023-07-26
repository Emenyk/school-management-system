<x-app-layout>
<div class="courses-area">
    <div class="container-fluid">
        <div class="row">
            @foreach ($subjects as $subject)

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner res-mg-b-30">

                    <div class="courses-title">
                        @isset($subject->image)
                            <a href="{{ route('subjects.show', ['subject' => $subject]) }}"><img src="{{ asset('storage/images/subjects/'. $subject->image)  }}"></a>
                        @endisset
                        @empty($subject->image)
                            <a href="{{ route('subjects.show', ['subject' => $subject]) }}"><img src="{{ asset('app/img/courses/1.jpg') }}" alt=""></a>
                        @endempty
                        <h2>{{ $subject->name }}</h2>
                    </div>
                    <div class="product-buttons">
                        <a href="{{ route('subjects.show', ['subject' => $subject]) }}">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </a>
                        <a href="{{ route('subjects.edit', ['subject' => $subject]) }}">
                            <button type="button" class="button-default cart-btn">Edit</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
</x-app-layout>
