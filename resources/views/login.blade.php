@extends('layouts.app')
@section('title', 'Đăng nhập vào tài khoản của bạn')
@section('data-page-id', 'auth')

@section('content')
    <div class="auth" id="auth">
        <section class="login_form">
            <div class="grid-x grid-padding-x">
                <div class="small-12 medium-7 medium-centered">
                    <h2 class="text-center">Đăng nhập</h2>
                    @include('includes.message')
                    <form action="/login" method="post">
                        <input type="text" name="username" placeholder="Tên đăng nhập hoặc Email của bạn"
                               value="{{ \App\Classes\Request::old('post', 'username') }}">
    
                        <input type="password" name="password" placeholder="Mật khẩu của bạn">
                        <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">
                        <button class="button float-right">Đăng nhập</button>
                    </form>
                    <p>Bạn chưa phải là thành viên? <a href="/register">Đăng ký mới tại đây</a> </p>
                </div>
            </div>
        </section>
    </div>
@stop