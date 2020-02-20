@if (session('success'))
    <div class="alert alert-info alert-dismissible show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible show" role="alert">
        <ul class="mb-0 p-0">
            @foreach ($errors->all() as $error)
                <li class="list-group-item p-0">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
