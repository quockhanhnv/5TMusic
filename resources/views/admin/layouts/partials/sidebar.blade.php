<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
    <!-- BEGIN: Aside Menu -->
    <div
        id="m_ver_menu"
        class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
        m-menu-vertical="1"
        m-menu-scrollable="0" m-menu-dropdown-timeout="500"
    >
        <ul class="m-menu__nav ">
            <li class="m-menu__section m-menu__section--first">
                <h4 class="m-menu__section-text">
                    Departments
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>
            <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                <a href="{{ route('dashboard') }}" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-text">
                        Dashboard
                    </span>
                </a>
            </li>

            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="{{ route('admin.category.index') }}" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-suitcase"></i>
                    <span class="m-menu__link-text">
                        Danh mục
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a href="{{ route('admin.product.index') }}" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-light"></i>
                    <span class="m-menu__link-text">
                        Sản phẩm
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a href="{{ route('admin.course.index') }}" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-computer"></i>
                    <span class="m-menu__link-text">
                        Khóa học
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a href="{{ route('admin.post.index') }}" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-computer"></i>
                    <span class="m-menu__link-text">
                        Bài viết
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="{{ route('admin.gallery.index') }}" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-share"></i>
                    <span class="m-menu__link-text">
                        Ảnh học viên
                    </span>
                </a>
            </li>
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">
                    Báo cáo
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-graphic-1"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Hóa đơn
                            </span>
                            <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--accent">
                                    3
                                </span>
                            </span>
                        </span>
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"  m-menu-link-redirect="1">
                            <span class="m-menu__link">
                                <span class="m-menu__item-here"></span>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            Support
                                        </span>
                                        <span class="m-menu__link-badge">
                                            <span class="m-badge m-badge--accent">
                                                3
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                            <a  href="{{ route('admin.order.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Danh sách
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Cases
                                </span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu ">
                                <span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                Pending
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                Urgent
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                Done
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                Archive
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Clients
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Audit
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="{{ route('admin.reservation.index') }}" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-alert"></i>
                    <span class="m-menu__link-text">
                        Lịch hẹn
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="{{ route('admin.rating.index') }}" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-share"></i>
                    <span class="m-menu__link-text">
                        Đánh giá
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="inner.html" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-network"></i>
                    <span class="m-menu__link-text">
                        Bình luận
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="inner.html" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-alert"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Bills
                            </span>
                            <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--danger">
                                    12
                                </span>
                            </span>
                        </span>
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="inner.html" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-technology"></i>
                    <span class="m-menu__link-text">
                        IPO
                    </span>
                </a>
            </li>
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">
                    System
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                    <span class="m-menu__link-text">
                        Applications
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                            <span class="m-menu__link">
                                <span class="m-menu__item-here"></span>
                                <span class="m-menu__link-text">
                                    Applications
                                </span>
                            </span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Audit
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Notifications
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Messages
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-computer"></i>
                    <span class="m-menu__link-text">
                        Modules
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                            <span class="m-menu__link">
                                <span class="m-menu__item-here"></span>
                                <span class="m-menu__link-text">
                                    Modules
                                </span>
                            </span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Logs
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Errors
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Configuration
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="inner.html" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-cogwheel"></i>
                    <span class="m-menu__link-text">
                        Files
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="inner.html" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-lifebuoy"></i>
                    <span class="m-menu__link-text">
                        Security
                    </span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                <a  href="inner.html" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-settings"></i>
                    <span class="m-menu__link-text">
                        Options
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->
