<x-app-layout class="">

    {{-- <style>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script> --}}
    <!-- Hero Section -->

    <div class="h-lvh bg-[#0A1022]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center h-[15vh] lg:h-[50vh] flex flex-col justify-center">
                <h2 class="text-3xl tracking-tight sm:text-4xl text-[#FDFFFB]">I'm <span class="text-[#E8F78D]"> Ekklesia
                        Roderna S.</span></h2>
                <h2 class="text-3xl tracking-tight text-[#FDFFFB] sm:text-4xl">an English teacher</h2>
            </div>
            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/200" alt="Avatar" class="rounded">
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/200" alt="Avatar" class="rounded">
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/200" alt="Avatar" class="rounded">
                </div>
            </div>
        </div>
    </div>

    <div class="h-lvh py-16 bg-[#0A1022]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-semibold tracking-tight text-[#E8F78D] sm:text-4xl">WHO AM I</h2>
                <p class="mt-2 text-lg text-[#FDFFFB]">Professional Background & Teaching Philosophy</p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col justify-between bg-white p-6 shadow rounded-lg">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Experience</h3>
                        <p class="text-gray-600">I have over 5 years of experience teaching English to students of all
                            ages and proficiency levels. My background includes TEFL certification and specialized
                            training in communicative language teaching methods.</p>
                    </div>
                    <div class="mt-6">
                        <div
                            class="h-10 w-10 flex-shrink-0 rounded-full bg-indigo-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between bg-white p-6 shadow rounded-lg">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Teaching Approach</h3>
                        <p class="text-gray-600">I believe in creating engaging, student-centered learning environments
                            where language acquisition happens naturally. My lessons focus on practical communication
                            skills, cultural context, and personalized feedback.</p>
                    </div>
                    <div class="mt-6">
                        <div
                            class="h-10 w-10 flex-shrink-0 rounded-full bg-indigo-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between bg-white p-6 shadow rounded-lg">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Specialization</h3>
                        <p class="text-gray-600">I specialize in conversational English, business English, and exam
                            preparation (IELTS, TOEFL). Whether you're learning for professional development, academic
                            purposes, or personal growth, I can customize lessons to your goals.</p>
                    </div>
                    <div class="mt-6">
                        <div
                            class="h-10 w-10 flex-shrink-0 rounded-full bg-indigo-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-lvh py-16 bg-[#0A1022]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-semibold tracking-tight text-[#E8F78D] sm:text-4xl">MY SKILL</h2>
            </div>

            <div class=" mx-auto mt-16 grid grid-cols-4 gap-6 p-6 bg-gray-800 rounded-lg">
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                        class="w-16 h-16" alt="HTML5">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                        class="w-16 h-16" alt="CSS3">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        class="w-16 h-16" alt="JavaScript">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                        class="w-16 h-16" alt="ReactJS">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg"
                        class="w-16 h-16" alt="Next.js">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"
                        class="w-16 h-16" alt="Node.js">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg"
                        class="w-16 h-16" alt="MongoDB">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg"
                        class="w-16 h-16" alt="MongoDB">
                </div>
            </div>
        </div>
    </div>

    <div class="h-lvh py-16 bg-[#0A1022]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-semibold tracking-tight text-[#E8F78D] sm:text-4xl">ADDITIONAL SKILL</h2>
            </div>

            <div class=" mx-auto mt-16 grid grid-cols-4 gap-6 p-6 bg-gray-800 rounded-lg">
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                        class="w-16 h-16" alt="HTML5">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                        class="w-16 h-16" alt="CSS3">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        class="w-16 h-16" alt="JavaScript">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                        class="w-16 h-16" alt="ReactJS">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg"
                        class="w-16 h-16" alt="Next.js">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"
                        class="w-16 h-16" alt="Node.js">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg"
                        class="w-16 h-16" alt="MongoDB">
                </div>
                <div class="p-6 bg-gray-700 rounded-lg flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg"
                        class="w-16 h-16" alt="MongoDB">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#FDFFFB] ">
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
