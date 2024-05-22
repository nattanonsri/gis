<div class="container mt-3">
    <h2><?= esc($title); ?></h2>
    <?= \Config\Services::validation()->listErrors(); ?>

    <form action="/member/create" method="post" enctype="multipart/form-data">
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
        <div class="form-group">
            <label for="birthdate">Birthdate:</label>
            <input class="form-control" type="date" name="birthdate" value="">
        </div>

        <!-- <div class="form-group">
            <label for="disease">Disease</label><br>
            <input type="radio" name="disease" value="ผู้สูงอายุไม่มีโรคประจำตัว" onclick="toggleCheckbox(false)" checked/> ผู้สูงอายุไม่มีโรคประจำตัว<br>
            <input type="radio" name="disease" value="ผู้สูงอายุมีโรคประจำตัว" onclick="toggleCheckbox(true)" /> ผู้สูงอายุมีโรคประจำตัว
        </div>
        <div class="form-group">
            <label for="disease_details">Disease Details</label>
            <input class="form-control" type="text" name="disease_details" id="disease_details" disabled />
        </div> -->

     
        <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control" type="file" name="image" value="" />
        </div>
        <a class="btn btn-light" href="/member">Cancel</a>
        <button class="btn btn-primary" type="submit" name="submit">เพิ่มข้อมูล</button>
    </form>
</div>

<!-- <script>
function toggleCheckbox(enable) {
    document.getElementById('disease_details').disabled = !enable;
}
</script> -->