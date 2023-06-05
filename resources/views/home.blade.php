<x-app-layout title="Home">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header text-uppercase">
                    Taskerist
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus optio eum temporibus
                    voluptatum, commodi cumque culpa eos error quas quibusdam!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
