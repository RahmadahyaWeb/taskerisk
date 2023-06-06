<div class="row d-flex justify-content-center mb-3  ">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Tasks
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @if ($tasks->count() > 0)
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $task->title }}</td>
                                    <td>
                                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-outline-danger"
                                            type="button">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('tasks.destroy', $task) }}" data-confirm-delete="true"
                                            class="btn btn-outline-danger btn-sm">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">
                                    There is no tasks yet!
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
