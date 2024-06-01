<div class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 1rem;">
                    <div class="card-body p-5 ">

                        <h2 class="fw-bold mb-5 text-capitalize">Register From</h2>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="fname" placeholder="ชื่อจริง">
                                    <label for="fname">ชื่อจริง</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="lname" placeholder="นามสกุล">
                                    <label for="lname">นามสกุล</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-4">
                                    <input type="date" class="form-control" id="birthday"
                                        placeholder="วัน/เดือน/ปีเกิด">
                                    <label for="birthday">วัน/เดือน/ปีเกิด</label>
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <h6 class="mb-2 pb-1">เพศ: </h6>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                        value="ชาย" checked />
                                    <label class="form-check-label" for="femaleGender">ชาย</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                        value="หญิง" />
                                    <label class="form-check-label" for="maleGender">หญิง</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                        value="อื่นๆ" />
                                    <label class="form-check-label" for="otherGender">อื่นๆ</label>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control text-capitalize" name="username"
                                        id="username" placeholder="username">
                                    <label for="username">username</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control text-capitalize" name="password"
                                        id="password" placeholder="password">
                                    <label for="password">password</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control text-capitalize" name="repeat_password"
                                        id="repeat_password" placeholder="repeat password">
                                    <label for="repeat_password">repeat password</label>
                                </div>
                            </div>

                            <div class="col-12 text-end">
                                <a href="/login" class="btn btn-light">ย้อนกลับ</a>
                                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>