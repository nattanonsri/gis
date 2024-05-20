<div class="container mt-3">
    <h2><?= esc($title); ?></h2>
    <?= \Config\Services::validation()->listErrors(); ?>

    <form action="/member/edit/<?= $member['id']; ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="<?= $member['name']; ?>" />
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" value="<?= $member['username']; ?>" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" value="<?= $member['password']; ?>" />
        </div>
        <a class="btn btn-sm btn-light" href="/member">Cancel</a>
        <button class="btn btn-warning" type="submit" name="submit">แก้ไขข้อมูล</button>
    </form>
</div>