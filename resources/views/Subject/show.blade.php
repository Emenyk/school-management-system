<x-app-layout>
<div class="blog-details-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-details-inner">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="latest-blog-single blog-single-full-view">
                                <div class="blog-image">
                                    @isset($subject->image)
                                    <a href=""><img src="{{ asset('storage/images/subjects/'. $subject->image)  }}"></a>
                                    @endisset
                                    @empty($subject->image)
                                    <a href="#"><img src="{{ asset('app/img/courses/1.jpg') }}" alt="" />
                                    </a>
                                    @endempty
                                    <div class="blog-date">
                                        <p><span class="blog-day">{{ now()->format('d') }}</span> {{ now()->format('F') }}</p>
                                    </div>
                                </div>
                                <div class="blog-details blog-sig-details">
                                    <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                        <span><a href="#"><i class="fa fa-book"></i> <b>Subject Name:</b> {{ $subject->name }}</a></span>
                                        @isset($subject->classrooms)
                                        <span><a href="#"><i class="fa fa-university"></i> <b>Classroom:</b> {{ $subject->classrooms->name }}</a></span>
                                        @endisset
                                        @isset($subject->teacher)
                                        <span><a href="#"><i class="fa fa-user"></i> <b>Teacher:</b> {{ $subject->teacher->name }}</a></span>
                                        @endisset
                                    </div>
                                    @isset($subject->description)
                                    <h1><a class="blog-ht" href="#">{{ $subject->name }}</a></h1>
                                    <p>{{ $subject->description }}</p>
                                    @endisset
                                    @empty($subject->description)

                                    <h1><a class="blog-ht" href="#">{{ $subject->name }}</a></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    @endempty


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="comment-head">
                                <h3>Comments</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="user-comment">
                                <img src="img/contact/1.jpg" alt="" />
                                <div class="comment-details">
                                    <h4>Jonathan Doe 2015 15 July <span class="comment-replay">Replay</span></h4>
                                    <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally <span class="mobile-sm-d-n">Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @can('isStudent')

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="lead-head">
                                <h3>Leave A Comment</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="coment-area">
                            <form id="comment" action="#" class="comment">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-res-mg-bt">
                                    <div class="form-group">
                                        <input name="name" class="responsive-mg-b-10" type="text" placeholder="Name" />
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="payment-adress comment-stn">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Send</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                    @endcan


                    <form action="{{ route('subjects.destroy', ['subject' => $subject]) }}" method="post">
                        @method('delete')
                        @csrf
                        <button style="background-color: red; margin-left: 30px" type="submit" class="btn btn-primary waves-effect waves-light">Delete</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>

