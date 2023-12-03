<!-- ====== Hero Section Start -->
<div x-data="{ modalOpen: false }" id="home" class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
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
                            <a
                                @click="modalOpen = true"
                                data-aos="fade-right" data-aos-delay="600" data-aos-duration="2000"
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
