<form class='w-50 mx-auto mt-5' method="post" action="/login">
    <?php if (isset($errors['login'])) : ?>
        <div class="alert alert-danger" role="alert">
            <p class="m-auto"><?php echo $errors['login'] ?></p>
        </div>
    <?php endif ?>

    <div class="form-outline mb-4">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" />
        <?php if (isset($errors['email']))
            echo "<p class='error'>" . $errors['email'] . "</p>";
        ?>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" />
        <?php if (isset($errors['password']))
            echo "<p class='error'>" . $errors['password'] . "</p>";
        ?>
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    <div class="text-center">
        <p>Not a member? <a href="/register">Register</a></p>
    </div>
</form>