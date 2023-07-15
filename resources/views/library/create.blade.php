<x-app-layout>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Library Assets</a></li>
                       
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form action="{{ route('libraries.store') }}" method="POST" enctype="multipart/form-data"  id="demo1-upload">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="asset" type="text" class="form-control" placeholder="Name of Asset">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="author" type="text" class="form-control" placeholder="author">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="year" type="number" class="form-control" placeholder="Year of publication">
                                                        </div>
                                                        <br>
                                                        <i>insert asset file</i>
                                                        <input type="file" name="file" id="">

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="classroom" type="text" class="form-control" placeholder="classroom">
                                                        </div>
                                                        <div class="form-group res-mg-t-15">
                                                            <input name="type" type="text" class="form-control" placeholder="pdf, doc, html, png etc">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="price" type="text" class="form-control" value="free">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="status" type="text" class="form-control" value="available">
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
</div>
</x-app-layout>
