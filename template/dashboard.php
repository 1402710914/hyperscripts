<?php include '../header.php';?>
    <section class="section-b-space pt-0">
        <div class="heading-banner">
            <div class="custom-container container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="col-sm-6">
                        <ul class="breadcrumb float-end">
                            <li class="breadcrumb-item"> <a href="index.php">Home </a></li>
                            <li class="breadcrumb-item active"> <a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-b-space pt-0">
        <div class="custom-container container user-dashboard-section">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="left-dashboard-show"><button class="btn btn_black sm rounded bg-primary">Show Menu</button></div>
                    <div class="dashboard-left-sidebar sticky">
                        <div class="profile-box">
                            <div class="profile-bg-img"></div>
                            <div class="dashboard-left-sidebar-close"><i class="fa-solid fa-xmark"></i></div>
                            <div class="profile-contain">
                                <div class="profile-image"> <img class="img-fluid" src="../assets/images/user/12.jpg" alt=""></div>
                                <div class="profile-name">
                                    <h4>John Doe</h4>
                                    <h6>john.customer@example.com</h6><span data-bs-toggle="modal" data-bs-target="#edit-box" title="Quick View" tabindex="0">Edit Profile</span></div>
                            </div>
                        </div>
                        <ul class="nav flex-column nav-pills dashboard-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <li><button class="nav-link active" id="dashboard-tab" data-bs-toggle="pill" data-bs-target="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true"><i class="iconsax" data-icon="home-1"></i> Dashboard</button></li>
                            <li><button class="nav-link" id="notifications-tab" data-bs-toggle="pill" data-bs-target="#notifications" role="tab" aria-controls="notifications" aria-selected="false"><i class="iconsax" data-icon="lamp-2"></i>Notifications </button></li>
                            <li><button class="nav-link" id="order-tab" data-bs-toggle="pill" data-bs-target="#order" role="tab" aria-controls="order" aria-selected="false"><i class="iconsax" data-icon="receipt-square"></i> Order</button></li>
                            <li><button class="nav-link" id="wishlist-tab" data-bs-toggle="pill" data-bs-target="#wishlist" role="tab" aria-controls="wishlist" aria-selected="false"> <i class="iconsax" data-icon="heart"></i>Wishlist </button></li>

                            <li><button class="nav-link" id="generate-pdf-tab" data-bs-toggle="pill" data-bs-target="#saved-card" role="tab" aria-controls="saved-card" aria-selected="false"> <i class="iconsax" data-icon="bank-card"></i>Generate PDF</button></li>
                            <li><button class="nav-link" id="address-tab" data-bs-toggle="pill" data-bs-target="#address" role="tab" aria-controls="address" aria-selected="false"><i class="iconsax" data-icon="cue-cards"></i>Address</button></li>
                            <li><button class="nav-link" id="privacy-tab" data-bs-toggle="pill" data-bs-target="#privacy" role="tab" aria-controls="privacy" aria-selected="false"> <i class="iconsax" data-icon="security-user"></i>Privacy</button></li>
                        </ul>
                        <div class="logout-button"> <a class="btn btn_black sm" data-bs-toggle="modal" data-bs-target="#Confirmation-modal" title="Quick View" tabindex="0"><i class="iconsax me-1" data-icon="logout-1"></i> Logout </a></div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <div class="dashboard-right-box">
                                <div class="my-dashboard-tab">
                                    <div class="dashboard-items"> </div>
                                    <div class="sidebar-title">
                                        <div class="loader-line"></div>
                                        <h4>My Dashboard</h4>
                                    </div>
                                    <div class="dashboard-user-name">
                                        <h6>Hello, <b>John Doe</b></h6>
                                        <p>My dashboard provides a comprehensive overview of key metrics and data relevant to your operations. It offers real-time insights into performance, including sales figures, website traffic, customer engagement, and
                                            more. With customizable widgets and intuitive visualizations, it facilitates quick decision-making and allows you to track progress towards your goals effectively.</p>
                                    </div>
                                    <div class="total-box">
                                        <div class="row gy-4">
                                            <div class="col-xl-4">
                                                <div class="totle-contain">
                                                    <div class="wallet-point"><img src="https://themes.pixelstrap.net/katie/assets/images/svg-icon/wallet.svg" alt=""><img class="img-1" src="https://themes.pixelstrap.net/katie/assets/images/svg-icon/wallet.svg" alt=""></div>
                                                    <div
                                                        class="totle-detail">
                                                        <h6>Balance</h6>
                                                        <h4>$ 84.40 </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="totle-contain">
                                                <div class="wallet-point"><img src="https://themes.pixelstrap.net/katie/assets/images/svg-icon/coin.svg" alt=""><img class="img-1" src="https://themes.pixelstrap.net/katie/assets/images/svg-icon/coin.svg" alt=""></div>
                                                <div class="totle-detail">
                                                    <h6>Total Points</h6>
                                                    <h4>500</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="totle-contain">
                                                <div class="wallet-point"><img src="https://themes.pixelstrap.net/katie/assets/images/svg-icon/order.svg" alt=""><img class="img-1" src="https://themes.pixelstrap.net/katie/assets/images/svg-icon/order.svg" alt=""></div>
                                                <div class="totle-detail">
                                                    <h6>Total Orders</h6>
                                                    <h4>12</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-about">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="sidebar-title">
                                                <div class="loader-line"></div>
                                                <h5>Profile Information</h5>
                                            </div>
                                            <ul class="profile-information">
                                                <li>
                                                    <h6>Name :</h6>
                                                    <p>John Doe</p>
                                                </li>
                                                <li>
                                                    <h6>Phone:</h6>
                                                    <p>+1 5551855359</p>
                                                </li>
                                                <li>
                                                    <h6>Address:</h6>
                                                    <p>26, Starts Hollow Colony Denver, Colorado, United States 80014</p>
                                                </li>
                                            </ul>
                                            <div class="sidebar-title">
                                                <div class="loader-line"></div>
                                                <h5>Login Details</h5>
                                            </div>
                                            <ul class="profile-information mb-0">
                                                <li>
                                                    <h6>Email :</h6>
                                                    <p>john.customer@example.com<span data-bs-toggle="modal" data-bs-target="#edit-email" title="Quick View" tabindex="0">Edit</span></p>
                                                </li>
                                                <li>
                                                    <h6>Password :</h6>
                                                    <p>●●●●●●<span data-bs-toggle="modal" data-bs-target="#edit-password" title="Quick View" tabindex="0">Edit</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="profile-image d-none d-xl-block"> <img class="img-fluid" src="../assets/images/other-img/dashboard.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                        <div class="dashboard-right-box">
                            <div class="notification-tab">
                                <div class="sidebar-title">
                                    <div class="loader-line"></div>
                                    <h4>Notifications</h4>
                                </div>
                                <ul class="notification-body">
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/1.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Mint - is your budget ready for spring spending?<span>2:14PM</span></h6>
                                            <p>A quick weekend trip, a staycation in your own town, or a weeklong vacay with the family—it’s your choice if it’s in the budget. No matter what you plan on doing during spring break, budget ahead for it.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/2.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Flipkart - Confirmed order<span>2:14PM</span></h6>
                                            <p>Thanks for signing up for CodePen! We're happy you're here. Let's get your email address verified:</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/3.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Figma - Move work forward<span>2:14PM</span></h6>
                                            <p>Hello, Everyone understands why a new language would be advantageous: one could refuse to pay for high-priced translators.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/4.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Trip Reminder.<span>2:14PM</span></h6>
                                            <p>I'm sorry, but I have to disagree with Mr. Zingier. We are all aware that the title is the most crucial component of any article. Your reader won't even make it to the first sentence without an engaging title.
                                                </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/5.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Flipkart - Confirmed order<span>2:14PM</span></h6>
                                            <p>Thanks for signing up for CodePen! We're happy you're here. Let's get your email address verified:</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/6.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Flipkart - Confirmed order<span>2:14PM</span></h6>
                                            <p>Thanks for signing up for CodePen! We're happy you're here. Let's get your email address verified:</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/7.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Figma - Move work forward<span>2:14PM</span></h6>
                                            <p>Hello, Everyone understands why a new language would be advantageous: one could refuse to pay for high-priced translators.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/8.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Trip Reminder.<span>2:14PM</span></h6>
                                            <p>I'm sorry, but I have to disagree with Mr. Zingier. We are all aware that the title is the most crucial component of any article. Your reader won't even make it to the first sentence without an engaging title.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/9.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Flipkart - Confirmed order<span>2:14PM</span></h6>
                                            <p>Thanks for signing up for CodePen! We're happy you're here. Let's get your email address verified:</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/10.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Flipkart - Confirmed order<span>2:14PM</span></h6>
                                            <p>Thanks for signing up for CodePen! We're happy you're here. Let's get your email address verified:</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/11.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Figma - Move work forward<span>2:14PM</span></h6>
                                            <p>Hello, Everyone understands why a new language would be advantageous: one could refuse to pay for high-priced translators.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-img"> <img src="../assets/images/notification/12.jpg" alt=""></div>
                                        <div class="user-contant">
                                            <h6>Trip Reminder.<span>2:14PM</span></h6>
                                            <p>I'm sorry, but I have to disagree with Mr. Zingier. We are all aware that the title is the most crucial component of any article. Your reader won't even make it to the first sentence without an engaging title.
                                                </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                        <div class="dashboard-right-box">
                            <div class="wishlist-box ratio1_3">
                                <div class="sidebar-title">
                                    <div class="loader-line"></div>
                                    <h4>Wishlist</h4>
                                </div>
                                <div class="row-cols-md-3 row-cols-2 grid-section view-option row gy-4 g-xl-4">
                                    <div class="col">
                                        <div class="product-box-3 product-wishlist">
                                            <div class="img-wrapper">
                                                <div class="label-block"><a class="label-2 wishlist-icon delete-button" href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="iconsax" data-icon="trash" aria-hidden="true"></i></a></div>
                                                <div class="product-image"><a class="pro-first" href="#"> <img class="bg-img" src="../assets/images/product/product-3/1.jpg" alt="product"></a><a class="pro-sec" href="#"> <img class="bg-img" src="../assets/images/product/product-3/20.jpg" alt="product"></a></div>
                                                <div
                                                    class="cart-info-icon"> <a href="#" data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" tabindex="0"><i class="iconsax" data-icon="basket-2" aria-hidden="true"> </i></a><a href="compare.php" title="Compare"
                                                        tabindex="0"><i class="iconsax" data-icon="arrow-up-down" aria-hidden="true"></i></a><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="iconsax" data-icon="eye" aria-hidden="true"></i></a></div>
                                            <div
                                                class="countdown">
                                                <ul class="clockdiv1">
                                                    <li>
                                                        <div class="timer">
                                                            <div class="days"></div>
                                                        </div><span class="title">Days</span></li>
                                                    <li class="dot"> <span>:</span></li>
                                                    <li>
                                                        <div class="timer">
                                                            <div class="hours"></div>
                                                        </div><span class="title">Hours</span></li>
                                                    <li class="dot"> <span>:</span></li>
                                                    <li>
                                                        <div class="timer">
                                                            <div class="minutes"></div>
                                                        </div><span class="title">Min</span></li>
                                                    <li class="dot"> <span>:</span></li>
                                                    <li>
                                                        <div class="timer">
                                                            <div class="seconds"></div>
                                                        </div><span class="title">Sec</span></li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <ul class="rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                            <li>4.3</li>
                                        </ul>
                                        <a href="#">
                                            <h6>Greciilooks Women's Stylish Top</h6>
                                        </a>
                                        <p>$100.00 <del>$140.00</del><span>-20%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="product-box-3 product-wishlist">
                                    <div class="img-wrapper">
                                        <div class="label-block"><a class="label-2 wishlist-icon delete-button" href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="iconsax" data-icon="trash" aria-hidden="true"></i></a></div>
                                        <div class="product-image"><a class="pro-first" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/2.jpg" alt="product"></a><a class="pro-sec" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/19.jpg" alt="product"></a></div>
                                        <div
                                            class="cart-info-icon"> <a href="#" data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" tabindex="0"><i class="iconsax" data-icon="basket-2" aria-hidden="true"> </i></a><a href="compare.php" title="Compare" tabindex="0"><i class="iconsax" data-icon="arrow-up-down" aria-hidden="true"></i></a>
                                            <a
                                                href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="iconsax" data-icon="eye" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>4.3</li>
                                    </ul>
                                    <a href="product.php">
                                        <h6>Wide Linen-Blend Trousers</h6>
                                    </a>
                                    <p>$100.00 <del>$18.00 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-box-3 product-wishlist">
                                <div class="img-wrapper">
                                    <div class="label-block"><a class="label-2 wishlist-icon delete-button" href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="iconsax" data-icon="trash" aria-hidden="true"></i></a></div>
                                    <div class="product-image"><a class="pro-first" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/3.jpg" alt="product"></a><a class="pro-sec" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/18.jpg" alt="product"></a></div>
                                    <div
                                        class="cart-info-icon"> <a href="#" data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" tabindex="0"><i class="iconsax" data-icon="basket-2" aria-hidden="true"> </i></a><a href="compare.php" title="Compare" tabindex="0"><i class="iconsax" data-icon="arrow-up-down" aria-hidden="true"></i></a>
                                        <a
                                            href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="iconsax" data-icon="eye" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <ul class="rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li>4.3</li>
                                </ul>
                                <a href="product.php">
                                    <h6>Long Sleeve Rounded T-Shirt</h6>
                                </a>
                                <p>$120.30 <del>$140.00</del><span>-20%</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-box-3 product-wishlist">
                            <div class="img-wrapper">
                                <div class="label-block"><a class="label-2 wishlist-icon delete-button" href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="iconsax" data-icon="trash" aria-hidden="true"></i></a></div>
                                <div class="product-image"><a class="pro-first" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/4.jpg" alt="product"></a><a class="pro-sec" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/17.jpg" alt="product"></a></div>
                                <div
                                    class="cart-info-icon"> <a href="#" data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" tabindex="0"><i class="iconsax" data-icon="basket-2" aria-hidden="true"> </i></a><a href="compare.php" title="Compare" tabindex="0"><i class="iconsax" data-icon="arrow-up-down" aria-hidden="true"></i></a>
                                    <a
                                        href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="iconsax" data-icon="eye" aria-hidden="true"></i></a>
                            </div>
                            <div class="countdown">
                                <ul class="clockdiv2">
                                    <li>
                                        <div class="timer">
                                            <div class="days"></div>
                                        </div><span class="title">Days</span></li>
                                    <li class="dot"> <span>:</span></li>
                                    <li>
                                        <div class="timer">
                                            <div class="hours"></div>
                                        </div><span class="title">Hours</span></li>
                                    <li class="dot"> <span>:</span></li>
                                    <li>
                                        <div class="timer">
                                            <div class="minutes"></div>
                                        </div><span class="title">Min</span></li>
                                    <li class="dot"> <span>:</span></li>
                                    <li>
                                        <div class="timer">
                                            <div class="seconds"></div>
                                        </div><span class="title">Sec</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-detail">
                            <ul class="rating">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                <li>4.3</li>
                            </ul>
                            <a href="product.php">
                                <h6>Blue lined White T-Shirt</h6>
                            </a>
                            <p>$190.00 <del>$210.00</del></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-box-3 product-wishlist">
                        <div class="img-wrapper">
                            <div class="label-block"><a class="label-2 wishlist-icon delete-button" href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="iconsax" data-icon="trash" aria-hidden="true"></i></a></div>
                            <div class="product-image"><a class="pro-first" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/9.jpg" alt="product"></a><a class="pro-sec" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/16.jpg" alt="product"></a></div>
                            <div
                                class="cart-info-icon"> <a href="#" data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" tabindex="0"><i class="iconsax" data-icon="basket-2" aria-hidden="true"> </i></a><a href="compare.php" title="Compare" tabindex="0"><i class="iconsax" data-icon="arrow-up-down" aria-hidden="true"></i></a>
                                <a
                                    href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="iconsax" data-icon="eye" aria-hidden="true"></i></a>
                        </div>
                        <div class="countdown">
                            <ul class="clockdiv3">
                                <li>
                                    <div class="timer">
                                        <div class="days"></div>
                                    </div><span class="title">Days</span></li>
                                <li class="dot"> <span>:</span></li>
                                <li>
                                    <div class="timer">
                                        <div class="hours"></div>
                                    </div><span class="title">Hours</span></li>
                                <li class="dot"> <span>:</span></li>
                                <li>
                                    <div class="timer">
                                        <div class="minutes"></div>
                                    </div><span class="title">Min</span></li>
                                <li class="dot"> <span>:</span></li>
                                <li>
                                    <div class="timer">
                                        <div class="seconds"></div>
                                    </div><span class="title">Sec</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-detail">
                        <ul class="rating">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li>4.3</li>
                        </ul>
                        <a href="product.php">
                            <h6>Greciilooks Women's Stylish Top</h6>
                        </a>
                        <p>$100.00 <del>$140.00</del><span>-20%</span></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="product-box-3 product-wishlist">
                    <div class="img-wrapper">
                        <div class="label-block"><a class="label-2 wishlist-icon delete-button" href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="iconsax" data-icon="trash" aria-hidden="true"></i></a></div>
                        <div class="product-image"><a class="pro-first" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/10.jpg" alt="product"></a><a class="pro-sec" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/15.jpg" alt="product"></a></div>
                        <div
                            class="cart-info-icon"> <a href="#" data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" tabindex="0"><i class="iconsax" data-icon="basket-2" aria-hidden="true"> </i></a><a href="compare.php" title="Compare" tabindex="0"><i class="iconsax" data-icon="arrow-up-down" aria-hidden="true"></i></a>
                            <a
                                href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="iconsax" data-icon="eye" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="product-detail">
                    <ul class="rating">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li>4.3</li>
                    </ul>
                    <a href="product.php">
                        <h6>Wide Linen-Blend Trousers</h6>
                    </a>
                    <p>$100.00 <del>$18.00 </del></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="product-box-3 product-wishlist">
                <div class="img-wrapper">
                    <div class="label-block"><a class="label-2 wishlist-icon delete-button" href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="iconsax" data-icon="trash" aria-hidden="true"></i></a></div>
                    <div class="product-image"><a class="pro-first" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/11.jpg" alt="product"></a><a class="pro-sec" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/14.jpg" alt="product"></a></div>
                    <div
                        class="cart-info-icon"> <a href="#" data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" tabindex="0"><i class="iconsax" data-icon="basket-2" aria-hidden="true"> </i></a><a href="compare.php" title="Compare" tabindex="0"><i class="iconsax" data-icon="arrow-up-down" aria-hidden="true"></i></a>
                        <a
                            href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="iconsax" data-icon="eye" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="product-detail">
                <ul class="rating">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li>4.3</li>
                </ul>
                <a href="product.php">
                    <h6>Long Sleeve Rounded T-Shirt</h6>
                </a>
                <p>$120.30 <del>$140.00</del><span>-20% </span></p>
            </div>
        </div>
        </div>
        <div class="col">
            <div class="product-box-3 product-wishlist">
                <div class="img-wrapper">
                    <div class="label-block"><a class="label-2 wishlist-icon delete-button" href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="iconsax" data-icon="trash" aria-hidden="true"></i></a></div>
                    <div class="product-image"><a class="pro-first" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/12.jpg" alt="product"></a><a class="pro-sec" href="product.php"> <img class="bg-img" src="../assets/images/product/product-3/13.jpg" alt="product"></a></div>
                    <div
                        class="cart-info-icon"> <a href="#" data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" tabindex="0"><i class="iconsax" data-icon="basket-2" aria-hidden="true"> </i></a><a href="compare.php" title="Compare" tabindex="0"><i class="iconsax" data-icon="arrow-up-down" aria-hidden="true"></i></a>
                        <a
                            href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="iconsax" data-icon="eye" aria-hidden="true"></i></a>
                </div>
                <div class="countdown">
                    <ul class="clockdiv4">
                        <li>
                            <div class="timer">
                                <div class="days"></div>
                            </div><span class="title">Days</span></li>
                        <li class="dot"> <span>:</span></li>
                        <li>
                            <div class="timer">
                                <div class="hours"></div>
                            </div><span class="title">Hours</span></li>
                        <li class="dot"> <span>:</span></li>
                        <li>
                            <div class="timer">
                                <div class="minutes"></div>
                            </div><span class="title">Min</span></li>
                        <li class="dot"> <span>:</span></li>
                        <li>
                            <div class="timer">
                                <div class="seconds"></div>
                            </div><span class="title">Sec</span></li>
                    </ul>
                </div>
            </div>
            <div class="product-detail">
                <ul class="rating">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                    <li>4.3</li>
                </ul>
                <a href="product.php">
                    <h6>Blue lined White T-Shirt</h6>
                </a>
                <p>$190.00 <del>$210.00</del></p>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
            <div class="dashboard-right-box">
                <div class="order">
                    <div class="sidebar-title">
                        <div class="loader-line"></div>
                        <h4>My Orders History</h4>
                    </div>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="order-box">
                                <div class="order-container">
                                    <div class="order-icon"><i class="iconsax" data-icon="box"></i>
                                        <div class="couplet"><i class="fa-solid fa-check"></i></div>
                                    </div>
                                    <div class="order-detail">
                                        <h5>Delivered</h5>
                                        <p>on Fri, 1 Mar</p>
                                    </div>
                                </div>
                                <div class="product-order-detail">
                                    <div class="product-box"> <a href="product.php"> <img src="../assets/images/notification/1.jpg" alt=""></a>
                                        <div class="order-wrap">
                                            <h5>Rustic Minidress with Halterneck</h5>
                                            <p>Versatile sporty slogans short sleeve quirky laid back orange lux hoodies vests pins badges.</p>
                                            <ul>
                                                <li>
                                                    <p>Prize : </p><span>$20.00</span></li>
                                                <li>
                                                    <p>Size : </p><span>M</span></li>
                                                <li>
                                                    <p>Order Id :</p><span>ghat56han50</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="return-box">
                                    <div class="review-box">
                                        <ul class="rating">
                                            <li> <i class="fa-solid fa-star"> </i><i class="fa-solid fa-star"> </i><i class="fa-solid fa-star"> </i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></li>
                                        </ul><span data-bs-toggle="modal" data-bs-target="#Reviews-modal" title="Quick View" tabindex="0">Write Review</span></div>
                                    <h6> <span> </span>* Exchange/Return window closed on 20 mar</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="order-box">
                                <div class="order-container">
                                    <div class="order-icon"><i class="iconsax" data-icon="undo"></i>
                                        <div class="couplet"><i class="fa-solid fa-check"></i></div>
                                    </div>
                                    <div class="order-detail">
                                        <h5>Refund Credited</h5>
                                        <p> Your Refund Of <b>  $389.00 </b>For then return has been processed Successfully on 4th Apr.<a href="#"> View Refund details</a></p>
                                    </div>
                                </div>
                                <div class="product-order-detail">
                                    <div class="product-box"> <a href="product.php"> <img src="../assets/images/notification/9.jpg" alt=""></a>
                                        <div class="order-wrap">
                                            <h5>Rustic Minidress with Halterneck</h5>
                                            <p>Versatile sporty slogans short sleeve quirky laid back orange lux hoodies vests pins badges.</p>
                                            <ul>
                                                <li>
                                                    <p>Prize : </p><span>$20.00</span></li>
                                                <li>
                                                    <p>Size : </p><span>M</span></li>
                                                <li>
                                                    <p>Order Id :</p><span>ghat56han50</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="return-box">
                                    <div class="review-box">
                                        <ul class="rating">
                                            <li> <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h6> * Exchange/Return window closed on 20 mar</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="order-box">
                                <div class="order-container">
                                    <div class="order-icon"><i class="iconsax" data-icon="box"></i>
                                        <div class="couplet"><i class="fa-solid fa-check"></i></div>
                                    </div>
                                    <div class="order-detail">
                                        <h5>Delivered</h5>
                                        <p>on Fri, 1 Mar</p>
                                    </div>
                                </div>
                                <div class="product-order-detail">
                                    <div class="product-box"> <a href="product.php"> <img src="../assets/images/notification/2.jpg" alt=""></a>
                                        <div class="order-wrap">
                                            <h5>Rustic Minidress with Halterneck</h5>
                                            <p>Versatile sporty slogans short sleeve quirky laid back orange lux hoodies vests pins badges.</p>
                                            <ul>
                                                <li>
                                                    <p>Prize : </p><span>$20.00</span></li>
                                                <li>
                                                    <p>Size : </p><span>M</span></li>
                                                <li>
                                                    <p>Order Id :</p><span>ghat56han50</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="return-box">
                                    <div class="review-box">
                                        <ul class="rating">
                                            <li> <i class="fa-solid fa-star"> </i><i class="fa-solid fa-star"> </i><i class="fa-solid fa-star"> </i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></li>
                                        </ul><span data-bs-toggle="modal" data-bs-target="#Reviews-modal" title="Quick View" tabindex="0">Write Review</span></div>
                                    <h6> * Exchange/Return window closed on 20 mar</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="order-box">
                                <div class="order-container">
                                    <div class="order-icon"><i class="iconsax" data-icon="box-add"></i>
                                        <div class="couplet"><i class="fa-solid fa-xmark"></i></div>
                                    </div>
                                    <div class="order-detail">
                                        <h5>Cancelled</h5>
                                        <p>on Fri, 1 Mar</p>
                                        <h6> <b>Refund lanitiated : </b>$774.00 on Thu, 24 Feb 2024. <a href="#"> View Refunddetails</a></h6>
                                    </div>
                                </div>
                                <div class="product-order-detail">
                                    <div class="product-box"> <a href="product.php"> <img src="../assets/images/notification/6.jpg" alt=""></a>
                                        <div class="order-wrap">
                                            <h5>Rustic Minidress with Halterneck</h5>
                                            <p>Versatile sporty slogans short sleeve quirky laid back orange lux hoodies vests pins badges.</p>
                                            <ul>
                                                <li>
                                                    <p>Prize : </p><span>$20.00</span></li>
                                                <li>
                                                    <p>Size : </p><span>M</span></li>
                                                <li>
                                                    <p>Order Id :</p><span>ghat56han50</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="return-box">
                                    <div class="review-box">
                                        <ul class="rating">
                                            <li> <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h6> * Exchange/Return window closed on 20 mar</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="saved-card" role="tabpanel" aria-labelledby="generate-pdf-tab">
            <div class="dashboard-right-box">
                <div class="saved-card">
                    <div class="sidebar-title">
                        <div class="loader-line"></div>
                        <h4>Add the details to download the Catalog</h4>
                    </div>
                    <div class="payment-section">
                        <div class="row gy-3">
                            <!-- <div class="col-xxl-4 col-md-6">
                                <div class="payment-card">
                                    <div class="bank-info"><img class="bank" src="../assets/images/bank-card/bank1.png" alt="bank1">
                                        <div class="card-type"><img class="bank-card" src="../assets/images/bank-card/1.png" alt="card"></div>
                                    </div>
                                    <div class="card-details"><span>Card Number</span>
                                        <h5>6458 50XX XXXX 0851</h5>
                                    </div>
                                    <div class="card-details-wrap">
                                        <div class="card-details"><span>Name On Card</span>
                                            <h5>Josephin water</h5>
                                        </div>
                                        <div class="text-center card-details"><span>Validity</span>
                                            <h5>XX/XX</h5>
                                        </div>
                                        <div class="btn-box"><span data-bs-toggle="modal" data-bs-target="#edit-bank-card" title="Quick View" tabindex="0"><i class="iconsax" data-icon="edit-1"></i></span><span data-bs-toggle="modal" data-bs-target="#bank-card-modal" title="Quick View"
                                                tabindex="0"><i class="iconsax" data-icon="trash"></i></span></div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-md-6">
                                <div class="payment-card">
                                    <div class="bank-info"><img class="bank" src="../assets/images/bank-card/bank2.png" alt="bank1">
                                        <div class="card-type"><img class="bank-card" src="../assets/images/bank-card/2.png" alt="card"></div>
                                    </div>
                                    <div class="card-details"><span>Card Number</span>
                                        <h5>6458 50XX XXXX 0851</h5>
                                    </div>
                                    <div class="card-details-wrap">
                                        <div class="card-details"><span>Name On Card</span>
                                            <h5>Josephin water</h5>
                                        </div>
                                        <div class="text-center card-details"><span>Validity</span>
                                            <h5>XX/XX</h5>
                                        </div>
                                        <div class="btn-box"><span data-bs-toggle="modal" data-bs-target="#edit-bank-card" title="Quick View" tabindex="0"><i class="iconsax" data-icon="edit-1"></i></span><span data-bs-toggle="modal" data-bs-target="#bank-card-modal" title="Quick View"
                                                tabindex="0"><i class="iconsax" data-icon="trash"></i></span></div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-md-6">
                                <div class="payment-card">
                                    <div class="bank-info"><img class="bank" src="../assets/images/bank-card/bank3.png" alt="bank1">
                                        <div class="card-type"><img class="bank-card" src="../assets/images/bank-card/3.png" alt="card"></div>
                                    </div>
                                    <div class="card-details"><span>Card Number</span>
                                        <h5>6458 50XX XXXX 0851</h5>
                                    </div>
                                    <div class="card-details-wrap">
                                        <div class="card-details"><span>Name On Card</span>
                                            <h5>Josephin water</h5>
                                        </div>
                                        <div class="text-center card-details"><span>Validity</span>
                                            <h5>XX/XX</h5>
                                        </div>
                                        <div class="btn-box"><span data-bs-toggle="modal" data-bs-target="#edit-bank-card" title="Quick View" tabindex="0"><i class="iconsax" data-icon="edit-1"></i></span><span data-bs-toggle="modal" data-bs-target="#bank-card-modal" title="Quick View"
                                                tabindex="0"><i class="iconsax" data-icon="trash"></i></span></div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-md-6">
                                <div class="payment-card">
                                    <div class="add-card">
                                        <h6 data-bs-toggle="modal" data-bs-target="#add-bank-card" title="Quick View" tabindex="0">+ Add Card</h6>
                                    </div>
                                </div>
                            </div> -->


                            <div class="row gy-4">
                             

                            <div class="col-6">
            <label class="form-label" for="timeline">Title</label>
            <input class="form-control" id="timeline" type="text" name="timeline" placeholder="Enter Title" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" fdprocessedid="a209of">
        </div>
        
        <!-- Budget -->
        <div class="col-6">
            <label class="form-label" for="budget">Description</label>
            <input class="form-control" id="budget" type="text" name="budget" placeholder="Enter Description" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" fdprocessedid="4ev3x">
        </div>
          <!-- Company -->
  <div class="col-12">
            <label class="form-label" for="company">Company</label>
            <input class="form-control" id="company" type="text" name="company" placeholder="Enter Company Name" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" fdprocessedid="im9nyj">
        </div>

    

  <!-- Company -->
  <div class="col-6">
            <label class="form-label" for="Full Name">First Name</label>
            <input class="form-control" id="Full Name" type="text" name="Full Name" placeholder="Enter First Name" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" fdprocessedid="m05wt">
        </div>

        <div class="col-6">
            <label class="form-label" for="Full Name">Last Name</label>
            <input class="form-control" id="Full Name" type="text" name="Full Name" placeholder="Enter Last Name" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" fdprocessedid="m05wt">
        </div>

                                    <div class="col-6"><label class="form-label" for="inputEmail5">Email Address</label><input class="form-control" id="inputEmail5" type="email" name="email" placeholder="Enter Email Address" fdprocessedid="7vx55f"></div>
                                    <div class="col-6"><label class="form-label" for="inputEmail6">Phone Number</label><input class="form-control" id="inputEmail6" type="number" name="number" placeholder="Enter Phone Number" fdprocessedid="1pxqvj"></div>
                                    <div class="col-12"> <label class="form-label" for="inputCode">Countory Code</label><input class="form-control" id="inputCode" type="text" name="text" placeholder="Enter Countory Code" fdprocessedid="o3iw9"></div>
                                    <div class="col-12"> <label class="form-label">Product Details</label><textarea class="form-control" id="product-details" placeholder="Product Details"></textarea></div>
                                      <!-- Timeline -->
      
        
        
      
        
                                    <div class="col-12"> <button class="btn btn_black rounded sm" type="submit" fdprocessedid="3wju6l"> Download Catalog </button></div>
                                </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
            <div class="dashboard-right-box">
                <div class="address-tab">
                    <div class="sidebar-title">
                        <div class="loader-line"></div>
                        <h4>My Address Details</h4>
                    </div>
                    <div class="row gy-3">
                        <div class="col-xxl-4 col-md-6">
                            <div class="address-option"><label for="address-billing-0"> <span class="delivery-address-box"> <span class="form-check"> <input class="custom-radio" id="address-billing-0" type="radio" checked="checked" name="radio"></span><span class="address-detail"><span class="address"> <span class="address-title">New Home </span></span><span class="address"> <span class="address-home"> <span class="address-tag"> Address:</span>26, Starts Hollow Colony, Denver, Colorado, United States</span></span><span class="address"> <span class="address-home"> <span class="address-tag">Pin Code:</span>80014</span></span><span class="address"> <span class="address-home"> <span class="address-tag">Phone :</span>+1 5551855359</span></span></span></span><span class="buttons"> <a class="btn btn_black sm" href="#" data-bs-toggle="modal" data-bs-target="#edit-box" title="Quick View" tabindex="0">Edit </a><a class="btn btn_outline sm" href="#" data-bs-toggle="modal" data-bs-target="#bank-card-modal" title="Quick View" tabindex="0">Delete </a></span></label></div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="address-option"><label for="address-billing-3"> <span class="delivery-address-box"> <span class="form-check"> <input class="custom-radio" id="address-billing-3" type="radio" name="radio"></span><span class="address-detail"><span class="address"> <span class="address-title">IT Office</span></span><span class="address"> <span class="address-home"> <span class="address-tag"> Address:</span>55B, Claire Cav Street, San Jose, California, United States</span></span><span class="address"> <span class="address-home"> <span class="address-tag">Pin Code:</span>94088</span></span><span class="address"> <span class="address-home"> <span class="address-tag">Phone :</span>+1 5551855359</span></span></span></span><span class="buttons"> <a class="btn btn_black sm" href="#" data-bs-toggle="modal" data-bs-target="#edit-box" title="Quick View" tabindex="0">Edit </a><a class="btn btn_outline sm" href="#" data-bs-toggle="modal" data-bs-target="#bank-card-modal" title="Quick View" tabindex="0">Delete</a></span></label></div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="address-option"><label for="address-billing-2"> <span class="delivery-address-box"> <span class="form-check"> <input class="custom-radio" id="address-billing-2" type="radio" name="radio"></span><span class="address-detail"><span class="address"> <span class="address-title">IT Office</span></span><span class="address"> <span class="address-home"> <span class="address-tag"> Address:</span>55B, Claire Cav Street, San Jose, California, United States</span></span><span class="address"> <span class="address-home"> <span class="address-tag">Pin Code:</span>94088</span></span><span class="address"> <span class="address-home"> <span class="address-tag">Phone :</span>+1 5551855359</span></span></span></span><span class="buttons"> <a class="btn btn_black sm" href="#" data-bs-toggle="modal" data-bs-target="#edit-box" title="Quick View" tabindex="0">Edit </a><a class="btn btn_outline sm" href="#" data-bs-toggle="modal" data-bs-target="#bank-card-modal" title="Quick View" tabindex="0">Delete</a></span></label></div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="address-option"><label for="address-billing-2"> <span class="delivery-address-box"> <span class="form-check"> <input class="custom-radio" id="address-billing-2" type="radio" name="radio"></span><span class="address-detail"><span class="address"> <span class="address-title">IT Office</span></span><span class="address"> <span class="address-home"> <span class="address-tag"> Address:</span>55B, Claire Cav Street, San Jose, California, United States</span></span><span class="address"> <span class="address-home"> <span class="address-tag">Pin Code:</span>94088</span></span><span class="address"> <span class="address-home"> <span class="address-tag">Phone :</span>+1 5551855359</span></span></span></span><span class="buttons"> <a class="btn btn_black sm" href="#" data-bs-toggle="modal" data-bs-target="#edit-box" title="Quick View" tabindex="0">Edit </a><a class="btn btn_outline sm" href="#" data-bs-toggle="modal" data-bs-target="#bank-card-modal" title="Quick View" tabindex="0">Delete</a></span></label></div>
                        </div>
                    </div><button class="btn add-address" data-bs-toggle="modal" data-bs-target="#add-address" title="Quick View" tabindex="0">+ Add Address</button></div>
            </div>
        </div>
        <div class="tab-pane fade" id="privacy" role="tabpanel" aria-labelledby="privacy-tab">
            <div class="dashboard-right-box">
                <div class="privacy-tab">
                    <div class="sidebar-title">
                        <div class="loader-line"></div>
                        <h4>Privacy</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="privacy-title">
                                <h5>Allows others to see my profile</h5>
                                <p>Choose who can access your app and if users need to <a href="sign-up.php"> sign up.</a></p>
                            </div><span class="short-title">access</span>
                            <ul class="privacy-items">
                                <li>
                                    <div class="privacy-icon"> <i class="iconsax" data-icon="lock-2"></i></div>
                                    <div class="privacy-contant">
                                        <h6>Private</h6>
                                        <p>Only users you choose can access</p>
                                    </div><label class="switch"><input type="checkbox" checked=""><span class="slider round"></span></label></li>
                                <li>
                                    <div class="privacy-icon"> <i class="iconsax" data-icon="globe"></i></div>
                                    <div class="privacy-contant">
                                        <h6>Public</h6>
                                        <p>Anyone with the link can</p>
                                    </div><label class="switch"><input type="checkbox"><span class="slider round"></span></label></li>
                            </ul><span class="short-title">Users</span>
                            <ul class="privacy-items">
                                <li>
                                    <div class="privacy-icon"> <i class="iconsax" data-icon="package"></i></div>
                                    <div class="privacy-contant">
                                        <h6>Users in the users table </h6>
                                        <p>Only users in the users table can sign in </p>
                                    </div><label class="switch"><input type="checkbox" checked=""><span class="slider round"></span></label></li>
                                <li>
                                    <div class="privacy-icon"> <i class="iconsax" data-icon="fingerprint-circle"></i></div>
                                    <div class="privacy-contant">
                                        <h6>ongoing production team </h6>
                                        <p>only members of your team can sign in </p>
                                    </div><label class="switch"><input type="checkbox"><span class="slider round"></span></label></li>
                                <li>
                                    <div class="privacy-icon"> <i class="iconsax" data-icon="add-layer"></i></div>
                                    <div class="privacy-contant">
                                        <h6>anyone form domain(s)</h6>
                                        <p>only users with your email domain </p>
                                    </div><label class="switch"><input type="checkbox" checked=""><span class="slider round"></span></label></li>
                                <li>
                                    <div class="privacy-icon"> <i class="iconsax" data-icon="mail"></i></div>
                                    <div class="privacy-contant">
                                        <h6>any email in table </h6>
                                        <p>Anyone with email included in a table </p>
                                    </div><label class="switch"><input type="checkbox"><span class="slider round"></span></label></li>
                            </ul><span class="short-title"> </span>
                            <ul class="privacy-items">
                                <li>
                                    <div class="privacy-contant">
                                        <h6>Publishing </h6>
                                        <p>Your Project is Published</p>
                                    </div>
                                    <div class="publish-button"> <button class="btn">Unpublish</button></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <?php include '../footer.php';?>