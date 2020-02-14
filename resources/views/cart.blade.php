@extends('layouts.app')
@section('title', 'You Shopping Cart')
@section('data-page-id', 'cart')
@section('stripe-checkout')
    <script src="https://checkout.stripe.com/checkout.js"></script>
@endsection
@section('paypal-checkout')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
@endsection

@section('content')
    <div class="shopping_cart" id="shopping_cart">
        
        <div class="text-center">
            <img v-show="loading" src="/images/loading.gif">
        </div>
        
        <section class="items" v-if="loading == false">
            <div class="grid-x grid-padding-x">
                <div class="small-12">
                    <h2 v-if="fail" v-text="message"></h2>
                    <div v-else>
                        <h2>Your Cart</h2>
                        <table class="hover unstriped">
                            <thead class="text-left">
                                <tr>
                                    <th width="100">#</th><th>Product Name</th>
                                    <th width="100">($) Unit Price</th>
                                    <th width="100">Qty</th><th width="100">Total</th>
                                    <th width="40">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in items">
                                    <td class="medium-text-center">
                                        <a :href="'/product/' + item.id">
                                            <img :src="'/' + item.image" height="60px" width="60px" alt="item.name">
                                        </a>
                                    </td>
                                    
                                    <td>
                                        <h5><a :href="'/product/' + item.id">@{{ item.name }}</a></h5>
                                        Status:
                                        <span v-if="item.stock > 1" style="color: #00AA00;">In Stock</span>
                                        <span v-else style="color: #ff0000;">Out of Stock</span>
                                    </td>
                                    
                                    <td>@{{ item.price }}</td>
                                    <td>
                                        @{{ item.quantity }}
                                        <button v-if="item.stock > item.quantity" @click="updateQuantity(item.id, '+')"
                                                style="cursor: pointer; color: #00AA00;">
                                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        </button>
                                        <button v-if="item.quantity > 1" @click="updateQuantity(item.id, '-')"
                                                style="cursor: pointer; color: #ff8000;">
                                            <i class="fa fa-minus-square" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td>@{{ item.total }}</td>
                                    <td class="text-center">
                                        <button @click="removeItem(item.index)">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <table>
                            <tr>
                                <td valign="top">
                                    <div class="input-group">
                                        <input type="text" name="coupon" class="input-group-field" placeholder="coupon code">
                                        <div class="input-group-button">
                                            <button class="button">Apply</button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <table class="unstriped">
                                        <tr>
                                            <td><h6>Subtotal:</h6></td>
                                            <td class="text-right"><h6>$@{{ cartTotal }}</h6></td>
                                        </tr>
                                        <tr>
                                            <td><h6>Discount Amount:</h6></td>
                                            <td class="text-right"><h6>$0.00</h6></td>
                                        </tr>
                                        <tr>
                                            <td><h6>Tax:</h6></td>
                                            <td class="text-right"><h6>$0.00</h6></td>
                                        </tr>
                                        <tr>
                                            <td><h6>Total:</h6></td>
                                            <td class="text-right"><h6>$@{{ cartTotal }}</h6></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <div class="grid-x">
                            <div class="cell small-12 medium-6">
                                <button @click.prevent="emptyCart" class="button alert">
                                    Empty Cart &nbsp; <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="cell small-12 medium-6">
                                <div class="text-right">
                                    <a href="/" class="button secondary">
                                        Continue Shopping &nbsp; <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </a>
                                    <span v-if="authenticated">
                                <button @click.prevent="checkout" class="button success">
                                    Pay With Card &nbsp; <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                </button>
                                <span id="paypalBtn"></span>
                                <span id="paypalInfo" data-app-env="{{ getenv('APP_ENV') }}"
                                      data-app-baseurl="{{ getenv('APP_URL') }}"></span>
                            </span>
                                    <span v-else>
                                <a href="/login" class="button success">
                                    Checkout &nbsp; <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                </a>
                            </span>

                                    <span id="properties" class="hide"
                                          data-customer-email="{{ user()->email }}"
                                          data-stripe-key="{{ \App\Classes\Session::get('publishable_key') }}">

                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
    </div>
@stop