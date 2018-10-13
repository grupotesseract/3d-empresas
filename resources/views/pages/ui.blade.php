@extends('layouts.admin')

@section('content')

<main class="bg-white-medium flex-1 p-3 overflow-hidden">

    <div class="flex flex-col">
        <!-- Card Sextion Starts Here -->
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <!--Horizontal form-->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Traditional Alerts
                </div>
                <div class="p-3">
                    <!-- Traditional alert -->
                    <div class="bg-red-lightest mb-2 border border-red-light text-red-dark px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">This is an Error alert.</span>
                        <span class="absolute pin-t pin-b pin-r px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                    <div class="bg-green-lightest mb-2 border border-green-light text-green-dark px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">This is an Success alert.</span>
                        <span class="absolute pin-t pin-b pin-r px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                    <div class="bg-orange-lightest mb-2 border border-orange-light text-orange-dark px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">This is an Warning alert.</span>
                        <span class="absolute pin-t pin-b pin-r px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-orange" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                    <div class="bg-info-lightest mb-2 border border-info-light text-info-dark px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">This is an info alert.</span>
                        <span class="absolute pin-t pin-b pin-r px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-info" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                    <!-- Solid Alert -->
                    <div class="flex items-center mb-2 bg-blue text-white text-sm font-bold px-4 py-3" role="alert">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        <p>Something happened that you should know about.</p>
                    </div>
                    <div class="flex items-center mb-2 bg-green text-white text-sm font-bold px-4 py-3" role="alert">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        <p>Congratulations! This is success alert.</p>
                    </div>
                </div>
            </div>
            <!--/Horizontal form-->

            <!--Underline form-->
            <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Misc Alerts
                </div>
                <div class="p-3">
                        <!-- Modern Alert -->
                        <div class="bg-orange-lightest border-l-4 mb-2 border-orange text-orange-dark p-4" role="alert">
                            <p class="font-bold">Be Warned</p>
                            <p>Something not ideal might be happening.</p>
                        </div>
                        <!-- Titled Alert -->
                        <div role="alert" class="mb-2">
                            <div class="bg-red text-white font-bold rounded-t px-4 py-2">
                                Danger
                            </div>
                            <div class="border border-t-0 border-red-light rounded-b bg-red-lightest px-4 py-3 text-red-dark">
                                <p>Something not ideal might be happening.</p>
                            </div>
                        </div>
                        <!-- left accent border -->
                        <div class="bg-teal-lightest mb-2 border-t-4 border-teal rounded-b text-teal-darkest px-4 py-3 shadow-md" role="alert">
                            <div class="flex">
                                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                <div>
                                    <p class="font-bold">Our privacy policy has changed</p>
                                    <p class="text-sm">Make sure you know how these changes affect you.</p>
                                </div>
                            </div>
                        </div>
                        <!-- informational alert -->
                        <div class="bg-blue-lightest border-t border-b border-blue text-blue-dark px-4 py-3" role="alert">
                            <p class="font-bold">Informational message</p>
                            <p class="text-sm">Some additional text to explain said message.</p>
                        </div>
                </div>
            </div>
            <!--/Underline form-->
        </div>
        <!-- /Cards Section Ends Here -->

        <!--Grid Form-->

        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Cards
                </div>
                <div class="p-1 flex flex-1 flex-col md:flex-row lg:flex-row justify-between md:mx-2 lg:mx-2">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title</div>
                            <p class="text-grey-darker text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                            <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                            <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
                        </div>
                    </div>
                    <!-- horizontal card -->
                    <div class="max-w-md w-full lg:flex lg:mx-2 md:mx-2">
                        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                        </div>
                        <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-8">
                            <p class="text-sm text-grey-dark flex items-center">
                                <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                </svg>
                                Members only
                            </p>
                            <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                            <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                            </div>
                            <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                            <div class="text-sm">
                                <p class="text-black leading-none">Jonathan Reinink</p>
                                <p class="text-grey-dark">Aug 18</p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- /horizontal card -->
                </div>
            </div>
        </div>
        <!--/Grid Form-->
    </div>
</main>

@endsection
