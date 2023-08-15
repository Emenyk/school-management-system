<x-app-layout>
    <div class="mailbox-view-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="hpanel shadow-inner responsive-mg-b-30">
                        <div class="panel-body">
                            <a href="mailbox_compose.html" class="btn btn-success compose-btn btn-block m-b-md">Compose</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="hpanel email-compose mailbox-view">

                        <div class="border-top border-left border-right bg-light">
                            <div class="p-m custom-address-mailbox">

                                <div>
                                    <span class="font-extra-bold">Subject: </span> {{ $memo->subject }}
                                </div>
                                <div>
                                    <span class="font-extra-bold">Date: </span> {{ $memo->created_at }}
                                </div>
                            </div>
                        </div>
                        <div class="panel-body panel-csm">
                            <div>
                                <h4>{{ $memo->subject }} </h4>

                                <p>{{ $memo->body }}</p>

                            </div>
                        </div>
{{--
                        <div class="border-bottom border-left border-right bg-white mg-tb-15">
                            <p class="m-b-md">
                                <span><i class="fa fa-paperclip"></i> 3 attachments - </span>
                                <a href="#" class="btn btn-default btn-xs">Download all in zip format <i class="fa fa-file-zip-o"></i> </a>
                            </p>

                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="hpanel vw-mb">
                                            <div class="panel-body file-body incon-ctn-view">
                                                <i class="fa fa-file-pdf-o text-info"></i>
                                            </div>
                                            <div class="panel-footer ft-pn">
                                                <a href="#">Document_2016.doc</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="hpanel vw-mb res-mg-t-30 table-mg-t-pro-n">
                                            <div class="panel-body file-body incon-ctn-view">
                                                <i class="fa fa-file-audio-o text-warning"></i>
                                            </div>
                                            <div class="panel-footer ft-pn">
                                                <a href="#">Audio_2016.doc</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="hpanel vw-mb res-mg-t-30 table-mg-t-pro-n">
                                            <div class="panel-body file-body incon-ctn-view">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="panel-footer ft-pn">
                                                <a href="#">Sheets_2016.doc</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}

                        {{-- <div class="panel-footer text-right ft-pn">
                            <div class="btn-group active-hook">
                                <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                                <button class="btn btn-default"><i class="fa fa-arrow-right"></i> Forward</button>
                                <button class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                                <button class="btn btn-default"><i class="fa fa-trash-o"></i> Remove</button>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
