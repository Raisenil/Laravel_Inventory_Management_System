<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-archive-fill"></i>
                                    <span>Manage Suppliers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('supplier.all')}}">All Suppliers</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class=" ri-account-circle-fill"></i>
                                    <span>Manage Customers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('customer.all')}}">All Customers</a></li>
                                    <li><a href="{{route('credit.customer')}}">Credit Customers</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class=" ri-home-gear-fill"></i>
                                    <span>Manage Units</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('unit.all')}}">All Unit</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class=" ri-checkbox-multiple-blank-fill"></i>
                                    <span>Manage Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('category.all')}}">All Category</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class=" ri-dropbox-fill"></i>
                                    <span>Manage Product</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('product.all')}}">All Products</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class=" ri-money-dollar-circle-fill"></i>
                                    <span>Manage Purchase</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('purchase.all')}}">All Purchases</a></li>
                                    <li><a href="{{route('purchase.pending')}}">Approval Purchases</a></li>
                                    <li><a href="{{route('daily.purchase.report')}}">Daily Purchases Report</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class=" ri-file-copy-2-fill"></i>
                                    <span>Manage Invoice</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('invoice.all')}}">All Invoice</a></li>
                                    <li><a href="{{route('invoice.pending')}}">Approval Invoice</a></li>
                                    <li><a href="{{route('print.invoiceList')}}">Print Invoice</a></li>
                                    <li><a href="{{route('daily.invoice.report')}}">Daily Invoice Report</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Stock</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-inbox-archive-fill"></i>
                                    <span>Manage Stock</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('stock.report') }}">Stock Report</a></li>
                                    <li><a href="{{ route('stock.supplier.report') }}">Supplier/ Product Wise</a></li>
                                </ul>
                            </li>



                            <!-- Page Layout Start -->
                            <li class="menu-title">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Home Slide Setup</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('home.slide')}}">Home Slide</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>About Page Setup</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('about.page')}}">About Page</a></li>
                                    <li><a href="{{route('about.multi.image')}}">About Multi Image</a></li>
                                    <li><a href="{{route('all.multi.image')}}">All Multi Image</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Portfolio Page Setup</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('all.portfolio')}}">All Portfolio</a></li>
                                    <li><a href="{{route('add.portfolio')}}">Add Portfolio</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Blog Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('all.blog.category')}}">All Blog Category</a></li>
                                    <li><a href="{{route('add.blog.category')}}">Add Blog Category</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Blog Page</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('all.blog')}}">All Blog</a></li>
                                    <li><a href="{{route('add.blog')}}">Add Blog</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Footer Page</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('footer.setup')}}">Footer Setup</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Contact Message</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('contact.message')}}">Contact Message</a></li>
                                </ul>
                            </li>
                            <!-- Page Layout End -->




                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
