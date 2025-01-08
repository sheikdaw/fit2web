@extends('layout')
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcumb">
        <div class="container">
            <div class="breadcumb-wrapper">
                <div class="breadcumb-bg">
                    <img src="assets/images/shape/breadcumbBg1_1.png" alt="shape">
                </div>
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog <span>Details</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <!-- blog Section    S T A R T -->
    <div class="blog blog-page fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog-post-details style2">
                        <div class="single-blog-post style2">
                            <div class="post-featured-thumb">
                                <img src="{{ asset($blog->image_2) }}" alt="thumb">
                                <div class="content-date">
                                    <h4>{{ \Carbon\Carbon::parse($blog->date)->format('d F Y') }}</h4>
                                </div>
                                <div class="content-meta">
                                    <ul>
                                        <li>
                                            <i class="fa-regular fa-user"></i>
                                            {{ $blog->type }}
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-folder-open"></i>
                                            {{ $blog->category }}
                                        </li>
                                        {{-- <li>
                                            <i class="fa-regular fa-comments"></i>
                                            Comments (05)
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3> {{ $blog->title_2 }}</h3>
                                <p> {{ $blog->paragraph_2 }}
                                </p>
                                <p>
                                    {{ $blog->paragraph_3 }}
                                </p>
                            </div>
                        </div>
                        <div class="hilight-text wow fadeInUp" data-wow-delay=".8s">
                            <p>{{ $blog->testimonial_phara }}
                            </p>
                            <h4>{{ $blog->testimonial_name }}</h4>
                            <span>{{ $blog->testimonial_by }}</span>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61"
                                    fill="none">
                                    <rect width="61" height="61" rx="20" fill="#FE5E3A" />
                                    <path d="M15 18V42L27 30V18H15Z" fill="white" />
                                    <path d="M35 18V42L47 30V18H35Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="row g-4 wow fadeInUp" data-wow-delay="1s">
                            <div class="col-lg-6">
                                <div class="details-image">
                                    <img src="{{ asset($blog->image_3) }}" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="details-image">
                                    <img src="{{ asset($blog->image_4) }}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="content-items">
                            <ul>
                                @foreach ($advantage as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="comment-part">
                            <div class="comment-header">
                                @if ($previous)
                                    <h5><a href="{{ route('blog', ['id' => $previous->id]) }}">
                                            <i class="fa-solid fa-angle-left"></i> Previous Post:
                                            {{ $previous->title_1 }}
                                        </a></h5>
                                @endif
                                @if ($next)
                                    <h5><a href="{{ route('blog', ['id' => $next->id]) }}">
                                            Next Post: {{ $next->title_1 }} <i class="fa-solid fa-angle-right"></i>
                                        </a></h5>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="contact-items">
                        <div class="title-area">
                            <h2 class="title">Send Your free message</h2>
                        </div>
                        <div class="contact-content wow fadeInRight" data-wow-delay=".7s">
                            <form action="contact.php" id="contact-form" method="POST" class="contact-form-items">
                                <div class="row">
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="email2" id="email2" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Messege"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="gt-btn">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="main-sidebar2">
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".2s">
                            <div class="search-widget-wrapper">
                                <div class="wid-title">
                                    <h3 class="fast-title">Search</h3>
                                </div>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Write Here">
                                        <button type="submit"><i
                                                class="fa-sharp fa-light fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".6s">
                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-area">
                                @foreach ($blogs as $data)
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ asset($data->image_1) }}" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-regular fa-folder-open"></i>
                                                    Category
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="blog-details.html">
                                                    {{ $data->blog_name }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".4s">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li><a href="blog-details.html">Database Security</a></li>
                                    <li><a href="blog-details.html">IT Consultancy</a></li>
                                    <li><a href="blog-details.html">App Development</a></li>
                                    <li><a href="blog-details.html">UI/UX Design </a></li>
                                    <li><a href="blog-details.html">Cyber Security</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-0 single-sidebar-widget wow fadeInUp" data-wow-delay=".8s">
                            <div class="wid-title">
                                <h3>Tags</h3>
                            </div>
                            <div class="news-widget-categories">
                                <div class="tagcloud">
                                    <a href="blog-details.html">applications</a>
                                    <a href="blog-details.html">blockchain</a>
                                    <a href="blog-details.html">Analysis</a>
                                    <a href="blog-details.html">secure</a>
                                    <a href="blog-details.html">Planning</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
