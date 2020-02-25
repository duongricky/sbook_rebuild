<div class="sidebar sidebar-main">
    <div class="sidebar-content">
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left">
                        <img src="{{ auth()->user()->avatar }}" class="img-circle img-sm">
                    </a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{ auth()->user()->name }}</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;{{ auth()->user()->workspace }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li class="navigation-header"><span>{{ trans('admin.sidebar.main') }}</span> <i class="icon-menu"></i></li>
                    <li class="">
                        <a href="{{ route('admin.dashboard') }}"><i class="icon-home4"></i> <span>{{ trans('admin.sidebar.dashboard') }}</span></a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.books.index') }}"><i class="fas fa-book"></i> <span>{{ trans('admin.sidebar.book') }}</span></a>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-stack2"></i> <span>{{ trans('admin.sidebar.category') }}</span></a>
                        <ul>
                            <li class="">
                                <a href="{{ route('admin.category.index') }}">{{ trans('admin.sidebar.listCate') }}</a>
                            </li>
                            <li class="">
                                <a href="{{ route('admin.category.create') }}">{{ trans('admin.sidebar.newCate') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-stack2"></i> <span>{{ trans('admin.sidebar.office') }}</span></a>
                        <ul>
                            <li class="">
                                <a href="{{ route('admin.offices.index') }}">{{ trans('admin.sidebar.listOffice') }}</a>
                            </li>
                            <li class="">
                                <a href="{{ route('admin.offices.create') }}">{{ trans('admin.sidebar.newOffice') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-stack2"></i> <span>{{ trans('admin.sidebar.post') }}</span></a>
                        <ul>
                            <li class="">
                                <a href="#">{{ trans('admin.sidebar.listPost') }}</a>
                            </li>
                            <li class="">
                                <a href="#">{{ trans('admin.sidebar.newPost') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-user"></i> <span>{{ trans('admin.sidebar.user') }}</span></a>
                        <ul>
                            <li class="">
                                <a href="{{ route('admin.users.index') }}">{{ trans('admin.sidebar.listUser') }}</a>
                            </li>
                            <li class="">
                                <a href="{{ route('admin.users.create') }}">{{ trans('admin.sidebar.newUser') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-stack2"></i> <span>{{ trans('admin.sidebar.reputation') }}</span></a>
                        <ul>
                            <li class="">
                                <a href="#">{{ trans('admin.sidebar.list_reputation') }}</a>
                            </li>
                            <li class="">
                                <a href="#">{{ trans('admin.sidebar.add_reputation') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-stack2"></i> <span>{{ trans('admin.sidebar.menu') }}</span></a>
                        <ul>
                            <li class="">
                                <a href="#">{{ trans('admin.sidebar.top_menu') }}</a>
                            </li>
                            <li class="">
                                <a href="#">{{ trans('admin.sidebar.down_menu') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-stack2"></i> <span>{{ trans('admin.sidebar.tag') }}</span></a>
                        <ul>
                            <li class="">
                                <a href="#">{{ trans('admin.sidebar.list_tag') }}</a>
                            </li>
                            <li class="">
                                <a href="#">{{ trans('admin.sidebar.add_tag') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.setting') }}"><i class="icon-home4"></i> <span>{{ trans('admin.option.option') }}</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
