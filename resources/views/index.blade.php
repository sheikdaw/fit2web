@extends('layout')
@section('content')
    <!-- Intro Section S T A R T -->
    <section class="intro">
        <div class="intro-container-wrapper style1">
            <div class="container">
                <div class="intro_content">
                    <h2 class="intro_content_title wow fadeInUp" data-wow-delay=".3s">
                        Tech That <span class="theme-color-text">Unlock</span> <br>
                        Business Potentials
                    </h2>
                    <div class="intro_content_info">
                        <div class="intro_content_info_left wow fadeInUp" data-wow-delay=".5s">
                            <img src="assets/images/intro/introProfileThumb1_1.png" alt="thumb">
                            <div class="intro_content_info_left_user">
                                <h3 class="intro_content_info_left_user_title"><span
                                        class="counter-number">2,000</span><span>+</span>
                                </h3>
                                <p class="intro_content_info_left_user_subtitle">
                                    Happy Clients
                                </p>
                            </div>
                        </div>
                        <div class="intro_content_info_center wow fadeInUp" data-wow-delay=".6s">
                            <img src="assets/images/intro/introThumb1_1.png" alt="thumb">
                        </div>
                        <div class="intro_content_info_right wow fadeInUp" data-wow-delay=".8s">
                            <p>
                                IT company that provides a seamless and intuitive experience for
                                users.
                            </p>
                            <div class="intro_content_info_btn">
                                <div class="video-wrap ripple-effect rounded-0">
                                    <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8" class="play-btn popup-video"><img
                                            class="playerImg" src="assets/images/icon/playerIcon1_1.svg" alt="icon"></a>
                                </div>
                                Watch Video
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section S T A R T -->
    <section class="service section-padding fix">
        <div class="service-container-wrapper style1">
            <div class="container">
                <div class="service_content">
                    <div class="service_content_title">
                        <h2 class="title wow fadeInUp" data-wow-delay=".3s">
                            Business with <br>
                            <span class="theme-color-text">technology</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            IT company that provides a seamless and intuitive experience for
                            users. The design will focus on clear navigation, easy access to
                            information
                        </p>
                    </div>
                    <div class="service_content_info">
                        <div class="service_content_info_item style1 wow fadeInUp" data-wow-delay=".8s">
                            <h2>01</h2>
                            <img src="assets/images/icon/serviceIcon1_3.svg" alt="icon">
                            <h3><a href="service-details.html">IT consulting</a></h3>
                            <div class="content">
                                <p>
                                    IT company that provides a seamless and intuitive experience for
                                    users. The design will focus on clear navigation IT company that
                                    provides a seamless and intuitive experience for users. The
                                    design will focus on clear navigation
                                </p>
                            </div>
                        </div>
                        <div class="service_content_info_item style1 active wow fadeInUp" data-wow-delay=".3s">
                            <h2>02</h2>
                            <img src="assets/images/icon/serviceIcon1_1.svg" alt="icon">
                            <h3><a href="service-details.html">cybersecurity</a></h3>
                            <div class="content">
                                <p>
                                    IT company that provides a seamless and intuitive experience for
                                    users. The design will focus on clear navigation IT company that
                                    provides a seamless and intuitive experience for users. The
                                    design will focus on clear navigation
                                </p>
                            </div>

                        </div>
                        <div class="service_content_info_item style1 wow fadeInUp" data-wow-delay=".6s">
                            <h2>03</h2>
                            <img src="assets/images/icon/serviceIcon1_2.svg" alt="icon">
                            <h3><a href="service-details.html">cloud solutions</a></h3>
                            <div class="content">
                                <p>
                                    IT company that provides a seamless and intuitive experience for
                                    users. The design will focus on clear navigation IT company that
                                    provides a seamless and intuitive experience for users. The
                                    design will focus on clear navigation
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="service_content_info_item2 wow fadeInUp" data-wow-delay=".3s">
                                <h3>
                                    IT company that provides a <br>
                                    seamless and intuitive
                                </h3>
                                <div class="btn-wrapper">
                                    <a href="services.html" class="theme-btn"> View All <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Section S T A R T -->
    <section class="project-section">
        <div class="project-container-wrapper style1 section-padding fix">
            <div class="container">
                <div class="project-wrapper style1">
                    <div class="mx-auto text-center section-title">
                        <h2 class="mx-auto title mxw-750 wow fadeInUp" data-wow-delay=".3s">Transform <span
                                class="color-text">
                                challenges </span> tech-driven success</h2>
                        <div class="mx-auto section-desc2 mxw-630 wow fadeInUp" data-wow-delay=".3s">IT company that
                            provides a
                            seamless and intuitive experience for users. The design will focus on clear navigation, easy
                            access to
                            information</div>
                    </div>
                    <div class="row g-4">
                        <div class="row g-4">
                            @foreach ($projects as $key => $project)
                                <div class="col-xl-{{ $key < 3 ? '6' : '3' }} col-md-6">
                                    <div class="project-card style1 wow fadeInUp" data-wow-delay="{{ ($key + 1) * 0.3 }}s">
                                        <div class="project-thumb">
                                            <img src="{{ $key >= 3 ? asset($project->image_3) : asset($project->image_1) }}"
                                                alt="{{ $project->project_name }}">
                                        </div>
                                        <div class="project-content{{ $key >= 3 ? ' style2' : '' }}">
                                            <div class="title-wrap">
                                                <div class="subtitle">{{ $project->type }}</div>
                                                <h3 class="title">
                                                    <a
                                                        href="{{ route('project', ['id' => $project->id]) }}">{{ $project->project_name }}</a>
                                                </h3>
                                            </div>
                                            <a class="arrow-btn" href="{{ route('project', ['id' => $project->id]) }}">
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section S T A R T -->
    <section class="pricing section-padding fix">
        <div class="pricing-container-wrapper style1">
            <div class="container">
                <div class="pricing_content">
                    <div class="pricing_content_title">
                        <div class="pricing_content_title_left">
                            <h2 class="title wow fadeInUp" data-wow-delay=".3s">
                                Advance business <br>with tech
                                <span class="theme-color-text">expertise</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".3s">
                                IT company that provides a seamless and intuitive experience for
                                users. The design will focus on clear navigation, easy access to
                                information
                            </p>
                        </div>
                        <div class="pricing_content_title_right">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="monthly-tab" data-bs-toggle="tab" href="#monthly"
                                        role="tab" aria-controls="monthly" aria-selected="true">Monthly</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="yearly-tab" data-bs-toggle="tab" href="#yearly"
                                        role="tab" aria-controls="yearly" aria-selected="false">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="monthly" role="tabpanel"
                            aria-labelledby="monthly-tab">
                            <div class="pricing_content_info">
                                <!-- pricing card -->
                                <div class="pricing_card style1">
                                    <div class="pricing_card_content">
                                        <div class="pricing_card_content_top card_1">
                                            <h3 class="title">Consult</h3>
                                            <div class="price">
                                                <h3>$250</h3>
                                                <p>/month</p>
                                            </div>
                                        </div>
                                        <div class="pricing_card_content_middle">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Mistakes To Avoid</li>
                                                <li><i class="fa fa-check"></i> Your Startup</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                            </ul>
                                        </div>
                                        <div class="pricing_card_content_bottom">
                                            <div class="btn-wrapper">
                                                <a href="contact.html">
                                                    <span class="theme-btn-2 w-100">
                                                        Get Now
                                                        <i class="fa fa-long-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing_card style1">
                                    <div class="pricing_card_content">
                                        <div class="pricing_card_content_top card_2">
                                            <h3 class="title">Basic</h3>
                                            <div class="price">
                                                <h3>$25</h3>
                                                <p>/month</p>
                                            </div>
                                        </div>
                                        <div class="pricing_card_content_middle">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Mistakes To Avoid</li>
                                                <li><i class="fa fa-check"></i> Your Startup</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                            </ul>
                                        </div>
                                        <div class="pricing_card_content_bottom">
                                            <div class="btn-wrapper">
                                                <a href="contact.html">
                                                    <span class="theme-btn-2 w-100">
                                                        Get Now
                                                        <i class="fa fa-long-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing_card style1">
                                    <div class="pricing_card_content">
                                        <div class="pricing_card_content_top card_3">
                                            <h3 class="title">Pro</h3>
                                            <div class="price">
                                                <h3>$250</h3>
                                                <p>/month</p>
                                            </div>
                                        </div>
                                        <div class="pricing_card_content_middle">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Mistakes To Avoid</li>
                                                <li><i class="fa fa-check"></i> Your Startup</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                            </ul>
                                        </div>
                                        <div class="pricing_card_content_bottom">
                                            <div class="btn-wrapper">
                                                <a href="contact.html">
                                                    <span class="theme-btn-2 w-100">
                                                        Get Now <i class="fa fa-long-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                            <div class="pricing_content_info">
                                <!-- pricing card -->
                                <div class="pricing_card style1">
                                    <div class="pricing_card_content">
                                        <div class="pricing_card_content_top card_1">
                                            <h3 class="title">Consult</h3>
                                            <div class="price">
                                                <h3>$250</h3>
                                                <p>/yearly</p>
                                            </div>
                                        </div>
                                        <div class="pricing_card_content_middle">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Mistakes To Avoid</li>
                                                <li><i class="fa fa-check"></i> Your Startup</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                            </ul>
                                        </div>
                                        <div class="pricing_card_content_bottom">
                                            <div class="btn-wrapper">
                                                <a href="contact.html">
                                                    <span class="theme-btn-2 w-100">
                                                        Get Now
                                                        <i class="fa fa-long-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing_card style1">
                                    <div class="pricing_card_content">
                                        <div class="pricing_card_content_top card_2">
                                            <h3 class="title">Basic</h3>
                                            <div class="price">
                                                <h3>$25</h3>
                                                <p>/yearly</p>
                                            </div>
                                        </div>
                                        <div class="pricing_card_content_middle">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Mistakes To Avoid</li>
                                                <li><i class="fa fa-check"></i> Your Startup</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                            </ul>
                                        </div>
                                        <div class="pricing_card_content_bottom">
                                            <div class="btn-wrapper">
                                                <a href="contact.html">
                                                    <span class="theme-btn-2 w-100">
                                                        Get Now
                                                        <i class="fa fa-long-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing_card style1">
                                    <div class="pricing_card_content">
                                        <div class="pricing_card_content_top card_3">
                                            <h3 class="title">Pro</h3>
                                            <div class="price">
                                                <h3>$250</h3>
                                                <p>/yearly</p>
                                            </div>
                                        </div>
                                        <div class="pricing_card_content_middle">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Mistakes To Avoid</li>
                                                <li><i class="fa fa-check"></i> Your Startup</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                                <li><i class="fa fa-check"></i> Knew About Fonts</li>
                                            </ul>
                                        </div>
                                        <div class="pricing_card_content_bottom">
                                            <div class="btn-wrapper">
                                                <a href="contact.html">
                                                    <span class="theme-btn-2 w-100">
                                                        Get Now
                                                        <i class="fa fa-long-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
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

    <!-- About Section S T A R T -->
    <section class="about fix">
        <div class="about-container-wrapper style1">
            <div class="about_wrapper section-padding">
                <div class="container">
                    <div class="about_content">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="about_content_info">
                                    <h2 class="title wow fadeInUp" data-wow-delay=".3s">
                                        Power your <span class="theme-color-text">business</span>
                                        <br>
                                        with technology
                                    </h2>
                                    <p class=" wow fadeInUp" data-wow-delay=".3s">
                                        IT company that provides a seamless and intuitive experience
                                        for users. The design will focus on clear navigation, easy
                                        access to information
                                    </p>
                                    <div class="counter wow fadeInUp" data-wow-delay=".3s">
                                        <div class="counter_item">
                                            <h3><span class="counter-number">2.8</span>k+</h3>
                                            <p>World wide clients</p>
                                        </div>
                                        <div class="counter_item">
                                            <h3><span class="counter-number">300</span>+</h3>
                                            <p>Happy customers</p>
                                        </div>
                                        <div class="counter_item">
                                            <h3><span class="counter-number">42</span>k</h3>
                                            <p>Completed projects</p>
                                        </div>
                                    </div>
                                    <div class="btn-wrapper wow fadeInUp" data-wow-delay=".6s">
                                        <a href="contact.html">
                                            <span class="theme-btn">
                                                Start Now
                                                <i class="fa fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="client_content_img img-custom-anim-right wow fadeInUp" data-wow-delay=".4s">
                                    <img src="assets/images/clients/clientMainThumb.png" alt="client"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section S T A R T -->
    <section class="testimonials section-padding fix">
        <div class="testimonial-container-wrapper style1">
            <div class="container">
                <div class="testimonials_content">
                    <div class="testimonials_title">
                        <h2 class="title">
                            Shape the <span class="theme-color-text">future</span> with <br>
                            digital innovation
                        </h2>
                        <p>
                            IT company that provides a seamless and intuitive experience for
                            users. The design will focus on clear navigation, easy access to
                            information
                        </p>
                    </div>
                    <div class="testimonials_slider">
                        <div class="swiper mugli-slider" id="testimonialsSlider"
                            data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":2}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonials_item style1">
                                        <div class="testimonials_item_img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="45"
                                                viewBox="0 0 60 45" fill="none">
                                                <path
                                                    d="M34.9446 24.5697H50.4401C50.1525 27.7056 48.6228 30.6265 46.153 32.7561C43.6831 34.8857 40.4525 36.0694 37.0983 36.0736C36.7992 36.0736 36.5124 36.1851 36.3009 36.3836C36.0895 36.582 35.9707 36.8511 35.9707 37.1318V43.9419C35.9707 44.2225 36.0895 44.4916 36.3009 44.6901C36.5124 44.8885 36.7992 45 37.0983 45C49.7275 45 60 35.3605 60 23.5116V1.05813C60 0.777494 59.8812 0.508355 59.6697 0.309918C59.4583 0.111481 59.1715 0 58.8724 0H34.9446C34.6455 0 34.3587 0.111481 34.1472 0.309918C33.9358 0.508355 33.817 0.777494 33.817 1.05813V23.5116C33.817 23.7922 33.9358 24.0613 34.1472 24.2598C34.3587 24.4582 34.6455 24.5697 34.9446 24.5697ZM36.0722 2.11625H57.7448V23.5116C57.7448 33.8389 49.0893 42.3039 38.2259 42.8541V38.1518C46.3289 37.6079 52.7427 31.2486 52.7427 23.5116C52.7427 23.2309 52.6239 22.9618 52.4124 22.7634C52.201 22.5649 51.9142 22.4534 51.6151 22.4534H36.0722V2.11625ZM1.12761 24.5697H16.6254C16.3383 27.7058 14.8088 30.6269 12.3388 32.7566C9.86887 34.8863 6.63791 36.0699 3.28359 36.0736C2.98453 36.0736 2.69772 36.1851 2.48625 36.3836C2.27479 36.582 2.15599 36.8511 2.15599 37.1318V43.9419C2.15599 44.2225 2.27479 44.4916 2.48625 44.6901C2.69772 44.8885 2.98453 45 3.28359 45C15.9128 45 26.1853 35.3605 26.1853 23.5116V1.05813C26.1853 0.777494 26.0665 0.508355 25.855 0.309918C25.6436 0.111481 25.3568 0 25.0577 0H1.12761C0.828547 0 0.541736 0.111481 0.330269 0.309918C0.118801 0.508355 0 0.777494 0 1.05813V23.5116C0 23.7922 0.118801 24.0613 0.330269 24.2598C0.541736 24.4582 0.828547 24.5697 1.12761 24.5697ZM2.25522 2.11625H23.9301V23.5116C23.9301 33.8389 15.2723 42.3039 4.4112 42.8541V38.1518C12.5142 37.6079 18.9258 31.2486 18.9258 23.5116C18.9258 23.2309 18.807 22.9618 18.5955 22.7634C18.384 22.5649 18.0972 22.4534 17.7982 22.4534H2.25522V2.11625Z"
                                                    fill="#FE5E3A" />
                                            </svg>
                                        </div>
                                        <div class="testimonials_item_content">
                                            <p>
                                                IT company that provides a seamless to and intuitive
                                                experience for users. The a design will focus on clear
                                                navigation, is easy access to information IT company
                                                that provides a seamless
                                            </p>
                                            <div class="profile">
                                                <img src="assets/images/profile/profileImg.png" alt="thumb">
                                                <div class="profile_info">
                                                    <h4>Michael Ramirez</h4>
                                                    <span>CEO of Company</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials_item style1">
                                        <div class="testimonials_item_img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="45"
                                                viewBox="0 0 60 45" fill="none">
                                                <path
                                                    d="M34.9446 24.5697H50.4401C50.1525 27.7056 48.6228 30.6265 46.153 32.7561C43.6831 34.8857 40.4525 36.0694 37.0983 36.0736C36.7992 36.0736 36.5124 36.1851 36.3009 36.3836C36.0895 36.582 35.9707 36.8511 35.9707 37.1318V43.9419C35.9707 44.2225 36.0895 44.4916 36.3009 44.6901C36.5124 44.8885 36.7992 45 37.0983 45C49.7275 45 60 35.3605 60 23.5116V1.05813C60 0.777494 59.8812 0.508355 59.6697 0.309918C59.4583 0.111481 59.1715 0 58.8724 0H34.9446C34.6455 0 34.3587 0.111481 34.1472 0.309918C33.9358 0.508355 33.817 0.777494 33.817 1.05813V23.5116C33.817 23.7922 33.9358 24.0613 34.1472 24.2598C34.3587 24.4582 34.6455 24.5697 34.9446 24.5697ZM36.0722 2.11625H57.7448V23.5116C57.7448 33.8389 49.0893 42.3039 38.2259 42.8541V38.1518C46.3289 37.6079 52.7427 31.2486 52.7427 23.5116C52.7427 23.2309 52.6239 22.9618 52.4124 22.7634C52.201 22.5649 51.9142 22.4534 51.6151 22.4534H36.0722V2.11625ZM1.12761 24.5697H16.6254C16.3383 27.7058 14.8088 30.6269 12.3388 32.7566C9.86887 34.8863 6.63791 36.0699 3.28359 36.0736C2.98453 36.0736 2.69772 36.1851 2.48625 36.3836C2.27479 36.582 2.15599 36.8511 2.15599 37.1318V43.9419C2.15599 44.2225 2.27479 44.4916 2.48625 44.6901C2.69772 44.8885 2.98453 45 3.28359 45C15.9128 45 26.1853 35.3605 26.1853 23.5116V1.05813C26.1853 0.777494 26.0665 0.508355 25.855 0.309918C25.6436 0.111481 25.3568 0 25.0577 0H1.12761C0.828547 0 0.541736 0.111481 0.330269 0.309918C0.118801 0.508355 0 0.777494 0 1.05813V23.5116C0 23.7922 0.118801 24.0613 0.330269 24.2598C0.541736 24.4582 0.828547 24.5697 1.12761 24.5697ZM2.25522 2.11625H23.9301V23.5116C23.9301 33.8389 15.2723 42.3039 4.4112 42.8541V38.1518C12.5142 37.6079 18.9258 31.2486 18.9258 23.5116C18.9258 23.2309 18.807 22.9618 18.5955 22.7634C18.384 22.5649 18.0972 22.4534 17.7982 22.4534H2.25522V2.11625Z"
                                                    fill="#FE5E3A" />
                                            </svg>
                                        </div>
                                        <div class="testimonials_item_content">
                                            <p>
                                                IT company that provides a seamless to and intuitive
                                                experience for users. The a design will focus on clear
                                                navigation, is easy access to information IT company
                                                that provides a seamless
                                            </p>
                                            <div class="profile">
                                                <img src="assets/images/profile/profileImg2.png" alt="thumb">
                                                <div class="profile_info">
                                                    <h4>Michael Ramirez</h4>
                                                    <span>CEO of Company</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-slider-button">
                                <button class="slider-prev">
                                    <i class="fa-solid fa-arrow-left-long"></i>
                                </button>
                                <button class="slider-next">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section S T A R T -->
    <section class="blog fix">
        <div class="blog_wrapper style1">
            <div class="container">
                <div class="blog_content">
                    <div class="blog_content_title mb-60">
                        <div class="blog_content_title_left">
                            <h2 class="title wow fadeInUp" data-wow-delay=".3s">
                                Advance business <br>with tech
                                <span class="theme-color-text">expertise</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".3s">
                                IT company that provides a seamless and intuitive experience
                                for users. The design will focus on clear navigation, easy
                                access to information
                            </p>
                        </div>
                        <div class="blog_content_title_right wow fadeInUp" data-wow-delay=".3s">
                            <div class="btn-wrapper">
                                <a href="blog.html">
                                    <span class="theme-btn">
                                        View All
                                        <i class="fa fa-long-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog_content_items">
                        <div class="single_blog style1 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single_blog_info">
                                <div class="single_blog_info_head">
                                    <div class="date">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        October 19, 2024
                                    </div>
                                    <div class="comments">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        Comment
                                    </div>
                                </div>
                                <div class="single_blog_info_body">
                                    <h2><a href="blog-details.html">Advance your business with tech expertise</a></h2>
                                </div>
                            </div>
                            <div class="single_blog_thumb">
                                <a href="blog-details.html"> <img src="assets/images/blog/blogCardThumb1_1.png"
                                        alt="thumb"></a>
                            </div>
                            <div class="single_blog_button btn-wrapper d-flex justify-content-md-end">
                                <a class="theme-btn-2" href="blog-details.html">Read Now <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single_blog style1 wow fadeInUp" data-wow-delay=".6s">
                            <div class="single_blog_info">
                                <div class="single_blog_info_head">
                                    <div class="date">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        October 19, 2024
                                    </div>
                                    <div class="comments">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        Comment
                                    </div>
                                </div>
                                <div class="single_blog_info_body">
                                    <h2><a href="blog-details.html">Accelerate success through technology</a></h2>
                                </div>
                            </div>
                            <div class="single_blog_thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blogCardThumb1_2.png" alt="thumb">
                                </a>
                            </div>
                            <div class="single_blog_button">
                                <div class="btn-wrapper d-flex justify-content-md-end">
                                    <a class="theme-btn-2" href="blog-details.html">
                                        Read Now
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog style1 wow fadeInUp" data-wow-delay=".8s">
                            <div class="single_blog_info">
                                <div class="single_blog_info_head">
                                    <div class="date">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        October 19, 2024
                                    </div>
                                    <div class="comments">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        Comment
                                    </div>
                                </div>
                                <div class="single_blog_info_body">
                                    <h2><a href="blog-details.html">Optimize operations with smart technology</a></h2>
                                </div>
                            </div>
                            <div class="single_blog_thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blogCardThumb1_3.png" alt="thumb">
                                </a>
                            </div>
                            <div class="single_blog_button btn-wrapper d-flex justify-content-md-end">
                                <a class="theme-btn-2" href="blog-details.html">Read Now <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section S T A R T -->
    <section class="cta">
        <div class="cta-container-wrapper style1">
            <div class="container">
                <div class="cta_content bg-color2">
                    <div class="cta_content_top">
                        <h2 class="title wow fadeInUp" data-wow-delay=".3s">
                            Want To work <br>
                            With Us ?
                        </h2>
                        <img class="img-custom-anim-left wow fadeInUp" data-wow-delay=".3s"
                            src="assets/images/cta/ctaRightThumb.png" alt="thumb">
                    </div>
                    <div class="cta_content_bottom">
                        <div class="cta_content_bottom_left wow fadeInUp" data-wow-delay=".3s">
                            <div class="btn-wrapper">
                                <a href="contact.html">
                                    <span class="theme-btn">
                                        Get Started
                                        <i class="fa fa-long-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="video_play_btn wow fadeInUp" data-wow-delay=".4s">
                                <div class="video-wrap ripple-effect rounded-0">
                                    <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8"
                                        class="play-btn popup-video"><img class="playerImg"
                                            src="assets/images/icon/playerIcon1_2.svg" alt="icon"></a>
                                </div>
                                Watch Video
                            </div>
                        </div>
                        <div class="cta_content_bottom_right wow fadeInUp" data-wow-delay=".6s">
                            <p>
                                IT company that provides a seamless and intuitive experience for
                                users. The design will focus on clear navigation, easy access to
                                information
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
