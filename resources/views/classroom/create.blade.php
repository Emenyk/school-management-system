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
                                                        <input name="name" type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="teacher" type="text" class="form-control" placeholder="Class teacher">
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                    <div class="form-group">
                                                        <input name="status" type="text" class="form-control" value="open">
                                                    </div>
                                                    <div class="form-group alert-up-pd">
                                                        <div class="dz-message needsclick download-custom">
                                                            <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                            <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                            <p class="edudropnone"><span class="note needsclick">(This is just a dropzone. Selected image)</span>
                                                            </p>
                                                            <input name="image" class="hd-pro-img" type="text" />
                                                        </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
