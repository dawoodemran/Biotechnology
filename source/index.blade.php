@extends('_layouts.main')

@section('body')
<div class="relative overflow-hidden">
    @include('_partials.header')
    <div class="relative px-6 pt-6 pb-16 sm:pb-24">
        <main class="mt-14 mx-auto max-w-5xl sm:mt-16">
            <div class="text-center mx-auto">
                <div class="mt-4 mx-auto text-gray-400 md:mt-12">
                    <img class="w-full rounded-lg" src="{{$page->baseUrl }}/assets/images/hero.png" alt="">
                </div>
            </div>
        </main>
    </div>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12">
            <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl">
                <h2 class="text-4xl font-bold tracking-tight sm:text-6xl">our team</h2>
            </div>
            <ul role="list mt-6"
                class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">
                <li class="flex justify-center items-center">
                    <div class="space-y-6">
                        <img class="mx-auto h-30 w-30 rounded-full xl:w-44 xl:h-44"
                            src="{{$page->baseUrl }}/assets/images/koosh.png" alt="">
                        <div class="space-y-2">
                            <div class="leading-6 font-medium space-y-1">
                                <h3 class="text-xl font-medium">Koosh - CEO</h3>
                                <p class="text-gray-400">Founder & CEO</p>
                                <p class="text-gray-400">Ml Techlead</p>
                            </div>
                            <ul role="list" class="flex flex-col justify-center">
                                <li class="flex justify-center mt-2">
                                    <img class="w-auto h-8 rounded-lg"
                                        src="{{$page->baseUrl }}/assets/images/facebook.png" alt="">
                                </li>
                                <li class="flex justify-center mt-2">
                                    <img class="w-auto h-8 rounded-lg"
                                        src="{{$page->baseUrl }}/assets/images/concertboom.png" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>


                <li class="flex justify-center items-center">
                    <div class="space-y-6">
                        <img class="mx-auto h-30 w-30 rounded-full xl:w-44 xl:h-44"
                            src="{{$page->baseUrl }}/assets/images/ehsan.png" alt="">
                        <div class="space-y-2">
                            <div class="leading-6 font-medium space-y-1">
                                <h3 class="text-xl font-medium">Ehsan - CTO</h3>
                                <p class="text-gray-400">Senior ML Scientist</p>
                                <p class="text-gray-400">Ml Techlead</p>
                            </div>
                            <ul role="list" class="flex flex-col justify-center">
                                <li class="flex justify-center mt-2">
                                    <img class="w-auto h-8 rounded-lg"
                                        src="{{$page->baseUrl }}/assets/images/amazon.png" alt="">
                                </li>
                                <li class="flex justify-center mt-2">
                                    <img class="w-auto h-8 rounded-lg" src="{{$page->baseUrl }}/assets/images/apple.png"
                                        alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="flex justify-center items-center">
                    <div class="space-y-6">
                        <img class="mx-auto h-30 w-30 rounded-full xl:w-44 xl:h-44"
                            src="{{$page->baseUrl }}/assets/images/kathy.png" alt="">
                        <div class="space-y-2">
                            <div class="leading-6 font-medium space-y-1">
                                <h3 class="text-xl font-medium">Kathy - CSO</h3>
                                <p class="text-gray-400">Synthetic Biology Phd</p>
                                <p class="text-gray-400">Scientist</p>
                            </div>
                            <ul role="list" class="flex flex-col justify-center">
                                <li class="flex justify-center mt-2">
                                    <img class="w-auto h-6 rounded-lg" src="{{$page->baseUrl }}/assets/images/amgen.png"
                                        alt="">
                                </li>
                                <li class="flex justify-center mt-2">
                                    <img class="w-auto h-8 rounded-lg"
                                        src="{{$page->baseUrl }}/assets/images/stanford.png" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!-- More people... -->
            </ul>
        </div>
    </div>
</div>

<div class="">
    <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-800 sm:text-4xl">
            <span class="text-4xl font-bold tracking-tight sm:text-6xl">Sample text</span>
        </h2>
        <p class="mt-6 text-xl leading-8 text-gray-400">Lorem ipsum dolor sit amet, consectetur
            adipisicing elit.
            Corrupti incidunt quo dolorum nam nesciunt cum temporibus, nemo culpa itaque expedita neque quisquam
            consequuntur quod cupiditate porro soluta quia, sapiente alias!</p>
    </div>
</div>

@include('_partials.footer')
@endsection