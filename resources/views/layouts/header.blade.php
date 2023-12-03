@if (session()->has('success'))
    <div id="successAlert" class="p-6 border-l-4 border-green-500 -6 rounded-r-xl bg-green-50">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="ml-3">
                <div class="text-sm text-green-600">
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        </div>
    </div>

@endif
@if (session()->has('error'))
    <div class="p-6 border-l-4 border-red-500 -6 rounded-r-xl bg-red-50">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 10.586l4-4a1 1 0 00-1.414-1.414L10 9.172 6.414 5.586A1 1 0 005 6a1 1 0 00.293.707l4 4a1 1 0 001.414 0l4-4a1 1 0 10-1.414-1.414L10 7.172 6.414 3.586A1 1 0 005 4a1 1 0 00.293.707l4 4a1 1 0 001.414 0z" clip-rule="evenodd"></path>
                </svg>

            </div>
            <div class="ml-3">
                <div class="text-sm text-red-600">
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

<header x-data="{ navbarOpen: false}" class="absolute z-50 w-full">
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
                                    Blog
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
                <div class="justify-end pr-16 sm:flex lg:pr-0">

                    <button
                        data-toggle="modal" data-target="#mpesaModal"
                        class="donate-button rounded-lg bg-purple-600 py-3 px-7 text-base font-medium text-white hover:bg-opacity-90"
                    >
                        Donate
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{--    Modal Section Start--}}
    <div
        class="modal fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-black bg-opacity-90 px-4 py-5 hidden"
        id="exampleModal"
        aria-hidden="true"
    >
        <div

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
                        placeholder="Use 07 or 01"
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

                <button id="submitButton"
                        class="block w-full rounded-lg border border-purple-300 bg-purple-600 p-3 text-center text-base font-medium text-white transition hover:bg-opacity-90">
                    Submit
                </button>
            </form>
        </div>
        <button class="close-button absolute top-4 right-4 text-white text-xl focus:outline-none">&#x2715;</button>
    </div>
    {{--    Modal Section end--}}

    <div id="popup" class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md">
            <p class="text-green-500">Success!</p>
        </div>
    </div>
</header>
