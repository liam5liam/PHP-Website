<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Register User</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" />
            </div>
            <div class="form-group">
                <body>Email</body>
                <input type="text" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="link" class="form-control" />
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="submit" />
            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>users/login">Cancel</a>
        </form>
    </div>
</div>