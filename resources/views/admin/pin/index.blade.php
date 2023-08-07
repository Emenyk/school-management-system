<x-app-layout>
    <div class="product-status mg-b-15 mg-t-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>All Result Pin</h4>
                        <div class="add-product">
                            {{-- <a href="{{ route('news.create') }}">Add News</a> --}}
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Id</th>
                                    <th>Pin</th>
                                    {{-- <th>Academic year</th> --}}
                                    <th>Setting</th>
                                </tr>
                                @foreach ($pins as $pin)

                                <tr>
                                    <td>{{ $pin->id }}</td>
                                    <td><strong>{{ $pin->code }}</strong> </td>

                                    <td style="display: flex">
                                        @can('isAdmin')
                                        <form method="POST" action="{{ route('pin.destroy', ['pin' => $pin]) }}">
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

                                    <a class="page-item">{{ $pins->links() }}</a>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
