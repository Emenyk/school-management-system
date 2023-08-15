<x-app-layout>
<div class="mailbox-area mg-b-15">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                <div class="hpanel">
                    <div class="panel-body">

                        <div class="table-responsive ib-tb">
                            <table class="table table-hover table-mailbox">
                                <tbody>
                                    <tr class="unread">
                                        <td class="">
                                            <div class="checkbox checkbox-single checkbox-success">
                                                <input type="checkbox" checked>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td><a href="#">Topic</a></td>
                                        <td><a href="#">Message</a>
                                        </td>
                                        <td><a href="#">Read</a></td>
                                        <td class="text-right mail-date">Date</td>
                                    </tr>
                                    @isset($memos)
                                    @foreach ($memos as $memo)

                                    <tr>
                                        <td class="">
                                            <div class="checkbox">
                                                <input type="checkbox">
                                                <label></label>
                                            </div>
                                        </td>
                                        <td><a href="#">{{ $memo->subject }}</a></td>
                                        <td><a href="#">{{ $memo->body }}</a></td>
                                        <td><a href="{{ route('memo.show', [$memo]) }}"><i class="fa fa-eye"></i></a></td>
                                        <td class="text-right mail-date">{{ $memo->created_at }}</td>
                                    </tr>
                                    @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer ib-ml-ft">
                        <i class="fa fa-mailbox"> </i>{{ @count($memos) }} messages
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
