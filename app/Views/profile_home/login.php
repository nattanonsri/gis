<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <form id="frm" method="POST">

                                <h2 class="fw-bold mb-5 text-uppercase">Login</h2>

                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="username" placeholder="username">
                                    <label for="username">username</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="password" placeholder="password">
                                    <label for="password">password</label>
                                </div>

                         

                                <p class="small mb-5"><a class="text-dark-50" href="#!">Forgot password?</a></p>

                                <button class="btn btn-primary btn-lg px-5" type="submit">Login</button>

                                <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div> -->
                            </form>
                        </div>

                        <div>
                            <p class="mb-0">Don't have an account? <a href="<?= base_url('/register') ?>"
                                    class="fw-bold">Sign
                                    Up</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>