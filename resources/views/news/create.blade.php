<x-app-layout>
    <div class="mailbox-compose-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
    
                <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="hpanel email-compose">
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-heading hbuilt">
                            <div class="p-xs h4">
                                News
                            </div>
                        </div>
                        <div class="panel-heading hbuilt">
                            <div class="p-xs">
                                <div method="get" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-1 control-label text-left">Topic:</label>
                                        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="title" class="form-control input-sm" placeholder="Title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <textarea name="body" class="summernote6">
                                write here
                            </textarea>
                        </div>
                        <br>
                        <div class="panel-body no-padding">
                            <input type="file" name="attachment" id="">
                        </div>
                        <br>
                        <div class="panel-footer">
                            <button class="btn btn-success ft-compse">Publish</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
    
    