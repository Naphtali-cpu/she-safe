<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>She's Safe</title>
    <meta name="description" content="Description for she's safe">
    <meta name="keywords" content="She's Safe, Safely, Safety for girls">
    <link rel="shortcut icon" href="{{ asset('assets/images/she-safe-logo.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}"/>

    <script defer src="{{ asset('assets/js/alpine.min.js') }}"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header x-data="{ navbarOpen: false, modalOpen: false}" class="absolute left-0 top-0 z-50 w-full">
    <div class="container mx-auto">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 max-w-full px-4">
                <a href="" class="block w-full py-5">
                    <img src="{{ asset('assets/images/she-safe-logo.png') }}" alt="logo"
                         class="w-20"/>
                </a>
            </div>
            <div class="flex w-full items-center justify-between px-4">
                <div>
                    <button @click="navbarOpen = !navbarOpen"
                            :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler"
                            class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                                                <span
                                                    class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                        <span
                            class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                        <span
                            class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                    </button>
                    <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                         class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                        <ul class="block lg:flex">
                            <li>
                                <a href=""
                                   class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#about"
                                   class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href=""
                                   class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Features
                                </a>
                            </li>

                            <li>
                                <a href="#contact"
                                   class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <button
                    @click="modalOpen = true"
                    href="javascript:void(0)"
                    class="rounded-lg bg-purple-600 py-3 px-7 text-base font-medium text-white hover:bg-opacity-90"
                >
                    Donate
                </button>
            </div>
        </div>
    </div>

{{--    Modal Section Start--}}
    <div
        x-show="modalOpen"
        x-transition
        class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-black bg-opacity-90 px-4 py-5"
    >
        <div
            @click.outside="modalOpen = false"
            class="w-full max-w-[570px] rounded-[20px] bg-white py-12 px-8 text-center md:py-[60px] md:px-[70px]"
        >
            <h3 class="pb-2 text-xl font-bold text-dark sm:text-2xl">
                Enter Your Phone Number & Amount
            </h3>
            <span
                class="mx-auto mb-6 inline-block h-1 w-[90px] rounded bg-purple-600"
            ></span>

            <form action="{{ route('donate-bana') }}" method="post">
                @csrf
                <div class="mb-6">
                    <input
                        type="tel"
                        name="phone"
                        id="phone"
                        required
                        placeholder="Phone Number Eg: 254727991993"
                        class="border-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                    />
                </div>
                <div class="mb-6">
                    <input
                        type="number"
                        name="amount"
                        id="amount"
                        required
                        placeholder="Amount"
                        class="border-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                    />
                </div>

                <button id="submitButton" class="block w-full rounded-lg border border-purple-300 bg-purple-600 p-3 text-center text-base font-medium text-white transition hover:bg-opacity-90">
                    Submit
                </button>
            </form>
        </div>
    </div>
{{--    Modal Section end--}}

    <div id="popup" class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md">
            <p class="text-green-500">Success!</p>
        </div>
    </div>
</header>

<!-- ====== Hero Section Start -->
<div id="home" class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-5/12" style="margin-top: 100px;">
                <div class="hero-content">
                    <p data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000"
                       class="mb-8 max-w-[480px] text-base text-body-color">
                        She's Safe
                    </p>
                    <h1 data-aos="fade-up" data-aos-delay="600" data-aos-duration="2000"
                        class="mb-3 text-3xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[38px]">
                        Empowering Individuals to Take Control of Their Security
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000"
                       class="mb-8 max-w-[480px] text-base text-body-color">
                        Safety begins with awareness, and we're here to help you make informed decisions about your
                        safety.
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <a data-aos="fade-right" data-aos-delay="600" data-aos-duration="2000"
                               href="mailto:easybiz.africa@gmail.com"
                               class="inline-flex items-center justify-center rounded-lg bg-purple-600 py-4 px-6 text-center text-base font-normal text-white hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10">
                                Get Started
                            </a>

                        </li>

                    </ul>

                </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div data-aos="zoom-out" data-aos-delay=600" data-aos-duration="2000"
                         class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="{{ asset('assets/images/hero-image.png') }}" alt="hero"
                             class="max-w-full lg:ml-auto"/>
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                                                    <svg width="93" height="93" viewBox="0 0 93 93"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="2.5" cy="2.5" r="2.5" fill="#F89AFF"/>
                                                        <circle cx="2.5" cy="24.5" r="2.5" fill="#F89AFF"/>
                                                        <circle cx="2.5" cy="46.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="2.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="2.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="2.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="24.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="46.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="2.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="24.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="46.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="68.5" cy="2.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="68.5" cy="24.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="68.5" cy="46.5" r="2.5"
                                                                fill="#305F89AFF6D3"/>
                                                        <circle cx="68.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="68.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="2.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="24.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="46.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                    </svg>
                                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Hero Section End -->

<!-- ====== Call To Action Section Start -->
<section class="bg-white py-20 lg:py-[120px]">
    <div class="container mx-auto">
        <div class="relative z-10 overflow-hidden rounded bg-purple-400 py-12 px-8 md:p-[100px]">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-1/2">
                    <h2 class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[38px] lg:mb-0">
                        Our Benefits
                    </h2>
                    <span class="mb-2 text-base font-semibold text-white">
                She's Safe Feature section provides education, support, and prompts to empower women to stay safe.
            </span>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="flex flex-wrap lg:justify-end">
                        <div class="v213_3906">
                            <div class="v213_3893"></div>
                            <span class="v213_3894">Security Updates</span>
                            <div class="v213_3895"></div>
                            <div class="v213_3899"></div>
                            <span class="v213_3900">Counselling & Education</span>
                            <div class="v213_3896"></div>
                            <span class="v213_3897">Safe Space for Women</span>
                            <div class="v213_3902"></div>
                            <div class="v213_3903"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
        <span class="absolute top-0 left-0 z-[-1]">
            <svg width="189" height="162" viewBox="0 0 189 162" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="16" cy="-16.5" rx="173" ry="178.5" transform="rotate(180 16 -16.5)"
                         fill="url(#paint0_linear)"/>
                <defs>
                    <linearGradient id="paint0_linear" x1="-157" y1="-107.754" x2="98.5011" y2="-106.425"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="white" stop-opacity="0.07"/>
                        <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
        </span>
                <span class="absolute bottom-0 right-0 z-[-1]">
            <svg width="191" height="208" viewBox="0 0 191 208" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="173" cy="178.5" rx="173" ry="178.5" fill="url(#paint0_linear)"/>
                <defs>
                    <linearGradient id="paint0_linear" x1="-3.27832e-05" y1="87.2457" x2="255.501" y2="88.5747"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="white" stop-opacity="0.07"/>
                        <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
        </span>
            </div>
        </div>

    </div>
</section>
<!-- ====== Call To Action Section End -->

<!-- ====== Cards Section Start -->
<section class="bg-[#F3F4F6] pt-20 pb-10 lg:pt-[120px] lg:pb-20">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="mb-10 overflow-hidden rounded-lg bg-white">
                    <img
                        src="{{ asset('assets/images/img1.png') }}"
                        alt="image"
                        class="w-full"
                    />
                    <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        <h3>
                            <a
                                href="javascript:void(0)"
                                class="mb-4 block text-xl font-semibold text-dark hover:text-primary sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                            >
                                How I lost 1 million to fraudsters
                            </a>
                        </h3>
                        <p class="mb-7 text-base leading-relaxed text-body-color">
                            I Just received a phone call from some random person pretending to be a customer care agent
                        </p>

                        <a
                            href="javascript:void(0)"
                            class="inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium text-body-color transition hover:border-primary hover:bg-purple-400 hover:text-white"
                        >
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="mb-10 overflow-hidden rounded-lg bg-white">
                    <img
                        src="{{ asset('assets/images/img2.png') }}"
                        alt="image"
                        class="w-full"
                    />
                    <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        <h3>
                            <a
                                href="javascript:void(0)"
                                class="mb-4 block text-xl font-semibold text-dark hover:text-primary sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                            >
                                Nairobbery has taught me a life lesson!
                            </a>
                        </h3>
                        <p class="mb-7 text-base leading-relaxed text-body-color">
                            I was walking along Luthuli Street and suddenly my phone rang, i quickly checked who was
                            calling me
                        </p>

                        <a
                            href="javascript:void(0)"
                            class="inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium text-body-color transition hover:border-primary hover:bg-purple-400 hover:text-white"
                        >
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="mb-10 overflow-hidden rounded-lg bg-white">
                    <img
                        src="{{ asset('assets/images/img3.png') }}"
                        alt="image"
                        class="w-full"
                    />
                    <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        <h3>
                            <a
                                href="javascript:void(0)"
                                class="mb-4 block text-xl font-semibold text-dark hover:text-primary sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                            >
                                Kayole Phase 3 is not safe
                            </a>
                        </h3>
                        <p class="mb-7 text-base leading-relaxed text-body-color">
                            I left my house early for work only to get back to the house and find and empty house!
                        </p>

                        <a
                            href="javascript:void(0)"
                            class="inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium text-body-color transition hover:border-primary hover:bg-purple-400 hover:text-white"
                        >
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Cards Section End -->

<!-- ====== Map Section Start -->
<div id="home" class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div data-aos="zoom-out" data-aos-delay=600" data-aos-duration="2000"
                         class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="{{ asset('assets/images/map-img.png') }}" alt="hero"
                             class="max-w-full lg:ml-auto"/>
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                                                    <svg width="93" height="93" viewBox="0 0 93 93"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="2.5" cy="2.5" r="2.5" fill="#F89AFF"/>
                                                        <circle cx="2.5" cy="24.5" r="2.5" fill="#F89AFF"/>
                                                        <circle cx="2.5" cy="46.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="2.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="2.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="2.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="24.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="46.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="24.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="2.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="24.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="46.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="46.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="68.5" cy="2.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="68.5" cy="24.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="68.5" cy="46.5" r="2.5"
                                                                fill="#305F89AFF6D3"/>
                                                        <circle cx="68.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="68.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="2.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="24.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="46.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="68.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                        <circle cx="90.5" cy="90.5" r="2.5"
                                                                fill="#F89AFF"/>
                                                    </svg>
                                                </span>
                    </div>
                </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-5/12" style="margin-top: 100px;">
                <div class="hero-content">
                    <h1 data-aos="fade-up" data-aos-delay="600" data-aos-duration="2000"
                        class="mb-3 text-3xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[38px]">
                        Know Your Areas
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000"
                       class="mb-8 max-w-[480px] text-base text-body-color">
                        At She's Safe, we believe that safety is a fundamental right for everyone. Our mission is to
                        provide a platform that empowers individuals to make informed decisions about their safety by
                        sharing real stories.
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <a data-aos="fade-right" data-aos-delay="600" data-aos-duration="2000"
                               href="mailto:easybiz.africa@gmail.com"
                               class="inline-flex items-center justify-center rounded-lg bg-purple-400 py-4 px-6 text-center text-base font-normal text-white hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10">
                                Report a Case
                            </a>

                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Map Section End -->

<!-- ====== Contact Section Start -->
<section id="contact" class="relative z-10 overflow-hidden bg-white py-20 lg:py-[120px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap lg:justify-between">
            <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
                <div class="mb-12 max-w-[570px] lg:mb-0">
                                                    <span class="mb-4 block text-base font-semibold text-purple-400">
                                                        Contact Us
                                                    </span>
                    <h2
                        class="mb-6 text-[32px] font-bold uppercase text-dark sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                        GET IN TOUCH WITH US
                    </h2>
                    <p class="mb-9 text-base leading-relaxed text-body-color">
                        If you have an issue regarding She's Safe and have no idea to
                        start,
                        we
                        offer at She's Safe. Let us know.
                    </p>

                    <div class="mb-8 flex w-full max-w-[370px]">
                        <div
                            class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-purple-400 bg-opacity-5 text-purple-400 sm:h-[70px] sm:max-w-[70px]">
                            <svg width="24" height="24" viewBox="0 0 24 24"
                                 class="fill-current">
                                <path
                                    d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z"/>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-dark">Our Location
                            </h4>
                            <p class="text-base text-body-color">
                                Ngong, Road
                            </p>
                        </div>
                    </div>

                    <div class="mb-8 flex w-full max-w-[370px]">
                        <div
                            class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-purple-400 bg-opacity-5 text-purple-400 sm:h-[70px] sm:max-w-[70px]">
                            <svg width="24" height="26" viewBox="0 0 24 26"
                                 class="fill-current">
                                <path
                                    d="M22.6149 15.1386C22.5307 14.1704 21.7308 13.4968 20.7626 13.4968H2.82869C1.86042 13.4968 1.10265 14.2125 0.97636 15.1386L0.092295 23.9793C0.0501967 24.4845 0.21859 25.0317 0.555377 25.4106C0.892163 25.7895 1.39734 26 1.94462 26H21.6887C22.1939 26 22.6991 25.7895 23.078 25.4106C23.4148 25.0317 23.5832 24.5266 23.5411 23.9793L22.6149 15.1386ZM21.9413 24.4424C21.8992 24.4845 21.815 24.5687 21.6466 24.5687H1.94462C1.81833 24.5687 1.69203 24.4845 1.64993 24.4424C1.60783 24.4003 1.52364 24.3161 1.56574 24.1477L2.4498 15.2649C2.4498 15.0544 2.61819 14.9281 2.82869 14.9281H20.8047C21.0152 14.9281 21.1415 15.0544 21.1835 15.2649L22.0676 24.1477C22.0255 24.274 21.9834 24.4003 21.9413 24.4424Z"/>
                                <path
                                    d="M11.7965 16.7805C10.1547 16.7805 8.84961 18.0855 8.84961 19.7273C8.84961 21.3692 10.1547 22.6742 11.7965 22.6742C13.4383 22.6742 14.7434 21.3692 14.7434 19.7273C14.7434 18.0855 13.4383 16.7805 11.7965 16.7805ZM11.7965 21.2008C10.9966 21.2008 10.3231 20.5272 10.3231 19.7273C10.3231 18.9275 10.9966 18.2539 11.7965 18.2539C12.5964 18.2539 13.2699 18.9275 13.2699 19.7273C13.2699 20.5272 12.5964 21.2008 11.7965 21.2008Z"/>
                                <path
                                    d="M1.10265 7.85562C1.18684 9.70794 2.82868 10.4657 3.67064 10.4657H6.61752C6.65962 10.4657 6.65962 10.4657 6.65962 10.4657C7.92257 10.3815 9.18552 9.53955 9.18552 7.85562V6.84526C10.5748 6.84526 13.7742 6.84526 15.1635 6.84526V7.85562C15.1635 9.53955 16.4264 10.3815 17.6894 10.4657H17.7315H20.6363C21.4782 10.4657 23.1201 9.70794 23.2043 7.85562C23.2043 7.72932 23.2043 7.26624 23.2043 6.84526C23.2043 6.50847 23.2043 6.21378 23.2043 6.17169C23.2043 6.12959 23.2043 6.08749 23.2043 6.08749C23.078 4.90874 22.657 3.94047 21.9413 3.18271L21.8992 3.14061C20.8468 2.17235 19.5838 1.62507 18.6155 1.28828C15.795 0.193726 12.2587 0.193726 12.0903 0.193726C9.6065 0.235824 8.00677 0.446315 5.60716 1.28828C4.681 1.58297 3.41805 2.13025 2.36559 3.09851L2.3235 3.14061C1.60782 3.89838 1.18684 4.86664 1.06055 6.04539C1.06055 6.08749 1.06055 6.12959 1.06055 6.12959C1.06055 6.21378 1.06055 6.46637 1.06055 6.80316C1.10265 7.18204 1.10265 7.68722 1.10265 7.85562ZM3.37595 4.15097C4.21792 3.3932 5.27038 2.93012 6.15444 2.59333C8.34355 1.79346 9.7749 1.62507 12.1745 1.58297C12.3429 1.58297 15.6266 1.62507 18.1525 2.59333C19.0365 2.93012 20.089 3.3511 20.931 4.15097C21.394 4.65615 21.6887 5.32972 21.7729 6.12959C21.7729 6.25588 21.7729 6.46637 21.7729 6.80316C21.7729 7.22414 21.7729 7.68722 21.7729 7.81352C21.7308 8.78178 20.8047 8.99227 20.6784 8.99227H17.7736C17.3526 8.95017 16.679 8.78178 16.679 7.85562V6.12959C16.679 5.7928 16.4685 5.54021 16.1738 5.41392C15.9213 5.32972 8.55405 5.32972 8.30146 5.41392C8.00677 5.49811 7.79628 5.7928 7.79628 6.12959V7.85562C7.79628 8.78178 7.1227 8.95017 6.70172 8.99227H3.79694C3.67064 8.99227 2.74448 8.78178 2.70238 7.81352C2.70238 7.68722 2.70238 7.22414 2.70238 6.80316C2.70238 6.46637 2.70238 6.29798 2.70238 6.17169C2.61818 5.32972 2.91287 4.65615 3.37595 4.15097Z"/>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-dark">Phone Number
                            </h4>
                            <p class="text-base text-body-color">
                                0727991993</p>
                        </div>
                    </div>

                    <div class="mb-8 flex w-full max-w-[370px]">
                        <div
                            class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-primary bg-opacity-5 text-purple-400 sm:h-[70px] sm:max-w-[70px]">
                            <svg width="28" height="19" viewBox="0 0 28 19"
                                 class="fill-current">
                                <path
                                    d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z"/>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-dark">
                                Email Address
                            </h4>
                            <p class="text-base text-body-color">
                                naphtali919@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
                    <form>
                        <div class="mb-6">
                            <input type="text" placeholder="Your Name"
                                   class="border-[f0f0f0] w-full rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none"/>
                        </div>
                        <div class="mb-6">
                            <input type="email" placeholder="Your Email"
                                   class="border-[f0f0f0] w-full rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none"/>
                        </div>
                        <div class="mb-6">
                            <input type="text" placeholder="Your Phone"
                                   class="border-[f0f0f0] w-full rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none"/>
                        </div>
                        <div class="mb-6">
                                                            <textarea rows="6" placeholder="Your Message"
                                                                      class="border-[f0f0f0] w-full resize-none rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-primary focus-visible:shadow-none"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                    class="w-full rounded border border-white bg-purple-400 p-3 text-white transition hover:bg-opacity-90">
                                Send Message
                            </button>
                        </div>
                    </form>
                    <div>
                                                        <span class="absolute -top-10 -right-9 z-[-1]">
                                                            <svg width="100" height="100"
                                                                 viewBox="0 0 100 100" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                                                      fill="#F89AFF"/>
                                                            </svg>
                                                        </span>
                        <span class="absolute -right-10 top-[90px] z-[-1]">
                                                            <svg width="34" height="134"
                                                                 viewBox="0 0 34 134" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="31.9993" cy="132" r="1.66667"
                                                                        transform="rotate(180 31.9993 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 31.9993 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 31.9993 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="88" r="1.66667"
                                                                        transform="rotate(180 31.9993 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 31.9993 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="45" r="1.66667"
                                                                        transform="rotate(180 31.9993 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="16" r="1.66667"
                                                                        transform="rotate(180 31.9993 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="59" r="1.66667"
                                                                        transform="rotate(180 31.9993 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 31.9993 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 31.9993 1.66665)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="132" r="1.66667"
                                                                        transform="rotate(180 17.3333 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 17.3333 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 17.3333 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="88" r="1.66667"
                                                                        transform="rotate(180 17.3333 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 17.3333 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="45" r="1.66667"
                                                                        transform="rotate(180 17.3333 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="16" r="1.66667"
                                                                        transform="rotate(180 17.3333 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="59" r="1.66667"
                                                                        transform="rotate(180 17.3333 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 17.3333 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 17.3333 1.66665)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="132" r="1.66667"
                                                                        transform="rotate(180 2.66536 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 2.66536 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 2.66536 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="88" r="1.66667"
                                                                        transform="rotate(180 2.66536 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 2.66536 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="45" r="1.66667"
                                                                        transform="rotate(180 2.66536 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="16" r="1.66667"
                                                                        transform="rotate(180 2.66536 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="59" r="1.66667"
                                                                        transform="rotate(180 2.66536 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 2.66536 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 2.66536 1.66665)"
                                                                        fill="#F89AFF"/>
                                                            </svg>
                                                        </span>
                        <span class="absolute -left-7 -bottom-7 z-[-1]">
                                                            <svg width="107" height="134"
                                                                 viewBox="0 0 107 134" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="104.999" cy="132" r="1.66667"
                                                                        transform="rotate(180 104.999 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="104.999" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 104.999 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="104.999" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 104.999 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="104.999" cy="88" r="1.66667"
                                                                        transform="rotate(180 104.999 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="104.999" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 104.999 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="104.999" cy="45" r="1.66667"
                                                                        transform="rotate(180 104.999 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="104.999" cy="16" r="1.66667"
                                                                        transform="rotate(180 104.999 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="104.999" cy="59" r="1.66667"
                                                                        transform="rotate(180 104.999 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="104.999" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 104.999 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="104.999" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 104.999 1.66665)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="132" r="1.66667"
                                                                        transform="rotate(180 90.3333 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 90.3333 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 90.3333 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="88" r="1.66667"
                                                                        transform="rotate(180 90.3333 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 90.3333 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="45" r="1.66667"
                                                                        transform="rotate(180 90.3333 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="16" r="1.66667"
                                                                        transform="rotate(180 90.3333 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="59" r="1.66667"
                                                                        transform="rotate(180 90.3333 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 90.3333 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="90.3333" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 90.3333 1.66665)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="132" r="1.66667"
                                                                        transform="rotate(180 75.6654 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="132" r="1.66667"
                                                                        transform="rotate(180 31.9993 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 75.6654 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 31.9993 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 75.6654 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 31.9993 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="88" r="1.66667"
                                                                        transform="rotate(180 75.6654 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="88" r="1.66667"
                                                                        transform="rotate(180 31.9993 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 75.6654 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 31.9993 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="45" r="1.66667"
                                                                        transform="rotate(180 75.6654 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="45" r="1.66667"
                                                                        transform="rotate(180 31.9993 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="16" r="1.66667"
                                                                        transform="rotate(180 75.6654 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="16" r="1.66667"
                                                                        transform="rotate(180 31.9993 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="59" r="1.66667"
                                                                        transform="rotate(180 75.6654 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="59" r="1.66667"
                                                                        transform="rotate(180 31.9993 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 75.6654 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 31.9993 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="75.6654" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 75.6654 1.66665)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="31.9993" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 31.9993 1.66665)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="132" r="1.66667"
                                                                        transform="rotate(180 60.9993 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="132" r="1.66667"
                                                                        transform="rotate(180 17.3333 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 60.9993 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 17.3333 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 60.9993 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 17.3333 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="88" r="1.66667"
                                                                        transform="rotate(180 60.9993 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="88" r="1.66667"
                                                                        transform="rotate(180 17.3333 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 60.9993 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 17.3333 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="45" r="1.66667"
                                                                        transform="rotate(180 60.9993 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="45" r="1.66667"
                                                                        transform="rotate(180 17.3333 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="16" r="1.66667"
                                                                        transform="rotate(180 60.9993 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="16" r="1.66667"
                                                                        transform="rotate(180 17.3333 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="59" r="1.66667"
                                                                        transform="rotate(180 60.9993 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="59" r="1.66667"
                                                                        transform="rotate(180 17.3333 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 60.9993 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 17.3333 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="60.9993" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 60.9993 1.66665)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="17.3333" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 17.3333 1.66665)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="132" r="1.66667"
                                                                        transform="rotate(180 46.3333 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="132" r="1.66667"
                                                                        transform="rotate(180 2.66536 132)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 46.3333 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="117.333" r="1.66667"
                                                                        transform="rotate(180 2.66536 117.333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 46.3333 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="102.667" r="1.66667"
                                                                        transform="rotate(180 2.66536 102.667)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="88" r="1.66667"
                                                                        transform="rotate(180 46.3333 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="88" r="1.66667"
                                                                        transform="rotate(180 2.66536 88)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 46.3333 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="73.3333" r="1.66667"
                                                                        transform="rotate(180 2.66536 73.3333)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="45" r="1.66667"
                                                                        transform="rotate(180 46.3333 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="45" r="1.66667"
                                                                        transform="rotate(180 2.66536 45)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="16" r="1.66667"
                                                                        transform="rotate(180 46.3333 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="16" r="1.66667"
                                                                        transform="rotate(180 2.66536 16)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="59" r="1.66667"
                                                                        transform="rotate(180 46.3333 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="59" r="1.66667"
                                                                        transform="rotate(180 2.66536 59)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 46.3333 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="30.6666" r="1.66667"
                                                                        transform="rotate(180 2.66536 30.6666)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="46.3333" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 46.3333 1.66665)"
                                                                        fill="#F89AFF"/>
                                                                <circle cx="2.66536" cy="1.66665" r="1.66667"
                                                                        transform="rotate(180 2.66536 1.66665)"
                                                                        fill="#F89AFF"/>
                                                            </svg>
                                                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Contact Section End -->



<!-- ====== Footer Section Start -->
<footer
    class="bg-[#F3F4F6] relative z-10 bg-white pt-20 pb-10 lg:pt-[120px] lg:pb-20">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 sm:w-2/3 lg:w-3/12">
                <div class="mb-10 w-full">
                    <a href="javascript:void(0)"
                       class="mb-6 inline-block max-w-[160px]">
                        <img src="{{ asset('assets/images/she-safe-logo.png') }}"
                             alt="logo" class="max-w-full"/>
                    </a>
                    <p class="mb-7 text-base text-body-color">
                        Safety begins with awareness, and we're here to help you make informed decisions about your safety.
                    </p>
                    <p class="flex items-center text-sm font-medium text-dark">
                                                        <span class="mr-3 text-primary">
                                                            <svg width="19" height="21" viewBox="0 0 19 21"
                                                                 class="fill-current">
                                                                <path
                                                                    d="M17.8076 11.8129C17.741 11.0475 17.1088 10.5151 16.3434 10.5151H2.16795C1.40261 10.5151 0.803643 11.0808 0.703816 11.8129L0.00502514 18.8008C-0.0282506 19.2001 0.104853 19.6327 0.371059 19.9322C0.637265 20.2317 1.03657 20.398 1.46916 20.398H17.0755C17.4748 20.398 17.8741 20.2317 18.1736 19.9322C18.4398 19.6327 18.5729 19.2334 18.5396 18.8008L17.8076 11.8129ZM17.2751 19.1668C17.2419 19.2001 17.1753 19.2667 17.0422 19.2667H1.46916C1.36933 19.2667 1.2695 19.2001 1.23623 19.1668C1.20295 19.1336 1.1364 19.067 1.16968 18.9339L1.86847 11.9127C1.86847 11.7463 2.00157 11.6465 2.16795 11.6465H16.3767C16.5431 11.6465 16.6429 11.7463 16.6762 11.9127L17.375 18.9339C17.3417 19.0337 17.3084 19.1336 17.2751 19.1668Z"/>
                                                                <path
                                                                    d="M9.25704 13.1106C7.95928 13.1106 6.92773 14.1422 6.92773 15.4399C6.92773 16.7377 7.95928 17.7693 9.25704 17.7693C10.5548 17.7693 11.5863 16.7377 11.5863 15.4399C11.5863 14.1422 10.5548 13.1106 9.25704 13.1106ZM9.25704 16.6046C8.6248 16.6046 8.09239 16.0722 8.09239 15.4399C8.09239 14.8077 8.6248 14.2753 9.25704 14.2753C9.88928 14.2753 10.4217 14.8077 10.4217 15.4399C10.4217 16.0722 9.88928 16.6046 9.25704 16.6046Z"/>
                                                                <path
                                                                    d="M0.802807 6.05619C0.869358 7.52032 2.16711 8.11928 2.83263 8.11928H5.16193C5.19521 8.11928 5.19521 8.11928 5.19521 8.11928C6.19348 8.05273 7.19175 7.38722 7.19175 6.05619V5.25757C8.28985 5.25757 10.8188 5.25757 11.9169 5.25757V6.05619C11.9169 7.38722 12.9152 8.05273 13.9135 8.11928H13.9467H16.2428C16.9083 8.11928 18.206 7.52032 18.2726 6.05619C18.2726 5.95636 18.2726 5.59033 18.2726 5.25757C18.2726 4.99136 18.2726 4.75843 18.2726 4.72516C18.2726 4.69188 18.2726 4.6586 18.2726 4.6586C18.1727 3.72688 17.84 2.96154 17.2743 2.36258L17.241 2.3293C16.4091 1.56396 15.4109 1.13138 14.6455 0.865169C12.416 0 9.62088 0 9.48778 0C7.52451 0.0332757 6.26003 0.199654 4.36331 0.865169C3.63125 1.0981 2.63297 1.53068 1.80108 2.29603L1.7678 2.3293C1.20212 2.92827 0.869359 3.69361 0.769531 4.62533C0.769531 4.6586 0.769531 4.69188 0.769531 4.69188C0.769531 4.75843 0.769531 4.95809 0.769531 5.22429C0.802807 5.52377 0.802807 5.92308 0.802807 6.05619ZM2.5997 3.12792C3.26521 2.52896 4.09711 2.16292 4.7959 1.89672C6.52624 1.26448 7.65761 1.13138 9.55433 1.0981C9.68743 1.0981 12.2829 1.13138 14.2795 1.89672C14.9783 2.16292 15.8102 2.49568 16.4757 3.12792C16.8417 3.52723 17.0746 4.05964 17.1412 4.69188C17.1412 4.79171 17.1412 4.95809 17.1412 5.22429C17.1412 5.55705 17.1412 5.92308 17.1412 6.02291C17.1079 6.78825 16.3759 6.95463 16.276 6.95463H13.98C13.6472 6.92135 13.1148 6.78825 13.1148 6.05619V4.69188C13.1148 4.42567 12.9485 4.22602 12.7155 4.12619C12.5159 4.05964 6.69262 4.05964 6.49296 4.12619C6.26003 4.19274 6.09365 4.42567 6.09365 4.69188V6.05619C6.09365 6.78825 5.56124 6.92135 5.22848 6.95463H2.93246C2.83263 6.95463 2.10056 6.78825 2.06729 6.02291C2.06729 5.92308 2.06729 5.55705 2.06729 5.22429C2.06729 4.95809 2.06729 4.82498 2.06729 4.72516C2.00073 4.05964 2.23366 3.52723 2.5997 3.12792Z"/>
                                                            </svg>
                                                        </span>
                        <span>0727991993

                                                        </span>
                    </p>
                </div>
            </div>

            <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                <div class="mb-10 w-full">
                    <h4 class="mb-9 text-lg font-semibold text-dark">Company</h4>
                    <ul>
                        <li>
                            <a href="#about"
                               class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                                About She's Safe
                            </a>
                        </li>
                        <li>
                            <a href="tel:"
                               class="mb-2 inline-block text-base leading-loose text-body-color hover:text-primary">
                                Contact & Support
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
                <div class="mb-10 w-full">
                    <h4 class="mb-9 text-lg font-semibold text-dark">Follow Us On</h4>
                    <div class="mb-6 flex items-center">
                        <a href=""
                           class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                            <svg width="8" height="16" viewBox="0 0 8 16"
                                 class="fill-current">
                                <path
                                    d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z"/>
                            </svg>
                        </a>
                        <a href=""
                           class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">

                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".328" stop-color="#ff543f"></stop><stop offset=".348" stop-color="#fc5245"></stop><stop offset=".504" stop-color="#e64771"></stop><stop offset=".643" stop-color="#d53e91"></stop><stop offset=".761" stop-color="#cc39a4"></stop><stop offset=".841" stop-color="#c837ab"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"></stop><stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                            </svg>
                        </a>

                        <a href=""
                           class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                            <svg width="14" height="14" viewBox="0 0 14 14"
                                 class="fill-current">
                                <path
                                    d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z"/>
                            </svg>
                        </a>
                    </div>
                    <p class="text-base text-body-color">&copy; 2023 Easy Biz Africa
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div>
        <span class="absolute left-0 bottom-0 z-[-1]">
            <svg width="217" height="229" viewBox="0 0 217 229"
                 fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                    fill="url(#paint0_linear_1179_5)"/>
                <defs>
                    <linearGradient id="paint0_linear_1179_5" x1="76.5"
                                    y1="281" x2="76.5" y2="1.22829e-05"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.08"/>
                        <stop offset="1" stop-color="#C4C4C4"
                              stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
        </span>
        <span class="absolute top-10 right-10 z-[-1]">
                                            <svg width="75" height="75" viewBox="0 0 75 75"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
                                                    fill="url(#paint0_linear_1179_4)"/>
                                                <defs>
                                                    <linearGradient id="paint0_linear_1179_4" x1="-1.63917e-06"
                                                                    y1="37.5" x2="75" y2="37.5"
                                                                    gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#13C296" stop-opacity="0.31"/>
                                                        <stop offset="1" stop-color="#C4C4C4"
                                                              stop-opacity="0"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
    </div>
</footer>
<!-- ====== Footer Section End -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const submitButton = document.getElementById('submitButton');
        const popup = document.getElementById('popup');

        submitButton.addEventListener('click', function () {
            // Show the popup
            popup.classList.remove('hidden');

            // Hide the popup after 3 seconds
            setTimeout(function () {
                popup.classList.add('hidden');
            }, 3000);
        });
    });
</script>
</body>
</html>
