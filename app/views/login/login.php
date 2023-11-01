<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"><img src="<?= BASEURL;?>/img/logo1.png"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back! <br> To Travel Kuy </h1>
                                <?php if (isset($pesan)) : ?>
                                <div class="alert alert-danger">
                                    <?php echo $pesan; ?>
                                </div>
                                <?php endif; ?>
                                </div>
                            <form action="<?= BASEURL; ?>/login/prosesLogin" method="post">

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        id="email" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="password" placeholder="Enter Password" name="password" required>
                                </div>
                                <button type="submit" name="login" href="index.html" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                            <div class="pass">Don't have an account? <a href="<?= BASEURL ?>/login/registrasi">Register</a></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>



<!-- <div class="hero"></div>
<div class="content"></div>
<header class="login-background">
    <section class="login-section">
        <div class="center">
            <h1>LOGIN</h1>
            <P>Welcome Back To TravelKuy</P>
            <?php if (isset($pesan)) : ?>
                <div class="alert alert-danger">
                    <?php echo $pesan; ?>
                </div>
            <?php endif; ?>
            <form action="<?= BASEURL; ?>/login/prosesLogin" method="post">
                <div class="txt_field">
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                    <span></span>
                </div>
                <div class="txt_field">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    <span></span>
                </div>

                <div class="pass">Don't have an account? <a href="<?= BASEURL ?>/login/registrasi">Register</a></div>
                <div class="tengah">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>

            </form>
            <br>
    </section>
</header> -->