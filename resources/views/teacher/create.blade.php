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
                                                <form action="{{ route('teachers.store') }}" method="POST"  id="demo1-upload" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="name" type="text" class="form-control" placeholder="Full Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="address" type="address" class="form-control" placeholder="Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="telephone" type="tel" class="form-control" placeholder="Mobile number">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                                            </div>
                                                            <br>
                                                            <i>teacher image</i>
                                                            <input type="file" name="image" id="">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="DOB" id="finish" type="text" class="form-control" placeholder="Date of Birth">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="subject" class="form-control">
                                                                        <option value="none" selected="" disabled="">Select subject</option>
                                                                        <option value="0">Nigeria</option>
                                                                        <option value="1">Others</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    <option value="none" selected="" disabled="">Select Gender</option>
                                                                    <option value="0">Male</option>
                                                                    <option value="1">Female</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
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

                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="url" name="facebook" class="form-control" placeholder="Facebook URL">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" name="twitter" class="form-control" placeholder="Twitter URL">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="url" name="linkedin" class="form-control" placeholder="Linkedin URL">
                                                        </div>
                                                        <div class="form-group res-mg-t-15">
                                                            <textarea name="description" placeholder="Description"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
    </div>
    </x-app-layout>
