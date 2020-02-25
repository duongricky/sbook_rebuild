@extends('admin.layout.main')

@section('progress_bar')
    <li><a href="{{ route('admin.dashboard') }}">{{ trans('page.home') }}</a></li>
    <li class="active">{{ trans('admin.cate.cates') }}</li>
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <div class="col-md-6">
                <h6 class="panel-title text-semibold">{{ trans('admin.cate.cates') }}</h6>
            </div>
            <div class="col-md-6 text-right mb-15">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_create_model">
                    <i class="fas fa-plus"></i> {{ trans('admin.addNew') }}
                </button>
            </div>
            <div class="col-md-12">
                @include('admin.layout.notification')
            </div>
        </div>


        <div class="panel-body">
            <table class="table table-striped- table-bordered table-hover table-checkable" id="categoryList">
                <thead class="text-center">
                <tr>
                    <th title="{{ trans('admin.cate.name') }}">
                        {{ trans('admin.cate.name') }}
                        <span class="sort">
                            <i class="fa fa-long-arrow-alt-up"></i><i class="fa fa-long-arrow-alt-down"></i>
                        </span>
                    </th>
                    <th title="{{ trans('admin.cate.description') }}">
                        {{ trans('admin.cate.description') }}
                        <span class="sort">
                            <i class="fa fa-long-arrow-alt-up"></i><i class="fa fa-long-arrow-alt-down"></i>
                        </span>
                    </th>
                    <th title="{{ trans('admin.action') }}">
                        {{ trans('admin.action') }}
                        <span class="sort">
                            <i class="fa fa-long-arrow-alt-up"></i><i class="fa fa-long-arrow-alt-down"></i>
                        </span>
                    </th>
                </tr>
                </thead>
            </table>

            {{-- modal create --}}
            <div id="category_create_model" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('admin.category.store') }}">
                            @csrf
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h6 class="modal-title">{{ trans('admin.cate.newCate') }}</h6>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">{{ trans('admin.cate.name') }}</label>
                                        <div class="col-lg-10">
                                            <input name="name" type="text" class="form-control mb-10" placeholder="{{ trans('admin.cate.placeHolder.name') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">{{ trans('admin.cate.description') }}</label>
                                        <div class="col-lg-10">
                                            <textarea name="description" rows="5" cols="5" class="form-control mt-10" placeholder="{{ trans('admin.cate.placeHolder.description') }}"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-dismiss="modal">{{ trans('admin.cate.close') }}</button>
                                <button type="submit" class="btn btn-primary">{{ trans('admin.cate.submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end modal create --}}

            {{-- modal detail --}}
            <div id="category_detail_model" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title"></h6>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-info">
                                        <b>{{ trans('admin.cate.name') }}:</b>
                                        <span id="name"></span>
                                    </div>
                                    <div class="single-info">
                                        <b>{{ trans('admin.cate.description') }}:</b>
                                        <span id="description"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">{{ trans('admin.cate.close') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end modal detail --}}

            {{-- modal update --}}
            <div id="category_update_model" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="POST">
                            @method('PUT')
                            @csrf

                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h6 class="modal-title"></h6>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">{{ trans('admin.cate.name') }}</label>
                                        <div class="col-lg-10">
                                            <input id="name" name="name" type="text" class="form-control mb-10" placeholder="{{ trans('admin.cate.placeHolder.name') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">{{ trans('admin.cate.description') }}</label>
                                        <div class="col-lg-10">
                                            <textarea id="description" name="description" type="text" class="form-control mb-10" placeholder="{{ trans('admin.cate.placeHolder.description') }}"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-dismiss="modal">{{ trans('admin.cate.close') }}</button>
                                <button type="submit" class="btn btn-primary">{{ trans('admin.cate.submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end modal update --}}
        </div>
    </div>
@endsection

@section('script')

{{ Html::script('assets/admin/js/category.js') }}

@endsection
