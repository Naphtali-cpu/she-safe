{{--    Modal Section Start--}}
<div
    class="modal fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-black bg-opacity-90 px-4 py-5"
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
    <button class="close-button absolute top-4 right-4 text-white text-xl focus:outline-none">&#x2715;</button>
</div>
{{--    Modal Section end--}}
