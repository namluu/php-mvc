<form method="post">
    <img class="mb-4" src="<?=BASE_URL?>public/images/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <?php if ($message): ?>
        <p class="alert alert-danger"><?=$message?></p>
    <?php endif; ?>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
        <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
</form>