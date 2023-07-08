<x-app-layout>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Add Classroom</a></li>
                        <li><a href="#INFORMATION">Class Image</a></li>

                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <form id="add-department" action="#" class="add-department">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="class_name" type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="class_teacher" type="text" class="form-control" placeholder="Class teacher">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="email" type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="telephone" type="number" class="form-control" placeholder="Mobile phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="class_section" type="text" class="form-control" placeholder="Section">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="status" type="text" class="form-control" value="open">
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
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="devit-card-custom">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                                    </div>
                                                    <a href="#!" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                </div>
                                            </div>
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
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="devit-card-custom">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="select class">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" name="class_image">
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
