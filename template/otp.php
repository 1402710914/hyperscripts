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
                            <h4>Please enter the one time password to verify your account</h4>
                            <p>A code has been sent to *******9897</p>
                        </div>
                        <div class="login-box">
                            <form class="row g-3">
                                <div class="col-12">
                                    <div class="otp-input"><input class="form-control text-center" id="four1" type="number" placeholder="0" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)"><input class="form-control text-center" id="four2" type="number" placeholder="0"
                                            onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)"><input class="form-control text-center" id="four3" type="number" placeholder="0" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)"><input class="form-control text-center"
                                            id="four4" type="number" placeholder="0" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)"></div>
                                </div>
                                <div class="col-12">
                                    <div class="forgot-box d-block"><span>Didn't get the code? </span><a href="#">Resend It</a></div>
                                </div>
                                <div class="col-12"> <a class="btn login btn_black sm" href="index.php">Submit</a></div>
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