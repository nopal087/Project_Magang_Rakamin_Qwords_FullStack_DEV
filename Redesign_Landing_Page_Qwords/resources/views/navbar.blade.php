<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-xxx" crossorigin="anonymous" />


</head>

<body>


    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp"
                    class="h-8 mr-3" alt="Flowbite Logo">
            </a>
            <div class="flex md:order-2">
                <button type="button"
                    class="text-yellow-300 hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium text-yellow-300 px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900 rounded-full hover:rounded-full">
                    Daftar
                </button>
                <button type="button"
                    class="text-white bg-yellow-300 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-0 dark:focus:ring-yellow-900">Login
                </button>

                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Cloud Hosting <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div id="mega-menu-dropdown"
                                class="absolute z-10 grid hidden w-auto grid-cols-1 md:grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud hosting/Value Cloud Hsting.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Value Cloud Hosting
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Harga Ekonomis dengan <br> Performance optimal</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud hosting/High Peformance Enterprise.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        High Performance Enterprice
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Hosting dengan
                                                        dedicate <br> Resources Tanpa Gangguan & batasan</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud hosting/Unlimited Hosting.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Unlimited Hosting Hosting
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Hosting
                                                        dengan <br>
                                                        unlimited resource yang dapat diandalkan</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud hosting/High Performance Bisnis.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        High Performance Bisnis
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Untuk perusahaan,
                                                        e-commerce, <br> startup & website e-learning</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud hosting/Wordpress Hosting.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Wordpress Hosting
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Hosting Khusus
                                                        Bagi anda yang menggunakan CMS Wordpress</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/cloud hosting/Private Label cPanel Reseller.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Private Label cPanel Resseler
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Bergabung dan mulai
                                                        <br>
                                                        bisnis sukses bersama Qwords
                                                    </p>
                                                </div>

                                            </a>
                                        </div>

                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div id="mega-menu-server"
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-2">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li>
                            <button id="mega-menu-server-dropdown-button"
                                data-dropdown-toggle="mega-menu-server-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Server <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div id="mega-menu-server-dropdown"
                                class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/server/Cloud VPS KVM SSD.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Cloud VPS KVM SSD
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        KVM UltraFast dengan Easy <br> Install dan OS Terbaru</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/server/Dedicated Server.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Dedicate Server
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Multiple Internet Connection up <br> to 10Gbps, Monitoring 24/7
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/server/Leased To Owned.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Leased To Owned Server
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Sekarang sewa, nanti
                                                        <br>
                                                        jadi hak milik anda!
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/server/Server Sekolah.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Server Sekolah CBT/Moodle
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Untuk kebutuhan
                                                        E-Learning, <br> ujian sekolah, dsb</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/server/Colocation Server.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Colocation Server
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">99% Uptime Server,
                                                        <br>
                                                        UPS Backup, On-site dan offsite MOnitoring
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/server/Fleksibel VPS.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Fleksibel VPS
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">KVM Pay as your <br>
                                                        Growth! Mulai Rp. 200/jam</p>
                                                </div>

                                            </a>
                                        </div>

                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div id="mega-menu-domain"
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-2">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li>
                            <button id="mega-menu-domain-dropdown-button"
                                data-dropdown-toggle="mega-menu-domain-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Domain <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div id="mega-menu-domain-dropdown"
                                class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/domain/Daftar Domain.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Daftar Domain
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Miliki domain terbaik untuk <br> identitas website anda</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/domain/Domain Backorder.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Domain Backorder
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Dapatkan domain berkualitas <br> yang tidak diperbarui
                                                        pemiliknya</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/domain/Sewa Domain.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Sewa Domain
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Dapatkan Domain Premium <br> tanpa bayar biaya penuh</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/domain/Domain Negotiator.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Domain Negotiator/Broker
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Broker negosiasikan harga terbaik <br> untuk domain impian anda
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/domain/Domain Premium.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Domain Premium.id
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Domain premium
                                                        berkualitas <br> untuk website anda</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/domain/Domain Privacy.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Domain Privacy Protection
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Lindungi data
                                                        Pribadi <br> dan rahasia anda dari publik</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/domain/Jual-beli Domain.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Jual beli & lelang domain
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Untung berlipat <br>
                                                        dengan domain cantik dengan sistem lelang</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/domain/Private Label Domain.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Private Label Domain Reseller
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Paket Resseler <br>
                                                        Domain dengan harga yang bersaing</p>
                                                </div>

                                            </a>
                                        </div>

                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div id="mega-menu-email"
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-2">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-email-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Email Suite <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div id="mega-menu-email-dropdown"
                                class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/menu/email suite/titanemail-icon.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Titan Email
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Bisnis tampil profesional <br> dengan email domain khusus dari
                                                        Titan
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/email suite/office365.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Microsoft 365
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Untuk meningkatkan produktivitas <br> kerja perusahaan anda</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/email suite/Mailtogo.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Mailtogo
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Marketing online lebih mudah <br> dijalankan melalui Mailtogo
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/email suite/EC Suite.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        EC Collaboration Suite
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Email Premium dengan kapasitas <br> 25Gb hingga 1000 akun</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/email suite/google-workspace.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Google Workspace
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Layanan premium dari
                                                        <br>
                                                        google dengan nama domain anda
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div id="mega-menu-service"
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-2">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-service-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Services <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div id="mega-menu-service-dropdown"
                                class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/SSL.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        SSL
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Amankan Komunikasi <br> Data anda
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/Extend Support.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Extended Support
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Bantuan Ekstra untuk <br> akun hosting Cpanel</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/License.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Licences
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Lisensi software <br> bagi bisnis anda</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/Hosting Insurance.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Hosting Insurance
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Asuransi Downtime <br> untuk Hosting</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/VPN.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Diego VPN
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Private Network yang
                                                        <br>
                                                        aman super cepat, <br> dan easy to use
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/Advance Backup.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Advance Backup
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Advanced Backup <br> berbasis acronis
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/Offline Backup.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Offline Backup
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Backup Offline dari <br> server anda</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/Digital Signature.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Digital Signature
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Tandatangani dokumen <br> online dengan mudah</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/Box Server.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Manage The Box Server
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Manage Service untuk <br> mengatur server anda</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/services/nas-asustor.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        NAS Author
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white">Backup Server yang
                                                        <br>
                                                        mudah digunakan <br> bergaransi 3 Tahun
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                            </div>
                        </li>

                    </ul>
                </div>

                <div id="mega-menu-internet"
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-2">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-internet-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Internet <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div id="mega-menu-internet-dropdown"
                                class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/internet access/Broadband Home.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        BroadBand Home
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Internet untuk kebutuhan rumah <br>
                                                        dengan koneksi stabil tanpa<br>
                                                        buffering <br>
                                                        hingga 1Gbps. Kuota Unlimited
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/internet access/Broadband Wireless.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        BroadBand Wireless
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Internet dengan teknologi Wireless <br>
                                                        Super cepat, bebas FUP <br>
                                                        untuk kebutuhan rumah & bisnis</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/internet access/Broadband Business.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        BroadBand Business
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Jalankan bisnis bisa lebih fokus <br>
                                                        dengan jaringan internet cepat <br>
                                                        koneksi stabil, dan aman</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/internet access/Check Coverage.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Check Coverage
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Mau pasang Internet? <br>
                                                        cek apakah rumah anda <br>
                                                        tercover internet Qwords</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div id="mega-menu-customer"
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-2">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-customer-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 font-large font-bold ">
                                Customer Care <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div id="mega-menu-customer-dropdown"
                                class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/customer-care/Pembayaran.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Pembayaran
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        informasi lengkap seputar cara <br>
                                                        bayar, konfirmasi bayar faktur <br>
                                                        pajak.
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/customer-care/Knowledge Base.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Knolage Base
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Panduan yang lengkap, <br>
                                                        informasi mengenai Hosting, Website, <br>
                                                        dll.
                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/customer-care/Blog.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Blog
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Temukan tips & artikel menarik <br>
                                                        seputar Hosting, domain, website <br>
                                                        dan internet di sini.</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>

                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/customer-care/Bantuan.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Bantuan 24 jam
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Tim support kami akan membantu <br>
                                                        menyelesaikan masalah <br>
                                                        secara solutif & respon cepat, 24/7</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/customer-care/FAQ 2.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        FAQ
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Temukan Jawaban dari pertanyaam <br>
                                                        yang paling sering diajukan disini</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <div
                                            class="text-black hover:bg-yellow-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-md text-black px-5 py-2 text-center mr-2 mb-0 dark:focus:ring-yellow-900">

                                            <a href="#" class="flex items-center">
                                                <img src="https://qwords.com/wp-content/themes/qwords/assets/images/icons/menu/customer-care/Kontak.webp"
                                                    alt="" class="w-12 h-12">
                                                <div class="ml-2 text-left">
                                                    <h1
                                                        class="text-lg font-large font-bold text-black hover:text-white">
                                                        Kontak
                                                    </h1>
                                                    <p class="text-sm text-black hover:text-white whitespace-nowrap">
                                                        Butuh informasi lebih lanjut? <br>
                                                        Kunjungi Outlet kami atau hubungi <br>
                                                        melalui call center, live chat, <br>
                                                        dan media sosial</p>
                                                </div>

                                            </a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>


            </div>
        </div>
    </nav>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


</html>
