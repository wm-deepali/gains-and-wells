<style>
    .left-side-container-img img{
        width:300px;
        height:110px;
    }
.left-side-container-img {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	height: 100%;
	width: 100%;
	text-align: center;
}
.row.justify-content-center.mx-80 {
	max-width: 1000px;
	margin: auto;
}
.row.justify-content-center.mx-80 {
	background: #fff;
	border-radius: 5px;
	box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
	padding: ;
}
.right-side-form-login {
	padding: 3rem !important;
}
.row.justify-content-center.mx-80 .col-sm-6 {
	padding: 0;
}
.left-side-container-img {
	background-color: orange;
	border-top-left-radius: 5px;
	border-bottom-left-radius: 5px;
}
.btn.btn-primary.rg {
	width: 100%;
	height: 45px;
	background-color: orange;
	border-color: orange;
}
</style>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center mx-80">
        <div class="col-sm-6">
            <div class="left-side-container-img">
                <img src="<?php echo e(asset('assets/images/overseaslogo.png')); ?>">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="right-side-form-login ">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <h3>Admin login</h3>
                            </div>

                            <div class="col-sm-12">
                                <label for="email" class="col-md-4 col-form-label"><?php echo e(__('Email Address')); ?></label>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            

                            <div class="col-sm-12">
                                <label for="password" class="col-md-4 col-form-label "><?php echo e(__('Password')); ?></label>
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary rg">
                                    <?php echo e(__('Login')); ?>

                                </button>
                            </div>
                            <div class="col-sm-12">
                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>