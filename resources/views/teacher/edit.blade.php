<x-app-layout>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Edit Basic Information</a></li>
                        <li><a href="#reviews"> Delete Teacher</a></li>
                        {{-- <li><a href="#INFORMATION">Edit Social Information</a></li> --}}
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="{{ route('teachers.update', ['teacher' => $teacher]) }}" method="POST"  id="demo1-upload" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="row">

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="name" type="text"
                                                            value="{{ $teacher->name }}"
                                                            class="form-control" placeholder="Full Name">
                                                        </div>

                                                        <div class="form-group">
                                                            <input name="telephone" type="tel"
                                                            value="{{ $teacher->telephone }}"
                                                             class="form-control" placeholder="Mobile number">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="email"
                                                            value="{{ $teacher->email }}"
                                                            class="form-control" placeholder="Email">
                                                        </div>
                                                        <br>
                                                        <i>teacher image</i>
                                                        <input type="file" name="image" id="">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="DOB" id="finish" type="date"
                                                            value="{{ $teacher->DOB }}"
                                                            class="form-control" placeholder="Date of Birth">
                                                        </div>

                                                        <div class="form-group">
                                                            <select name="gender" class="form-control">

                                                                <option value="{{ $teacher->gender }}">{{ $teacher->gender }}</option>
                                                                <option value="male">male</option>
                                                                <option value="female">female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="address" type="address"
                                                            value="{{ $teacher->address }}"
                                                            class="form-control" placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <form action="{{ route('teachers.destroy', ['teacher' => $teacher]) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <br>
                                                    <h3>Do you want to delete {{ $teacher->name }}?</h3>
                                                    <br>
                                                <div class="devit-card-custom">
                                                    <button class="btn btn-primary waves-effect waves-light">DELETE</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
