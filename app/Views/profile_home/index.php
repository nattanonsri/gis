<!-- pc -->
<div class="d-none d-sm-block">
  <nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/profile">LOGO</a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
      <!-- <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div> -->


    </div>
  </nav>
</div>


<div class="container d-none d-sm-block mt-3">
  <div class="row">
    <div class="col-12 d-flex justify-content-between">
      <h2>ข้อมูลผู้สูงอายุ</h2>
      <a class="btn btn-primary btn-lg" href="<?= base_url('profile/create') ?>">เพิ่มข้อมูล</a>
    </div>
  </div>

  <div class="row ">
    <?php foreach ($profile as $row): ?>
      <div class="col-4 mt-3">
        <div class="card">
          <img src="<?= base_url(esc($row['file_image'])); ?>" class="card-img-top" width="150" height="200">
          <div class="card-body">
            <h5 class="card-title">
              <?= esc($row['prefix'] . $row['fname']); ?>&nbsp;<?= esc($row['lname']); ?>
            </h5>
            <p class="card-text">โรคประจำตัว : <?= esc($row['disease_details']); ?><br>
              ผู้ดูแล : <?= esc($row['caretaker'] ?? 'ไม่มี'); ?><br>
              ยาที่ใช้ : <?= esc($row['medicines'] ?? 'ไม่มี'); ?></p>
            <div class="text-right">
              <div class="btn-group " role="group" aria-label="Basic mixed styles example">
                <a href="/profile/delete/<?= $row['id']; ?>" class="btn btn-danger">ลบข้อมูล</a>
                <a href="/profile/edit/<?= $row['id']; ?>" class="btn btn-warning">แก้ไข</a>
                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- end pc -->

<!-- mobile -->

<div class="d-block d-sm-none d-md-none d-lg-none">
  <nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/profile">LOGO</a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
      <!-- <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div> -->
    </div>
  </nav>
</div>


<div class="container d-block d-sm-none d-md-none d-lg-none mt-3">
  <div class="row">
    <div class="col-12 d-flex justify-content-between">
      <h2>ข้อมูลผู้สูงอายุ</h2>
      <a class="btn btn-primary btn-lg" href="profile/create">เพิ่มข้อมูล</a>
    </div>
  </div>

  <div class="row mt-3">
    <?php foreach ($profile as $row): ?>
      <div class="col-12">
        <div class="card">
          <img src="<?= base_url(esc($row['file_image'])); ?>" class="card-img-top" width="150" height="200">
          <div class="card-body">
            <h5 class="card-title">
            <?= esc($row['prefix'] . $row['fname']); ?>&nbsp;<?= esc($row['lname']); ?>
            </h5>
            <p class="card-text">โรคประจำตัว : <?= esc($row['disease_details']); ?><br>
              ผู้ดูแล : <?= esc($row['caretaker'] ?? 'ไม่มี'); ?><br>
              ยาที่ใช้ : <?= esc($row['medicines'] ?? 'ไม่มี'); ?></p>
            <div class="text-right">
              <div class="btn-group " role="group" aria-label="Basic mixed styles example">
                <a href="/profile/delete/<?= $row['id']; ?>" class="btn btn-danger">ลบข้อมูล</a>
                <a href="/profile/edit/<?= $row['id']; ?>" class="btn btn-warning">แก้ไข</a>
                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<!-- end mobile -->