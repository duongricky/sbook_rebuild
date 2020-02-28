<div class="row">
    <div class="card card-body bg-blue text-center">
        <div class="mb-3">
            <h5 class="font-weight-semibold mb-0 mt-1">
                {{ $user->name }}
            </h5>
            <span class="d-block">{{ $user->phone }}</span>
        </div>
        <a href="#" class="d-inline-block mb-3">
            <img src="{{ avatarUser($user) }}"
                class="rounded-round avatar-normal">
        </a>
    </div>
    <div class="card-footer">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-bottom border-bottom-0 nav-justified">
                <li class="nav-item active">
                    <a href="#bottom-justified-divided-tab1" class="nav-link" data-toggle="tab">
                        {{ trans('settings.admin.user.baseInfo') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#bottom-justified-divided-tab2" class="nav-link active" data-toggle="tab">
                        {{ trans('settings.admin.user.bio') }}
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="bottom-justified-divided-tab1">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <p>
                                <b>{{ trans('settings.admin.user.workspace') }}</b> : {{ $user->workspace }}
                            </p>
                            <p>
                                <b>{{ trans('settings.admin.user.office') }}</b> : {{ $user->office ? $user->office->name : 'N/A' }}
                            </p>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <p>
                                <b>{{ trans('settings.admin.user.position') }}</b> : {{ $user->position }}
                            </p>
                            <p>
                                <b>{{ trans('settings.admin.user.reputation') }}</b> : {{ $user->score ?? 0 }}
                            </p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12 col-md-6">
                            <span class="btn btn-block btn-outline-success">
                                <span class="fa fa-user user-lg"></span>{{ trans('settings.admin.user.following') }}</span>
                            <h3 class="mb-0">{{ $user->followers()->count() }}</h3>
                        </div>
                        <div class="col-12 col-md-6">
                            <span class="btn btn-block btn-outline-success">
                                <span class="fa fa-user user-lg"></span>{{ trans('settings.admin.user.follower') }}</span>
                            <h3 class="mb-0">{{ $user->followings()->count() }}</h3>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="bottom-justified-divided-tab2">
                    <p>
                        {{ $user->bio }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
