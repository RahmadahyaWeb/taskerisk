<x-app-layout title="Tasks">
    {{-- Form edit --}}
    <div class="row d-flex justify-content-center mb-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Edit task
                </div>
                <form action="{{ route('tasks.update', $task) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                            @include('tasks._form', [
                                'button' => 'Update',
                            ])
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-table></x-table>

</x-app-layout>
