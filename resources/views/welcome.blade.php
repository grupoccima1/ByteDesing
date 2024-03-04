<x-app-layout>
    <section class="bg-cover bg-center"
        style="background-image: url({{ asset('img/content/portada_1.jpg') }})">
        <div class="max-w-7xl mx-auto  px-4 py-44">
            <div class=" pb-3">
                <p class="text-white font-bold text-2xl">we are passionate</p>
                <h1 class="text-white font-bold text-5xl py-2">Award Winning <br> Desing Studio</h1>
            </div>
            <button
                class="middle none center mr-4 rounded-lg bg-blue-900 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true">
                Crear Ticket
            </button>

        </div>
    </section>
    {{-- contenido --}}
    <section class="mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 gap-5">
            <div class="">
                <h2 class="text-gray-900 text-3xl mb-4 font-medium"> An independent design & branding agency based in melbourne australia
                </h2>
                <p class="text-base">We solve more complex problems with uniquely modern way that ensures the permanent
                    resolution. It is a long established fact that the reader will be distracted by the content of the
                    layout on the page.</p>
                <div class="flex items-center mt-4">
                    <div class="">
                        <a href="">
                            <div class="bg-black rounded-full flex justify-center items-center " style="width: 70px; height: 70px;">
                                <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 22v-20l18 10-18 10z"></path></svg>
                            </div>
                        </a>
                    </div>
                    <div class="text-2xl font-semibold ms-3">Watch the reel</div>
                </div>
            </div>
            {{-- elementos --}}
            <div class="">
                <div class="grid grid-cols-2 gap-5">
                    <div class="px-8">
                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 11h-2V6h1V2h-2v2h-1V2h-2v2h-1V2h-2v2h-1V2H8v2H7V2H5v4h1v5H4V9H2v12h7v-5a3 3 0 0 1 6 0v5h7V9h-2zm-10-1H8V7h2zm6 0h-2V7h2z"></path></svg>
                        <h4 class="text-2xl text-teal-500 mb-2 font-medium">Visual<br>
                            Page Builder</h4>
                        <p class="text-gray-500 ">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                    </div>
                    <div class="px-8">
                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 11h-2V6h1V2h-2v2h-1V2h-2v2h-1V2h-2v2h-1V2H8v2H7V2H5v4h1v5H4V9H2v12h7v-5a3 3 0 0 1 6 0v5h7V9h-2zm-10-1H8V7h2zm6 0h-2V7h2z"></path></svg>
                        <h4 class="text-2xl text-teal-500 mb-2 font-medium">Visual<br>
                            Page Builder</h4>
                        <p class="text-gray-500 ">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                    </div>
                    <div class="px-8">
                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 11h-2V6h1V2h-2v2h-1V2h-2v2h-1V2h-2v2h-1V2H8v2H7V2H5v4h1v5H4V9H2v12h7v-5a3 3 0 0 1 6 0v5h7V9h-2zm-10-1H8V7h2zm6 0h-2V7h2z"></path></svg>
                        <h4 class="text-2xl text-teal-500 mb-2 font-medium">Visual<br>
                            Page Builder</h4>
                        <p class="text-gray-500 ">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                    </div>
                    <div class="px-8">
                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 11h-2V6h1V2h-2v2h-1V2h-2v2h-1V2h-2v2h-1V2H8v2H7V2H5v4h1v5H4V9H2v12h7v-5a3 3 0 0 1 6 0v5h7V9h-2zm-10-1H8V7h2zm6 0h-2V7h2z"></path></svg>
                        <h4 class="text-2xl text-teal-500 mb-2 font-medium">Visual<br>
                            Page Builder</h4>
                        <p class="text-gray-500 ">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="h-1 bg-slate-400 opacity-25 mt-11">
    </section>

    {{-- contenido --}}
    <section class="mt-24">
        <h3 class="text-gray-500 font-semibold text-3xl text-center">Some of our latest project</h3>
        <div class="max-w-6xl mx-auto  px-4 py-14 grid grid-cols-3 gap-6">
            <div class="rounded-sm shadow-md"><img src="{{asset('img\carrusell\magazine-min.jpg')}}" alt=""></div>
            <div class="rounded-sm shadow-md"><img src="{{asset('img\carrusell\magazine-min.jpg')}}" alt=""></div>
            <div class="rounded-sm shadow-md"><img src="{{asset('img\carrusell\magazine-min.jpg')}}" alt=""></div>
        </div>
        <div class="text-center py-10">
            <button
            class="middle none center mr-4 rounded-lg bg-blue-900 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true">
            View all Project
        </button>
        </div>
    </section>
    {{-- contenido --}}
    <section class="bg-gray-200 mt-24 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-gray-500 font-semibold text-3xl text-center py-10">We provide <br> amazing services</h2>
            <div class="grid grid-cols-3 gap-8 mx-10">
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M17.13 9.68 22 11.8v-.11c-.07-.24-.28-.45-.7-.87l-2-2-2.07.87zM12.2 7.24a1.31 1.31 0 0 1 .16.47l3 1.29a1.11 1.11 0 0 1 .29-.14l.48-3-2-2-1.95 3.3s0 .05.02.08zM10.61 7a1.1 1.1 0 0 1 1-.2h.05l2.16-3.34-.66-.66c-.42-.42-.63-.63-.87-.7a1 1 0 0 0-.63 0c-.24.07-.45.28-.87.7l-3 3c.31.14 2.5 1.06 2.78 1.19zm-3.12 5.29h.27a1.45 1.45 0 0 1 .29 0l2.38-3.68v-.06a1 1 0 0 1-.27-.95L9 7l-1.7-.73L5 8.61l2.51 3.66zm7.62-2.44v-.08a.59.59 0 0 1 0-.14l-2.86-1.27h-.05a1.05 1.05 0 0 1-.88.47h-.17s-.05 0-.06.05L8.73 12.5v.05l6.33-2.7s.05.02.05 0zm1.36-.91a.83.83 0 0 1 .26.19l2-.84-1.89-1.87-.4 2.47zm-2.29 5.54A.91.91 0 0 1 15 14v-.05l.54-3.37-.09-.08L9 13.15a2.76 2.76 0 0 1 .08.27zM2 11.95zm12.14 3.18L8.92 14v.06L13.47 21l.42-.43c.15-.92.71-4.33.78-4.72a.9.9 0 0 1-.53-.72zm1.65.32a.88.88 0 0 1-.36.27l-.64 3.94L18.43 16zm1.07-5.13a.07.07 0 0 0-.06 0 .92.92 0 0 1-.61.34v.06l-.55 3.4a.88.88 0 0 1 .34.62h.06l2.95.61 2.28-2.28a4.22 4.22 0 0 0 .65-.74zM8.3 14.59a1.27 1.27 0 0 1-.86 0l-1.22 1.9 4.69 4.68a2.68 2.68 0 0 0 .87.71 1 1 0 0 0 .63 0 1.86 1.86 0 0 0 .7-.54l-4.69-6.8zm4.71 6.82zm-6.62-7.82s.06 0 .06-.05 0 0-.06 0l-4.14-.86a7.07 7.07 0 0 0 .51.54l1.36 1.36 2.27-1zm.28-.66a1.05 1.05 0 0 1 .2-.27v-.06C6.1 11.4 5.3 10.24 4.5 9.07l-1.75 1.75c-.42.42-.63.63-.7.87A.75.75 0 0 0 2 12l4.67 1zm.17 1.33a.61.61 0 0 1-.07-.1L4.59 15l1.08 1.1 1.17-1.82s.01-.02 0-.02z"></path></svg>
                    <h3 class="text-gray-900 font-medium text-2xl py-4">Application<br>Development</h3>
                    <p class="text-gray-500">It is a long established fact that reader will be distracted by the content of the layout of the page.</p>
                    <div class="mt-6">
                        <a class="flex justify-between" href="">
                            <span class="font-medium">Continue Reading</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M17.13 9.68 22 11.8v-.11c-.07-.24-.28-.45-.7-.87l-2-2-2.07.87zM12.2 7.24a1.31 1.31 0 0 1 .16.47l3 1.29a1.11 1.11 0 0 1 .29-.14l.48-3-2-2-1.95 3.3s0 .05.02.08zM10.61 7a1.1 1.1 0 0 1 1-.2h.05l2.16-3.34-.66-.66c-.42-.42-.63-.63-.87-.7a1 1 0 0 0-.63 0c-.24.07-.45.28-.87.7l-3 3c.31.14 2.5 1.06 2.78 1.19zm-3.12 5.29h.27a1.45 1.45 0 0 1 .29 0l2.38-3.68v-.06a1 1 0 0 1-.27-.95L9 7l-1.7-.73L5 8.61l2.51 3.66zm7.62-2.44v-.08a.59.59 0 0 1 0-.14l-2.86-1.27h-.05a1.05 1.05 0 0 1-.88.47h-.17s-.05 0-.06.05L8.73 12.5v.05l6.33-2.7s.05.02.05 0zm1.36-.91a.83.83 0 0 1 .26.19l2-.84-1.89-1.87-.4 2.47zm-2.29 5.54A.91.91 0 0 1 15 14v-.05l.54-3.37-.09-.08L9 13.15a2.76 2.76 0 0 1 .08.27zM2 11.95zm12.14 3.18L8.92 14v.06L13.47 21l.42-.43c.15-.92.71-4.33.78-4.72a.9.9 0 0 1-.53-.72zm1.65.32a.88.88 0 0 1-.36.27l-.64 3.94L18.43 16zm1.07-5.13a.07.07 0 0 0-.06 0 .92.92 0 0 1-.61.34v.06l-.55 3.4a.88.88 0 0 1 .34.62h.06l2.95.61 2.28-2.28a4.22 4.22 0 0 0 .65-.74zM8.3 14.59a1.27 1.27 0 0 1-.86 0l-1.22 1.9 4.69 4.68a2.68 2.68 0 0 0 .87.71 1 1 0 0 0 .63 0 1.86 1.86 0 0 0 .7-.54l-4.69-6.8zm4.71 6.82zm-6.62-7.82s.06 0 .06-.05 0 0-.06 0l-4.14-.86a7.07 7.07 0 0 0 .51.54l1.36 1.36 2.27-1zm.28-.66a1.05 1.05 0 0 1 .2-.27v-.06C6.1 11.4 5.3 10.24 4.5 9.07l-1.75 1.75c-.42.42-.63.63-.7.87A.75.75 0 0 0 2 12l4.67 1zm.17 1.33a.61.61 0 0 1-.07-.1L4.59 15l1.08 1.1 1.17-1.82s.01-.02 0-.02z"></path></svg>
                    <h3 class="text-gray-900 font-medium text-2xl py-4">Digital<br>Marketing</h3>
                    <p class="text-gray-500">It is a long established fact that reader will be distracted by the content of the layout of the page.</p>
                    <div class="mt-6">
                        <a class="flex justify-between" href="">
                            <span class="font-medium">Continue Reading</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M17.13 9.68 22 11.8v-.11c-.07-.24-.28-.45-.7-.87l-2-2-2.07.87zM12.2 7.24a1.31 1.31 0 0 1 .16.47l3 1.29a1.11 1.11 0 0 1 .29-.14l.48-3-2-2-1.95 3.3s0 .05.02.08zM10.61 7a1.1 1.1 0 0 1 1-.2h.05l2.16-3.34-.66-.66c-.42-.42-.63-.63-.87-.7a1 1 0 0 0-.63 0c-.24.07-.45.28-.87.7l-3 3c.31.14 2.5 1.06 2.78 1.19zm-3.12 5.29h.27a1.45 1.45 0 0 1 .29 0l2.38-3.68v-.06a1 1 0 0 1-.27-.95L9 7l-1.7-.73L5 8.61l2.51 3.66zm7.62-2.44v-.08a.59.59 0 0 1 0-.14l-2.86-1.27h-.05a1.05 1.05 0 0 1-.88.47h-.17s-.05 0-.06.05L8.73 12.5v.05l6.33-2.7s.05.02.05 0zm1.36-.91a.83.83 0 0 1 .26.19l2-.84-1.89-1.87-.4 2.47zm-2.29 5.54A.91.91 0 0 1 15 14v-.05l.54-3.37-.09-.08L9 13.15a2.76 2.76 0 0 1 .08.27zM2 11.95zm12.14 3.18L8.92 14v.06L13.47 21l.42-.43c.15-.92.71-4.33.78-4.72a.9.9 0 0 1-.53-.72zm1.65.32a.88.88 0 0 1-.36.27l-.64 3.94L18.43 16zm1.07-5.13a.07.07 0 0 0-.06 0 .92.92 0 0 1-.61.34v.06l-.55 3.4a.88.88 0 0 1 .34.62h.06l2.95.61 2.28-2.28a4.22 4.22 0 0 0 .65-.74zM8.3 14.59a1.27 1.27 0 0 1-.86 0l-1.22 1.9 4.69 4.68a2.68 2.68 0 0 0 .87.71 1 1 0 0 0 .63 0 1.86 1.86 0 0 0 .7-.54l-4.69-6.8zm4.71 6.82zm-6.62-7.82s.06 0 .06-.05 0 0-.06 0l-4.14-.86a7.07 7.07 0 0 0 .51.54l1.36 1.36 2.27-1zm.28-.66a1.05 1.05 0 0 1 .2-.27v-.06C6.1 11.4 5.3 10.24 4.5 9.07l-1.75 1.75c-.42.42-.63.63-.7.87A.75.75 0 0 0 2 12l4.67 1zm.17 1.33a.61.61 0 0 1-.07-.1L4.59 15l1.08 1.1 1.17-1.82s.01-.02 0-.02z"></path></svg>
                    <h3 class="text-gray-900 font-medium text-2xl py-4">Mobile<br>Application</h3>
                    <p class="text-gray-500">It is a long established fact that reader will be distracted by the content of the layout of the page.</p>
                    <div class="mt-6">
                        <a class="flex justify-between" href="">
                            <span class="font-medium">Continue Reading</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M17.13 9.68 22 11.8v-.11c-.07-.24-.28-.45-.7-.87l-2-2-2.07.87zM12.2 7.24a1.31 1.31 0 0 1 .16.47l3 1.29a1.11 1.11 0 0 1 .29-.14l.48-3-2-2-1.95 3.3s0 .05.02.08zM10.61 7a1.1 1.1 0 0 1 1-.2h.05l2.16-3.34-.66-.66c-.42-.42-.63-.63-.87-.7a1 1 0 0 0-.63 0c-.24.07-.45.28-.87.7l-3 3c.31.14 2.5 1.06 2.78 1.19zm-3.12 5.29h.27a1.45 1.45 0 0 1 .29 0l2.38-3.68v-.06a1 1 0 0 1-.27-.95L9 7l-1.7-.73L5 8.61l2.51 3.66zm7.62-2.44v-.08a.59.59 0 0 1 0-.14l-2.86-1.27h-.05a1.05 1.05 0 0 1-.88.47h-.17s-.05 0-.06.05L8.73 12.5v.05l6.33-2.7s.05.02.05 0zm1.36-.91a.83.83 0 0 1 .26.19l2-.84-1.89-1.87-.4 2.47zm-2.29 5.54A.91.91 0 0 1 15 14v-.05l.54-3.37-.09-.08L9 13.15a2.76 2.76 0 0 1 .08.27zM2 11.95zm12.14 3.18L8.92 14v.06L13.47 21l.42-.43c.15-.92.71-4.33.78-4.72a.9.9 0 0 1-.53-.72zm1.65.32a.88.88 0 0 1-.36.27l-.64 3.94L18.43 16zm1.07-5.13a.07.07 0 0 0-.06 0 .92.92 0 0 1-.61.34v.06l-.55 3.4a.88.88 0 0 1 .34.62h.06l2.95.61 2.28-2.28a4.22 4.22 0 0 0 .65-.74zM8.3 14.59a1.27 1.27 0 0 1-.86 0l-1.22 1.9 4.69 4.68a2.68 2.68 0 0 0 .87.71 1 1 0 0 0 .63 0 1.86 1.86 0 0 0 .7-.54l-4.69-6.8zm4.71 6.82zm-6.62-7.82s.06 0 .06-.05 0 0-.06 0l-4.14-.86a7.07 7.07 0 0 0 .51.54l1.36 1.36 2.27-1zm.28-.66a1.05 1.05 0 0 1 .2-.27v-.06C6.1 11.4 5.3 10.24 4.5 9.07l-1.75 1.75c-.42.42-.63.63-.7.87A.75.75 0 0 0 2 12l4.67 1zm.17 1.33a.61.61 0 0 1-.07-.1L4.59 15l1.08 1.1 1.17-1.82s.01-.02 0-.02z"></path></svg>
                    <h3 class="text-gray-900 font-medium text-2xl py-4">Content<br>Management</h3>
                    <p class="text-gray-500">It is a long established fact that reader will be distracted by the content of the layout of the page.</p>
                    <div class="mt-6">
                        <a class="flex justify-between" href="">
                            <span class="font-medium">Continue Reading</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M17.13 9.68 22 11.8v-.11c-.07-.24-.28-.45-.7-.87l-2-2-2.07.87zM12.2 7.24a1.31 1.31 0 0 1 .16.47l3 1.29a1.11 1.11 0 0 1 .29-.14l.48-3-2-2-1.95 3.3s0 .05.02.08zM10.61 7a1.1 1.1 0 0 1 1-.2h.05l2.16-3.34-.66-.66c-.42-.42-.63-.63-.87-.7a1 1 0 0 0-.63 0c-.24.07-.45.28-.87.7l-3 3c.31.14 2.5 1.06 2.78 1.19zm-3.12 5.29h.27a1.45 1.45 0 0 1 .29 0l2.38-3.68v-.06a1 1 0 0 1-.27-.95L9 7l-1.7-.73L5 8.61l2.51 3.66zm7.62-2.44v-.08a.59.59 0 0 1 0-.14l-2.86-1.27h-.05a1.05 1.05 0 0 1-.88.47h-.17s-.05 0-.06.05L8.73 12.5v.05l6.33-2.7s.05.02.05 0zm1.36-.91a.83.83 0 0 1 .26.19l2-.84-1.89-1.87-.4 2.47zm-2.29 5.54A.91.91 0 0 1 15 14v-.05l.54-3.37-.09-.08L9 13.15a2.76 2.76 0 0 1 .08.27zM2 11.95zm12.14 3.18L8.92 14v.06L13.47 21l.42-.43c.15-.92.71-4.33.78-4.72a.9.9 0 0 1-.53-.72zm1.65.32a.88.88 0 0 1-.36.27l-.64 3.94L18.43 16zm1.07-5.13a.07.07 0 0 0-.06 0 .92.92 0 0 1-.61.34v.06l-.55 3.4a.88.88 0 0 1 .34.62h.06l2.95.61 2.28-2.28a4.22 4.22 0 0 0 .65-.74zM8.3 14.59a1.27 1.27 0 0 1-.86 0l-1.22 1.9 4.69 4.68a2.68 2.68 0 0 0 .87.71 1 1 0 0 0 .63 0 1.86 1.86 0 0 0 .7-.54l-4.69-6.8zm4.71 6.82zm-6.62-7.82s.06 0 .06-.05 0 0-.06 0l-4.14-.86a7.07 7.07 0 0 0 .51.54l1.36 1.36 2.27-1zm.28-.66a1.05 1.05 0 0 1 .2-.27v-.06C6.1 11.4 5.3 10.24 4.5 9.07l-1.75 1.75c-.42.42-.63.63-.7.87A.75.75 0 0 0 2 12l4.67 1zm.17 1.33a.61.61 0 0 1-.07-.1L4.59 15l1.08 1.1 1.17-1.82s.01-.02 0-.02z"></path></svg>
                    <h3 class="text-gray-900 font-medium text-2xl py-4">Project<br>Administration</h3>
                    <p class="text-gray-500">It is a long established fact that reader will be distracted by the content of the layout of the page.</p>
                    <div class="mt-6">
                        <a class="flex justify-between" href="">
                            <span class="font-medium">Continue Reading</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M17.13 9.68 22 11.8v-.11c-.07-.24-.28-.45-.7-.87l-2-2-2.07.87zM12.2 7.24a1.31 1.31 0 0 1 .16.47l3 1.29a1.11 1.11 0 0 1 .29-.14l.48-3-2-2-1.95 3.3s0 .05.02.08zM10.61 7a1.1 1.1 0 0 1 1-.2h.05l2.16-3.34-.66-.66c-.42-.42-.63-.63-.87-.7a1 1 0 0 0-.63 0c-.24.07-.45.28-.87.7l-3 3c.31.14 2.5 1.06 2.78 1.19zm-3.12 5.29h.27a1.45 1.45 0 0 1 .29 0l2.38-3.68v-.06a1 1 0 0 1-.27-.95L9 7l-1.7-.73L5 8.61l2.51 3.66zm7.62-2.44v-.08a.59.59 0 0 1 0-.14l-2.86-1.27h-.05a1.05 1.05 0 0 1-.88.47h-.17s-.05 0-.06.05L8.73 12.5v.05l6.33-2.7s.05.02.05 0zm1.36-.91a.83.83 0 0 1 .26.19l2-.84-1.89-1.87-.4 2.47zm-2.29 5.54A.91.91 0 0 1 15 14v-.05l.54-3.37-.09-.08L9 13.15a2.76 2.76 0 0 1 .08.27zM2 11.95zm12.14 3.18L8.92 14v.06L13.47 21l.42-.43c.15-.92.71-4.33.78-4.72a.9.9 0 0 1-.53-.72zm1.65.32a.88.88 0 0 1-.36.27l-.64 3.94L18.43 16zm1.07-5.13a.07.07 0 0 0-.06 0 .92.92 0 0 1-.61.34v.06l-.55 3.4a.88.88 0 0 1 .34.62h.06l2.95.61 2.28-2.28a4.22 4.22 0 0 0 .65-.74zM8.3 14.59a1.27 1.27 0 0 1-.86 0l-1.22 1.9 4.69 4.68a2.68 2.68 0 0 0 .87.71 1 1 0 0 0 .63 0 1.86 1.86 0 0 0 .7-.54l-4.69-6.8zm4.71 6.82zm-6.62-7.82s.06 0 .06-.05 0 0-.06 0l-4.14-.86a7.07 7.07 0 0 0 .51.54l1.36 1.36 2.27-1zm.28-.66a1.05 1.05 0 0 1 .2-.27v-.06C6.1 11.4 5.3 10.24 4.5 9.07l-1.75 1.75c-.42.42-.63.63-.7.87A.75.75 0 0 0 2 12l4.67 1zm.17 1.33a.61.61 0 0 1-.07-.1L4.59 15l1.08 1.1 1.17-1.82s.01-.02 0-.02z"></path></svg>
                    <h3 class="text-gray-900 font-medium text-2xl py-4">Application<br>Development</h3>
                    <p class="text-gray-500">It is a long established fact that reader will be distracted by the content of the layout of the page.</p>
                    <div class="mt-6">
                        <a class="flex justify-between" href="">
                            <span class="font-medium">Continue Reading</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    {{-- contenido --}}
    <section class="mt-24 "> 

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-gray-500 font-semibold text-3xl text-center py-10">
                Testimoniales
            </h2>
            <div class="grid grid-cols-3 gap-8">
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <img class="object-cover w-12 h-12 rounded-full" src="{{asset('img\Jonh_Cena.jpeg')}}" alt="">
                    <h4 class="text-gray-900 font-medium text-2xl py-4">John Cena</h4>
                    <span class="font-medium ">Ceo de Grupo CCIMA</span>
                    <p class="text-gray-500 mt-3">It is a long established fact that reader will be distracted by the content of the layout of the page.</p>
                </div>
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <img class="object-cover w-12 h-12 rounded-full" src="{{asset('img\Jonh_Cena.jpeg')}}" alt="">
                    <h4 class="text-gray-900 font-medium text-2xl py-4">John Cena</h4>
                    <span class="font-medium ">Ceo de Grupo CCIMA</span>
                    <p class="text-gray-500 mt-3">It is a long established fact that reader will be distracted by the content of the layout of the page.</p>
                </div>
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <img class="object-cover w-12 h-12 rounded-full" src="{{asset('img\Jonh_Cena.jpeg')}}" alt="">
                    <h4 class="text-gray-900 font-medium text-2xl py-4">John Cena</h4>
                    <span class="font-medium ">Ceo de Grupo CCIMA</span>
                    <p class="text-gray-500 mt-3">It is a long established fact that reader will be distracted by the content of the layout of the page.</p>
                </div>
            </div>

        </div>
    </section>
    {{-- Empresas --}}
    <section class="bg-black mt-24 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2">
                <div class="flex justify-center items-center">
                    <h2 class="text-white text-3xl mb-4 font-medium"> An independent design & branding agency based in melbourne australia</h2>
                </div>
                <div class="">
                    <div class="grid grid-cols-3 gap-4"> 
                        <div class="bg-white rounded-sm p-4">
                            <img src="{{asset('img/logos/capital_ccima.svg')}}" alt="">
                        </div>
                        <div class="bg-white rounded-sm p-4">
                            <img src="{{asset('img/logos/construye_w.svg')}}" alt="">
                        </div>
                        <div class="bg-white rounded-sm p-4">
                            <img src="{{asset('img/logos/porttoblanco.svg')}}" alt="">
                        </div>
                        <div class="bg-white rounded-sm p-4">
                            <img src="{{asset('img/logos/rent_solutions.svg')}}" alt="">
                        </div>
                        <div class="bg-white rounded-sm p-4">
                            <img src="{{asset('img/logos/capital_ccima.svg')}}" alt="">
                        </div>
                        <div class="bg-white rounded-sm p-4">
                            <img src="{{asset('img/logos/construye_w.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Formulario --}}
    <section class="mt-24 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                <div class="">
                    <img class="" src="{{asset('img\carrusell\magazine-min.jpg')}}" alt="">
                </div>
                <div class="p-6">
                    <h3 class="text-gray-500 font-semibold text-3xl text-center py-2 ">¿No Tienes un Usuario?<br>Levanta tu Ticket Aqui</h3>
                    <form class="pt-4" action="" method="POST">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                          <input type="text" id="fname" name="fname" placeholder="Nombre" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">
                          <input type="text" id="fname" name="fname" placeholder="Telefono" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                          <div class="md:col-span-2">
                            <input type="email" id="email" name="email" placeholder="E-mail" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                          </div>
                          <div class="md:col-span-2">
                            <label for="subject" class="float-left block  font-normal text-gray-400 text-lg">Departamento del Solicitante</label>
                            <select id="subject" name="subject" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                              <option value="" disabled selected>Comercial</option>
                              <option value="Option-1">Recursos Humanos</option>
                              <option value="Option-2">Navetec</option>
                              <option value="Option-3">Habitta</option>
                              <option value="Option-4">Proyectos</option>
                            </select>
                          </div>
                          
                          <div class="md:col-span-2">
                            <label for="subject" class="float-left block  font-normal text-gray-400 text-lg">En caso de tener un Archivo de Referencia agregarlo</label>
                            <input type="file" id="file" name="file" placeholder="Charger votre fichier" class="peer block w-full appearance-none border-none   bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0">
                            <span class="text-pretty text-gray-600">Solo Formatos:  jpeg, jpg, gif, pdf, png</span>
                        </div>
                          <div class="md:col-span-2">
                            <textarea name="message" rows="5" cols="" placeholder="Agrega un Mensaje" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700"></textarea>
                          </div>
                          <!-- <div class="md:col-span-2">
                            <input type="checkbox" name="" id="" class="mr-2 sm:m-1"> 
                            <label for="" class="text-sm col-span-2">
                              Autoriser OC à vous envoyer des lettres d'information par E-mail. 
                            </label>
                          </div> -->
                          <div class="md:col-span-2">
                            <button class="py-3 text-base font-medium rounded text-white bg-blue-800 w-full hover:bg-blue-700 transition duration-300">Guardar Ticket</button>
                          </div>
                        </div><!-- Grid End -->
                      </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-black mt-24 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2">
                <div class="flex justify-center items-center">
                    <h2 class="text-white text-3xl mb-4 font-medium"> An independent design & branding agency based in melbourne australia</h2>
                </div>
                <div class="">
                    <div class="grid grid-cols-2">
                        <div class="">
                            <span class="text-white font-semibold">Otros Enlaces</span>
                            <ul class="text-white text-decoration-none">
                                <li class="pt-1"><a href="">Ticket TI</a></li>
                                <li class="pt-1"><a href="">Intranet</a></li>
                                <li class="pt-1"><a href="">Porttoblanco</a></li>
                                <li class="pt-1"><a href="">Navetec</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <span class="text-white font-semibold">Contacto</span>
                            <ul class="text-white text-decoration-none">
                                <li><a href="">alan.gonzalez@grupoccima.com.mx</a></li>
                                <li><a href="">Intranet</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>
