<div class="container mt-3">
    <h2><?= esc($title); ?></h2>
    <?= \Config\Services::validation()->listErrors(); ?>

    <form action="/member/create" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="" />
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" value="" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" value="" />
        </div>

        <button class="btn btn-primary" type="submit" name="submit">เพิ่มข้อมูล</button>
    </form>
</div>