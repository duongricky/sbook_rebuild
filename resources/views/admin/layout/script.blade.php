{{ Html::script(asset('bower_components/admin-assets/js/core/libraries/jquery.min.js')) }}
{{ Html::script(asset('bower_components/admin-assets/js/datatables/jquery.dataTables.min.js')) }}
{{ Html::script(asset('bower_components/admin-assets/js/sweetalert2.min.js')) }}
{{ Html::script(asset('bower_components/admin-assets/js/jquery.validate.min.js')) }}
{{ Html::script(asset('bower_components/admin-assets/js/bootstrap-datepicker.min.js')) }}
{{ Html::script(asset('bower_components/admin-assets/js/plugins/uploaders/fileinput/fileinput.min.js')) }}
{{ Html::script(asset('assets/js/config.js')) }}
{{ Html::script(asset('assets/admin/js/helper.js')) }}
{{ Html::script(asset(mix('assets/admin/js/app.js'))) }}
@yield('script')
