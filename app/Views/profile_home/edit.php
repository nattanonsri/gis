<div class="container d-none d-sm-block mt-3 mb-3">
    <h2><?= esc($title); ?></h2>
    <?= \Config\Services::validation()->listErrors(); ?>

    <form action="/profile/edit/<?= esc($profile['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <hr>

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
            <label for="coordinatesMobile">พิกัด&nbsp;<span class="text-danger">*</span></label>
            <div class="input-group">
                <input class="form-control" type="text" name="coordinates" id="coordinatesWeb"
                    value="<?= esc($profile['coordinates']) ?>" placeholder="xx.xxxxxx, xx.xxxxxx" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" onclick="getLocationWeb()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12.003 11.73q.668 0 1.14-.475t.472-1.143t-.475-1.14t-1.143-.472t-1.14.476t-.472 1.143t.475 1.14t1.143.472M12 3q.327 0 .625.024t.606.091V4.5q0 .936.666 1.603q.667.666 1.603.666h.73V7.5q0 .936.667 1.603t1.603.666h.579q.011.121.014.258t.003.27q0 1.457-.685 2.938q-.686 1.48-1.662 2.81q-.976 1.328-2.036 2.412T12.92 20.21q-.191.173-.434.26t-.487.086q-.235 0-.47-.077t-.432-.25q-1.067-.98-2.163-2.185q-1.097-1.204-1.992-2.493t-1.467-2.633t-.572-2.622q0-3.173 2.066-5.234T12 3m6 2h-2.5q-.213 0-.356-.144T15 4.499t.144-.356T15.5 4H18V1.5q0-.213.144-.356T18.5 1t.356.144T19 1.5V4h2.5q.213 0 .356.144q.144.144.144.357q0 .212-.144.356T21.5 5H19v2.5q0 .213-.144.356Q18.712 8 18.5 8t-.356-.144T18 7.5z" />
                        </svg>
                    </button>
                </div>
            </div>
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
                <input class="form-check-input" type="radio" name="succor" id="succor1"
                    value="ผู้สูงอายุช่วยเหลือตัวเองไม่ได้" <?= $profile['succor'] == 'ผู้สูงอายุช่วยเหลือตัวเองไม่ได้' ? 'checked' : '' ?> />
                <label class="form-check-label" for="succor1">ผู้สูงอายุช่วยเหลือตัวเองไม่ได้</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="succor" id="succor2"
                    value="ผู้สูงอายุช่วยเหลือตัวเองได้" <?= $profile['succor'] == 'ผู้สูงอายุช่วยเหลือตัวเองได้' ? 'checked' : '' ?> />
                <label class="form-check-label" for="succor2">ผู้สูงอายุช่วยเหลือตัวเองได้</label>
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

        <div class="form-group">
            <label for="file_image">รูปภาพบ้านก่อนหน้า</label><br>
            <?php if (!empty($profile['file_image'])): ?>
                <img src="<?= base_url($profile['file_image']); ?>" alt="Current Image" style="max-width: 150px;">
            <?php else: ?>
                <p>No image available</p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="file_image">รูปภาพบ้าน&nbsp;<span class="text-danger">*</span></label>
            <input class="form-control" type="file" name="file_image" id="file_image">
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

        <div class="col-12">
            <div class="form-group">
                <label for="prefix">คำนำหน้า&nbsp;<span class="text-danger">*</span></label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prefix" id="prefix4" value="นาย"
                        <?= $profile['prefix'] == 'นาย' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="prefix4">นาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prefix" id="prefix5" value="นาง"
                        <?= $profile['prefix'] == 'นาง' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="prefix5">นาง</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prefix" id="prefix6" value="นางสาว"
                        <?= $profile['prefix'] == 'นางสาว' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="prefix6">นางสาว</label>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="fname1">ชื่อจริง&nbsp;<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="fname" id="fname1" value="<?= esc($profile['fname']) ?>"
                    required>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="lname1">นามสกุล&nbsp;<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="lname" id="lname1" value="<?= esc($profile['lname']) ?>"
                    required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="card_id1">เลขบัตรประจำตัวประชาชน&nbsp;<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="card_id" id="card_id1"
                    value="<?= esc($profile['card_id']) ?>" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="birthdate1">วัน/เดือน/ปีเกิด&nbsp;<span class="text-danger">*</span></label>
                <input class="form-control" type="date" name="birthdate" id="birthdate1"
                    value="<?= esc($profile['birthdate']) ?>" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease" id="disease3"
                        value="ผู้สูงอายุไม่มีโรคประจำตัว" onclick="toggleCheckbox3(false)"
                        <?= $profile['disease'] == 'ผู้สูงอายุไม่มีโรคประจำตัว' ? 'checked' : '' ?> />
                    <label class="form-check-label" for="disease3">ผู้สูงอายุไม่มีโรคประจำตัว</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease" id="disease4"
                        value="ผู้สูงอายุมีโรคประจำตัว" onclick="toggleCheckbox3(true)"
                        <?= $profile['disease'] == 'ผู้สูงอายุมีโรคประจำตัว' ? 'checked' : '' ?> />
                    <label class="form-check-label" for="disease4">ผู้สูงอายุมีโรคประจำตัว</label>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="disease_details1">โรคประจำตัว</label>
                <input class="form-control" type="text" name="disease_details" id="disease_details1"
                    value="<?= esc($profile['disease_details']) ?>" <?= $profile['disease'] == 'ผู้สูงอายุมีโรคประจำตัว' ? '' : 'disabled' ?>>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="coordinatesMobile">พิกัด&nbsp;<span class="text-danger">*</span></label>
                <div class="input-group">
                    <input class="form-control" type="text" name="coordinates" id="coordinatesMobile"
                        value="<?= esc($profile['coordinates']) ?>" placeholder="xx.xxxxxx, xx.xxxxxx" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" onclick="getLocationMobile()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12.003 11.73q.668 0 1.14-.475t.472-1.143t-.475-1.14t-1.143-.472t-1.14.476t-.472 1.143t.475 1.14t1.143.472M12 3q.327 0 .625.024t.606.091V4.5q0 .936.666 1.603q.667.666 1.603.666h.73V7.5q0 .936.667 1.603t1.603.666h.579q.011.121.014.258t.003.27q0 1.457-.685 2.938q-.686 1.48-1.662 2.81q-.976 1.328-2.036 2.412T12.92 20.21q-.191.173-.434.26t-.487.086q-.235 0-.47-.077t-.432-.25q-1.067-.98-2.163-2.185q-1.097-1.204-1.992-2.493t-1.467-2.633t-.572-2.622q0-3.173 2.066-5.234T12 3m6 2h-2.5q-.213 0-.356-.144T15 4.499t.144-.356T15.5 4H18V1.5q0-.213.144-.356T18.5 1t.356.144T19 1.5V4h2.5q.213 0 .356.144q.144.144.144.357q0 .212-.144.356T21.5 5H19v2.5q0 .213-.144.356Q18.712 8 18.5 8t-.356-.144T18 7.5z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="succor" id="succor3"
                        value="ผู้สูงอายุช่วยเหลือตัวเองไม่ได้" <?= $profile['succor'] == 'ผู้สูงอายุช่วยเหลือตัวเองไม่ได้' ? 'checked' : '' ?> />
                    <label class="form-check-label" for="succor3">ผู้สูงอายุช่วยเหลือตัวเองไม่ได้</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="succor" id="succor4"
                        value="ผู้สูงอายุช่วยเหลือตัวเองได้" <?= $profile['succor'] == 'ผู้สูงอายุช่วยเหลือตัวเองได้' ? 'checked' : '' ?> />
                    <label class="form-check-label" for="succor4">ผู้สูงอายุช่วยเหลือตัวเองได้</label>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relative" id="relative3"
                        value="ผู้สูงอายุไม่มีญาติ" onclick="toggleCheckbox4(false)"
                        <?= $profile['relative'] == 'ผู้สูงอายุไม่มีญาติ' ? 'checked' : '' ?> />
                    <label class="form-check-label" for="relative3">ผู้สูงอายุไม่มีญาติ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relative" id="relative4" value="ผู้สูงอายุมีญาติ"
                        onclick="toggleCheckbox4(true)" <?= $profile['relative'] == 'ผู้สูงอายุมีญาติ' ? 'checked' : '' ?> />
                    <label class="form-check-label" for="relative4">ผู้สูงอายุมีญาติ</label>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="caretaker1">ผู้ดูแล</label>
                <input class="form-control" type="text" name="caretaker" id="caretaker1"
                    value="<?= esc($profile['caretaker']) ?>" <?= $profile['disease'] == 'ผู้สูงอายุมีโรคประจำตัว' ? '' : 'disabled' ?> />
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="medicines">ยาที่ใช้</label>
                <input class="form-control" type="text" name="medicines" id="medicines"
                    value="<?= esc($profile['medicines']) ?>" />
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="file_image">รูปภาพบ้านก่อนหน้า</label><br>
                <?php if (!empty($profile['file_image'])): ?>
                    <img src="<?= base_url($profile['file_image']); ?>" alt="Current Image" style="max-width: 150px;">
                <?php else: ?>
                    <p>No image available</p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="file_image1">รูปภาพบ้าน&nbsp;<span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="file_image" id="file_image1">
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

    function getLocationWeb() {
        const x = document.getElementById("coordinatesWeb");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPositionWeb);
        } else {
            x.value = "Geolocation is not supported by this browser.";
        }
    }

    function showPositionWeb(position) {
        const x = document.getElementById("coordinatesWeb");
        x.value = position.coords.latitude + ", " + position.coords.longitude;
    }

    function getLocationMobile() {
        const x = document.getElementById("coordinatesMobile");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPositionMobile);
        } else {
            x.value = "Geolocation is not supported by this browser.";
        }
    }

    function showPositionMobile(position) {
        const x = document.getElementById("coordinatesMobile");
        x.value = position.coords.latitude + ", " + position.coords.longitude;
    }

</script>