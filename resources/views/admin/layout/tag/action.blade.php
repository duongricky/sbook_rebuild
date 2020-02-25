<div class="row btn-group-sm">
    <button
        class="btn btn-sm btn-primary edit-tag"
        data-id="{{ $tag->id }}"
        data-id="{{ $tag->id }}"
    >
        <i class="fa fa-edit"></i>
    </button>
    <button
        class="btn btn-sm btn-danger delete-tag"
        data-id="{{ $tag->id }}"
        data-count="{{ $tag->books->count() }}"
    >
        <i class="fa fa-trash"></i>
    </button>
</div>
