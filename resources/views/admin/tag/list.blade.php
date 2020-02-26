@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <div class="col-md-6">
                        <h6 class="panel-title text-semibold">{{ trans('admin.book.books') }}</h6>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="tagList">
                        <thead class="text-center">
                        <tr>
                            <th title="{{ trans('admin.book.title') }}">
                                {{ trans('admin.book.title') }}
                                <span class="sort">
                            <i class="fa fa-long-arrow-alt-up"></i><i class="fa fa-long-arrow-alt-down"></i>
                        </span>
                            </th>
                            <th title="{{ trans('admin.action') }}">
                                {{ trans('admin.action') }}
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title text-semibold">
                        {{ trans('admin.tag.new') }}
                    </h6>
                </div>

                <div class="panel-body text-center">
                    <form action="{{ route('admin.tags.store') }}" method="post" id="form-create">
                        @csrf
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="Tên tag"
                                value="{{ old('name') }}"
                                required
                            >
                        </div>
                        <button type="submit" class="btn btn-success">
                            {{ trans('admin.tag.createBtn') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <button type="button" id="btn-tag" class="hide btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTag"></button>
    <div class="modal fade" id="modalTag" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelTitleId"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid" id="content-tag">
                        <div class="col-md-8 col-md-offset-2">
                            <h3 class="text-center">{{ trans('admin.tag.update') }}</h3>
                            <form action="" id="form-update">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        placeholder="Tên tag"
                                        value=""
                                        required
                                    >
                                </div>
                                <div class="row text-center">
                                    <button type="button" id="update-tag" class="btn btn-success">
                                        {{ trans('admin.tag.updateBtn') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close-modal" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

{{ Html::script('assets/admin/js/tag.js') }}

@endsection
