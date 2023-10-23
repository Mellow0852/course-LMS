@extends('layouts.front')

@section('content')
<section class="home" id="home">
    <div class="home-container container grid">
        <div class="home-img-bg">
            <!-- <img src="assets/images/bg-hero.jpg" alt="" class="home-img" /> -->
        </div>

        <div class="home-data">
            <h1 class="home-title">
                Be Alert, <br />
                Don't Get Hurt!
            </h1>
            <p class="home-description">
                
                We enhance public safety and promote successful community reintegration
                through education, treatment, and active participation in rehabilitative 
                and restorative justice programs. 

            </p>
            <div class="home-btns">
                <a href="{{ route('courses.index') }}" class="button btn-gray btn-small"> Report </a>
                <a href="#section-title" class="button button-home">Hotspot Locations</a>
            </div>
        </div>
    </div>
</section>

<section class="story section container">
    <div class="story-container grid">
        <div class="story-data">
            <h2 class="section-title story-section-title">Our Goals</h2>
            <h1 class="story-title">
                Strengthen Project Safe Neighborhoods
            </h1>

            <p class="story-description">
                Establish a Standing Violent Crime Reduction Steering Tool.
                To facilitate the successful reintegration of the individuals 
                in our care back to their communities equipped with the tools to be drug-free, 
                healthy, rehabilitative, and restorative justice programs, all in a safe and humane environment.
            </p>
            <a href="#course" class="button btn-small">Discover</a>
        </div>
        <div class="story-images">
            <img src="{{ asset('frontend/assets/images/goal.jpg') }}" alt="" class="story-img" />
            <div class="story-square"></div>
        </div>
    </div>
</section>

<section class="products section container" id="course">
    <h2 class="section-title">Hostspot Locations</h2>

    <div class="container-fluid">
        <div class="row">
            <div id="map" style="width: 100%; height: 400px;"></div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <script>
        var map = L.map('map').setView([0, 0], 2);  // Initial focus is on global view
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);

    @foreach($reports as $report)
        L.marker([{{ $report->latitude }}, {{ $report->longitude }}])
            .bindPopup("<b>{{ $report->title }}</b><br>{{ $report->description }}")
            .addTo(map);
    @endforeach
    </script>

    <div class="new-container">
        <div class="swiper new-swipper">
            <div class="swiper-wrapper">
                @foreach($courses as $course)
                <article class="products-card swiper-slide">
                    <a style="color: inherit;" href="{{ route('courses.show', [$course->slug]) }}"
                        class="products-link">
                        <img src="{{ Storage::url($course->course_image) }}" class="products-img" alt="" />
                        <h3 class="products-title">{{ $course->title }}</h3>
                        <div class="products-star">
                            @for ($star = 1; $star <= 5; $star++) @if ($course->rating >= $star)
                                <i class="bx bxs-star"></i>
                                @else
                                <i class='bx bx-star'></i>
                                @endif
                                @endfor
                        </div>
                        <span class="products-price">${{ $course->price }}</span>
                        @if($course->students()->count() > 5)
                        <button class="products-button">
                            Popular
                        </button>
                        @endif
                        <span class="products-student">
                            {{ $course->students()->count() }} students
                        </span>
                    </a>
                </article>
                @endforeach

            </div>
            
            <div class="swiper-button-next" style="
                bottom: initial;
                top: 50%;
                right: 0;
                left: initial;
                border-radius: 50%;
              ">
                <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div class="swiper-button-prev" style="bottom: initial; top: 50%; border-radius: 50%">
                <i class="bx bx-left-arrow-alt"></i>
            </div>

            
        </div>
    </div>
</section>

<section class="testimonial section container">
    <div class="testimonial grid">
        <div class="swiper testimonial-swipper">
            <div class="swiper-wrapper">
                <div class="testimonial-card swiper-slide" style="text-align: center;">
                    <div class="testimonial-quote">
                        <i class="bx bxs-quote-alt-left"></i>
                    </div>
                    <p class="testimonial-description">
                    This is a short version of the strategy document prepared by an Inter-departmental 
                    Strategy Team comprising of the Departments of Correctional Services, Defence, Intelligence, 
                    Justice, Safety and Security and Welfare. The full document is available on request from the 
                    Department for Safety and Security.
                    </p>
                    <h3 class="testimonial-date">October 27, 2023</h3>

                    <div class="testimonial-profile"
                        style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                        <img src="{{ asset('frontend/assets/images/testimonial1.jpg') }}" alt=""
                            class="testimonial-profile-img" />

                        <div class="testimonial-profile-data">
                            <span class="testimonial-profile-name">Gift Buthelezi</span>
                            <span class="testimonial-profile-detail">Ministry for Safety and Security</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next" style="right: 30%;left: initial;top:initial;bottom: 3rem;">
                <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div class="swiper-button-prev" style="right: initial;left: 30%;top:initial;bottom: 3rem;">
                <i class="bx bx-left-arrow-alt"></i>
            </div>
        </div>
</section>

<section class="newsletter section container">
    <div class="newsletter-bg grid">
        <div>
            <h2 class="newsletter-title">
                About Us<br>
                & join us...
            </h2>
            <p class="newsletter-description">
            With reason to counteract criminal activities, 
            crime locator acts as a tool for crime prevention community forums, SAPS, tracking companies
            and security companies that elimanates and raises awareness to local and regional hotspots ensuring 
            a safe and secure community.
            </p>
        </div>

        <form action="" class="newsletter-subscribe">
            <input type="email" placeholder="Enter your email" class="newsletter-input" />
            <button class="button">Join Us</button>
        </form>
    </div>
</section>
@endsection
