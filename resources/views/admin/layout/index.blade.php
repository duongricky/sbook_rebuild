@extends('admin.layout.main')

@section('progress_bar')
    <li class="active">{{ trans('page.home') }}</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel bg-teal-400">
                        <div class="panel-body">
                            <h3 class="no-margin">{{ trans('data') }}</h3>
                            <div class="text-muted text-size-small">{{ trans('page.dashboard.users_number') }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="panel bg-pink-400">
                        <div class="panel-body">
                            <h3 class="no-margin">{{ trans('data') }}</h3>
                            <div class="text-muted text-size-small">{{ trans('page.dashboard.tests_number') }}</div>
                        </div>
                        <div id="server-load"></div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="panel bg-blue-400">
                        <div class="panel-body">
                            <h3 class="no-margin">{{ trans('data') }}</h3>
                            <div class="text-muted text-size-small">{{ trans('page.dashboard.tested_number') }}</div>
                        </div>
                        <div id="today-revenue"></div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="panel bg-blue-400">
                        <div class="panel-body">
                            <h3 class="no-margin">{{ trans('data') }}</h3>
                            <div class="text-muted text-size-small">{{ trans('page.dashboard.commands_number') }}</div>
                        </div>
                        <div id="today-revenue"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title text-semibold">{{ trans('page.dashboard.title_chart_statical') }}</h6>
                </div>

                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
@endsection
