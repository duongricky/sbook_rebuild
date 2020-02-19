<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ __('page.dashboard') }}</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    "families": ["Roboto Condensed:300,400,500,600,700", "Roboto:300,400,500,600,700"]
                },
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <!--end::Web font -->

        @include('admin.layout.style')
    </head>
    <body>
        <!-- Main navbar -->
        @include('admin.layout.navbar')
        <!-- /main navbar -->

        <!-- Page container -->
        <div class="page-container">
            <!-- Page content -->
            <div class="page-content">
                <!-- Main sidebar -->
                @include('admin.layout.sidebar')
                <!-- /main sidebar -->

                <!-- Main content -->
                <div class="content-wrapper">
                    <div class="page-header mt-15 mb-15">
                        <div class="breadcrumb-line breadcrumb-line-component">
                            <ul class="breadcrumb">
                                @yield('progress_bar')
                            </ul>
                        </div>
                    </div>

                    <!-- Content area -->
                    <div class="content">
                        @yield('content')

                        <!-- Footer -->
                        @include('admin.layout.footer')
                        <!-- /footer -->
                    </div>
                    <!-- /content area -->
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
        </div>
        <!-- /page container -->

        <!-- begin::Scroll Top -->
        <div id="m_scroll_top" class="m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->

       @include('admin.layout.script')
    </body>
</html>
