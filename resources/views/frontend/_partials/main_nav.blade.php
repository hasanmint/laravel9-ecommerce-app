 <!-- Main Navigation -->
 <nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="flex-row main_nav_content d-flex">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div
                            class="flex-row cat_menu_title d-flex align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text">categories</div>
                        </div>

                        <ul class="cat_menu">

                            @foreach ($categories as $category )
                            @php
                            $subcategories=DB::table('subcategories')->where('category_id',$category->id)->get();
                          @endphp

                            <li class="hassubs">
                                <a href="#">{{$category->name}}<i class="fas fa-chevron-right"></i></a>
                                <ul>
                                    @foreach ( $subcategories as $subcategory )
                                    @php
                                    $childcategories=DB::table('childcategories')->where('subcategory_id',$subcategory->id)->get();
                                 @endphp
                                    <li class="hassubs">
                                        <a href="#">{{$subcategory->name}}<i
                                                class="fas fa-chevron-right"></i></a>
                                        <ul>
                                            @foreach ( $childcategories as $childcategory )
                                            <li><a href="#">{{$childcategory->name}}<i
                                                class="fas fa-chevron-right"></i></a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach


                                </ul>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <!-- Main Nav Menu -->

                    <div class="ml-auto main_nav_menu">
                        <ul class="standard_dropdown main_nav_dropdown">
                            <li><a href="{{url('/')}}">Home<i class="fas fa-chevron-down"></i></a></li>
                            <li><a href="campaign.html">Campaign<i class="fas fa-chevron-down"></i></a></li>
                            <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                            <li><a href="contact.html">Helpline<i class="fas fa-chevron-down"></i></a></li>
                        </ul>
                    </div>

                    <!-- Menu Trigger -->

                    <div class="ml-auto menu_trigger_container">
                        <div class="flex-row menu_trigger d-flex align-items-center justify-content-end">
                            <div class="menu_burger">
                                <div class="menu_trigger_text">menu</div>
                                <div class="cat_burger menu_burger_inner">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Menu -->

<div class="page_menu">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page_menu_content">

                    <div class="page_menu_search">
                        <form action="#">
                            <input type="search" required="required" class="page_menu_search_input"
                                placeholder="Search for products...">
                        </form>
                    </div>
                    <ul class="page_menu_nav">
                        <li class="page_menu_item has-children">
                            <a href="#">Language<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">GBP British Pound<i
                                            class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li class="page_menu_item">
                            <a href="#">Home<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Menu Item<i
                                                    class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i
                                                    class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i
                                                    class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i
                                                    class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item"><a href="blog.html">blog<i
                                    class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item"><a href="contact.html">contact<i
                                    class="fa fa-angle-down"></i></a></li>
                    </ul>

                    <div class="menu_contact">
                        <div class="menu_contact_item">
                            <div class="menu_contact_icon"><img src="{{ asset('public/frontend/assets/images/phone_white.png') }}"
                                    alt=""></div>+38 068 005 3570
                        </div>
                        <div class="menu_contact_item">
                            <div class="menu_contact_icon"><img src="{{ asset('public/frontend/assets/images/mail_white.png') }}"
                                    alt=""></div><a
                                href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
