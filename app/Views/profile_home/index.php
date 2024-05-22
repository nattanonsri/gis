<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
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

<div class="container mt-3">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h2>Create New table</h2>
            <a class="btn btn-primary btn-lg" href="profile/create">Create</a>
        </div>
    </div>

    <div class="row mt-3">
        <?php foreach ($profile as $row): ?>
            <div class="col-4">
                <div class="card">
                    <img src="<?= base_url(esc($row['image'])); ?>" class="card-img-top" width="150" height="200">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= esc($row['prefix']); ?>    <?= esc($row['fname']); ?>&nbsp;<?= esc($row['lname']); ?></h5>
                        <p class="card-text">โรคประจำตัว : <?= esc($row['disease_details']); ?><br>
                            ผู้ดูแล : <?= esc($row['caretaker']); ?><br>
                            ยาที่ใช้ : <?= esc($row['medicines']); ?></p>
                        <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>