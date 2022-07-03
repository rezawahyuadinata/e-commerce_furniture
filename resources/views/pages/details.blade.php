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
                    <a href="#">Office Room</a>
                </li>
                <li>
                    <a href="#" aria-label="current-page">Details</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- END: BREADCRUMB -->

    <!-- START: DETAILS -->
    <section class="container mx-auto">
        <div class="flex flex-wrap my-4 md:my-12">
            <div class="w-full px-4 md:hidden">
                <h2 class="text-5xl font-semibold">Chair Thatty</h2>
                <span class="text-xl">IDR 12.000.000</span>
            </div>
            <div class="flex-1">
                <div class="slider">
                    <div class="thumbnail">
                        <div class="px-2">
                            <div class="item selected" data-img="/frontend/images/content/showcase-1.front.jpg">
                                <img src="/frontend/images/content/showcase-1.front.jpg" alt="front"
                                    class="object-cover w-full h-full rounded-lg" />
                            </div>
                        </div>
                        <div class="px-2">
                            <div class="item" data-img="/frontend/images/content/showcase-1.back.jpg">
                                <img src="/frontend/images/content/showcase-1.back.jpg" alt="back"
                                    class="object-cover w-full h-full rounded-lg" />
                            </div>
                        </div>
                        <div class="px-2">
                            <div class="item" data-img="/frontend/images/content/showcase-1.rear.jpg">
                                <img src="/frontend/images/content/showcase-1.rear.jpg" alt="rear"
                                    class="object-cover w-full h-full rounded-lg" />
                            </div>
                        </div>
                        <div class="px-2">
                            <div class="item" data-img="/frontend/images/content/showcase-1.side.jpg">
                                <img src="/frontend/images/content/showcase-1.side.jpg" alt="side"
                                    class="object-cover w-full h-full rounded-lg" />
                            </div>
                        </div>
                        <div class="px-2">
                            <div class="item" data-img="/frontend/images/content/showcase-1.top.jpg">
                                <img src="/frontend/images/content/showcase-1.top.jpg" alt="top"
                                    class="object-cover w-full h-full rounded-lg" />
                            </div>
                        </div>
                    </div>
                    <div class="preview">
                        <div class="h-full overflow-hidden rounded-lg item">
                            <img src="/frontend/images/content/showcase-1.front.jpg" alt="front"
                                class="object-cover w-full h-full rounded-lg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 px-4 md:p-6">
                <h2 class="text-5xl font-semibold">Chair Thatty</h2>
                <p class="text-xl">IDR 12.000.000</p>

                <a href="cart.html"
                    class="inline-flex px-8 py-3 mt-4 text-black transition-all duration-200 bg-pink-400 rounded-full focus:bg-black focus:text-pink-400"><svg
                        class="mr-3 fill-current" width="26" height="24" viewBox="0 0 26 24">
                        <path
                            d="M10.8754 18.7312C9.61762 18.7312 8.59436 19.7115 8.59436 20.9164C8.59436 22.1214 9.61762 23.1017 10.8754 23.1017C12.1331 23.1017 13.1564 22.1214 13.1564 20.9164C13.1563 19.7115 12.1331 18.7312 10.8754 18.7312ZM10.8754 21.8814C10.3199 21.8814 9.86796 21.4485 9.86796 20.9163C9.86796 20.3842 10.3199 19.9512 10.8754 19.9512C11.4308 19.9512 11.8828 20.3842 11.8828 20.9163C11.8828 21.4486 11.4308 21.8814 10.8754 21.8814Z" />
                        <path
                            d="M18.8764 18.7312C17.6186 18.7312 16.5953 19.7115 16.5953 20.9164C16.5953 22.1214 17.6186 23.1017 18.8764 23.1017C20.1342 23.1017 21.1575 22.1214 21.1575 20.9164C21.1574 19.7115 20.1341 18.7312 18.8764 18.7312ZM18.8764 21.8814C18.3209 21.8814 17.869 21.4485 17.869 20.9163C17.869 20.3842 18.3209 19.9512 18.8764 19.9512C19.4319 19.9512 19.8838 20.3842 19.8838 20.9163C19.8838 21.4486 19.4319 21.8814 18.8764 21.8814Z" />
                        <path
                            d="M19.438 7.2262H10.3122C9.96051 7.2262 9.67542 7.49932 9.67542 7.83626C9.67542 8.1732 9.96056 8.44632 10.3122 8.44632H19.438C19.7897 8.44632 20.0748 8.1732 20.0748 7.83626C20.0748 7.49927 19.7897 7.2262 19.438 7.2262Z" />
                        <path
                            d="M18.9414 10.3942H10.8089C10.4572 10.3942 10.1721 10.6673 10.1721 11.0042C10.1721 11.3412 10.4572 11.6143 10.8089 11.6143H18.9413C19.293 11.6143 19.5781 11.3412 19.5781 11.0042C19.5781 10.6673 19.293 10.3942 18.9414 10.3942Z" />
                        <path
                            d="M25.6499 4.508C25.407 4.22245 25.0472 4.05871 24.6626 4.05871H4.82655L4.42595 2.19571C4.34232 1.80709 4.06563 1.48078 3.68565 1.32272L0.890528 0.160438C0.567841 0.0261566 0.192825 0.168008 0.0528584 0.477043C-0.0872597 0.786176 0.0608116 1.14549 0.383347 1.27957L3.17852 2.4419L6.2598 16.7708C6.38117 17.3351 6.90578 17.7446 7.50723 17.7446H22.7635C23.1152 17.7446 23.4003 17.4715 23.4003 17.1346C23.4003 16.7976 23.1152 16.5245 22.7635 16.5245H7.50728L7.13247 14.7815H22.8814C23.4828 14.7815 24.0075 14.3719 24.1288 13.8076L25.9101 5.52488C25.9876 5.16421 25.8928 4.79349 25.6499 4.508ZM22.8814 13.5615H6.87012L5.08895 5.27879L24.6626 5.27884L22.8814 13.5615Z" />
                    </svg>
                    Add to Cart</a>
                <hr class="my-8" />

                <h6 class="mb-4 text-xl font-semibold">About the product</h6>
                <p class="mb-6 text-xl leading-7">
                    Tailored to a level of perfection synonymous with that of a Savile
                    Row suit and with understated quality in the detail, Jetty has been
                    influenced by timeless 1950s style.
                </p>
                <p class="text-xl leading-7">
                    Providing a subtle nod to the past, Jetty also provides a perfect
                    solution for the way we work today. A comprehensive product family,
                    Jetty features a variety of elegant chairs and sofas.
                </p>
            </div>
        </div>
    </section>
    <!-- END: DETAILS -->

    <!-- START: COMPLETE YOUR ROOM -->
    <section class="px-4 py-16 bg-gray-100">
        <div class="container mx-auto">
            <div class="flex mb-4 flex-start">
                <h3 class="text-2xl font-semibold capitalize">
                    Complete your room <br class="" />with what we designed
                </h3>
            </div>
            <div class="flex mb-4 -mx-3 overflow-x-auto">
                <div class="flex-none px-3" style="width: 320px">
                    <div class="relative p-4 pb-8 bg-white rounded-xl">
                        <div class="w-full overflow-hidden rounded-xl card-shadow h-36">
                            <img src="/frontend/images/content/chair-1.png" alt=""
                                class="object-cover object-center w-full h-full" />
                        </div>
                        <h5 class="mt-4 text-lg font-semibold">Cangkir Mauttie</h5>
                        <span class="">IDR 89.300.000</span>
                        <a href="details.html" class="stretched-link">
                            <!-- fake children -->
                        </a>
                    </div>
                </div>
                <div class="flex-none px-3" style="width: 320px">
                    <div class="relative p-4 pb-8 bg-white rounded-xl">
                        <div class="w-full overflow-hidden rounded-xl card-shadow h-36">
                            <img src="/frontend/images/content/chair-2.png" alt=""
                                class="object-cover object-center w-full h-full" />
                        </div>
                        <h5 class="mt-4 text-lg font-semibold">Saman Kakka</h5>
                        <span class="">IDR 14.500.399</span>
                        <a href="details.html" class="stretched-link">
                            <!-- fake children -->
                        </a>
                    </div>
                </div>
                <div class="flex-none px-3" style="width: 320px">
                    <div class="relative p-4 pb-8 bg-white rounded-xl">
                        <div class="w-full overflow-hidden rounded-xl card-shadow h-36">
                            <img src="/frontend/images/content/chair-3.png" alt=""
                                class="object-cover object-center w-full h-full" />
                        </div>
                        <h5 class="mt-4 text-lg font-semibold">Lino Dino</h5>
                        <span class="">IDR 22.000.000</span>
                        <a href="details.html" class="stretched-link">
                            <!-- fake children -->
                        </a>
                    </div>
                </div>
                <div class="flex-none px-3" style="width: 320px">
                    <div class="relative p-4 pb-8 bg-white rounded-xl">
                        <div class="w-full overflow-hidden rounded-xl card-shadow h-36">
                            <img src="/frontend/images/content/chair-1.png" alt=""
                                class="object-cover object-center w-full h-full" />
                        </div>
                        <h5 class="mt-4 text-lg font-semibold">Syail Ammeno</h5>
                        <span class="">IDR 6.399.999</span>
                        <a href="details.html" class="stretched-link">
                            <!-- fake children -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: COMPLETE YOUR ROOM -->

    <!-- START: ASIDE MENU -->
    <section class="">
        <div class="px-4 py-12 mt-16 border-b border-gray-200">
            <div class="flex justify-center mb-8">
                <img src="/frontend/images/content/logo.png"
                    alt="Luxspace | Fulfill your house with beautiful furniture" />
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
@endsection
