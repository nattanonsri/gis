<div class="container d-none d-sm-block mt-3 mb-3">
    <h2><?= esc($title); ?></h2>
    <?= \Config\Services::validation()->listErrors(); ?>

    <form action="/profile/edit/<?= esc($profile['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <hr>
        <div class="form-group">
            <label for="image">รูปภาพก่อนหน้า</label><br>
            <?php if (!empty($profile['image'])): ?>
                <img src="<?= base_url($profile['image']); ?>" alt="Current Image" style="max-width: 150px;">
            <?php else: ?>
                <p>No image available</p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="image">รูปภาพ&nbsp;<span class="text-danger">*</span></label>
            <input class="form-control" type="file" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="coordinates">พิกัด&nbsp;<span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="coordinates" id="coordinates"
                value="<?= esc($profile['coordinates']) ?>" placeholder="xx.xxxxxx, xx.xxxxxx" required>
        </div>
        <div class="form-group">
            <label for="prefix">คำนำหน้า&nbsp;<span class="text-danger">*</span></label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prefix" id="prefix1" value="นาย"
                    <?= $profile['prefix'] == 'นาย' ? 'checked' : '' ?>>
                <label class="form-check-label" for="prefix1">นาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prefix" id="prefix2" value="นาง"
                    <?= $profile['prefix'] == 'นาง' ? 'checked' : '' ?>>
                <label class="form-check-label" for="prefix2">นาง</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prefix" id="prefix3" value="นางสาว"
                    <?= $profile['prefix'] == 'นางสาว' ? 'checked' : '' ?>>
                <label class="form-check-label" for="prefix3">นางสาว</label>
            </div>
        </div>
        <div class="form-group">
            <label for="fname">ชื่อจริง&nbsp;<span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="fname" id="fname" value="<?= esc($profile['fname']) ?>"
                required>
        </div>
        <div class="form-group">
            <label for="lname">นามสกุล&nbsp;<span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="lname" id="lname" value="<?= esc($profile['lname']) ?>"
                required>
        </div>
        <div class="form-group">
            <label for="card_id">เลขบัตรประจำตัวประชาชน&nbsp;<span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="card_id" id="card_id" value="<?= esc($profile['card_id']) ?>"
                required>
        </div>
        <div class="form-group">
            <label for="birthdate">วัน/เดือน/ปีเกิด&nbsp;<span class="text-danger">*</span></label>
            <input class="form-control" type="date" name="birthdate" id="birthdate"
                value="<?= esc($profile['birthdate']) ?>" required>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="disease" id="disease1"
                    value="ผู้สูงอายุไม่มีโรคประจำตัว" onclick="toggleCheckbox1(false)"
                    <?= $profile['disease'] == 'ผู้สูงอายุไม่มีโรคประจำตัว' ? 'checked' : '' ?> />
                <label class="form-check-label" for="disease1">ผู้สูงอายุไม่มีโรคประจำตัว</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="disease" id="disease2"
                    value="ผู้สูงอายุมีโรคประจำตัว" onclick="toggleCheckbox1(true)"
                    <?= $profile['disease'] == 'ผู้สูงอายุมีโรคประจำตัว' ? 'checked' : '' ?> />
                <label class="form-check-label" for="disease2">ผู้สูงอายุมีโรคประจำตัว</label>
            </div>
        </div>
        <div class="form-group">
            <label for="disease_details">โรคประจำตัว</label>
            <input class="form-control" type="text" name="disease_details" id="disease_details"
                value="<?= esc($profile['disease_details']) ?>" <?= $profile['disease'] == 'ผู้สูงอายุมีโรคประจำตัว' ? '' : 'disabled' ?>>

        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="assist" id="assist1"
                    value="ผู้สูงอายุช่วยเหลือตัวเองไม่ได้" <?= $profile['assist'] == 'ผู้สูงอายุช่วยเหลือตัวเองไม่ได้' ? 'checked' : '' ?> />
                <label class="form-check-label" for="assist1">ผู้สูงอายุช่วยเหลือตัวเองไม่ได้</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="assist" id="assist2"
                    value="ผู้สูงอายุช่วยเหลือตัวเองได้" <?= $profile['assist'] == 'ผู้สูงอายุช่วยเหลือตัวเองได้' ? 'checked' : '' ?> />
                <label class="form-check-label" for="assist2">ผู้สูงอายุช่วยเหลือตัวเองได้</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="relative" id="relative1" value="ผู้สูงอายุไม่มีญาติ"
                    onclick="toggleCheckbox2(false)" <?= $profile['relative'] == 'ผู้สูงอายุไม่มีญาติ' ? 'checked' : '' ?> />
                <label class="form-check-label" for="relative1">ผู้สูงอายุไม่มีญาติ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="relative" id="relative2" value="ผู้สูงอายุมีญาติ"
                    onclick="toggleCheckbox2(true)" <?= $profile['relative'] == 'ผู้สูงอายุมีญาติ' ? 'checked' : '' ?> />
                <label class="form-check-label" for="relative2">ผู้สูงอายุมีญาติ</label>
            </div>
        </div>
        <div class="form-group">
            <label for="caretaker">ผู้ดูแล</label>
            <input class="form-control" type="text" name="caretaker" id="caretaker"
                value="<?= esc($profile['caretaker']) ?>" <?= $profile['disease'] == 'ผู้สูงอายุมีโรคประจำตัว' ? '' : 'disabled' ?> />
        </div>
        <div class="form-group">
            <label for="medicines">ยาที่ใช้</label>
            <input class="form-control" type="text" name="medicines" id="medicines"
                value="<?= esc($profile['medicines']) ?>" />
        </div>
        <a class="btn btn-light" href="/profile">Cancel</a>
        <button class="btn btn-primary" type="submit" name="submit">แก้ไขข้อมูล</button>
    </form>
</div>

<!-- mobile -->
<div class="container d-block d-sm-none d-md-none d-lg-none ">
    <div class="row">
        <div class="col-12 mt-3">
            <h4><?= esc($title); ?></h4>
            <?= \Config\Services::validation()->listErrors(); ?>
        </div>
    </div>
    <form action="/profile/edit/<?= esc($profile['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="row mt-3">
            <div class="col-12">
                <hr>
                <div class="form-group">
                    <label for="image">รูปภาพก่อนหน้า</label><br>
                    <?php if (!empty($profile['image'])): ?>
                        <img src="<?= base_url($profile['image']); ?>" alt="Current Image" style="max-width: 150px;">
                    <?php else: ?>
                        <p>No image available</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="image1">รูปภาพ&nbsp;<span class="text-danger">*</span></label>
                    <input class="form-control" type="file" name="image" id="image1">
                </div>

            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="coordinates1">พิกัด&nbsp;<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="coordinates" id="coordinates1" value="<?= esc($profile['coordinates']) ?>"
                        placeholder="xx.xxxxxx, xx.xxxxxx" required>
                </div>

            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="prefix">คำนำหน้า&nbsp;<span class="text-danger">*</span></label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="prefix" id="prefix4" value="นาย"  <?= $profile['prefix'] == 'นาย' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="prefix4">นาย</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="prefix" id="prefix5" value="นาง"  <?= $profile['prefix'] == 'นาง' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="prefix5">นาง</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="prefix" id="prefix6" value="นางสาว"  <?= $profile['prefix'] == 'นางสาว' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="prefix6">นางสาว</label>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="fname1">ชื่อจริง&nbsp;<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="fname" id="fname1" value="<?= esc($profile['fname']) ?>" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="lname1">นามสกุล&nbsp;<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="lname" id="lname1" value="<?= esc($profile['lname']) ?>" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="card_id1">เลขบัตรประจำตัวประชาชน&nbsp;<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="card_id" id="card_id1" value="<?= esc($profile['card_id']) ?>" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="birthdate1">วัน/เดือน/ปีเกิด&nbsp;<span class="text-danger">*</span></label>
                    <input class="form-control" type="date" name="birthdate" id="birthdate1" value="<?= esc($profile['birthdate']) ?>" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="disease" id="disease3"
                            value="ผู้สูงอายุไม่มีโรคประจำตัว" onclick="toggleCheckbox3(false)"  <?= $profile['disease'] == 'ผู้สูงอายุไม่มีโรคประจำตัว' ? 'checked' : '' ?> />
                        <label class="form-check-label" for="disease3">ผู้สูงอายุไม่มีโรคประจำตัว</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="disease" id="disease4"
                            value="ผู้สูงอายุมีโรคประจำตัว" onclick="toggleCheckbox3(true)"  <?= $profile['disease'] == 'ผู้สูงอายุมีโรคประจำตัว' ? 'checked' : '' ?> />
                        <label class="form-check-label" for="disease4">ผู้สูงอายุมีโรคประจำตัว</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="disease_details1">โรคประจำตัว</label>
                    <input class="form-control" type="text" name="disease_details" id="disease_details1" value="<?= esc($profile['disease_details']) ?>" <?= $profile['disease'] == 'ผู้สูงอายุมีโรคประจำตัว' ? '' : 'disabled' ?>>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="assist" id="assist3"
                            value="ผู้สูงอายุช่วยเหลือตัวเองไม่ได้"  <?= $profile['assist'] == 'ผู้สูงอายุช่วยเหลือตัวเองไม่ได้' ? 'checked' : '' ?> />
                        <label class="form-check-label" for="assist3">ผู้สูงอายุช่วยเหลือตัวเองไม่ได้</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="assist" id="assist4"
                            value="ผู้สูงอายุช่วยเหลือตัวเองได้"  <?= $profile['assist'] == 'ผู้สูงอายุช่วยเหลือตัวเองได้' ? 'checked' : '' ?> />
                        <label class="form-check-label" for="assist4">ผู้สูงอายุช่วยเหลือตัวเองได้</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="relative" id="relative3"
                            value="ผู้สูงอายุไม่มีญาติ" onclick="toggleCheckbox4(false)"  <?= $profile['relative'] == 'ผู้สูงอายุไม่มีญาติ' ? 'checked' : '' ?> />
                        <label class="form-check-label" for="relative3">ผู้สูงอายุไม่มีญาติ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="relative" id="relative4"
                            value="ผู้สูงอายุมีญาติ" onclick="toggleCheckbox4(true)"  <?= $profile['relative'] == 'ผู้สูงอายุมีญาติ' ? 'checked' : '' ?> />
                        <label class="form-check-label" for="relative4">ผู้สูงอายุมีญาติ</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="caretaker1">ผู้ดูแล</label>
                    <input class="form-control" type="text" name="caretaker" id="caretaker1" value="<?= esc($profile['caretaker']) ?>" <?= $profile['disease'] == 'ผู้สูงอายุมีโรคประจำตัว' ? '' : 'disabled' ?> />
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="medicines">ยาที่ใช้</label>
                    <input class="form-control" type="text" name="medicines" id="medicines"  value="<?= esc($profile['medicines']) ?>" />
                </div>
            </div>
            <div class="col-12 mb-3 text-right">
                <a class="btn btn-light" href="/profile">Cancel</a>
                <button class="btn btn-primary" type="submit" name="submit">แก้ไขข้อมูล</button>
            </div>
        </div>
    </form>
</div>

<!-- end mobile -->

<script>

    function toggleCheckbox1(enable) {
        document.getElementById('disease_details').disabled = !enable;
    }

    function toggleCheckbox2(enable) {
        document.getElementById('caretaker').disabled = !enable;
    }
    function toggleCheckbox3(enable) {
        document.getElementById('disease_details1').disabled = !enable;
    }
    function toggleCheckbox4(enable) {
        document.getElementById('caretaker1').disabled = !enable;
    }


    document.getElementById('card_id').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, ''); // Remove all non-digit characters
        let formattedValue = '';

        // Apply the format 1-1031-00693-84-9
        if (value.length > 0) {
            formattedValue += value.substr(0, 1);
        }
        if (value.length > 1) {
            formattedValue += '-' + value.substr(1, 4);
        }
        if (value.length > 5) {
            formattedValue += '-' + value.substr(5, 5);
        }
        if (value.length > 10) {
            formattedValue += '-' + value.substr(10, 2);
        }
        if (value.length > 12) {
            formattedValue += '-' + value.substr(12, 1);
        }

        e.target.value = formattedValue;
    });

    document.getElementById('card_id1').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, ''); // Remove all non-digit characters
        let formattedValue = '';

        // Apply the format 1-1031-00693-84-9
        if (value.length > 0) {
            formattedValue += value.substr(0, 1);
        }
        if (value.length > 1) {
            formattedValue += '-' + value.substr(1, 4);
        }
        if (value.length > 5) {
            formattedValue += '-' + value.substr(5, 5);
        }
        if (value.length > 10) {
            formattedValue += '-' + value.substr(10, 2);
        }
        if (value.length > 12) {
            formattedValue += '-' + value.substr(12, 1);
        }

        e.target.value = formattedValue;
    });

</script>