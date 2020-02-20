<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('page.dashboard') }}</title>

    {{ Html::style(asset(mix('assets/admin/css/app.css'))) }}
</head>

<body class="login-container">
    <div class="page-container">
        <div class="page-content">
            <div class="content-wrapper">
                <div class="content">
                    <form method="POST" action="{{ route('admin.postLoginAdmin') }}">
                        @csrf
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5 class="content-group">{{ trans('admin.admin_login.login_account') }}</h5>
                            </div>

                            @include('admin.layout.notification')

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="email" name="email" class="form-control" placeholder="{{ trans('admin.admin_login.email') }}" required>
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" name="password" class="form-control" placeholder="{{ trans('admin.admin_login.password') }}" required>
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">{{ trans('admin.admin_login.sign_in') }} <i class="icon-circle-right2 position-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{ Html::script(asset(mix('assets/admin/js/app.js'))) }}
</body>
</html>
