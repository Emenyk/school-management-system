<x-app-layout>
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Library Assets Edit</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                <form action="{{ route('libraries.update', ['library' => $library]) }}" method="POST" enctype="multipart/form-data"  id="demo1-upload">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="asset" value="{{ $library->asset }}" type="text" class="form-control" placeholder="Name of Asset">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="author" value="{{ $library->author }}" type="text" class="form-control" placeholder="author">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="year" value="{{ $library->year }}" type="number" class="form-control" placeholder="Year of publication">
                                                            </div>
                                                            <br>
                                                            <i>insert asset file</i>
                                                            <input type="file" name="file" id="">

                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group res-mg-t-15">
                                                                <input name="type" value="{{ $library->type }}" type="text" class="form-control" placeholder="filetype  = pdf, doc, html, img etc...">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="classroom" class="form-control">
                                                                    <option selected="">{{ $library->classroom }}</option>
                                                                    @if ($classrooms)
                                                                        @foreach ($classrooms as $classroom)
                                                                        <option>{{ $classroom->name }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="price" type="text" class="form-control" value="{{ $library->price }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="status" class="form-control">
                                                                    <option selected="">{{ $library->status }}</option>
                                                                    <option>Available</option>
                                                                    <option>unavailable</option>
                                                                </select>
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


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
