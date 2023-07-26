<x-app-layout>
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Library List</h4>
                    <div class="add-product">
                        <a href="{{ route('libraries.create') }}">Add Library</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>File</th>
                                <th>Name of Asset</th>
                                <th>Status</th>
                                <th>Author</th>
                                <th>Class</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Setting</th>
                            </tr>
                            @foreach ($libraries as $key => $library)

                            <tr>
                                <td>{{ $key }}</td>
                                <td><img src="{{ asset('app/img/product/book-1.jpg') }}" alt="" /></td>
                                <td>{{ $library->asset }}</td>
                                <td>
                                    <button class="pd-setting">{{ $library->status }}</button>
                                </td>
                                <td>{{ $library->author }}</td>
                                <td>{{ $library->classroom ?? 'unspecified' }}</td>
                                <td>{{ $library->type ?? 'Nah' }}</td>
                                <td>{{ $library->price ?? 'Nah' }}</td>
                                <td style="display: flex">
                                    <a href="{{ route('libraries.edit', ['library' => $library]) }}">
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="{{ route('libraries.destroy', ['library' => $library]) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <a class="page-link" href="#">{{ $libraries->links() }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
