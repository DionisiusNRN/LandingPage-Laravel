@extends('layouts.app')

@section('content')
<main>
    <section class="bg-gradient-to-r from-green-100 to-white py-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 text-center md:text-left md:mx-10">
                <h1 class="text-4xl lg:text-5xl xl:text-7xl font-bold text-gray-800">Empowering Alumni With The University Alumni Tracer</h1>
                <p class="mt-4 text-gray-600">Track the success of our graduates and stay connected with the University Alumni Tracer Management Information System.</p>
                <div class="mt-6">
                    <div class="md:flex">
                        <a href="#" class="flex-none bg-green-600 text-white px-4 py-2 lg:px-6 lg:py-3 rounded-md hover:bg-green-700">Learn More</a>
                        <a href="#" class="flex-none mt-2 ml-4 text-green-600 hover:underline">Already signed up? Sign in</a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center mx-10">
                <div class="relative">
                    <img src="img/Foto1.jpeg" alt="Person with icons" class="rounded-full bg-white shadow-lg max-w-full md:max-w-1/2 ">
                    <div class="absolute bottom-0 right-0 bg-white p-4 rounded-full shadow-lg">
                        <span class="text-2xl font-bold text-green-600">50%</span>
                        <p class="text-sm text-gray-600">Yearly Growth</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto text-center px-5">
            <h2 class="text-3xl font-bold text-gray-800">Apa yang akan kamu dapatkan di Tracer Study?</h2>
            <p class="mt-4 text-gray-600">Start filling out the questionnaire and create your CV easily</p>
            <div class="mt-10 flex flex-col mx-5 md:mx-0 md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-6">
                <div class="bg-white shadow-lg rounded-lg p-6 w-full md:w-1/3">
                    <div class="flex justify-center mb-4">
                        <div class="bg-orange-100 p-4 rounded-full">
                            <i class="fas fa-file-alt text-orange-500 text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Data Kuesioner</h3>
                    <p class="mt-2 text-gray-600">Manage your profile after graduation from university</p>
                    <a href="#" class="mt-4 inline-block text-green-600 hover:underline">Get Started</a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 w-full md:w-1/3">
                    <div class="flex justify-center mb-4">
                        <div class="bg-blue-100 p-4 rounded-full">
                            <i class="fas fa-file-alt text-blue-500 text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">CV Builder</h3>
                    <p class="mt-2 text-gray-600">Privately support and multi-user access to maximize your productivity</p>
                    <a href="#" class="mt-4 inline-block text-green-600 hover:underline">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-b from-white to-green-100">
        <div class="container mx-auto px-6 lg:px-10 lg:max-w-screen-lg xl:max-w-screen-lg">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-2/3 ">
                    <h2 class="text-3xl font-bold text-gray-800">Career Development Center UMY</h2>
                    <div class="text-left text-justify lg:pr-32 md:text-sm lg:text-md">
                        <p class="mt-4 text-gray-600">The distribution of labor recovery information campus into virtual, job requirements selection, career counseling, alumni tracking and data collection, and accurate alumni information system becomes BPS & CDC UMY provide competency information system graduates from UMY. Labor information and services are available to students and alumni, CDC UMY can provide information on the career search needs of students and alumni.</p>
                        <p class="mt-4 text-gray-600">CDC UMY provides access to a range of services and resources to help students and alumni after graduation. These services include information distribution of UMY graduates, career counseling, job selection, CDC UMY provides competency information system graduates from UMY. Labor information and services are available to students and alumni, CDC UMY can provide information on the career search needs of students and alumni.</p>
                    </div>
                </div>
                <div class="flex justify-center text-center max-w-80 mx-auto md:max-w-1/3 mt-10 md:mx-10">
                    <img src="img/Foto2.jpeg" alt="Person working on laptop" class="rounded-full shadow-lg">
                </div>
            </div>
            {{-- <div class="mt-10 flex justify-around text-center"> --}}
            <div class="mt-10 grid grid-cols-3 sm:flex lg:flex-row sm:justify-between lg:mx-10 justify-center text-left px-auto">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800">25</h3>
                    <p class="text-gray-600 max-w-32 text-sm">Tracking the Pulse of Responsive Website</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-800">120</h3>
                    <p class="text-gray-600 text-sm">Enrolled</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-800">120</h3>
                    <p class="text-gray-600 text-sm">Service</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-800">120</h3>
                    <p class="text-gray-600 text-sm">CV Pool Power</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-800">120</h3>
                    <p class="text-gray-600 text-sm">Responsive</p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
