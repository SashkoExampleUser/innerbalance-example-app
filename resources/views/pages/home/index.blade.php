@extends('layouts::base')

@push('styles')
@include('pages::home.parts.styles')
@endpush

@section('main')
    <main role="main">
        <div class="pt-8 pb-[190px] lg:pt-[128px] lg:pb-[160px]">

            <div class="px-4 sm:px-20 lg:flex lg:gap-10 max-w-[1280px] mx-auto box-content">
                <div class="w-full">
                    <h1 class="header-text-style">The <span class="text-986120">only solution</span> you’ll ever need.</h1>
                    <p class="small-text-style my-6 max-w-[369px]">Women tell us our hormone therapy <span
                            class="font-bold">changed their life</span>.
                    </p>
                    <a
                        href="https://innerbalance.com/pre-questionaire"
                        id=""
                        class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-505a42   "
                    >
                        <span class="btn-text  text-ffffff ">START FREE CONSULTATION</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="9"
                            viewBox="0 0 17 9"
                            fill="none"
                        >
                            <path
                                d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                stroke=" #FFFFFF "
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                        </svg>
                    </a>
                </div>
                <div class="hidden lg:block w-full">
                    <div class="bg-f3f0e6 rounded-[24px] pt-6 px-5 pb-[212px] xl:pb-10 relative overflow-hidden">
                        <h3 class="smaller-header-text-style xl:max-w-[50%]">
                            It feels like self-care, but it's the smart thing to do. It's <span class="text-986120">smart
                                self-care.</span>
                        </h3>
                        <img
                            src="https://innerbalance.com/assets/images/finger_cream.webp"
                            alt=""
                            class="h-[285px] w-auto absolute bottom-0 right-0 -scale-x-100"
                        >
                    </div>
                </div>
            </div>

            <div class="mt-[60px] lg:mt-[128px]">
                <link
                    rel="modulepreload"
                    href="https://innerbalance.com/build/assets/text-slider-efeac01a.js"
                />
                <script
                    type="module"
                    src="https://innerbalance.com/build/assets/text-slider-efeac01a.js"
                ></script>
                <div>
                    <div class="px-4 sm:px-20 max-w-[1280px] mx-auto box-content">
                        <p class="label-text-style mb-3">Our unique method treats</p>
                    </div>
                    <div class="text-slider owl-carousel owl-theme bg-505a42">
                        <div class="item">
                            <span class="slider-text-style">Hair changes</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Brain fog</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Sleep disruptions</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Anxiety</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Weight gain</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Low energy</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Vaginal dryness</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Hot flashes</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Mood Changes</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Excessive sweating</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Low sex drive</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Acne</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Depression</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Joint & Muscle Aches</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Insomnia</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                        <div class="item">
                            <span class="slider-text-style">Fatigue</span>
                        </div>
                        <div class="item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="35"
                                height="13"
                                viewBox="0 0 35 13"
                                fill="none"
                            >
                                <path
                                    d="M26.5535 12.3334C27.0592 11.2698 27.5482 10.3391 28.0202 9.54139C28.526 8.74367 29.0149 8.0789 29.487 7.54709H0V5.45307H29.487C29.0149 4.88802 28.526 4.20663 28.0202 3.40891C27.5482 2.61119 27.0592 1.69714 26.5535 0.666748H28.3237C30.448 3.09315 32.6734 4.88802 35 6.05136V6.9488C32.6734 8.0789 30.448 9.87378 28.3237 12.3334H26.5535Z"
                                    fill="#FDF9F0"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 sm:px-20 mt-[60px] lg:mt-[128px] max-w-[1280px] mx-auto box-content">
                <div class="w-full rounded-[24px] overflow-hidden">
                    <div class="hidden sm:block">
                        <iframe
                            src="https://player.cloudinary.com/embed/?public_id=Change-Your-Life-Banner-Video_FINAL_horizontal_yisyve&cloud_name=dirscuuhp"
                            width="1920"
                            height="1080"
                            style="height: auto; width: 100%; aspect-ratio: 16 / 9;"
                            allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                            allowfullscreen
                            frameborder="0"
                        ></iframe>
                    </div>
                    <div class="block sm:hidden">
                        <iframe
                            src="https://player.cloudinary.com/embed/?public_id=Change-Your-Life-Banner-Video_FINAL_tbo64p&cloud_name=dirscuuhp"
                            width="1080"
                            height="1920"
                            style="height: auto; width: 100%; aspect-ratio: 9 / 16;"
                            allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                            allowfullscreen
                            frameborder="0"
                        ></iframe>
                    </div>
                </div>
            </div>

            <div class="px-4 sm:px-20 mt-[64px] lg:hidden">
                <div class="bg-f3f0e6 rounded-[24px] pt-6 px-5 pb-[212px] relative overflow-hidden">
                    <h3 class="smaller-header-text-style">
                        It feels like self-care, but it's the smart thing to do. It's <span class="text-986120">smart
                            self-care.</span>
                    </h3>
                    <img
                        src="https://innerbalance.com/assets/images/finger_cream.webp"
                        alt=""
                        class="h-[285px] w-auto absolute bottom-0 right-0 -scale-x-100"
                    >
                </div>
            </div>

            <div class="mt-[96px] lg:mt-[128px]">
                <div class="px-4 sm:px-20 max-w-[1280px] mx-auto box-content">
                    <p class="label-text-style mb-3">TRUSTED TREATMENT</p>
                </div>
                <div class="lg:hidden">
                    <div class="simple-carousel-1 owl-carousel owl-theme select-none">
                        <div
                            class="max-lg:ml-4 rounded-[12px] lg:rounded-[24px] w-[225px] h-[300px] lg:h-[618px] lg:w-full treatment-card"
                            style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.20) 100%), url(https://innerbalance.com/assets/images/sex_drive.webp), lightgray 50%;background-size:cover; background-repeat: no-repeat;"
                        >
                            <div class="w-full h-full flex flex-col justify-between items-start">
                                <div class="py-5 px-6 lg:p-8">
                                    <h4 class="treatment-card-text-style">Low libido?</h4>
                                </div>
                                <div class="py-5 px-4 lg:p-8">
                                    <a
                                        href="https://innerbalance.com/sexual-wellness"
                                        id=""
                                        class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-ffffff   "
                                    >
                                        <span class="btn-text  text-212529 ">Sex drive</span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="9"
                                            viewBox="0 0 17 9"
                                            fill="none"
                                        >
                                            <path
                                                d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                                stroke=" #212529 "
                                                stroke-width="2"
                                                stroke-miterlimit="10"
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="max-lg:ml-4 rounded-[12px] lg:rounded-[24px] w-[225px] h-[300px] lg:h-[618px] lg:w-full treatment-card"
                            style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.20) 100%), url(https://innerbalance.com/assets/images/weight_loss.webp), lightgray 50%;background-size:cover; background-repeat: no-repeat;"
                        >
                            <div class="w-full h-full flex flex-col justify-between items-start">
                                <div class="py-5 px-6 lg:p-8">
                                    <h4 class="treatment-card-text-style">Feel better</h4>
                                </div>
                                <div class="py-5 px-4 lg:p-8">
                                    <a
                                        href="https://innerbalance.com/weight-loss"
                                        id=""
                                        class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-ffffff   "
                                    >
                                        <span class="btn-text  text-212529 ">Weight loss</span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="9"
                                            viewBox="0 0 17 9"
                                            fill="none"
                                        >
                                            <path
                                                d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                                stroke=" #212529 "
                                                stroke-width="2"
                                                stroke-miterlimit="10"
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="max-lg:ml-4 rounded-[12px] lg:rounded-[24px] w-[225px] h-[300px] lg:h-[618px] lg:w-full treatment-card"
                            style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.20) 100%), url(https://innerbalance.com/assets/images/anti_aging.webp), lightgray 50%;background-size:cover; background-repeat: no-repeat;"
                        >
                            <div class="w-full h-full flex flex-col justify-between items-start">
                                <div class="py-5 px-6 lg:p-8">
                                    <h4 class="treatment-card-text-style">Youthful skin</h4>
                                </div>
                                <div class="py-5 px-4 lg:p-8">
                                    <a
                                        href="https://innerbalance.com/anti-aging"
                                        id=""
                                        class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-ffffff   "
                                    >
                                        <span class="btn-text  text-212529 ">anti aging</span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="9"
                                            viewBox="0 0 17 9"
                                            fill="none"
                                        >
                                            <path
                                                d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                                stroke=" #212529 "
                                                stroke-width="2"
                                                stroke-miterlimit="10"
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- spacer for the end if carousel -->
                        <div class="w-[100px] h-[0.1px]"></div>
                        <div class="w-[100px] h-[0.1px]"></div>
                    </div>
                </div>
                <div class="hidden lg:flex gap-[22px] px-20 max-w-[1280px] mx-auto box-content">
                    <div
                        class="max-lg:ml-4 rounded-[12px] lg:rounded-[24px] w-[225px] h-[300px] lg:h-[618px] lg:w-full treatment-card"
                        style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.20) 100%), url(https://innerbalance.com/assets/images/sex_drive.webp), lightgray 50%;background-size:cover; background-repeat: no-repeat;"
                    >
                        <div class="w-full h-full flex flex-col justify-between items-start">
                            <div class="py-5 px-6 lg:p-8">
                                <h4 class="treatment-card-text-style">Low libido?</h4>
                            </div>
                            <div class="py-5 px-4 lg:p-8">
                                <a
                                    href="https://innerbalance.com/sexual-wellness"
                                    id=""
                                    class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-ffffff   "
                                >
                                    <span class="btn-text  text-212529 ">Sex drive</span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="9"
                                        viewBox="0 0 17 9"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                            stroke=" #212529 "
                                            stroke-width="2"
                                            stroke-miterlimit="10"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="max-lg:ml-4 rounded-[12px] lg:rounded-[24px] w-[225px] h-[300px] lg:h-[618px] lg:w-full treatment-card"
                        style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.20) 100%), url(https://innerbalance.com/assets/images/weight_loss.webp), lightgray 50%;background-size:cover; background-repeat: no-repeat;"
                    >
                        <div class="w-full h-full flex flex-col justify-between items-start">
                            <div class="py-5 px-6 lg:p-8">
                                <h4 class="treatment-card-text-style">Feel better</h4>
                            </div>
                            <div class="py-5 px-4 lg:p-8">
                                <a
                                    href="https://innerbalance.com/weight-loss"
                                    id=""
                                    class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-ffffff   "
                                >
                                    <span class="btn-text  text-212529 ">Weight loss</span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="9"
                                        viewBox="0 0 17 9"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                            stroke=" #212529 "
                                            stroke-width="2"
                                            stroke-miterlimit="10"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="max-lg:ml-4 rounded-[12px] lg:rounded-[24px] w-[225px] h-[300px] lg:h-[618px] lg:w-full treatment-card"
                        style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.20) 100%), url(https://innerbalance.com/assets/images/anti_aging.webp), lightgray 50%;background-size:cover; background-repeat: no-repeat;"
                    >
                        <div class="w-full h-full flex flex-col justify-between items-start">
                            <div class="py-5 px-6 lg:p-8">
                                <h4 class="treatment-card-text-style">Youthful skin</h4>
                            </div>
                            <div class="py-5 px-4 lg:p-8">
                                <a
                                    href="https://innerbalance.com/anti-aging"
                                    id=""
                                    class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-ffffff   "
                                >
                                    <span class="btn-text  text-212529 ">anti aging</span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="9"
                                        viewBox="0 0 17 9"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                            stroke=" #212529 "
                                            stroke-width="2"
                                            stroke-miterlimit="10"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-[96px] px-4 sm:px-20 max-w-[1280px] mx-auto box-content">
                <h2 class="header-text-style"><span class="text-986120">Feel better</span> in just a few steps.</h2>
                <div class="lg:flex gap-10 xl:gap-[148px] lg:mt-[96px]">
                    <div class="max-lg:mt-[96px] w-full">
                        <div class="relative">
                            <h2 class="numbered-text-block-number">1</h2>
                            <h3 class="numbered-text-block-title">Online consultation</h3>
                            <div class="w-[60px] h-[4px] rounded-[4px] bg-97a390 my-[34px]"></div>
                            <p class="numbered-text-block-text">
                                Treatment for menopause should be easy. Now it is. To start, we’ll gather <b>some basic
                                    medical information</b> and you’ll tell us what symptoms you’re experiencing and any
                                goals you have with hormone therapy. All on our confidential, secure platform.
                            </p>
                        </div>
                    </div>
                    <div class="max-lg:mt-[148px] w-full">
                        <div class="relative">
                            <h2 class="numbered-text-block-number">2</h2>
                            <h3 class="numbered-text-block-title">Ongoing care</h3>
                            <div class="w-[60px] h-[4px] rounded-[4px] bg-97a390 my-[34px]"></div>
                            <p class="numbered-text-block-text">
                                We will connect you with an <b>experienced physician</b> who specializes in bio-identical
                                hormone replacement therapy. You’ll be able to message them at anytime. You will have
                                frequent followup and unlimited access. They will make sure you’re supported every step of
                                the way and make recommendations as needed.
                            </p>
                        </div>
                    </div>
                    <div class="max-lg:mt-[148px] w-full">
                        <div class="relative">
                            <h2 class="numbered-text-block-number">3</h2>
                            <h3 class="numbered-text-block-title">Delivered to your door</h3>
                            <div class="w-[60px] h-[4px] rounded-[4px] bg-97a390 my-[34px]"></div>
                            <p class="numbered-text-block-text">
                                No in-person visits. No wait rooms, or pharmacy lines. <b>Shipped right to your door</b>
                                with on-time refills.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-[34px] lg:mt-[96px] lg:flex lg:justify-center lg:w-full">
                    <a
                        href="https://innerbalance.com/pre-questionaire"
                        id=""
                        class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-505a42   "
                    >
                        <span class="btn-text  text-ffffff ">START FREE CONSULTATION</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="9"
                            viewBox="0 0 17 9"
                            fill="none"
                        >
                            <path
                                d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                stroke=" #FFFFFF "
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="mt-[96px] lg:mt-[128px] px-4 sm:px-20 max-w-[1280px] mx-auto box-content">
                <div
                    class="min-h-[515px] lg:min-h-[600px] w-full rounded-[24px] px-5 py-6 lg:p-8 flex flex-col justify-end items-start gap-5"
                    style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 27.02%, rgba(0, 0, 0, 0.40) 66.93%), url(https://innerbalance.com/assets/images/changing_treatment_bg.webp), lightgray 50%; background-size:cover; background-repeat: no-repeat; background-position: 0 34%;"
                >
                    <h3 class="header-text-style !text-ffffff max-lg:max-w-[277px]">Our Unique Method Treats
                        <br />
                        <span
                            id="treatment-text-container"
                            class="relative w-full block max-lg:min-h-[46px]"
                        >
                            <span class="!text-d3b69c !font-bold w-full block  active  lg:ml-3">Hair changes</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Brain fog</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Sleep disruptions</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Anxiety</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Weight gain</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Low energy</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Vaginal dryness</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Hot flashes</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Mood Changes</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Excessive sweating</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Low sex drive</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Acne</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Depression</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Joint &amp; Muscle Aches</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Insomnia</span>
                            <span class="!text-d3b69c !font-bold w-full block  lg:ml-3">Fatigue</span>
                        </span>
                        <br />
                    </h3>
                    <a
                        href="https://innerbalance.com/treatments"
                        id=""
                        class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-ffffff   "
                    >
                        <span class="btn-text  text-212529 ">Explore Treatments</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="9"
                            viewBox="0 0 17 9"
                            fill="none"
                        >
                            <path
                                d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                stroke=" #212529 "
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                        </svg>
                    </a>
                </div>

            </div>

            <div class="mt-[96px] lg:mt-[128px]">
                <div class="px-4 sm:px-20 max-w-[1280px] mx-auto box-content">
                    <h2 class="header-text-style">Have Questions?<br /><span class="text-986120">We Have Answers.</span>
                    </h2>
                    <div class="py-8 hidden lg:block">
                        <a
                            href="https://innerbalance.com/faq"
                            id=""
                            class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-505a42   "
                        >
                            <span class="btn-text  text-ffffff ">learn more</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="17"
                                height="9"
                                viewBox="0 0 17 9"
                                fill="none"
                            >
                                <path
                                    d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                    stroke=" #FFFFFF "
                                    stroke-width="2"
                                    stroke-miterlimit="10"
                                />
                            </svg>
                        </a>
                    </div>
                    <p class="label-text-style mb-3 mt-8 lg:mt-6">Frequently asked questions</p>
                </div>
                <div class="simple-carousel-2 owl-carousel owl-theme select-none">
                    <div
                        class="small-video-card w-[227px] h-[302px] lg:h-[400px] lg:w-[300px] relative rounded-[16px] overflow-hidden ml-4 ">
                        <span class="small-video-card-tag z-20">1 MIN</span>
                        <div class="flex items-center justify-center relative">
                            <iframe
                                src="https://player.cloudinary.com/embed/?public_id=faq_what_is_a_bio_identical_hormone_and_why_does_it_matter_Original_z3okft&cloud_name=dirscuuhp&amp;player[posterOptions][transformation][startOffset]=4"
                                width="100%"
                                height="100%"
                                style="height: auto; width: 100%; aspect-ratio: 4 / 5; border-radius: 16px;"
                                allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                                allowfullscreen
                                frameborder="0"
                            ></iframe>
                        </div>
                    </div>
                    <div
                        class="small-video-card w-[227px] h-[302px] lg:h-[400px] lg:w-[300px] relative rounded-[16px] overflow-hidden ml-4 ">
                        <span class="small-video-card-tag z-20">1 MIN</span>
                        <div class="flex items-center justify-center relative">
                            <iframe
                                src="https://player.cloudinary.com/embed/?public_id=faq_how_long_till_i_notice_a_difference_Original_rjuz1y&cloud_name=dirscuuhp&amp;player[posterOptions][transformation][startOffset]=4"
                                width="100%"
                                height="100%"
                                style="height: auto; width: 100%; aspect-ratio: 4 / 5; border-radius: 16px;"
                                allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                                allowfullscreen
                                frameborder="0"
                            ></iframe>
                        </div>
                    </div>
                    <div
                        class="small-video-card w-[227px] h-[302px] lg:h-[400px] lg:w-[300px] relative rounded-[16px] overflow-hidden ml-4 ">
                        <span class="small-video-card-tag z-20">1 MIN</span>
                        <div class="flex items-center justify-center relative">
                            <iframe
                                src="https://player.cloudinary.com/embed/?public_id=faq_what_are_considered_normal_blood_levels_for_hormones_Original_kkhwwy&cloud_name=dirscuuhp&amp;player[posterOptions][transformation][startOffset]=4"
                                width="100%"
                                height="100%"
                                style="height: auto; width: 100%; aspect-ratio: 4 / 5; border-radius: 16px;"
                                allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                                allowfullscreen
                                frameborder="0"
                            ></iframe>
                        </div>
                    </div>
                    <div
                        class="small-video-card w-[227px] h-[302px] lg:h-[400px] lg:w-[300px] relative rounded-[16px] overflow-hidden ml-4 ">
                        <span class="small-video-card-tag z-20">1 MIN</span>
                        <div class="flex items-center justify-center relative">
                            <iframe
                                src="https://player.cloudinary.com/embed/?public_id=faq_do_i_need_to_take_both_estrogen__progesterone_Original_nqyz2z&cloud_name=dirscuuhp&amp;player[posterOptions][transformation][startOffset]=4"
                                width="100%"
                                height="100%"
                                style="height: auto; width: 100%; aspect-ratio: 4 / 5; border-radius: 16px;"
                                allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                                allowfullscreen
                                frameborder="0"
                            ></iframe>
                        </div>
                    </div>
                    <!-- spacer for the end if carousel -->
                    <div class="w-[100px] h-[0.1px]"></div>
                    <div class="w-[100px] h-[0.1px]"></div>
                </div>
                <div class="px-4 sm:px-20 mt-8 lg:hidden">
                    <a
                        href="https://innerbalance.com/faq"
                        id=""
                        class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-505a42   "
                    >
                        <span class="btn-text  text-ffffff ">learn more</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="9"
                            viewBox="0 0 17 9"
                            fill="none"
                        >
                            <path
                                d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                stroke=" #FFFFFF "
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="px-4 sm:px-20 mt-[96px] lg:mt-[192px] max-w-[1280px] mx-auto box-content">
                <h2 class="header-text-style">A Habit That <span class="text-986120">Delivers Results.</span></h2>
                <div class="relative w-full lg:hidden">
                    <div
                        class="absolute left-[calc(50%-1px)] h-full w-[2px] z-10"
                        style="background: linear-gradient(0deg, rgba(211, 182, 156, 0.00) 3.4%, #D3B69C 11.16%, #D3B69C 90.97%, rgba(211, 182, 156, 0.00) 98.81%);"
                    ></div>
                    <div class="pt-[50px]">
                        <div class="flex justify-center items-center gap-5">
                            <div class="timeline-text-style grow w-full max-w-[150px] text-right">Hot Flashes Stop</div>
                            <div class="flex flex-col items-center bg-ffffff relative z-20 shrink-0">
                                <div class="">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 22 22"
                                        fill="none"
                                    >
                                        <rect
                                            opacity="0.3"
                                            x="1.22168"
                                            y="1.4375"
                                            width="20"
                                            height="20"
                                            rx="10"
                                            fill="#97A390"
                                            stroke="#97A390"
                                        />
                                        <rect
                                            x="5.72168"
                                            y="5.9375"
                                            width="11"
                                            height="11"
                                            rx="5.5"
                                            fill="#59674E"
                                        />
                                    </svg>
                                </div>
                                <div class="pt-1">
                                    <span class="timeline-time-style">0 months</span>
                                </div>
                            </div>
                            <div class="timeline-text-style grow w-full max-w-[150px]">Sleep + Mood Improve</div>
                        </div>
                    </div>
                    <div class="pt-[128px]">
                        <div class="flex justify-center items-center gap-5">
                            <div class="timeline-text-style grow w-full max-w-[150px] text-right">Vaginal Dryness Improves
                            </div>
                            <div class="flex flex-col items-center bg-ffffff relative z-20 shrink-0">
                                <div class="">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 22 22"
                                        fill="none"
                                    >
                                        <rect
                                            opacity="0.3"
                                            x="1.22168"
                                            y="1.4375"
                                            width="20"
                                            height="20"
                                            rx="10"
                                            fill="#97A390"
                                            stroke="#97A390"
                                        />
                                        <rect
                                            x="5.72168"
                                            y="5.9375"
                                            width="11"
                                            height="11"
                                            rx="5.5"
                                            fill="#59674E"
                                        />
                                    </svg>
                                </div>
                                <div class="pt-1">
                                    <span class="timeline-time-style">3 months</span>
                                </div>
                            </div>
                            <div class="timeline-text-style grow w-full max-w-[150px]">Skin looks more hydrated + Glowing
                                with less acne
                            </div>
                        </div>
                    </div>
                    <div class="pt-[128px] pb-[50px]">
                        <div class="flex justify-center items-center gap-5">
                            <div class="timeline-text-style grow w-full max-w-[150px] text-right">Energy Improves + Weight
                                Loss
                            </div>
                            <div class="flex flex-col items-center bg-ffffff relative z-20 shrink-0">
                                <div class="">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 22 22"
                                        fill="none"
                                    >
                                        <rect
                                            opacity="0.3"
                                            x="1.22168"
                                            y="1.4375"
                                            width="20"
                                            height="20"
                                            rx="10"
                                            fill="#97A390"
                                            stroke="#97A390"
                                        />
                                        <rect
                                            x="5.72168"
                                            y="5.9375"
                                            width="11"
                                            height="11"
                                            rx="5.5"
                                            fill="#59674E"
                                        />
                                    </svg>
                                </div>
                                <div class="pt-1">
                                    <span class="timeline-time-style">6 months</span>
                                </div>
                            </div>
                            <div class="timeline-text-style grow w-full max-w-[150px]">Sex drive is back in
                                full-swing<br /><br />Skin + Hair looks
                                youthful and radiant
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block relative h-[250px] my-[128px]">
                    <div
                        class="absolute left-0 top-[calc(50%-1px)] h-[2px] w-full z-10"
                        style="background: linear-gradient(90deg, rgba(211, 182, 156, 0.00) 3.4%, #D3B69C 11.16%, #D3B69C 90.97%, rgba(211, 182, 156, 0.00) 98.81%);"
                    ></div>
                    <div class="w-full h-full flex items-center justify-evenly">
                        <div class="w-[310px]">
                            <div class="flex justify-center items-center gap-5 flex-col relative top-[26px]">
                                <div class="timeline-text-style grow w-full text-center">Hot Flashes Stop</div>
                                <div class="w-[1px] h-[40px] border border-dashed border-d3b69c opacity-[0.6]"></div>
                                <div class="flex flex-col items-center relative z-20 shrink-0">
                                    <div class="bg-ffffff">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            height="22"
                                            viewBox="0 0 22 22"
                                            fill="none"
                                        >
                                            <rect
                                                opacity="0.3"
                                                x="1.22168"
                                                y="1.4375"
                                                width="20"
                                                height="20"
                                                rx="10"
                                                fill="#97A390"
                                                stroke="#97A390"
                                            />
                                            <rect
                                                x="5.72168"
                                                y="5.9375"
                                                width="11"
                                                height="11"
                                                rx="5.5"
                                                fill="#59674E"
                                            />
                                        </svg>
                                    </div>
                                    <div class="pt-3">
                                        <span class="timeline-time-style">0 months</span>
                                    </div>
                                </div>
                                <div class="w-[1px] h-[40px] border border-dashed border-d3b69c opacity-[0.6]"></div>
                                <div class="timeline-text-style grow w-full text-center">Sleep +<br /> Mood Improve</div>
                            </div>
                        </div>
                        <div class="w-[310px]">
                            <div class="flex justify-center items-center gap-5 flex-col relative top-[26px]">
                                <div class="timeline-text-style grow w-full text-center">Vaginal Dryness Improve</div>
                                <div class="w-[1px] h-[40px] border border-dashed border-d3b69c opacity-[0.6]"></div>
                                <div class="flex flex-col items-center relative z-20 shrink-0">
                                    <div class="bg-ffffff">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            height="22"
                                            viewBox="0 0 22 22"
                                            fill="none"
                                        >
                                            <rect
                                                opacity="0.3"
                                                x="1.22168"
                                                y="1.4375"
                                                width="20"
                                                height="20"
                                                rx="10"
                                                fill="#97A390"
                                                stroke="#97A390"
                                            />
                                            <rect
                                                x="5.72168"
                                                y="5.9375"
                                                width="11"
                                                height="11"
                                                rx="5.5"
                                                fill="#59674E"
                                            />
                                        </svg>
                                    </div>
                                    <div class="pt-3">
                                        <span class="timeline-time-style">3 months</span>
                                    </div>
                                </div>
                                <div class="w-[1px] h-[40px] border border-dashed border-d3b69c opacity-[0.6]"></div>
                                <div class="timeline-text-style grow w-full text-center"> Skin looks more hydrated +
                                    <br />Glowing with less acne</div>
                            </div>
                        </div>
                        <div class="w-[310px] shrink-0">
                            <div class="w-full flex justify-center items-center gap-5 flex-col relative top-[26px]">
                                <div class="">
                                    <div class="flex gap-8 justify-center items-center">
                                        <div class="timeline-text-style grow text-center">Energy Improves</div>
                                        <div class="timeline-text-style grow text-center">Weight Loss</div>
                                    </div>
                                    <div class="flex gap-14 justify-center mt-5">
                                        <div
                                            class="w-[1px] h-[40px] border border-dashed border-d3b69c opacity-[0.6] -rotate-[30deg]">
                                        </div>
                                        <div
                                            class="w-[1px] h-[40px] border border-dashed border-d3b69c opacity-[0.6] rotate-[30deg]">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center relative z-20 shrink-0">
                                    <div class="bg-ffffff">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            height="22"
                                            viewBox="0 0 22 22"
                                            fill="none"
                                        >
                                            <rect
                                                opacity="0.3"
                                                x="1.22168"
                                                y="1.4375"
                                                width="20"
                                                height="20"
                                                rx="10"
                                                fill="#97A390"
                                                stroke="#97A390"
                                            />
                                            <rect
                                                x="5.72168"
                                                y="5.9375"
                                                width="11"
                                                height="11"
                                                rx="5.5"
                                                fill="#59674E"
                                            />
                                        </svg>
                                    </div>
                                    <div class="pt-3">
                                        <span class="timeline-time-style">6 months</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex gap-14 justify-center mb-5">
                                        <div
                                            class="w-[1px] h-[40px] border border-dashed border-d3b69c opacity-[0.6] rotate-[30deg]">
                                        </div>
                                        <div
                                            class="w-[1px] h-[40px] border border-dashed border-d3b69c opacity-[0.6] -rotate-[30deg]">
                                        </div>
                                    </div>
                                    <div class="flex gap-8 justify-center items-center">
                                        <div class="timeline-text-style grow text-center">Sex is back in full-<br />swing
                                        </div>
                                        <div class="timeline-text-style grow text-center">Skin + Hair looks <br />youthful
                                            and radiant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-[36px]">
                    <a
                        href="https://innerbalance.com/pre-questionaire"
                        id=""
                        class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-505a42   "
                    >
                        <span class="btn-text  text-ffffff ">START FREE CONSULTATION</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="9"
                            viewBox="0 0 17 9"
                            fill="none"
                        >
                            <path
                                d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                stroke=" #FFFFFF "
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                        </svg>
                    </a>
                </div>
            </div>

            <div
                class="mt-[96px] pb-[42px] lg:pb-[60px] relative lg:max-w-[960px] lg:mx-auto max-lg:overflow-hidden min-h-[232px] lg:mt-[232px]">
                <div class="px-4 sm:px-20">
                    <h2 class="header-text-style !text-[32px] lg:!text-[64px]">Life Changing Or <br /><span
                            class="text-986120"
                        >Your Money Back.</span></h2>
                    <p class="normal-text-style mt-6">From the onset of your first symptoms, we support you at every step.
                        We’re so confident in our regimen, <b>we guarantee it is life-changing</b> — or your money back (see
                        terms).</p>
                </div>
                <img
                    src="https://innerbalance.com/assets/images/guarantee_icon.webp"
                    alt=""
                    class="absolute -bottom-[20px] lg:-bottom-[50px] -right-[75px] lg:right-0 w-auto h-[232px] opacity-[0.1]"
                >
            </div>

            <div class="mt-[96px] lg:mt-[128px] px-4 sm:px-20 max-w-[1280px] mx-auto box-content">
                <div class="w-full bg-f3f0e6 rounded-[24px] px-4 py-6 lg:hidden">
                    <h2 class="header-text-style">Reviews from <span class="text-986120">Women.</span></h2>
                    <div class="my-8">
                        <div class="relative">
                            <div class="rounded-[14px] overflow-hidden w-full">
                                <iframe
                                    src="https://player.cloudinary.com/embed/?public_id=Branding-Video_Final_th9mom&cloud_name=dirscuuhp"
                                    width="1152"
                                    height="1440"
                                    style="height: auto; width: 100%; aspect-ratio: 4 / 5;"
                                    allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                                    allowfullscreen
                                    frameborder="0"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <a
                        href="https://innerbalance.com/reviews"
                        id=""
                        class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-505a42   "
                    >
                        <span class="btn-text  text-ffffff ">more reviews</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="9"
                            viewBox="0 0 17 9"
                            fill="none"
                        >
                            <path
                                d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                stroke=" #FFFFFF "
                                stroke-width="2"
                                stroke-miterlimit="10"
                            />
                        </svg>
                    </a>
                </div>
                <div class="w-full bg-f3f0e6 rounded-[24px] p-8 hidden lg:flex gap-6">
                    <div class="w-full">
                        <div class="relative">
                            <div class="rounded-[14px] overflow-hidden w-full">
                                <iframe
                                    src="https://player.cloudinary.com/embed/?public_id=Branding-Video_Final_th9mom&cloud_name=dirscuuhp"
                                    width="1152"
                                    height="1440"
                                    style="height: auto; width: 100%; aspect-ratio: 4 / 5;"
                                    allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                                    allowfullscreen
                                    frameborder="0"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="relative">
                            <div class="rounded-[14px] overflow-hidden w-full">
                                <iframe
                                    src="https://player.cloudinary.com/embed/?public_id=testimony_client_testimony_4-5_v.2_Original_lnyvrk&cloud_name=dirscuuhp&amp;source[poster]=https%3A%2F%2Fres.cloudinary.com%2Fdirscuuhp%2Fimage%2Fupload%2FTESTIMONY%20WEBP%2Fpfqqawrxffvdz3js0tsc.jpg"
                                    width="1152"
                                    height="1440"
                                    style="height: auto; width: 100%; aspect-ratio: 4 / 5;"
                                    allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                                    allowfullscreen
                                    frameborder="0"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-[440px] xl:shrink-0">
                        <h2 class="header-text-style mb-6">Reviews from <span class="text-986120">Women.</span></h2>
                        <a
                            href="https://innerbalance.com/reviews"
                            id=""
                            class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-505a42   "
                        >
                            <span class="btn-text  text-ffffff ">more reviews</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="17"
                                height="9"
                                viewBox="0 0 17 9"
                                fill="none"
                            >
                                <path
                                    d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                    stroke=" #FFFFFF "
                                    stroke-width="2"
                                    stroke-miterlimit="10"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:flex gap-8 lg:px-20 max-w-[1280px] mx-auto box-content lg:mt-[128px]">
                <div class="mt-[96px] px-4 sm:px-20 lg:px-0 lg:mt-0 w-full">
                    <div class="w-full bg-f3f0e6 rounded-[24px] px-4 py-6 lg:p-8">
                        <h2 class="header-text-style !text-[32px] lg:!text-[64px]">This is Healthcare That is <span
                                class="text-986120"
                            >Self-Care.</span>
                        </h2>
                        <p class="numbered-text-block-text my-8">
                            Looking and feeling your best has never been easier. By starting with us, you prioritize
                            yourself,
                            take control over your own health and <b>give yourself the fuel</b> you need to show up in life.
                            You are
                            worth it. By incorporating this simple therapy into your daily routine, you won’t just function
                            better, you will flourish. This is why we call it <b>“Smart Self-Care.”</b>
                        </p>
                        <a
                            href="https://innerbalance.com/pre-questionaire"
                            id=""
                            class="inline-flex items-center gap-3 px-6 py-3 rounded-[50px] cursor-pointer  bg-505a42   "
                        >
                            <span class="btn-text  text-ffffff ">START FREE CONSULTATION</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="17"
                                height="9"
                                viewBox="0 0 17 9"
                                fill="none"
                            >
                                <path
                                    d="M14.2045 4.51172H0M11.0973 8.19898L14.6484 4.49988L11.0973 0.800781"
                                    stroke=" #FFFFFF "
                                    stroke-width="2"
                                    stroke-miterlimit="10"
                                />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="mt-[96px] px-4 sm:px-20 lg:px-0 lg:mt-0 w-full">
                    <img
                        src="https://innerbalance.com/assets/images/woman.webp"
                        alt=""
                        class="h-[389px] lg:h-[547px] w-full object-cover object-center rounded-[24px]"
                    >
                    <div class="mt-4 lg:flex gap-6 justify-center items-center">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="260"
                            height="61"
                            viewBox="0 0 260 61"
                            fill="none"
                        >
                            <path
                                d="M23.0907 34.3556C20.6766 31.4185 18.7916 26.2682 14.0018 26.9751C12.5668 27.1868 11.1779 27.895 10.0609 28.8202C8.25572 30.3156 6.63547 32.0962 5.40831 34.0935C4.01221 36.3658 3.07333 38.9125 2.29319 41.4627C1.69892 43.4047 1.50429 45.4543 1.31368 47.4764C1.20612 48.6175 1.64953 50.9842 2.42986 51.8728C3.28072 52.8415 4.48 53.4369 5.50507 54.219C3.40937 56.5881 3.40937 56.5881 1.31368 58.9571C0.766973 58.6838 0.766973 58.6838 0.220269 58.4104C0.0486951 59.2279 -0.193421 60.2147 0.260143 60.9161C3.35525 60.0908 4.16 56.4665 7.11238 55.6878C10.9902 54.665 12.8936 55.4996 16.0747 53.4446C19.0271 51.5373 21.7544 49.3026 24.5941 47.2315C25.8434 49.9879 25.2141 53.253 25.6192 56.252C25.8359 57.8561 27.6504 57.3103 27.6921 55.9047C27.7946 52.4588 27.3845 49.0019 27.6238 45.5629C27.78 43.3196 30.3577 41.9777 31.9291 40.3693C31.9291 41.7967 31.7053 43.242 31.9291 44.6518C32.1569 46.0872 33.7921 46.931 35.0954 46.4741C37.307 45.6989 38.0986 42.8644 39.4007 40.916C39.5848 43.3918 38.7472 46.4466 40.403 48.2964C41.5821 49.6138 43.5121 49.7006 44.5944 48.0914C46.5735 45.1489 48.1784 41.9715 49.9703 38.9114C50.0919 40.3693 49.6171 42.0103 50.3348 43.285C50.8472 44.1953 52.1586 44.3717 53.1765 44.6062C54.4365 44.8963 54.8456 43.4386 55.2551 42.7383C58.5619 44.0351 59.7988 42.3174 62.3623 40.187C62.4104 42.5448 62.1884 45.1092 63.2734 47.203C66.4157 45.7705 67.7216 40.6969 68.9227 38.1825C69.2711 40.7503 69.8565 43.4069 71.2234 45.6085C71.6693 46.3267 73.0064 46.9395 73.5925 45.8591C74.939 43.3763 71.7411 43.3814 71.3829 41.2804C70.8974 38.4329 72.2492 35.9802 71.1323 33.4216C69.886 33.6709 69.9766 33.4397 69.1277 34.72C67.5421 37.1115 66.0753 39.5797 64.5491 42.0094C63.6508 34.6745 71.2577 30.7778 71.6562 23.6038C69.9802 26.8545 68.2701 30.178 65.8247 32.8977C66.8347 29.0403 67.5046 25.0777 68.8544 21.3258C69.5946 19.2684 70.7294 17.3402 72.0491 15.5968C72.4227 15.1035 73.3446 15.3225 73.7519 14.8565C74.0169 14.5535 73.8727 14.033 73.7519 13.6492C73.4915 12.8219 71.8191 13.5031 71.1893 14.0992C69.7282 15.4818 67.7314 18.6299 67.0776 20.7108C65.5208 25.6657 64.5208 30.7912 62.8251 35.7004C62.1119 37.7657 59.3756 40.4035 57.2597 40.7337C57.3319 36.1859 59.5788 34.6756 60.5 30.9558C60.6079 30.5203 60.0406 30.1851 59.811 29.7997C56.3647 30.5536 54.2182 35.877 52.7038 38.5469C52.8556 36.6335 53.2135 34.7253 53.1594 32.8066C53.1479 32.3987 51.9629 31.4524 51.5193 32.1688C49.3505 35.6722 47.7846 39.5197 45.7106 43.08C44.7857 44.6676 43.4244 46.0131 41.952 47.1119C41.5312 44.5648 41.33 41.8835 41.9064 39.367C42.465 36.9282 43.9128 34.7284 44.321 32.2599C44.4275 31.6159 43.5199 31.1852 43.3643 30.5514C43.086 29.4185 43.1516 28.2279 43.0454 27.0662C42.7114 27.0055 42.3298 26.7021 42.0431 26.884C40.2481 28.0231 38.4828 29.2849 37.0601 30.8647C34.603 33.5931 32.8036 36.8545 30.494 39.7087C29.5967 40.8176 28.3772 41.7891 27.0088 42.1916C27.449 38.5974 27.0815 34.808 28.3294 31.4088C29.5586 28.0616 32.4211 25.5597 34.2413 22.4932C37.2653 17.3983 38.8875 10.8671 38.9622 4.97601C38.9748 3.97525 38.9413 0.471641 36.9292 0.152549C34.0503 -0.304001 32.1603 4.03686 31.5759 5.95551C30.3347 10.0315 29.2395 14.1564 28.33 18.319C27.3967 22.59 26.9614 26.9587 26.052 31.2348C25.7537 32.6375 24.1626 33.4028 23.0907 34.3556ZM36.9405 2.19129C38.1034 2.77267 38.0203 5.22056 37.9827 5.90995C37.873 7.92455 37.3701 9.90106 36.9405 11.8725C35.8032 17.0931 32.8906 23.5398 29.0133 27.2484C29.1467 21.2438 31.1378 13.2514 33.0908 7.49885C33.7183 5.65082 34.5006 3.44577 36.9405 2.19129ZM159.676 26.5195C159.733 26.894 159.519 27.4533 159.847 27.6432C160.744 28.1627 161.838 28.2777 162.87 28.3703C167.368 28.7741 171.885 28.8762 176.394 29.1291C174.945 34.7244 171.417 38.1529 165.866 40.3408C163.166 37.1273 169.113 35.8036 166.037 32.2542C165.306 32.8406 164.302 33.1966 163.844 34.0139C163.086 35.3657 163.29 37.1193 162.546 38.4786C162.068 39.3513 161.057 39.7998 160.313 40.4604C159.949 40.0048 159.318 39.6688 159.22 39.0936C159.085 38.3009 159.716 37.5277 159.676 36.7246C159.652 36.2526 158.812 34.5741 157.859 35.1188C156.844 35.699 156.181 36.7474 155.342 37.5618C155.109 36.8667 155.05 34.9762 153.571 35.6312C152.013 36.3206 150.655 37.3928 149.197 38.2736C149.552 37.1917 151.14 35.2582 149.425 34.4467C149.01 34.2506 148.487 34.1239 148.058 34.2872C146.135 35.0196 144.216 35.8646 142.545 37.0663C140.097 38.8279 138.05 41.0906 135.803 43.1028C136.319 41.8878 136.632 40.5648 137.352 39.4581C138.624 37.5013 141.874 36.2215 138.912 34.6061C135.539 37.9742 132.353 41.6385 128.394 44.2929C127.326 39.6154 133.432 36.7386 135.757 34.0139C136.04 33.6828 135.666 33.1483 135.621 32.7155C134.922 32.685 134.098 32.224 133.525 32.6243C129.53 35.4149 126.053 38.881 122.317 42.0094C122.526 40.5705 123.106 39.1376 122.944 37.6926C122.821 36.5976 122.475 35.2275 121.497 34.72C119.677 33.7753 117.462 33.9153 115.415 33.7861C114.549 33.7314 113.699 34.0443 112.841 34.1733C113.98 27.7102 115.041 21.6109 112.636 15.2609C112.074 13.7763 110.305 12.4952 108.678 12.6014C106.218 12.7621 103.56 16.0618 102.539 17.6243C100.605 20.5863 99.0807 23.7975 97.3513 26.884C98.196 23.6455 99.3482 20.4721 99.8855 17.1687C99.9489 16.7789 99.3426 16.5954 99.0712 16.3088C98.0033 17.5937 97.2152 19.1596 96.8046 20.7791C95.2629 26.8594 94.0696 33.0285 92.3854 39.0709C91.5854 41.9409 90.1766 44.6164 89.3614 47.482C89.0498 48.5776 89.1653 49.8063 90.5403 49.7088C90.8053 49.69 91.0695 49.4533 91.1553 49.202C92.943 43.97 94.2344 38.573 96.1212 33.3761C97.3068 30.1106 98.7656 26.9417 100.358 23.8543C101.377 21.8793 102.536 19.9547 103.935 18.2279C104.987 16.9289 106.126 15.5498 107.648 14.8565C108.413 14.5077 109.536 14.798 110.108 15.4145C112.147 17.6143 112.214 22.485 112.135 24.9705C112.067 27.1169 111.791 29.2588 111.406 31.3715C111.196 32.5221 111.193 33.9009 110.358 34.72C108.833 36.2165 106.411 36.4979 104.777 37.8749C101.048 41.0175 97.6708 44.569 94.39 48.1769C93.1803 49.5072 92.059 50.9817 91.3547 52.6358C90.9744 53.5289 91.2864 54.5759 91.2521 55.5459C99.0982 55.2284 103.997 48.5749 108.331 42.7155C109.759 40.785 110.273 38.2308 111.879 36.4456C112.523 35.7296 113.705 35.7733 114.664 35.6768C115.635 35.5789 116.731 36.011 117.397 36.7246C116.273 38.5925 114.728 40.2645 114.026 42.3283C113.662 43.3969 113.936 44.6472 114.345 45.6996C114.59 46.3312 115.194 46.9286 115.859 47.0551C118.012 47.4636 118.787 45.0707 119.584 43.8317C122.352 46.639 123.315 44.2177 125.78 41.8271C126.014 48.1913 128.036 47.4128 132.34 43.8317C133.462 44.9905 133.462 44.9905 134.584 46.1495C137.058 44.6241 139.207 42.5993 141.27 40.5515C141.034 41.7284 140.583 42.8823 140.564 44.0823C140.554 44.7012 141.649 46.0366 142.441 45.7497C144.209 45.1092 145.825 44.0776 147.375 43.0117C149.053 41.857 150.514 40.4148 152.084 39.1164C154.067 41.3743 154.427 41.6666 156.76 39.8226C157.252 40.9404 157.695 43.2005 159.584 43.1028C160.813 43.0392 161.828 41.9946 163.047 41.8271C163.535 41.7601 163.9 42.397 164.391 42.4422C165.386 42.5337 166.482 42.663 167.38 42.2259C169.737 41.0789 171.719 39.2872 173.89 37.818C173.81 40.9388 173.514 44.0615 173.651 47.1803C173.713 48.6276 174.42 52.7637 177.01 51.5767C178.068 51.0914 179.113 50.4721 179.904 49.6176C182.654 46.647 185.006 43.3306 187.557 40.187C187.997 44.3737 186.929 50.5928 191.92 52.055C192.414 50.2356 190.315 48.6102 189.905 46.7702C189.352 44.3001 189.458 41.7136 189.562 39.1848C189.597 38.357 189.926 37.5483 190.313 36.8157C191.681 34.2264 192.07 30.312 194.805 29.2641C200.318 27.152 206.599 28.7223 212.489 28.3191C215.151 28.1368 214.971 24.8032 212.392 25.204C211.565 25.3326 210.911 26.0495 210.085 26.2006C204.533 27.2193 202.204 26.6968 196.487 26.3373C199.104 20.8912 202.061 15.5953 204.339 9.99891C204.739 9.01977 204.381 6.80053 202.774 6.92937C200.553 7.10741 199.168 9.75509 198.105 11.713C195.461 16.5796 194.723 22.7556 190.747 26.6106C188.76 28.5354 185.219 26.7929 182.455 26.884C185.356 20.9993 188.647 15.2917 191.157 9.23007C191.525 8.34223 191.7 5.72152 189.983 5.70494C189.509 5.70038 188.979 5.85875 188.651 6.20043C187 7.91689 185.358 9.69859 184.164 11.7586C181.54 16.2834 180.288 21.5863 177.258 25.8489C176.47 26.9554 174.701 26.9233 173.343 26.9751C168.787 27.1488 164.231 26.6713 159.676 26.5195ZM189.562 8.20501C190.358 9.79609 188.223 13.2937 187.579 14.5832C186.198 17.3606 182.577 25.9147 179.721 26.884C179.721 25.3262 180.957 23.8839 181.498 22.5787C183.011 18.9275 185.722 10.125 189.562 8.20501ZM202.865 9.29841C201.466 14.2506 199.275 18.7017 196.782 23.2393C196.126 24.4342 196.03 25.3607 194.916 26.2917C194.391 26.7298 193.006 26.8186 192.66 26.884C194.606 22.5705 196.726 18.428 199.06 14.401C200.062 12.6759 200.897 10.2245 202.865 9.29841ZM223.64 39.9137C223.268 35.2183 225.435 32.9527 226.395 28.2507C226.605 27.2333 224.793 26.4317 224.256 27.3111C222.882 29.5506 221.592 31.8455 220.108 34.0139C218 37.0976 215.889 40.1863 213.981 43.3989C212.915 45.1954 213.218 45.39 213.56 47.0664C214.043 47.0891 214.043 47.0891 214.528 47.1119C215.895 42.9769 218.692 39.4503 221.089 35.8134C222.29 37.4147 219.935 43.999 224.46 42.2999C225.112 42.0551 225.688 41.6225 226.213 41.1665C227.647 39.925 229.003 38.5949 230.313 37.2257C231.064 36.4429 231.696 35.5552 232.387 34.72C232.478 35.8666 232.473 37.0251 232.661 38.1597C233.411 42.6851 236.697 40.9121 238.782 38.2907C240.13 36.5959 241.255 34.7324 242.57 33.0116C242.773 32.7466 243.072 32.5711 243.321 32.351C243.409 34.3827 243.341 36.427 243.584 38.446C243.675 39.1966 245.04 39.0667 245.326 39.0936C244.498 40.2743 244.216 40.8768 245.577 42.0662C245.787 42.2507 246.135 42.3471 246.397 42.2485C252.546 39.9394 261.902 32.7681 259.66 24.9306C258.922 22.3536 256.415 21.696 254.301 23.0343C250.306 25.5624 247.801 29.4026 245.873 33.6266C245.145 30.9609 246.649 28.3007 246.784 25.6995C246.864 24.1459 245.368 24.0517 244.71 25.2211C243.478 27.4179 242.611 29.8198 241.242 31.9353C240.098 33.7064 238.623 35.2447 237.216 36.8157C236.628 37.473 235.875 38.1119 235.008 38.2736C234.005 35.4019 235.39 31.3695 236.418 28.7291C237.08 27.0307 238.643 25.5398 238.605 23.7177C238.592 23.0476 237.338 21.2695 236.579 22.5104C235.884 23.6433 235.332 24.8686 234.887 26.1208C234.292 27.7977 234.463 29.8637 233.315 31.2233C231.644 33.2024 229.829 35.0593 227.968 36.8613C226.7 38.0893 225.2 39.0876 223.64 39.9137ZM256.351 24.4238C258.64 25.3392 257.643 29.4613 256.852 31.1665C255.143 34.8538 251.155 37.8514 247.491 39.572C247.15 39.7315 245.842 39.0499 245.492 38.9912C245.415 38.5329 245.883 38.1489 246.077 37.7269C246.49 36.8316 246.714 35.8559 247.148 34.9706C247.75 33.7396 248.524 32.6001 249.175 31.3943C250.822 28.3459 252.5 26.2403 256.351 24.4238ZM15.9836 28.2507C17.5827 28.4262 18.3905 29.5025 19.4176 30.8589C19.9998 31.6279 21.535 33.6166 21.7752 35.0162C22.0432 36.5781 20.2017 37.7943 19.1499 38.9797C16.7229 41.7149 14.0989 44.2048 11.6783 46.9525C10.181 48.6522 8.75905 50.4169 7.27621 52.129C7.00231 52.4452 6.60176 52.6422 6.14289 52.4878C2.34458 51.2098 3.19379 45.4292 3.90487 42.6928C5.28184 37.3939 9.74421 27.5657 15.9836 28.2507ZM192.933 28.5241C194.049 28.8725 191.499 32.7734 190.838 33.7177C191.042 31.815 191.122 30.2165 192.933 28.5241ZM189.744 28.8885C189.101 31.5896 188.399 34.9382 187.536 37.5219C186.586 40.3549 184.775 41.5097 182.75 43.8089C180.591 46.262 178.825 48.3125 175.894 49.8454C175.769 48.201 175.209 46.358 175.182 44.7086C175.076 38.29 176.505 34.1602 180.74 29.3669C181.558 28.4423 188.651 28.8044 189.744 28.8885ZM40.403 31.6221C42.3456 34.0088 36.322 43.7716 33.9337 44.3784C33.6975 39.7138 35.7905 34.072 40.403 31.6221ZM25.3686 34.4467C25.644 36.3197 25.4293 38.3075 25.3686 40.187C24.8063 39.8162 24.9741 39.1397 24.708 38.5697C24.0048 37.0626 22.9276 35.3185 25.3686 34.4467ZM22.6351 37.2713C23.7985 38.0857 24.0695 41.1933 24.2525 41.8044C24.6341 43.0787 25.1046 42.8641 24.7536 44.3556C24.4746 45.5413 22.2409 47.0294 21.3595 47.727C17.932 50.4392 13.5334 53.598 8.91104 52.9033C9.2048 51.4478 12.3795 48.8712 13.2045 47.8636C13.8203 47.1116 14.1106 46.1124 14.7877 45.415C17.4134 42.7099 20.16 40.1147 22.6351 37.2713ZM109.379 37.4535C105.325 44.6607 100.319 50.4772 92.7954 54.219C93.4367 49.0882 101.01 42.8874 104.755 40.1643C105.631 39.527 108.07 37.0173 109.379 37.4535ZM119.766 37.818C119.838 39.9842 118.829 43.747 116.269 44.3442C115.526 42.75 118.475 38.6789 119.766 37.818ZM145.097 39.4581C146.315 40.27 144.01 42.0334 143.639 42.3738C143.639 40.9963 144.785 40.7059 145.097 39.4581ZM200.861 41.2804C199.84 41.9784 199.771 43.8301 199.448 44.9707C199.374 45.2318 198.927 50.5769 200.872 48.4559C201.577 47.6876 201.127 46.4581 201.555 45.5857C201.99 44.7019 203.596 39.4078 200.861 41.2804Z"
                                fill="#212529"
                            />
                        </svg>
                        <div>
                            <p
                                class="mt-2 text-212529 font-[Poppins] text-[16px] leading-[24px] opacity-[0.8] font-semibold">
                                Sarah Daccarett, MD</p>
                            <p class="text-495057 font-[Poppins] text-[16px] leading-[24px] opacity-[0.8]">CEO of Inner
                                Balance</p>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="mt-[96px] lg:mt-[210px] px-4 sm:px-20 max-w-[1280px] mx-auto box-content lg:flex gap-[120px] justify-center">
                <div class="flex gap-[30px] lg:gap-[120px] justify-center items-start">
                    <div class="max-w-[137px] w-full flex flex-col items-center">
                        <svg
                            class="w-[70px] h-auto"
                            xmlns="http://www.w3.org/2000/svg"
                            width="48"
                            height="49"
                            viewBox="0 0 48 49"
                            fill="none"
                        >
                            <path
                                d="M14.5812 25.0171L7.43359 17.2305C7.41896 17.2145 7.40398 17.1989 7.38867 17.1836C5.8586 15.6535 5 13.5799 5 11.416C5 10.1511 5.90412 9.13847 7.11133 8.95508L14.5812 25.0171ZM14.5812 25.0171C14.5733 25.0266 14.5654 25.0362 14.5577 25.0458L14.752 25.2031L14.9361 25.0341L14.9168 25.013C15.5298 24.3527 16.3859 23.916 17.3867 23.916H19.6133C20.6138 23.916 21.4701 24.353 22.0832 25.0131L22.0639 25.0341L22.248 25.2031L22.4423 25.0458C22.4345 25.0362 22.4267 25.0266 22.4188 25.0171L29.5664 17.2305C29.581 17.2145 29.596 17.1989 29.6113 17.1836C31.1414 15.6535 32 13.5799 32 11.416C32 10.0178 30.8982 8.91602 29.5 8.91602H28.8984C28.4336 11.1951 26.4144 12.916 24 12.916C21.243 12.916 19 10.673 19 7.91602C19 5.15902 21.243 2.91602 24 2.91602C26.0456 2.91602 27.8047 4.15263 28.5781 5.91602H29.5C32.5198 5.91602 35 8.39624 35 11.416C35 14.3516 33.8422 17.1695 31.7801 19.2567L14.5812 25.0171ZM7.4236 6.1699L7.58447 6.16753L7.64896 6.02014C8.38335 4.34173 10.0563 3.16602 12 3.16602C14.6189 3.16602 16.75 5.29709 16.75 7.91602C16.75 10.5349 14.6189 12.666 12 12.666C9.72068 12.666 7.81209 11.0497 7.35587 8.90311L7.30686 8.67251L7.07378 8.70791C5.74654 8.90954 4.75 10.0253 4.75 11.416C4.75 13.6462 5.63492 15.7834 7.2119 17.3604L7.21196 17.3604C7.22472 17.3732 7.2372 17.3862 7.24939 17.3995L7.24942 17.3995L14.5678 25.3722L14.7638 25.5858L14.9463 25.3604C15.5245 24.6462 16.3773 24.166 17.3867 24.166H19.6133C20.6223 24.166 21.4755 24.6466 22.0538 25.3605L22.2362 25.5857L22.4322 25.3722L29.7506 17.3995L29.7506 17.3995C29.7628 17.3862 29.7753 17.3732 29.788 17.3604L29.7881 17.3604C31.3651 15.7834 32.25 13.6462 32.25 11.416C32.25 9.87972 31.0363 8.66602 29.5 8.66602H28.8984H28.6943L28.6535 8.86606C28.2119 11.0314 26.2929 12.666 24 12.666C21.3811 12.666 19.25 10.5349 19.25 7.91602C19.25 5.29709 21.3811 3.16602 24 3.16602C25.9422 3.16602 27.6139 4.34004 28.3492 6.01643L28.4148 6.16602H28.5781H29.5C32.3817 6.16602 34.75 8.53431 34.75 11.416C34.75 14.2879 33.6164 17.0447 31.5977 19.0856L31.5969 19.0848L31.5519 19.1317L31.5529 19.1326L22.3529 29.1552L22.3389 29.1705L22.3276 29.1879C22.3107 29.2139 22.2958 29.2406 22.2857 29.2587C22.2843 29.2613 22.2829 29.2636 22.2817 29.2658C22.2702 29.2863 22.2638 29.2971 22.2578 29.3055C22.1719 29.4252 22.0656 29.5288 21.9436 29.6115L21.9195 29.6278L21.8998 29.6493L20.4213 31.2607L20.4212 31.2607L20.4189 31.2632C20.2839 31.4145 20.1141 31.5307 19.9241 31.6018L19.7588 31.6636L19.7618 31.8401C19.8216 35.4735 20.6337 38.595 22.0496 40.7244C22.7841 41.829 23.6492 42.6924 24.6999 43.2785C25.7514 43.865 26.9748 44.166 28.4141 44.166C33.3627 44.166 36.9683 40.899 38.1382 35.7882L38.194 35.5445L37.9503 35.4887C36.6632 35.1941 35.5824 34.546 34.8158 33.6835C33.7531 32.488 33.25 30.9459 33.25 29.416C33.25 27.8861 33.7531 26.344 34.8158 25.1485C35.8743 23.9577 37.5263 23.166 39.5 23.166C42.934 23.166 45.75 25.982 45.75 29.416C45.75 32.3649 43.6703 34.8543 40.9061 35.4987L40.7476 35.5357L40.7173 35.6956C39.5115 42.0581 34.6855 46.666 28.4141 46.666C24.7786 46.666 21.8147 44.885 19.9679 42.1077C18.178 39.4159 17.3191 35.848 17.2617 31.8402L17.2592 31.6662L17.0952 31.6081C16.8976 31.5381 16.7207 31.4194 16.5809 31.2631L16.5809 31.263L16.5788 31.2607L15.1471 29.7001L15.1261 29.6772L15.1 29.6601C14.96 29.5683 14.8399 29.4493 14.7468 29.3102L14.7469 29.3101L14.7425 29.3039C14.7359 29.2946 14.7289 29.2833 14.7176 29.2637C14.7163 29.2614 14.7148 29.2589 14.7133 29.2563C14.7035 29.2392 14.6896 29.215 14.6742 29.1915L14.6629 29.1742L14.649 29.1591L5.44712 19.1327L5.44808 19.1317L5.40315 19.0848L5.40232 19.0856C3.38357 17.0447 2.25 14.288 2.25 11.416C2.25 8.56045 4.57671 6.21178 7.4236 6.1699ZM20.2662 27.7336L20.294 27.7032L20.3107 27.6656C20.4128 27.4347 20.4179 27.1766 20.275 26.9687C20.133 26.7622 19.8867 26.666 19.6133 26.666H17.3867C17.1143 26.666 16.8686 26.7617 16.7261 26.9669C16.5824 27.1737 16.5858 27.4313 16.6869 27.6626L16.7037 27.7009L16.7319 27.7316L18.3159 29.4562L18.5 29.6567L18.6841 29.4562L20.2662 27.7336ZM14.25 7.91602C14.25 6.67294 13.2431 5.66602 12 5.66602C10.7569 5.66602 9.75 6.67294 9.75 7.91602C9.75 9.15909 10.7569 10.166 12 10.166C13.2431 10.166 14.25 9.15909 14.25 7.91602ZM26.25 7.91602C26.25 6.67294 25.2431 5.66602 24 5.66602C22.7569 5.66602 21.75 6.67294 21.75 7.91602C21.75 9.15909 22.7569 10.166 24 10.166C25.2431 10.166 26.25 9.15909 26.25 7.91602ZM43.25 29.416C43.25 27.3272 41.5888 25.666 39.5 25.666C38.1407 25.666 37.2925 26.1242 36.6842 26.8085C36.08 27.4883 35.75 28.4464 35.75 29.416C35.75 30.3856 36.08 31.3437 36.6842 32.0235C37.2925 32.7079 38.1407 33.166 39.5 33.166C41.5888 33.166 43.25 31.5049 43.25 29.416ZM38.6161 28.5321C38.8505 28.2977 39.1685 28.166 39.5 28.166C39.8315 28.166 40.1495 28.2977 40.3839 28.5321C40.6183 28.7666 40.75 29.0845 40.75 29.416C40.75 29.7475 40.6183 30.0655 40.3839 30.2999C40.1495 30.5343 39.8315 30.666 39.5 30.666C39.1685 30.666 38.8505 30.5343 38.6161 30.2999C38.3817 30.0655 38.25 29.7475 38.25 29.416C38.25 29.0845 38.3817 28.7666 38.6161 28.5321Z"
                                fill="#97A390"
                                stroke="#FCFCFA"
                                stroke-width="0.5"
                            />
                        </svg>
                        <p class="icon-label-text-style mt-4">Unlimited followup</p>
                    </div>
                    <div class="max-w-[137px] w-full flex flex-col items-center">
                        <svg
                            class="w-[70px] h-auto"
                            xmlns="http://www.w3.org/2000/svg"
                            width="48"
                            height="49"
                            viewBox="0 0 48 49"
                            fill="none"
                        >
                            <path
                                d="M27.6162 16.5322L27.6162 16.5323L27.6186 16.5298C27.8451 16.2971 28.1533 16.1617 28.478 16.1522C28.7296 16.145 28.9775 16.2139 29.1893 16.3499C29.4011 16.4859 29.567 16.6827 29.6651 16.9145C29.7633 17.1463 29.7891 17.4023 29.7393 17.6491C29.6896 17.8958 29.5665 18.1218 29.3861 18.2975L29.3838 18.2998L20.3838 27.2997C20.3838 27.2998 20.3838 27.2998 20.3838 27.2998C20.1493 27.5341 19.8315 27.6657 19.5 27.6657C19.1685 27.6657 18.8507 27.5341 18.6162 27.2998C18.6162 27.2998 18.6162 27.2998 18.6162 27.2997L14.6162 23.2998L14.6163 23.2997L14.6126 23.2962C14.4926 23.181 14.3969 23.0431 14.3309 22.8904C14.2649 22.7378 14.23 22.5735 14.2283 22.4072C14.2267 22.2409 14.2582 22.0759 14.321 21.9219C14.3839 21.7679 14.4768 21.6281 14.5944 21.5105C14.712 21.3929 14.8519 21.2999 15.0059 21.237C15.1599 21.1742 15.3248 21.1427 15.4911 21.1444C15.6574 21.1461 15.8217 21.1809 15.9744 21.2469C16.1271 21.3129 16.265 21.4086 16.3802 21.5286L16.3802 21.5286L16.3838 21.5322L19.3232 24.4717L19.5 24.6485L19.6768 24.4717L27.6162 16.5322ZM4.25 9.41602C4.25 7.08659 6.17057 5.16602 8.5 5.16602H34.5C36.8294 5.16602 38.75 7.08659 38.75 9.41602V35.416C38.75 37.7454 36.8294 39.666 34.5 39.666H8.5C6.17057 39.666 4.25 37.7454 4.25 35.416V9.41602ZM34.5 7.66602H8.5C7.51543 7.66602 6.75 8.43144 6.75 9.41602V35.416C6.75 36.4006 7.51543 37.166 8.5 37.166H34.5C35.4846 37.166 36.25 36.4006 36.25 35.416V9.41602C36.25 8.43144 35.4846 7.66602 34.5 7.66602ZM41.25 36.416V10.5622C42.7216 11.2315 43.75 12.7011 43.75 14.416V36.416C43.75 40.9649 40.0489 44.666 35.5 44.666H13.5C11.7849 44.666 10.3146 43.6375 9.64599 42.166H35.5C38.6711 42.166 41.25 39.5861 41.25 36.416Z"
                                fill="#97A390"
                                stroke="#FCFCFA"
                                stroke-width="0.5"
                            />
                        </svg>
                        <p class="icon-label-text-style mt-4">No insurance required</p>
                    </div>
                </div>
                <div class="flex gap-[30px] lg:gap-[120px] justify-center items-start max-lg:mt-[30px]">
                    <div class="max-w-[137px] w-full flex flex-col items-center">
                        <svg
                            class="w-[70px] h-auto"
                            xmlns="http://www.w3.org/2000/svg"
                            width="48"
                            height="49"
                            viewBox="0 0 48 49"
                            fill="none"
                        >
                            <path
                                d="M7.45515 36.8471L7.40321 36.666H7.21484H6.5C4.17057 36.666 2.25 34.7454 2.25 32.416V15.416C2.25 13.0866 4.17057 11.166 6.5 11.166H27.5C29.6655 11.166 31.4599 12.8333 31.7008 14.9444L31.7261 15.166H31.9492H38.5508C40.2086 15.166 41.7218 16.1376 42.4121 17.6417V17.6429L42.4337 17.6914L45.3829 24.3281L45.4018 24.3707L45.4031 24.372C45.6307 24.9013 45.75 25.4721 45.75 26.0527V32.416C45.75 34.7454 43.8294 36.666 41.5 36.666H40.7852H40.5968L40.5449 36.8471C39.9151 39.0423 37.8841 40.666 35.5 40.666C33.116 40.666 31.085 39.0423 30.4552 36.8471L30.4032 36.666H30.2148H17.7852H17.5968L17.5449 36.8471C16.915 39.0423 14.8841 40.666 12.5 40.666C10.116 40.666 8.08495 39.0423 7.45515 36.8471ZM29 34.166H29.25V33.916V16.416V15.416C29.25 14.4314 28.4846 13.666 27.5 13.666H6.5C5.51543 13.666 4.75 14.4314 4.75 15.416V32.416C4.75 33.4006 5.51543 34.166 6.5 34.166H7.21484H7.40321L7.45515 33.985C8.08495 31.7897 10.116 30.166 12.5 30.166C14.8841 30.166 16.915 31.7897 17.5449 33.985L17.5968 34.166H17.7852H29ZM32 17.666H31.75V17.916V22.916V23.166H32H41.7461H42.1308L41.9746 22.8145L40.1484 18.7052C39.8663 18.0695 39.2472 17.666 38.5508 17.666H32ZM21.1162 19.169L21.1163 19.169L21.1189 19.1662C21.3452 18.9329 21.6534 18.7969 21.9783 18.787C22.2303 18.7794 22.4786 18.8481 22.6908 18.9842C22.903 19.1203 23.0691 19.3173 23.1673 19.5495C23.2655 19.7817 23.2913 20.0381 23.2412 20.2851C23.191 20.5322 23.0674 20.7583 22.8865 20.9338L22.8864 20.9338L22.8838 20.9365L16.5205 27.2997C16.5205 27.2998 16.5205 27.2998 16.5205 27.2998C16.2861 27.5341 15.9682 27.6657 15.6367 27.6657C15.3053 27.6657 14.9874 27.5341 14.753 27.2998C14.7529 27.2998 14.7529 27.2998 14.7529 27.2997L11.1162 23.6631L11.1163 23.663L11.1126 23.6595C10.9926 23.5443 10.8969 23.4064 10.8309 23.2537C10.7649 23.101 10.73 22.9367 10.7283 22.7704C10.7267 22.6041 10.7582 22.4392 10.821 22.2852C10.8839 22.1312 10.9768 21.9913 11.0944 21.8737C11.212 21.7561 11.3519 21.6632 11.5059 21.6003C11.6599 21.5375 11.8248 21.506 11.9911 21.5076C12.1574 21.5093 12.3217 21.5442 12.4744 21.6102C12.6271 21.6762 12.765 21.7719 12.8802 21.8919L12.8802 21.8919L12.8838 21.8955L15.4599 24.4717L15.6367 24.6485L15.8135 24.4717L21.1162 19.169ZM32 25.666H31.75V25.916V31.1875V31.7202L32.1598 31.3798C33.0709 30.6229 34.2354 30.166 35.5 30.166C37.8841 30.166 39.9151 31.7897 40.5449 33.985L40.5968 34.166H40.7852H41.5C42.4846 34.166 43.25 33.4006 43.25 32.416V26.0527C43.25 26.0139 43.246 25.9785 43.2428 25.953C43.2414 25.942 43.2402 25.9333 43.2392 25.9259C43.2375 25.9129 43.2363 25.9039 43.2352 25.8927L43.214 25.666H42.9863H32ZM15.2353 35.3005L15.237 35.2822L15.236 35.2638C15.1571 33.8046 13.9835 32.666 12.5 32.666C11.0165 32.666 9.84295 33.8046 9.76404 35.2638L9.76305 35.2822L9.76474 35.3005C9.77188 35.3773 9.77188 35.4547 9.76474 35.5316L9.76305 35.5499L9.76404 35.5682C9.84295 37.0274 11.0165 38.166 12.5 38.166C13.9835 38.166 15.1571 37.0274 15.236 35.5682L15.237 35.5499L15.2353 35.5316C15.2281 35.4547 15.2281 35.3773 15.2353 35.3005ZM38.25 35.416C38.25 33.8815 37.0345 32.666 35.5 32.666C33.9655 32.666 32.75 33.8815 32.75 35.416C32.75 36.9505 33.9655 38.166 35.5 38.166C37.0345 38.166 38.25 36.9505 38.25 35.416Z"
                                fill="#97A390"
                                stroke="#FCFCFA"
                                stroke-width="0.5"
                            />
                        </svg>
                        <p class="icon-label-text-style mt-4">Free shipping</p>
                    </div>
                    <div class="max-w-[137px] w-full flex flex-col items-center">
                        <svg
                            class="w-[70px] h-auto"
                            xmlns="http://www.w3.org/2000/svg"
                            width="48"
                            height="49"
                            viewBox="0 0 48 49"
                            fill="none"
                        >
                            <mask
                                id="path-1-inside-1_4142_5398"
                                fill="white"
                            >
                                <path
                                    d="M21.7641 5.92594C20.2866 5.92594 18.8082 6.4851 17.6899 7.60367C15.451 9.84117 15.451 13.5166 17.6899 15.7541V15.756L25.4418 23.4787C25.723 23.7587 26.1036 23.9159 26.5004 23.9159C26.8972 23.9159 27.2779 23.7587 27.559 23.4787L35.311 15.756V15.7541C37.5492 13.5172 37.5497 9.84331 35.3129 7.60562C33.0758 5.36583 29.3996 5.36583 27.1625 7.60562L26.5004 8.215L25.8383 7.60562C24.7198 6.48573 23.2425 5.92594 21.7641 5.92594ZM31.2387 8.9064C31.9426 8.9064 32.6454 9.17966 33.1899 9.72476L33.1918 9.72672C34.2825 10.8168 34.2816 12.5404 33.1918 13.631L26.5004 20.297L19.809 13.633V13.631C18.7193 12.5404 18.7183 10.8168 19.809 9.72672L19.811 9.72476C20.3554 9.17966 21.06 8.90836 21.7641 8.90836C22.4682 8.90836 23.1708 9.17966 23.7153 9.72476C23.7293 9.73872 23.7436 9.75239 23.7582 9.76578L25.4828 11.3595C25.76 11.6154 26.1233 11.7574 26.5004 11.7574C26.8776 11.7574 27.2409 11.6154 27.518 11.3595L29.2426 9.76578C29.2572 9.75239 29.2715 9.73872 29.2856 9.72476C29.83 9.17966 30.5349 8.9064 31.2387 8.9064ZM41.6137 22.9357C40.4935 22.9454 39.4296 23.3895 38.4848 24.092C37.4706 24.8454 34.4189 27.1242 31.7778 29.0959C31.2051 27.2677 29.5064 25.9162 27.5004 25.9162H23.1078C20.2966 25.9162 18.986 25.6884 17.8598 25.4494C16.7336 25.2104 15.6472 24.9162 13.8266 24.9162C9.94182 24.9162 7.01276 27.4092 5.09418 29.7072C3.17559 32.0052 2.13519 34.3009 2.13519 34.3009C2.05345 34.4802 2.00782 34.6739 2.00092 34.8708C1.99402 35.0677 2.02598 35.2641 2.09498 35.4487C2.16398 35.6332 2.26866 35.8024 2.40305 35.9465C2.53744 36.0906 2.6989 36.2069 2.87821 36.2886C3.05752 36.3703 3.25117 36.4158 3.4481 36.4227C3.64503 36.4296 3.84138 36.3975 4.02594 36.3285C4.2105 36.2595 4.37965 36.1547 4.52373 36.0203C4.66781 35.8859 4.784 35.7244 4.86566 35.5451C4.86566 35.5451 5.76474 33.586 7.39691 31.631C9.02908 29.676 11.2604 27.9162 13.8266 27.9162C15.348 27.9162 16.0072 28.122 17.2368 28.383C18.4663 28.6439 20.1241 28.9162 23.1078 28.9162H27.5004C28.3469 28.9162 29.0004 29.5697 29.0004 30.4162C29.0004 30.8857 28.7946 31.2905 28.4711 31.5627L28.4301 31.5939C28.4013 31.6163 28.3733 31.6398 28.3461 31.6642L28.3442 31.6662C28.1057 31.8248 27.8169 31.9162 27.5004 31.9162H20.5004C20.3017 31.9134 20.1043 31.9501 19.9199 32.0242C19.7354 32.0983 19.5675 32.2084 19.426 32.3479C19.2844 32.4875 19.172 32.6538 19.0953 32.8372C19.0186 33.0206 18.9791 33.2174 18.9791 33.4162C18.9791 33.615 19.0186 33.8118 19.0953 33.9951C19.172 34.1785 19.2844 34.3448 19.426 34.4844C19.5675 34.624 19.7354 34.734 19.9199 34.8081C20.1043 34.8823 20.3017 34.919 20.5004 34.9162H27.5004C28.4411 34.9162 29.3157 34.6176 30.0414 34.1154L30.0454 34.1134C30.1079 34.0793 30.168 34.0408 30.225 33.9982C30.225 33.9982 38.7764 27.6126 40.2739 26.5002V26.4982C40.8381 26.0787 41.3103 25.9386 41.6411 25.9357C41.9719 25.9328 42.2187 26.0131 42.561 26.3556C43.1514 26.9455 43.1478 27.8513 42.5727 28.4494C37.2176 32.9524 33.8489 35.9531 31.6235 37.7111C29.3703 39.4911 28.4254 39.9162 27.5004 39.9162C23.8483 39.9162 19.8011 38.9162 15.5004 38.9162C13.0004 38.9162 11.2432 40.2598 10.3012 41.5158C9.35921 42.7718 9.04535 44.0529 9.04535 44.0529C8.9924 44.2457 8.97854 44.4471 9.00456 44.6454C9.03059 44.8436 9.09598 45.0347 9.1969 45.2073C9.29782 45.3799 9.43223 45.5306 9.59223 45.6505C9.75222 45.7704 9.93458 45.8572 10.1286 45.9056C10.3226 45.954 10.5243 45.9632 10.7219 45.9325C10.9195 45.9019 11.1089 45.8321 11.2791 45.7271C11.4493 45.6222 11.5969 45.4843 11.713 45.3216C11.8292 45.1588 11.9116 44.9745 11.9555 44.7794C11.9555 44.7794 12.1416 44.0606 12.6996 43.3166C13.2576 42.5726 14.0004 41.9162 15.5004 41.9162C19.3078 41.9162 23.3365 42.9162 27.5004 42.9162C29.4024 42.9162 31.0853 41.9606 33.4829 40.0666C35.8502 38.1964 39.1758 35.2261 44.4985 30.7502C44.5636 30.7043 44.625 30.6534 44.6821 30.5978C44.689 30.5909 44.6909 30.5813 44.6977 30.5744L44.7016 30.5783L44.7543 30.5236C44.9007 30.3711 45.0132 30.1894 45.0844 29.9904C46.3309 28.238 46.2493 25.8004 44.6821 24.2345C43.8533 23.4051 42.7339 22.9261 41.6137 22.9357Z"
                                />
                            </mask>
                            <path
                                d="M21.7641 5.92594C20.2866 5.92594 18.8082 6.4851 17.6899 7.60367C15.451 9.84117 15.451 13.5166 17.6899 15.7541V15.756L25.4418 23.4787C25.723 23.7587 26.1036 23.9159 26.5004 23.9159C26.8972 23.9159 27.2779 23.7587 27.559 23.4787L35.311 15.756V15.7541C37.5492 13.5172 37.5497 9.84331 35.3129 7.60562C33.0758 5.36583 29.3996 5.36583 27.1625 7.60562L26.5004 8.215L25.8383 7.60562C24.7198 6.48573 23.2425 5.92594 21.7641 5.92594ZM31.2387 8.9064C31.9426 8.9064 32.6454 9.17966 33.1899 9.72476L33.1918 9.72672C34.2825 10.8168 34.2816 12.5404 33.1918 13.631L26.5004 20.297L19.809 13.633V13.631C18.7193 12.5404 18.7183 10.8168 19.809 9.72672L19.811 9.72476C20.3554 9.17966 21.06 8.90836 21.7641 8.90836C22.4682 8.90836 23.1708 9.17966 23.7153 9.72476C23.7293 9.73872 23.7436 9.75239 23.7582 9.76578L25.4828 11.3595C25.76 11.6154 26.1233 11.7574 26.5004 11.7574C26.8776 11.7574 27.2409 11.6154 27.518 11.3595L29.2426 9.76578C29.2572 9.75239 29.2715 9.73872 29.2856 9.72476C29.83 9.17966 30.5349 8.9064 31.2387 8.9064ZM41.6137 22.9357C40.4935 22.9454 39.4296 23.3895 38.4848 24.092C37.4706 24.8454 34.4189 27.1242 31.7778 29.0959C31.2051 27.2677 29.5064 25.9162 27.5004 25.9162H23.1078C20.2966 25.9162 18.986 25.6884 17.8598 25.4494C16.7336 25.2104 15.6472 24.9162 13.8266 24.9162C9.94182 24.9162 7.01276 27.4092 5.09418 29.7072C3.17559 32.0052 2.13519 34.3009 2.13519 34.3009C2.05345 34.4802 2.00782 34.6739 2.00092 34.8708C1.99402 35.0677 2.02598 35.2641 2.09498 35.4487C2.16398 35.6332 2.26866 35.8024 2.40305 35.9465C2.53744 36.0906 2.6989 36.2069 2.87821 36.2886C3.05752 36.3703 3.25117 36.4158 3.4481 36.4227C3.64503 36.4296 3.84138 36.3975 4.02594 36.3285C4.2105 36.2595 4.37965 36.1547 4.52373 36.0203C4.66781 35.8859 4.784 35.7244 4.86566 35.5451C4.86566 35.5451 5.76474 33.586 7.39691 31.631C9.02908 29.676 11.2604 27.9162 13.8266 27.9162C15.348 27.9162 16.0072 28.122 17.2368 28.383C18.4663 28.6439 20.1241 28.9162 23.1078 28.9162H27.5004C28.3469 28.9162 29.0004 29.5697 29.0004 30.4162C29.0004 30.8857 28.7946 31.2905 28.4711 31.5627L28.4301 31.5939C28.4013 31.6163 28.3733 31.6398 28.3461 31.6642L28.3442 31.6662C28.1057 31.8248 27.8169 31.9162 27.5004 31.9162H20.5004C20.3017 31.9134 20.1043 31.9501 19.9199 32.0242C19.7354 32.0983 19.5675 32.2084 19.426 32.3479C19.2844 32.4875 19.172 32.6538 19.0953 32.8372C19.0186 33.0206 18.9791 33.2174 18.9791 33.4162C18.9791 33.615 19.0186 33.8118 19.0953 33.9951C19.172 34.1785 19.2844 34.3448 19.426 34.4844C19.5675 34.624 19.7354 34.734 19.9199 34.8081C20.1043 34.8823 20.3017 34.919 20.5004 34.9162H27.5004C28.4411 34.9162 29.3157 34.6176 30.0414 34.1154L30.0454 34.1134C30.1079 34.0793 30.168 34.0408 30.225 33.9982C30.225 33.9982 38.7764 27.6126 40.2739 26.5002V26.4982C40.8381 26.0787 41.3103 25.9386 41.6411 25.9357C41.9719 25.9328 42.2187 26.0131 42.561 26.3556C43.1514 26.9455 43.1478 27.8513 42.5727 28.4494C37.2176 32.9524 33.8489 35.9531 31.6235 37.7111C29.3703 39.4911 28.4254 39.9162 27.5004 39.9162C23.8483 39.9162 19.8011 38.9162 15.5004 38.9162C13.0004 38.9162 11.2432 40.2598 10.3012 41.5158C9.35921 42.7718 9.04535 44.0529 9.04535 44.0529C8.9924 44.2457 8.97854 44.4471 9.00456 44.6454C9.03059 44.8436 9.09598 45.0347 9.1969 45.2073C9.29782 45.3799 9.43223 45.5306 9.59223 45.6505C9.75222 45.7704 9.93458 45.8572 10.1286 45.9056C10.3226 45.954 10.5243 45.9632 10.7219 45.9325C10.9195 45.9019 11.1089 45.8321 11.2791 45.7271C11.4493 45.6222 11.5969 45.4843 11.713 45.3216C11.8292 45.1588 11.9116 44.9745 11.9555 44.7794C11.9555 44.7794 12.1416 44.0606 12.6996 43.3166C13.2576 42.5726 14.0004 41.9162 15.5004 41.9162C19.3078 41.9162 23.3365 42.9162 27.5004 42.9162C29.4024 42.9162 31.0853 41.9606 33.4829 40.0666C35.8502 38.1964 39.1758 35.2261 44.4985 30.7502C44.5636 30.7043 44.625 30.6534 44.6821 30.5978C44.689 30.5909 44.6909 30.5813 44.6977 30.5744L44.7016 30.5783L44.7543 30.5236C44.9007 30.3711 45.0132 30.1894 45.0844 29.9904C46.3309 28.238 46.2493 25.8004 44.6821 24.2345C43.8533 23.4051 42.7339 22.9261 41.6137 22.9357Z"
                                fill="#97A390"
                                stroke="#FCFCFA"
                                mask="url(#path-1-inside-1_4142_5398)"
                            />
                        </svg>
                        <p class="icon-label-text-style mt-4">Loved & trusted</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
