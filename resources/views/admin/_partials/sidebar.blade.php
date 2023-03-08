<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>

                </li>



                <li class="menu-title" key="t-apps">Admin Management</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-users-cog "></i>
                        <span key="t-dashboards">Admin Setting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.user')}}" key="t-full-calendar">User Management</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('category.index')}}" key="t-products">Category</a></li>
                        <li><a href="{{route('subcategory.index')}}" key="t-products">Sub Category</a></li>
                        <li><a href="{{route('childcategory.index')}}" key="t-products">Child Category</a></li>
                        <li><a href="{{route('brand.index')}}" key="t-products">Brand </a></li>
                        <li><a href="{{route('warehouse.index')}}" key="t-products">Warehouse </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('product.index')}}" key="t-products">Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Offer</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('coupon.index')}}" key="t-invoice-list">Coupon</a></li>
                        <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Pickup Point</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('pickuppoint.index')}}" key="t-invoice-list">Pickup Point</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Ecommerce</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.html" key="t-products">Products</a></li>
                        <li><a href="ecommerce-product-detail.html" key="t-product-detail">Product Detail</a></li>
                        <li><a href="ecommerce-orders.html" key="t-orders">Orders</a></li>
                        <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li>
                        <li><a href="ecommerce-cart.html" key="t-cart">Cart</a></li>
                        <li><a href="ecommerce-checkout.html" key="t-checkout">Checkout</a></li>
                        <li><a href="ecommerce-shops.html" key="t-shops">Shops</a></li>
                        <li><a href="ecommerce-add-product.html" key="t-add-product">Add Product</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html" key="t-inbox">Inbox</a></li>
                        <li><a href="email-read.html" key="t-read-email">Read Email</a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span key="t-email-templates">Templates</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic.html" key="t-basic-action">Basic Action</a></li>
                                <li><a href="email-template-alert.html" key="t-alert-email">Alert Email</a></li>
                                <li><a href="email-template-billing.html" key="t-bill-email">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                        <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-tasks">Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list.html" key="t-task-list">Task List</a></li>
                        <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                        <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                    </ul>
                </li>


                <li class="menu-title" key="t-pages">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.html" key="t-login">Login</a></li>
                        <li><a href="auth-login-2.html" key="t-login-2">Login 2</a></li>
                        <li><a href="auth-register.html" key="t-register">Register</a></li>
                        <li><a href="auth-register-2.html" key="t-register-2">Register 2</a></li>
                        <li><a href="auth-recoverpw.html" key="t-recover-password">Recover Password</a></li>
                        <li><a href="auth-recoverpw-2.html" key="t-recover-password-2">Recover Password 2</a></li>
                        <li><a href="auth-lock-screen.html" key="t-lock-screen">Lock Screen</a></li>
                        <li><a href="auth-lock-screen-2.html" key="t-lock-screen-2">Lock Screen 2</a></li>
                        <li><a href="auth-confirm-mail.html" key="t-confirm-mail">Confirm Email</a></li>
                        <li><a href="auth-confirm-mail-2.html" key="t-confirm-mail-2">Confirm Email 2</a></li>
                        <li><a href="auth-email-verification.html" key="t-email-verification">Email verification</a></li>
                        <li><a href="auth-email-verification-2.html" key="t-email-verification-2">Email Verification 2</a></li>
                        <li><a href="auth-two-step-verification.html" key="t-two-step-verification">Two Step Verification</a></li>
                        <li><a href="auth-two-step-verification-2.html" key="t-two-step-verification-2">Two Step Verification 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-utility">Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html" key="t-starter-page">Starter Page</a></li>
                        <li><a href="pages-maintenance.html" key="t-maintenance">Maintenance</a></li>
                        <li><a href="pages-comingsoon.html" key="t-coming-soon">Coming Soon</a></li>
                        <li><a href="pages-timeline.html" key="t-timeline">Timeline</a></li>
                        <li><a href="pages-faqs.html" key="t-faqs">FAQs</a></li>
                        <li><a href="pages-pricing.html" key="t-pricing">Pricing</a></li>
                        <li><a href="pages-404.html" key="t-error-404">Error 404</a></li>
                        <li><a href="pages-500.html" key="t-error-500">Error 500</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-components">Web Settings</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i
                        class="align-middle bx bx-wrench font-size-16 me-1"></i>
                        <span key="t-charts">Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('seo.index')}}" key="t-apex-charts">SEO Setting</a></li>
                        <li><a href="{{route('smtp.index')}}" key="t-apex-charts">SMTP Setting</a></li>
                        <li><a href="{{route('setting.index')}}" key="t-e-charts">Website Setting</a></li>
                        <li><a href="charts-chartjs.html" key="t-chartjs-charts">Page Setting</a></li>
                        <li><a href="charts-chartjs.html" key="t-chartjs-charts">Payment Gateway</a></li>

                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level">Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1">Level 1.1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1">Level 2.1</a></li>
                                <li><a href="javascript: void(0);" key="t-level-2-2">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
