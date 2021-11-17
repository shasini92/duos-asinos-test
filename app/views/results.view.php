<?php require('partials/head.php') ?>

<?php if (!isset($_SESSION['name'])) : ?>
    <p class="text-center mt-4 pb-0 font-md">Please login</p>
    <?php require('partials/login-form.php') ?>

<? elseif (isset($users) &&  count($users)) : ?>
    <div class="w-50 mx-auto mt-3" role="alert">
        <p class="m-auto text-center">Search results:</p>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <th scope="row"><?= $user->id; ?></th>
                        <td><?= $user->name; ?></td>
                        <td><?= $user->email; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else : ?>
    <p class="mx-auto text-center mt-3">There were no search results, please refine your query.</p>
<?php endif ?>

<?php require('partials/footer.php') ?>