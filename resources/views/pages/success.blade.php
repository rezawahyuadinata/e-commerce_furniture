@extends('layouts.frontend.layout')
@section('section')
    <!-- START: BREADCRUMB -->
    <section class="px-4 py-8 bg-gray-100">
        <div class="container mx-auto">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#" aria-label="current-page">Success Checkout</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- END: BREADCRUMB -->

    <!-- START: CONGRATS -->
    <section class="">
        <div class="container min-h-screen mx-auto">
            <div class="flex flex-col items-center justify-center">
                <div class="w-full text-center md:w-4/12">
                    <img src="/frontend/images/content/illustration-success.png" alt="congrats illustration" />
                    <h2 class="mb-6 text-3xl font-semibold">Ah yes it’s success!</h2>
                    <p class="mb-12 text-lg">
                        Furniture yang anda beli akan kami kirimkan saat ini juga so now
                        please sit tight and be ready for it
                    </p>
                    <a href="details.html"
                        class="w-full px-8 py-3 text-lg text-gray-900 transition-all duration-200 bg-red-200 rounded-full cursor-pointer focus:outline-none focus:text-black">
                        Back to Shop
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END: CONGRATS -->

    <!-- START: ASIDE MENU -->
    <section class="">
        <div class="px-4 py-12 mt-16 border-t border-b border-gray-200">
            <div class="flex justify-center mb-8">
                <img src="/frontend/images/content/logo.png" alt="Luxspace | Fulfill your house with beautiful furniture" />
            </div>
            <aside class="container mx-auto">
                <div class="flex flex-wrap justify-center -mx-4">
                    <div class="w-full px-4 mb-4 md:w-2/12 md:mb-0 accordion">
                        <h5 class="relative mb-2 text-lg font-semibold">Overview</h5>
                        <ul class="invisible h-0 overflow-hidden md:h-auto md:visible">
                            <li>
                                <a href="#" class="block py-1 hover:underline">Shipping</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Refund</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Promotion</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-2/12 md:mb-0 accordion">
                        <h5 class="relative mb-2 text-lg font-semibold">Company</h5>
                        <ul class="invisible h-0 overflow-hidden md:h-auto md:visible">
                            <li>
                                <a href="#" class="block py-1 hover:underline">About</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Career</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-2/12 md:mb-0 accordion">
                        <h5 class="relative mb-2 text-lg font-semibold">Explore</h5>
                        <ul class="invisible h-0 overflow-hidden md:h-auto md:visible">
                            <li>
                                <a href="#" class="block py-1 hover:underline">Terms & Conds</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">For Developer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-3/12 md:mb-0">
                        <h5 class="relative mb-2 text-lg font-semibold">
                            Special Letter
                        </h5>
                        <form action="#">
                            <label class="relative w-full">
                                <input type="text" class="w-full px-5 py-3 bg-gray-100 rounded-xl focus:outline-none"
                                    placeholder="Your email adress" />
                                <button class="absolute right-0 p-3 bg-pink-400 rounded-xl">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.6177 0.411971C23.6163 0.410624 23.6152 0.409187 23.6138 0.407839C23.6124 0.406492 23.6109 0.405414 23.6095 0.404157C23.236 0.049307 22.7002 -0.0573008 22.2098 0.126411L0.833871 8.13353C0.268743 8.34518 -0.0623361 8.87521 0.0098048 9.4523C0.0821332 10.0294 0.53462 10.4694 1.13589 10.547L11.5833 11.8968C11.6028 11.8994 11.6185 11.9143 11.6212 11.9332L13.0301 21.9417C13.1112 22.5177 13.5704 22.9512 14.1729 23.0204C14.2279 23.0268 14.2824 23.0298 14.3364 23.0298C14.8735 23.0298 15.3486 22.7229 15.5495 22.231L23.9077 1.75274C24.0994 1.28302 23.9882 0.76983 23.6177 0.411971ZM1.30534 9.34475C1.2819 9.34169 1.27136 9.34039 1.26728 9.30788C1.26325 9.27537 1.27319 9.27159 1.29508 9.26347L21.2946 1.77187L11.9404 10.7333C11.8794 10.7163 1.30534 9.34475 1.30534 9.34475ZM14.37 21.7892C14.3614 21.8102 14.358 21.8198 14.3236 21.8158C14.2897 21.8119 14.2883 21.8017 14.2852 21.7794C14.2852 21.7794 12.8535 11.6495 12.8358 11.5911L22.19 2.62972L14.37 21.7892Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </label>
                        </form>
                    </div>
                </div>
            </aside>
        </div>
    </section>
    <!-- END: ASIDE MENU -->
@endsection
