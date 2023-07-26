<x-app-layout>
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Basic Information</a></li>
                            <li><a href="#INFORMATION">Other Information</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="{{ route('parents.update', [$parent->id]) }}" method="POST" id="demo1-upload" enctype="multipart/form-data">
                                                    @method('put')
                                                    @csrf
                                                    <div class="row">

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="name" value="{{ $parent->name }}" type="text" class="form-control" placeholder="Full Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="email" value="{{ $parent->email }}" type="email" class="form-control" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="address" value="{{ $parent->address }}" type="address" class="form-control" placeholder="Address">
                                                            </div>
                                                            <br>
                                                            <i>parent image</i>
                                                            <input type="file" name="image" id="">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    <option value="{{ $parent->gender }}" selected="" >{{ $parent->gender }}</option>
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="telephone" value="{{ $parent->telephone }}" type="text" class="form-control" placeholder="Mobile number">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                            <form action="{{ route('parents.destroy', [$parent->id]) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <div class="col-lg-12">
                                                    <div class="devit-card-custom">

                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Delete</button>
                                                    </div>
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
</x-app-layout>
