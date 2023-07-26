<x-app-layout>
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Class List</h4>
                    <div class="add-product">
                        <a href="{{ route('classrooms.create') }}">Add Classroom</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Class ID</th>
                                <th>Class Name.</th>
                                <th>Status</th>
                                <th>Class Teacher</th>
                                <th>No. of Students</th>
                                <th>Setting</th>
                            </tr>
                            @foreach ($classrooms as $classroom)

                            <tr>
                                <td>{{ $classroom->id }}</td>
                                <td>{{ $classroom->name }}</td>
                                <td>
                                    @if ($classroom->status == 'inactive')
                                    <button class="btn btn-warning">{{ $classroom->status }}</button>
                                    @else
                                    <button class="pd-setting">{{ $classroom->status }}</button>
                                    @endif
                                </td>
                                <td>{{ $classroom->classTeacher }}</td>

                                {{-- <td>01962067309</td> --}}
                                <td>{{ $classroom->students()->count() }}</td>
                                <td style="display: flex">
                                    <a href="{{ route('classrooms.edit', ['classroom' => $classroom]) }}">
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form method="POST" action="{{ route('classrooms.destroy', ['classroom' => $classroom]) }}">
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
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">

                                <a class="page-item">{{ $classrooms->links() }}</a>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
