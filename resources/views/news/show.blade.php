<x-app-layout>
    <div class="mailbox-view-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="hpanel shadow-inner responsive-mg-b-30">
                        <div class="panel-body">
                            <a href="{{ route('news.create') }}" class="btn btn-success compose-btn btn-block m-b-md">Compose</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="hpanel email-compose mailbox-view">
                        {{-- <div class="panel-heading hbuilt">

                            <div class="p-xs h4">
                                <small class="pull-right view-hd-ml">
                                        08:26 PM (16 hours ago)
                                    </small> Email view

                            </div>
                        </div> --}}
                        <div class="border-top border-left border-right bg-light">
                            <div class="p-m custom-address-mailbox">

                                <div>
                                    <span class="font-extra-bold">Subject: </span>{{ $news->title }}
                                </div>
                                <div>
                                    <span class="font-extra-bold">Date: </span> {{ $news->created_at }}
                                </div>
                            </div>
                        </div>
                        <div class="panel-body panel-csm">
                            <div>
                                <h4>{{ $news->title }}</h4>

                                <p>{{ $news->body }}</p>

                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
