<x-app-layout title="Tasks">
    {{-- Form create --}}
    <div class="row d-flex justify-content-center mb-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Create task
                </div>
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            @include('tasks._form', [
                                'button' => 'Create',
                            ])
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-table></x-table>
</x-app-layout>
