<x-app-layout>
<div class="product-status mg-b-15 mg-t-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>All News</h4>
                    @can('isAdmin')
                    <div class="add-product">
                        <a href="{{ route('news.create') }}">Add News</a>
                    </div>
                    @endcan
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Date</th>
                                <th>Title.</th>
                                {{-- <th>Editor</th> --}}
                                {{-- <th>Status</th> --}}
                                <th>Setting</th>
                            </tr>
                            @foreach ($allNews as $news)

                            <tr>
                                <td>{{ $news->created_at }}</td>
                                <td><strong>{{ $news->title }}</strong> </td>
                                {{-- <td>editor</td> --}}
                                <td style="display: flex">
                                    <a href="{{ route('news.show', ['news' => $news]) }}">
                                        <button data-toggle="tooltip" title="show" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </a>
                                    @can('isAdmin')
                                    <a href="{{ route('news.edit', ['news' => $news]) }}">
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form method="POST" action="{{ route('news.destroy', ['news' => $news]) }}">
                                        @method('delete')
                                        @csrf
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                    <div class="custom-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">

                                <a class="page-item">{{ $allNews->links() }}</a>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
