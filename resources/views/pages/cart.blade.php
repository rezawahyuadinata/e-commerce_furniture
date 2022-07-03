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
                    <a href="#" aria-label="current-page">Shopping Cart</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- END: BREADCRUMB -->

    <!-- START: COMPLETE YOUR ROOM -->
    <section class="md:py-16">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 mb-4 md:w-8/12 md:mb-0" id="shopping-cart">
                    <div class="flex pb-3 mt-8 mb-4 border-b border-gray-200 flex-start md:border-b-0">
                        <h3 class="text-2xl">Shopping Cart</h3>
                    </div>

                    <div class="hidden mb-4 border-b border-gray-200 md:block">
                        <div class="flex items-center pb-2 -mx-4 flex-start">
                            <div class="flex-none px-4">
                                <div class="" style="width: 90px">
                                    <h6>Photo</h6>
                                </div>
                            </div>
                            <div class="w-5/12 px-4">
                                <div class="">
                                    <h6>Product</h6>
                                </div>
                            </div>
                            <div class="w-5/12 px-4">
                                <div class="">
                                    <h6>Price</h6>
                                </div>
                            </div>
                            <div class="w-2/12 px-4">
                                <div class="text-center">
                                    <h6>Action</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p id="cart-empty" class="hidden py-8 text-center">
                        Ooops... Cart is empty
                        <a href="details.html" class="underline">Shop Now</a>
                    </p>

                    <!-- START: ROW 1 -->
                    <div class="flex flex-wrap items-center mb-4 -mx-4 flex-start" data-row="1">
                        <div class="flex-none px-4">
                            <div class="" style="width: 90px; height: 90px">
                                <img src="./frontend/images/content/chair-1.png" alt="chair-1"
                                    class="object-cover w-full h-full rounded-xl" />
                            </div>
                        </div>
                        <div class="flex-1 w-auto px-4 md:w-5/12">
                            <div class="">
                                <h6 class="text-lg font-semibold leading-8 md:text-xl">
                                    Saman Kakka
                                </h6>
                                <span class="text-sm md:text-lg">Office Room</span>
                                <h6 class="block text-base font-semibold md:text-lg md:hidden">
                                    IDR 28.000.000
                                </h6>
                            </div>
                        </div>
                        <div class="flex-none hidden w-auto px-4 md:flex-1 md:w-5/12 md:block">
                            <div class="">
                                <h6 class="text-lg font-semibold">IDR 28.000.000</h6>
                            </div>
                        </div>
                        <div class="w-2/12 px-4">
                            <div class="text-center">
                                <button data-delete-item="1" class="px-3 py-1 text-red-600 border-none focus:outline-none">
                                    X
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END: ROW 1 -->

                    <!-- START: ROW 2 -->
                    <div class="flex flex-wrap items-center mb-4 -mx-4 flex-start" data-row="2">
                        <div class="flex-none px-4">
                            <div class="" style="width: 90px; height: 90px">
                                <img src="./frontend/images/content/chair-2.png" alt="chair-2"
                                    class="object-cover w-full h-full rounded-xl" />
                            </div>
                        </div>
                        <div class="flex-1 w-auto px-4 md:w-5/12">
                            <div class="">
                                <h6 class="text-lg font-semibold leading-8 md:text-xl">
                                    Green Seat
                                </h6>
                                <span class="text-sm md:text-lg">Office Room</span>
                                <h6 class="block text-base font-semibold md:text-lg md:hidden">
                                    IDR 28.000.000
                                </h6>
                            </div>
                        </div>
                        <div class="flex-none hidden w-auto px-4 md:flex-1 md:w-5/12 md:block">
                            <div class="">
                                <h6 class="text-lg font-semibold">IDR 12.500.000</h6>
                            </div>
                        </div>
                        <div class="w-2/12 px-4">
                            <div class="text-center">
                                <button data-delete-item="2" class="px-3 py-1 text-red-600 border-none focus:outline-none">
                                    X
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END: ROW 2 -->

                    <!-- START: ROW 3 -->
                    <div class="flex flex-wrap items-center mb-4 -mx-4 flex-start" data-row="3">
                        <div class="flex-none px-4">
                            <div class="" style="width: 90px; height: 90px">
                                <img src="./frontend/images/content/chair-3.png" alt="chair-3"
                                    class="object-cover w-full h-full rounded-xl" />
                            </div>
                        </div>
                        <div class="flex-1 w-auto px-4 md:w-5/12">
                            <div class="">
                                <h6 class="text-lg font-semibold leading-8 md:text-xl">
                                    Pacific
                                </h6>
                                <span class="text-sm md:text-lg">Office Room</span>
                                <h6 class="block text-base font-semibold md:text-lg md:hidden">
                                    IDR 28.000.000
                                </h6>
                            </div>
                        </div>
                        <div class="flex-none hidden w-auto px-4 md:flex-1 md:w-5/12 md:block">
                            <div class="">
                                <h6 class="text-lg font-semibold">IDR 88.800.000</h6>
                            </div>
                        </div>
                        <div class="w-2/12 px-4">
                            <div class="text-center">
                                <button data-delete-item="3" class="px-3 py-1 text-red-600 border-none focus:outline-none">
                                    X
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END: ROW 3 -->
                </div>
                <div class="w-full md:px-4 md:w-4/12" id="shipping-detail">
                    <div class="px-4 py-6 bg-gray-100 md:p-8 md:rounded-3xl">
                        <form action="success.html">
                            <div class="flex mb-6 flex-start">
                                <h3 class="text-2xl">Shipping Details</h3>
                            </div>

                            <div class="flex flex-col mb-4">
                                <label for="complete-name" class="mb-2 text-sm">Complete Name</label>
                                <input data-input type="text" id="complete-name"
                                    class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-200 focus:outline-none"
                                    placeholder="Input your name" />
                            </div>

                            <div class="flex flex-col mb-4">
                                <label for="email" class="mb-2 text-sm">Email Address</label>
                                <input data-input type="email" id="email"
                                    class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-200 focus:outline-none"
                                    placeholder="Input your email address" />
                            </div>

                            <div class="flex flex-col mb-4">
                                <label for="address" class="mb-2 text-sm">Address</label>
                                <input data-input type="text" id="address"
                                    class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-200 focus:outline-none"
                                    placeholder="Input your address" />
                            </div>

                            <div class="flex flex-col mb-4">
                                <label for="phone-number" class="mb-2 text-sm">Phone Number</label>
                                <input data-input type="tel" id="phone-number"
                                    class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-200 focus:outline-none"
                                    placeholder="Input your phone number" />
                            </div>

                            <div class="flex flex-col mb-4">
                                <label for="complete-name" class="mb-2 text-sm">Choose Courier</label>
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-6/12 h-24 px-2 mb-4">
                                        <button type="button" data-value="fedex" data-name="courier"
                                            class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none">
                                            <img src="./frontend/images/content/logo-fedex.svg" alt="Logo Fedex"
                                                class="object-contain max-h-full" />
                                        </button>
                                    </div>
                                    <div class="w-6/12 h-24 px-2 mb-4">
                                        <button type="button" data-value="dhl" data-name="courier"
                                            class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none">
                                            <img src="./frontend/images/content/logo-dhl.svg" alt="Logo dhl"
                                                class="object-contain max-h-full" />
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col mb-4">
                                <label for="complete-name" class="mb-2 text-sm">Choose Payment</label>
                                <div class="flex flex-wrap -mx-2">
                                    <div class="w-6/12 h-24 px-2 mb-4">
                                        <button type="button" data-value="midtrans" data-name="payment"
                                            class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none">
                                            <img src="./frontend/images/content/logo-midtrans.png" alt="Logo midtrans"
                                                class="object-contain max-h-full" />
                                        </button>
                                    </div>
                                    <div class="w-6/12 h-24 px-2 mb-4">
                                        <button type="button" data-value="mastercard" data-name="payment"
                                            class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none">
                                            <img src="./frontend/images/content/logo-mastercard.svg" alt="Logo mastercard" />
                                        </button>
                                    </div>
                                    <div class="w-6/12 h-24 px-2 mb-4">
                                        <button type="button" data-value="bitcoin" data-name="payment"
                                            class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none">
                                            <img src="./frontend/frontend/images/content/logo-bitcoin.svg" alt="Logo bitcoin"
                                                class="object-contain max-h-full" />
                                        </button>
                                    </div>
                                    <div class="w-6/12 h-24 px-2 mb-4">
                                        <button type="button" data-value="american-express" data-name="payment"
                                            class="flex items-center justify-center w-full h-full bg-white border border-gray-200 focus:border-red-200 rounded-xl focus:outline-none">
                                            <img src="./frontend/images/content/logo-american-express.svg"
                                                alt="Logo american-logo-american-express" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" disabled
                                    class="w-full px-6 py-3 text-lg text-black transition-all duration-200 bg-pink-400 rounded-full hover:bg-black hover:text-pink-400 focus:outline-none focus:text-black">
                                    Checkout Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: COMPLETE YOUR ROOM -->

    <!-- START: ASIDE MENU -->
    <section class="">
        <div class="px-4 py-12 mt-16 border-t border-b border-gray-200">
            <div class="flex justify-center mb-8">
                <img src="frontend/images/content/logo.png" alt="Luxspace | Fulfill your house with beautiful furniture" />
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
                        <form action="success.html">
                            <label class="relative w-full">
                                <input data-input type="text"
                                    class="w-full px-5 py-3 bg-gray-100 rounded-xl focus:outline-none"
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
