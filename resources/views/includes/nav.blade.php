<?php $categories = \App\Models\Category::with('subCategories')->get(); ?>

<header class="navigation">
    <div class="title-bar" data-responsive-toggle="acme-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="acme-menu"></button>
        <div class="title-bar-title"><a href="/">Shop quần áo</a> </div>
    </div>

    <div class="top-bar" id="acme-menu">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text logo" onclick="location.href='/'"></li>
                <li><a href="/products">Sản phẩm</a></li>
                @if(count($categories))
                    <li>
                        <a href="/products/category">Danh mục</a>
                        <ul class="menu vertical dropdown">
                            @foreach($categories as $category)
                                <li>
                                    <a href="/products/category/{{ $category->slug }}">{{ $category->name }}</a>
                                    @if(count($category->subCategories))
                                        <ul class="menu vertical">
                                            @foreach($category->subCategories as $subCategory)
                                                <li>
                                                    <a href="/products/category/{{ $category->slug }}/{{ $subCategory->slug }}">
                                                        {{ $subCategory->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="dropdown menu vertical medium-horizontal">
                @if(isAuthenticated())
                    <li><a href="#">{{ user()->username }}</a> </li>
                    <li>
                        <a href="/cart">Giỏ hàng &nbsp; <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="/logout">Đăng xuất</a> </li>
                @else
                    <li><a href="/login">Đăng nhập</a> </li>
                    <li><a href="/register">Đăng ký mới</a> </li>
                    <li>
                        <a href="/cart">Giỏ hàng &nbsp; <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>
