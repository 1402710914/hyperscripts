<?php include '../header.php';?>
    <section class="section-b-space pt-0">
        <div class="heading-banner">
            <div class="custom-container container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4>Forgot Password</h4>
                    </div>
                    <div class="col-sm-6">
                        <ul class="breadcrumb float-end">
                            <li class="breadcrumb-item"> <a href="index.php">Home </a></li>
                            <li class="breadcrumb-item active"> <a href="#">Forgot Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-b-space pt-0 login-bg-img">
        <div class="custom-container container login-page">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-6 d-none d-lg-block">
                    <div class="login-img"> <img class="img-fluid" src="https://themes.pixelstrap.net/katie/assets/images/login/1.svg" alt=""></div>
                </div>
                <div class="col-xxl-4 col-lg-6 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h4>Welcome To katie</h4>
                            <p>Forgot your password</p>
                        </div>
                        <div class="login-box">
                            <form class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating"><input class="form-control" id="floatingInputValue" type="email" placeholder="name@example.com" value="test@example.com"><label for="floatingInputValue">Enter Your Email</label></div>
                                </div>
                                <div class="col-12"> <a class="btn login btn_black sm" href="otp.php">Send Otp </a></div>
                            </form>
                        </div>
                        <div class="other-log-in"></div>
                        <div class="sign-up-box"> <a class="text-decoration-underline" href="login.php">Back To Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>