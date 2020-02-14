@extends('layouts.app')
@section('title', 'Trang chủ')
@section('data-page-id', 'home')

@section('content')
    <div class="home">
        
        <section class="hero">
            <div class="hero-slider">
                <div> <img src="/images/sliders/slide_1.jpg" alt="Acme Store"> </div>
                <div> <img src="/images/sliders/slide_2.jpg" alt="Acme Store"> </div>
                <div> <img src="/images/sliders/slide_3.jpg" alt="Acme Store"> </div>
            </div>
        </section>
    
        <section class="display-products" data-token="{{ $token }}" id="root">
            <h2>Sản phẩm nổi bật</h2>
            <div class="grid-x grid-padding-x medium-up-2 large-up-4">
                <div class="small-12 cell" v-cloak v-for="feature in featured">
                    <a :href="'/product/' + feature.id">
                        <div class="card" data-equalizer-watch>
                            <div class="card-section">
                                <img :src="'/' + feature.image_path" width="100%" height="200">
                            </div>
                            <div class="card-section">
                                <p>
                                    @{{ stringLimit(feature.name, 18) }}
                                </p>
                                <a :href="'/product/' + feature.id" class="button more expanded">
                                    Xem thêm
                                </a>
                                <button v-if="feature.quantity > 0" @click.prevent="addToCart(feature.id)" class="button cart expanded">
                                    $@{{ feature.price }} - Cho vào giỏ hàng
                                </button>
                                <button v-else class="button warning expanded" disabled>
                                    Hết hàng
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <h2>Sản phẩm được ưa thích</h2>
            <div class="grid-x grid-padding-x medium-up-2 large-up-4">
                <div class="small-12 cell" v-cloak v-for="product in products">
                    <a :href="'/product/' + product.id">
                        <div class="card" data-equalizer-watch>
                            <div class="card-section">
                                <img :src="'/' + product.image_path" width="100%" height="200">
                            </div>
                            <div class="card-section">
                                <p>
                                    @{{ stringLimit(product.name, 18) }}
                                </p>
                                <a :href="'/product/' + product.id" class="button more expanded">
                                    Xem thêm
                                </a>
                                <button v-if="product.quantity > 0" @click.prevent="addToCart(product.id)" class="button cart expanded">
                                    $@{{ product.price }} - Cho vào giỏ hàng
                                </button>
                                <button v-else class="button warning expanded" disabled>
                                    Hết hàng
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="text-center">
                <img v-show="loading" src="/images/loading.gif" style="padding-bottom: 3rem;
                position: fixed; top: 60%; bottom: 20%;">
            </div>
        </section>
    </div>
@stop