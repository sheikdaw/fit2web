@extends('layout')
@section('content')
    <div class="breadcumb">
        <div class="container">
            <div class="breadcumb-wrapper">
                <div class="breadcumb-bg">
                    <img src="{{ asset('assets/images/shape/breadcumbBg1_1.png') }}" alt="shape">
                </div>
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Project
                        <span>Details</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Details Section    S T A R T -->
    <div class="project-details">
        <div class="container">
            <div class="project-details-info">
                <div class="row gx-60 gy-6">
                    <div class="col-xl-5">
                        <div class="mt-0 content-thumb img-custom-anim-right wow fadeInUp" data-wow-delay=".3s">
                            <img src="{{ asset($project->image_2) }}" alt="thumb">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="project-details-content">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">{{ $project->title_1 }}</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{ $project->paragraph_1 }}
                            </p>
                            <ul class="wow fadeInUp" data-wow-delay=".6s">

                                @foreach ($advantage as $point)
                                    <li>{{ $point }}</li>
                                @endforeach

                                {{-- <li>As concerns about climate change grow, there is a push for technology</li>
                                <li>upports sustainable practices, such as green energy solutions and waste reduction
                                </li>
                                <li>The development of more intuitive interfaces and wearable technology will make</li>
                                <li>Technology continues to evolve, shaping every aspect of our lives and influencing
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details-info">
                <div class="row gx-60 gy-6">
                    <div class="col-xl-8">
                        <div class="project-details-content">
                            <h3 class="wow fadeInUp" data-wow-delay=".3s">{{ $project->title_2 }}</h3>
                            <p class="wow fadeInUp" data-wow-delay=".6s">{{ $project->paragraph_2 }}
                            </p>
                            <div class="items-wrapper">
                                <div class="single-items wow fadeInUp" data-wow-delay=".3s">
                                    <h4>Category: <span>{{ $project->category }}</span></h4>
                                </div>
                                <div class="single-items wow fadeInUp" data-wow-delay=".4s">
                                    <h4>Customer: <span>{{ $project->customer_name }}</span></h4>
                                </div>
                                <div class="single-items wow fadeInUp" data-wow-delay=".6s">
                                    <h4>End date: <span>
                                            {{ \Carbon\Carbon::parse($project->end_date)->format('d F Y') }}</span></h4>
                                </div>
                                <div class="single-items wow fadeInUp" data-wow-delay=".8s">
                                    <h4>Start date: <span>
                                            {{ \Carbon\Carbon::parse($project->start_date)->format('d F Y') }}</span></h4>
                                </div>
                                <div class="single-items wow fadeInUp" data-wow-delay=".6s">
                                    <h4>Rating:
                                        <span>
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $project->rating)
                                                    <i class="fa-solid fa-star"></i> <!-- Filled star -->
                                                @else
                                                    {{-- <i class="fa-regular fa-star"></i> <!-- Empty star --> --}}
                                                @endif
                                            @endfor
                                        </span>
                                    </h4>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="content-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".6s">
                            <img src="{{ asset($project->image_3) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-summery">
                <div class="content wow fadeInUp" data-wow-delay=".6s">
                    <h2 class="mb-30">Project Summery</h2>
                    <p>{{ $project->project_summary }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Faq Section    S T A R T -->
    <div class="pt-0 faq-sectionn section-padding fix">
        <div class="faq-container-wrapper">
            <div class="container">
                <div class="section-title style3">
                    <h2 class="mb-20 title wow fadeInUp" data-wow-delay=".3s">
                        Empower your <span>growth</span> with technology
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s"> IT company that provides a seamless and intuitive
                        experience for users. The design will focus on
                        clear navigation, easy access to information</p>
                </div>
                <div class="row gy-5">
                    <div class="col-xl-5">
                        <div class="text-center content-thumb">
                            <img src="{{ asset('assets/images/faq/faqThumb.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="faq-content">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="mb-3 accordion-item wow fadeInUp" data-wow-delay=".3s"
                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                                                aria-controls="faq1">
                                                How can Innovate digital future?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion"
                                            style="">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 accordion-item wow fadeInUp" data-wow-delay=".5s"
                                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                                aria-controls="faq2">
                                                What is business technology?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 accordion-item wow fadeInUp" data-wow-delay=".7s"
                                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                aria-controls="faq3">
                                                How is cutting-edge solutions?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion" style="">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s"
                                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                                aria-controls="faq4">
                                                what innovation technology?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't.
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
    </div>
@endsection
