<?php $__env->startSection('title', 'Đăng nhập vào tài khoản của bạn'); ?>
<?php $__env->startSection('data-page-id', 'auth'); ?>

<?php $__env->startSection('content'); ?>
    <div class="auth" id="auth">
        <section class="login_form">
            <div class="grid-x grid-padding-x">
                <div class="small-12 medium-7 medium-centered">
                    <h2 class="text-center">Đăng nhập</h2>
                    <?php echo $__env->make('includes.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <form action="/login" method="post">
                        <input type="text" name="username" placeholder="Tên đăng nhập hoặc Email của bạn"
                               value="<?php echo e(\App\Classes\Request::old('post', 'username')); ?>">
    
                        <input type="password" name="password" placeholder="Mật khẩu của bạn">
                        <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRFToken::_token()); ?>">
                        <button class="button float-right">Đăng nhập</button>
                    </form>
                    <p>Bạn chưa phải là thành viên? <a href="/register">Đăng ký mới tại đây</a> </p>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>