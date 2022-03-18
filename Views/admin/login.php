<div class="container login">
    <div class="row">
        <form action="?type=admin&page=login&action=login" method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <button>Login</button>
            </div>

            <?php if(isset($_GET['s']) && $_GET['s'] == 0): ?>
                <span class="error-text">Incorect Username or Password</span>
            <?php endif; ?>
        </form>
    </div>
</div>