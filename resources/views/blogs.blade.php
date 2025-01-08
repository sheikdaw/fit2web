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
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Bl<span>og</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>


    <!-- blog Section    S T A R T -->
    <div class="blog blog-page">
        <div class="container">
            <div class="row gy-5">
                <div class="col-xl-8">
                    <div class="blog-post-details">
                        @foreach ($blogs as $blog)
                            <div class="single-blog-post">
                                <div class="post-featured-thumb">
                                    <img src="{{ asset('assets/images/blog/blogThumb1_1.png') }}" alt="thumb">
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
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h3><a href="{{ route('blog', ['id' => $blog->id]) }}">{{ $blog->title_1 }}</a></h3>
                                    <p>{{ $blog->paragraph_1 }}</p>
                                    <a href="{{ route('blog', ['id' => $blog->id]) }}">
                                        Read More <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination_area style1">
                        <ul class="pagination">
                            <li class="page-item">
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
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
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="assets/images/blog/blogPostThumb1_2.png" alt="img">
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
                                                Robots automated systems
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="assets/images/blog/blogPostThumb1_3.png" alt="img">
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
                                                Renewable energy sources
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="assets/images/blog/blogPostThumb1_4.png" alt="img">
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
                                                AI and machine learning
                                            </a>
                                        </h6>
                                    </div>
                                </div>
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
