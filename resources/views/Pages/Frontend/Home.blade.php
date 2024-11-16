@extends('Pages.Frontend.Layouts.app')
@section('content')

<body>
    
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider-1" id="heroSlide1"
            data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_1_1.jpg"></div>
                        <div class="container">
                            <div class="hero-style1"><span class="sub-title style1" data-ani="slideinup"
                                    data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Natural Wonder of the
                                    world</h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="tour.html"
                                        class="th-btn th-icon">Explore Tours</a> <a href="service.html"
                                        class="th-btn style2 th-icon">Our Services</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_1_2.jpg"></div>
                        <div class="container">
                            <div class="hero-style1"><span class="sub-title style1" data-ani="slideinup"
                                    data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Let’s make your best
                                    trip with us</h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="tour.html"
                                        class="th-btn th-icon">Explore Tours</a> <a href="service.html"
                                        class="th-btn style2 th-icon">Our Services</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_1_3.jpg"></div>
                        <div class="container">
                            <div class="hero-style1"><span class="sub-title style1" data-ani="slideinup"
                                    data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Explore beauty of the
                                    whole world</h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="tour.html"
                                        class="th-btn th-icon">Explore Tours</a> <a href="service.html"
                                        class="th-btn style2 th-icon">Our Services</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-swiper-custom"><button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img
                        src="assets/img/icon/right-arrow.svg" alt=""></button>
                <div class="slider-pagination"></div><button data-slider-next="#heroSlide1"
                    class="slider-arrow slider-next"><img src="assets/img/icon/left-arrow.svg" alt=""></button>
            </div>
        </div>
    </div>
    <div class="booking-sec">
        <div class="container">
            <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                class="booking-form ajax-contact">
                <div class="input-wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-light fa-route"></i></div>
                            <div class="search-input"><label>Destination</label> <select name="subject" id="subject"
                                    class="form-select nice-select">
                                    <option value="Select Destination" selected="selected" disabled="disabled">Select
                                        Destination</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="jordan & Aqso">Jordan & Aqso</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Turkey">Turkey</option>
                                </select></div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-regular fa-person-hiking"></i></div>
                            <div class="search-input"><label>Type</label> <select class="nice-select" name="Adventure"
                                    id="Adventure">
                                    <option value="Adventure" selected="selected" disabled="disabled">Adventure</option>
                                    <option value="Group Tour">Group Tour</option>
                                    <option value="Family Tour">Family Tour</option>
                                    <option value="Honeymoon">Honeymoon</option>
                                </select></div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-light fa-clock"></i></div>
                            <div class="search-input"><label>Duration</label> <select class="form-select nice-select"
                                    name="Duration" id="Duration">
                                    <option value="Normal" selected="selected" disabled="disabled">Duration</option>
                                    <option value="1-6 Days">1 - 6 Days</option>
                                    <option value="10 Days">10 Days</option>
                                    <option value="2 Weeks">2 Weeks</option>
                                    <option value="15 Days">15 Days</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-light fa-map-location-dot"></i></div>
                            <div class="search-input"><label>Tour Category</label> <select name="subject" id="category"
                                    class="form-select nice-select">
                                    <option value="Luxury" selected="selected" disabled="disabled">Luxury</option>
                                    <option value="Premium">Premium</option>
                                    <option value="Economy">Economy</option>
                                </select></div>
                        </div>
                        <div class="form-btn col-md-12 col-lg-auto"><button class="th-btn">Book</button></div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </div>
            </form>
        </div>
    </div>
    <section class="category-area bg-top-center" data-bg-src="assets/img/bg/category_bg_1.png">
        <div class="container th-container">
            <div class="title-area text-center"><span class="sub-title">Wornderful Place For You</span>
                <h2 class="sec-title">Tour Categories</h2>
            </div>
            <div class="swiper categorySlider" id="categorySlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Cruises</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Hiking</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Airbirds</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Wildlife</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Walking</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Cruises</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Hiking</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Airbirds</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Wildlife</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Walking</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Cruises</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Hiking</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Airbirds</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Wildlife</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Walking</a></h3><a class="line-btn"
                                href="destination.html">See more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <div class="destination-area position-relative overflow-hidden">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title">Top Destination</span>
                <h2 class="sec-title">Popular Destination</h2>
            </div>
            <div class="swiper th-slider destination-slider" id="aboutSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Maldives</a></h4><span
                                            class="destination-subtitle">15 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_2.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Thailand</a></h4><span
                                            class="destination-subtitle">22 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Belgium</a></h4><span
                                            class="destination-subtitle">25 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_4.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Island</a></h4><span
                                            class="destination-subtitle">28 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_5.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Maldives</a></h4><span
                                            class="destination-subtitle">30 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Maldives</a></h4><span
                                            class="destination-subtitle">15 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_2.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Thailand</a></h4><span
                                            class="destination-subtitle">22 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Belgium</a></h4><span
                                            class="destination-subtitle">25 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_4.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Island</a></h4><span
                                            class="destination-subtitle">28 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_5.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.html">Maldives</a></h4><span
                                            class="destination-subtitle">30 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.html" class="th-btn style2 th-icon">View
                                            All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area position-relative overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1"><img src="assets/img/normal/about_1_1.jpg" alt="About"></div>
                        <div class="img2"><img src="assets/img/normal/about_1_2.jpg" alt="About"></div>
                        <div class="img3"><img src="assets/img/normal/about_1_3.jpg" alt="About"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 ms-xl-2">
                        <div class="title-area mb-20 pe-xl-5 me-xl-5"><span class="sub-title style1">Let’s Go
                                Together</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Plan Your Trip With us</h2>
                            <p class="sec-text mb-30">There are many variations of passages of available but the
                                majority have suffered alteration in some form, by injected hum randomised words which
                                don't look even slightly.</p>
                        </div>
                        <div class="about-item-wrap">
                            <div class="about-item">
                                <div class="about-item_img"><img src="assets/img/icon/map3.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Exclusive Trip</h5>
                                    <p class="about-item_text">There are many variations of passages of available but
                                        the majority.</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-item_img"><img src="assets/img/icon/guide.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Professional Guide</h5>
                                    <p class="about-item_text">There are many variations of passages of available but
                                        the majority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35"><a href="about.html" class="th-btn style3 th-icon">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="2%"><img
                src="assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="3%"><img
                src="assets/img/shape/shape_2.png" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="8%"><img
                src="assets/img/shape/shape_3.png" alt="shape"></div>
        <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="8%"><img
                src="assets/img/normal/about-slide-img.png" alt="shape"></div>
        <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="45%" data-right="2%"><i
                class="fa-sharp fa-solid fa-star"></i><span>4.9k</span></div>
        <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="22%"><img
                src="assets/img/icon/emoji.png" alt=""></div>
    </div>
    <section class="position-relative bg-top-center overflow-hidden space" id="service-sec"
        data-bg-src="assets/img/bg/tour_bg_1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center"><span class="sub-title">Best Place For You</span>
                        <h2 class="sec-title">Most Popular Tour</h2>
                        <p class="sec-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="slider-area tour-slider">
                <div class="swiper th-slider has-shadow"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_1.jpg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.html">Greece Tour Package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.html" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-details.html" class="th-btn style4 th-icon">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_2.jpg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.html">Italy Tour package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.html" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-details.html" class="th-btn style4 th-icon">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_3.jpg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.html">Dubai Tour Package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.html" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-details.html" class="th-btn style4 th-icon">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_4.jpg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.html">Switzerland</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.html" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-details.html" class="th-btn style4 th-icon">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_1.jpg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.html">Greece Tour Package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.html" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-details.html" class="th-btn style4 th-icon">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_2.jpg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.html">Italy Tour package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.html" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-details.html" class="th-btn style4 th-icon">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="gallery-area">
        <div class="container th-container">
            <div class="title-area text-center"><span class="sub-title">Make Your Tour More Pleasure</span>
                <h2 class="sec-title">Recent Gallery</h2>
            </div>
            <div class="row gy-10 gx-10 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_1.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_2.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_3.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_4.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_5.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_6.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_7.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_7.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%"><img src="assets/img/shape/line.png"
                alt="shape"></div>
        <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="3%"><img class="gmovingX"
                src="assets/img/shape/shape_4.png" alt="shape"></div>
    </div>
    <div class="counter-area space">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">12</span></h3>
                            <h6 class="counter-title">Years Experience</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">97</span>%</h3>
                            <h6 class="counter-title">Retention Rate</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">8</span>k</h3>
                            <h6 class="counter-title">Tour Completed</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">19</span>k</h3>
                            <h6 class="counter-title">Happy Travellers</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xl-block" data-top="30%" data-left="2%"><img
                src="assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="45%" data-left="2%"><img
                src="assets/img/shape/shape_2.png" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="32%" data-left="7%"><img
                src="assets/img/shape/shape_3.png" alt="shape"></div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-left="3%"><img
                src="assets/img/shape/shape_6.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="5%"><img
                src="assets/img/shape/shape_5.png" alt="shape"></div>
    </div>
    <section class="bg-smoke space" data-bg-src="assets/img/bg/team_bg_1.png">
        <div class="container z-index-common">
            <div class="title-area text-center"><span class="sub-title">Meet with Guide</span>
                <h2 class="sec-title">Tour Guide</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider teamSlider1 has-shadow" id="teamSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/img/team/team_1_1.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jacob Jones</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/img/team/team_1_2.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jane Cooper</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/img/team/team_1_3.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Guy Hawkins</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/img/team/team_1_4.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jenny Wilson</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/img/team/team_1_1.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jacob Jones</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/img/team/team_1_2.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jane Cooper</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/img/team/team_1_3.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Guy Hawkins</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/img/team/team_1_4.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jenny Wilson</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="testi-area overflow-hidden space" id="testi-sec">
        <div class="container-fluid p-0">
            <div class="title-area mb-20 text-center"><span class="sub-title">Testimonial</span>
                <h2 class="sec-title">What Client Say About us</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testiSlider1 has-shadow" id="testiSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2","centeredSlides":"true"},"992":{"slidesPerView":"2","centeredSlides":"true"},"1200":{"slidesPerView":"2","centeredSlides":"true"},"1400":{"slidesPerView":"3","centeredSlides":"true"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Maria Doe</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Andrew Simon</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“The home boasts sleek, contemporary architecture with clean
                                    lines and expansive windows, allowing natural light to flood the interiors It
                                    incorporates passive design principles”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Alex Jordan</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“Solar panels adorn the roof, harnessing renewable energy to
                                    power the home and even feed excess electricity back into the grid. High-performance
                                    insulation and triple-glazed”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Maria Doe</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">A sophisticated rainwater harvesting system collects and
                                    filters rainwater for irrigation and non-potable uses, reducing reliance on
                                    municipal water sources. Greywater systems</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Angelina Rose</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">Throughout the interior, eco-friendly materials like
                                    reclaimed wood, bamboo flooring, and recycled glass countertops create a luxurious
                                    yet sustainable ambiance.</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Maria Doe</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Andrew Simon</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">A sophisticated rainwater harvesting system collects and
                                    filters rainwater for irrigation and non-potable uses, reducing reliance on
                                    municipal water sources. Greywater systems</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Alex Jordan</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">Throughout the interior, eco-friendly materials like
                                    reclaimed wood, bamboo flooring, and recycled glass countertops create a luxurious
                                    yet sustainable ambiance.</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="-2%" data-right="0%"><img
                src="assets/img/shape/line2.png" alt="shape"></div>
        <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="5%"><img
                src="assets/img/shape/shape_7.png" alt="shape"></div>
    </section>
    <div class="brand-area overflow-hidden space-bottom">
        <div class="container th-container">
            <div class="swiper th-slider brandSlider1" id="brandSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_1.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_1.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_2.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_2.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_3.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_3.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_4.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_4.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_5.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_5.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_6.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_6.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_7.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_7.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_8.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_8.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_4.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_4.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_3.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_3.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_2.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_2.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="assets/img/brand/brand_1_1.svg"
                                    alt="Brand Logo"> <img class="gray" src="assets/img/brand/brand_1_1.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-smoke overflow-hidden space" id="blog-sec">
        <div class="container">
            <div class="mb-30 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7">
                        <div class="title-area mb-md-0"><span class="sub-title">About Us Restaurant</span>
                            <h2 class="sec-title">News & Articles From Tourm</h2>
                        </div>
                    </div>
                    <div class="col-md-auto"><a href="blog.html" class="th-btn style4 th-icon">See More Articles</a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-box th-ani">
                                <div class="blog-img global-img"><img src="assets/img/blog/blog_1_1.jpg"
                                        alt="blog image"></div>
                                <div class="blog-box_content">
                                    <div class="blog-meta"><a class="author" href="blog.html">July 05 2024</a> <a
                                            href="blog.html">6 min read</a></div>
                                    <h3 class="box-title"><a href="blog-details.html">10 Reason why you should visit New
                                            Jersy</a></h3><a href="blog-details.html" class="th-btn style4 th-icon">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box th-ani">
                                <div class="blog-img global-img"><img src="assets/img/blog/blog_1_2.jpg"
                                        alt="blog image"></div>
                                <div class="blog-box_content">
                                    <div class="blog-meta"><a class="author" href="blog.html">July 06 2024</a> <a
                                            href="blog.html">7 min read</a></div>
                                    <h3 class="box-title"><a href="blog-details.html">The best time to visit japan &
                                            enjoy the cherry blossoms</a></h3><a href="blog-details.html"
                                        class="th-btn style4 th-icon">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box th-ani">
                                <div class="blog-img global-img"><img src="assets/img/blog/blog_1_3.jpg"
                                        alt="blog image"></div>
                                <div class="blog-box_content">
                                    <div class="blog-meta"><a class="author" href="blog.html">July 07 2024</a> <a
                                            href="blog.html">8 min read</a></div>
                                    <h3 class="box-title"><a href="blog-details.html">The 7 amazing destinations for
                                            adventure seekers</a></h3><a href="blog-details.html"
                                        class="th-btn style4 th-icon">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box th-ani">
                                <div class="blog-img global-img"><img src="assets/img/blog/blog_1_1.jpg"
                                        alt="blog image"></div>
                                <div class="blog-box_content">
                                    <div class="blog-meta"><a class="author" href="blog.html">July 09 2024</a> <a
                                            href="blog.html">9 min read</a></div>
                                    <h3 class="box-title"><a href="blog-details.html">10 Reason why you should visit New
                                            Jersy</a></h3><a href="blog-details.html" class="th-btn style4 th-icon">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box th-ani">
                                <div class="blog-img global-img"><img src="assets/img/blog/blog_1_2.jpg"
                                        alt="blog image"></div>
                                <div class="blog-box_content">
                                    <div class="blog-meta"><a class="author" href="blog.html">July 10 2024</a> <a
                                            href="blog.html">10 min read</a></div>
                                    <h3 class="box-title"><a href="blog-details.html">The best time to visit japan &
                                            enjoy the cherry blossoms</a></h3><a href="blog-details.html"
                                        class="th-btn style4 th-icon">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box th-ani">
                                <div class="blog-img global-img"><img src="assets/img/blog/blog_1_3.jpg"
                                        alt="blog image"></div>
                                <div class="blog-box_content">
                                    <div class="blog-meta"><a class="author" href="blog.html">July 12 2024</a> <a
                                            href="blog.html">11 min read</a></div>
                                    <h3 class="box-title"><a href="blog-details.html">The 7 amazing destinations for
                                            adventure seekers</a></h3><a href="blog-details.html"
                                        class="th-btn style4 th-icon">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="20%" data-left="2%"><img
                src="assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="5%" data-left="2%"><img
                src="assets/img/shape/shape_2.png" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="12%" data-left="7%"><img
                src="assets/img/shape/shape_3.png" alt="shape"></div>
    </section>
   
    <div id="login-form" class="popup-login-register mfp-hide">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation"><button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="false">Login</button></li>
            <li class="nav-item" role="presentation"><button class="nav-menu active" id="pills-profile-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                    aria-controls="pills-profile" aria-selected="true">Register</button></li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                        class="login-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-12"><label>Username or email</label> <input type="text"
                                    class="form-control" name="email" id="email" required="required"></div>
                            <div class="form-group col-12"><label>Password</label> <input type="password"
                                    class="form-control" name="pasword" id="pasword" required="required"></div>
                            <div class="form-btn mb-20 col-12"><button class="th-btn btn-fw th-radius2">Send
                                    Message</button></div>
                        </div>
                        <div id="forgot_url"><a href="my-account.html">Forgot password?</a></div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <h3 class="th-form-title mb-30">Sign in to your account</h3>
                <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                    class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12"><label>Username*</label> <input type="text" class="form-control"
                                name="usename" id="usename" required="required"></div>
                        <div class="form-group col-12"><label>First name*</label> <input type="text"
                                class="form-control" name="firstname" id="firstname" required="required"></div>
                        <div class="form-group col-12"><label>Last name*</label> <input type="text" class="form-control"
                                name="lastname" id="lastname" required="required"></div>
                        <div class="form-group col-12"><label for="new_email">Your email*</label> <input type="text"
                                class="form-control" name="new_email" id="new_email" required="required"></div>
                        <div class="form-group col-12"><label for="new_email_confirm">Confirm email*</label> <input
                                type="text" class="form-control" name="new_email_confirm" id="new_email_confirm"
                                required="required"></div>
                        <div class="statement"><span class="register-notes">A password will be emailed to you.</span>
                        </div>
                        <div class="form-btn mt-20 col-12"><button class="th-btn btn-fw th-radius2">Sign up</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
</body>
