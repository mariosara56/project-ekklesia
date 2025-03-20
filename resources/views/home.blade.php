<x-app-layout>

    <style>
        swiper-container {
            width: 100%;
            height: 500px;
        }

        swiper-slide {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-content {
            position: absolute;
            color: white;
            z-index: 10;
            max-width: 80%;
            text-align: center;
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 5;
        }

        .slide-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .slide-description {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
    </style>

    <swiper-container class="mySwiper" pagination="true" navigation="true" autoplay="true" loop="true">
        <swiper-slide>
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h2 class="slide-title">Welcome to Ekklesia</h2>
                <p class="slide-description">A place where faith grows and community flourishes</p>
                <a href="#"
                    class="rounded-md bg-indigo-600 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-indigo-500">
                    Join Us Sunday
                </a>
            </div>
            <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=600&q=80"
                alt="Church interior">
        </swiper-slide>

        <swiper-slide>
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h2 class="slide-title">Sunday Worship</h2>
                <p class="slide-description">Join us every Sunday at 10:00 AM</p>
                <a href="#"
                    class="rounded-md bg-indigo-600 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-indigo-500">
                    Learn More
                </a>
            </div>
            <img src="https://images.unsplash.com/photo-1507484467459-0c01be16726e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=600&q=80"
                alt="Worship service">
        </swiper-slide>

        <swiper-slide>
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h2 class="slide-title">Community Service</h2>
                <p class="slide-description">Making a difference in our neighborhood</p>
                <a href="#"
                    class="rounded-md bg-indigo-600 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-indigo-500">
                    Get Involved
                </a>
            </div>
            <img src="https://images.unsplash.com/photo-1593113630400-ea4288922497?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=600&q=80"
                alt="Community service">
        </swiper-slide>

        <swiper-slide>
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h2 class="slide-title">Youth Programs</h2>
                <p class="slide-description">Building tomorrow's leaders today</p>
                <a href="#"
                    class="rounded-md bg-indigo-600 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-indigo-500">
                    Learn More
                </a>
            </div>
            <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=600&q=80"
                alt="Youth group">
        </swiper-slide>

        <swiper-slide>
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h2 class="slide-title">Bible Study</h2>
                <p class="slide-description">Growing deeper in God's Word</p>
                <a href="#"
                    class="rounded-md bg-indigo-600 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-indigo-500">
                    Join a Group
                </a>
            </div>
            <img src="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=600&q=80"
                alt="Bible study">
        </swiper-slide>
    </swiper-container>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat"
        style="background-image: url('https://images.unsplash.com/photo-1518005068251-37900150dfca?q=80&w=1000'); height: 500px;">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative flex h-full items-center justify-center px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                    Welcome to Ekklesia
                </h1>
                <p class="mt-3 text-xl text-white">A place where faith grows and community flourishes</p>
                <div class="mt-10 flex justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-indigo-600 px-6 py-3 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Join Us Sunday
                    </a>
                    <a href="#"
                        class="rounded-md border border-white px-6 py-3 text-lg font-semibold text-white hover:bg-white/10">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="py-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our Community</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Ekklesia is more than just a church - it's a family of believers dedicated to growing in faith,
                    serving our community, and spreading God's love to all.
                </p>
            </div>
            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center">
                    <div class="rounded-lg bg-indigo-100 p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Community</h3>
                    <p class="mt-2 text-center text-gray-600">Connect with others and build meaningful relationships in
                        Christ.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="rounded-lg bg-indigo-100 p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Worship</h3>
                    <p class="mt-2 text-center text-gray-600">Experience powerful worship services that inspire and
                        transform.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="rounded-lg bg-indigo-100 p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Service</h3>
                    <p class="mt-2 text-center text-gray-600">Find your place to serve and make a difference in our
                        community.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Events -->
    <div class="py-16 bg-gray-50">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Upcoming Events</h2>
                <p class="mt-2 text-lg text-gray-600">Join us for these special gatherings</p>
            </div>
            <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Event 1 -->
                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <div class="bg-indigo-600 px-4 py-2 text-white">
                        <span class="text-sm font-medium">Sunday, April 3</span>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Sunday Worship Service</h3>
                        <p class="mt-2 text-gray-600">10:00 AM - 12:00 PM</p>
                        <p class="mt-3 text-gray-600">Join us for a time of worship, prayer, and teaching from God's
                            Word.</p>
                        <div class="mt-4">
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">Learn more →</a>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <div class="bg-indigo-600 px-4 py-2 text-white">
                        <span class="text-sm font-medium">Wednesday, April 6</span>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Midweek Bible Study</h3>
                        <p class="mt-2 text-gray-600">7:00 PM - 8:30 PM</p>
                        <p class="mt-3 text-gray-600">Dive deeper into God's Word with our interactive Bible study
                            group.</p>
                        <div class="mt-4">
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">Learn more →</a>
                        </div>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <div class="bg-indigo-600 px-4 py-2 text-white">
                        <span class="text-sm font-medium">Saturday, April 9</span>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-xl font-semibold text-gray-900">Community Outreach</h3>
                        <p class="mt-2 text-gray-600">9:00 AM - 1:00 PM</p>
                        <p class="mt-3 text-gray-600">Join us as we serve our local community through various outreach
                            activities.</p>
                        <div class="mt-4">
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">Learn more →</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 text-center">
                <a href="#" class="text-indigo-600 hover:text-indigo-500 font-medium">View all events →</a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="py-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our Community Speaks</h2>
                <p class="mt-2 text-lg text-gray-600">Hear what our members have to say about Ekklesia</p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col justify-between bg-white p-6 shadow rounded-lg">
                    <div>
                        <p class="text-gray-600 italic">"Finding Ekklesia was like finding a second home. The community
                            here has supported me through both joys and challenges."</p>
                    </div>
                    <div class="mt-6 flex items-center">
                        <div
                            class="h-10 w-10 flex-shrink-0 rounded-full bg-indigo-100 flex items-center justify-center">
                            <span class="text-indigo-600 font-semibold">JD</span>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Jane Doe</p>
                            <p class="text-sm text-gray-500">Member since 2018</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between bg-white p-6 shadow rounded-lg">
                    <div>
                        <p class="text-gray-600 italic">"The teaching at Ekklesia has transformed my understanding of
                            faith and helped me grow spiritually in ways I never expected."</p>
                    </div>
                    <div class="mt-6 flex items-center">
                        <div
                            class="h-10 w-10 flex-shrink-0 rounded-full bg-indigo-100 flex items-center justify-center">
                            <span class="text-indigo-600 font-semibold">JS</span>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">John Smith</p>
                            <p class="text-sm text-gray-500">Member since 2020</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between bg-white p-6 shadow rounded-lg">
                    <div>
                        <p class="text-gray-600 italic">"My family has found true community at Ekklesia. The children's
                            programs are exceptional, and we've formed lifelong friendships."</p>
                    </div>
                    <div class="mt-6 flex items-center">
                        <div
                            class="h-10 w-10 flex-shrink-0 rounded-full bg-indigo-100 flex items-center justify-center">
                            <span class="text-indigo-600 font-semibold">MJ</span>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Maria Johnson</p>
                            <p class="text-sm text-gray-500">Member since 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-indigo-700">
        <div class="mx-auto max-w-7xl py-12 px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                <span class="block">Ready to join our community?</span>
                <span class="block text-indigo-200">Visit us this Sunday.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">
                        Get Directions
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="#"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-500 px-5 py-3 text-base font-medium text-white hover:bg-indigo-600">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
