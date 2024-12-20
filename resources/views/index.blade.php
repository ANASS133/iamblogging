@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Welcome to the Blog
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Explore More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <!-- Image for blogging -->
            <img src="{{ asset('images/blogging.jpg') }}" alt="Blogging Image" width="700">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Blogging Tips for Developers
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Discover how blogging can enhance your coding skills and help you stay up-to-date with the latest trends in development.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Click below to explore more.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Explore
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Learn Blogging to Improve Your Development Skills
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Writing for Developers
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Content Creation
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Tech Writing
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend & Frontend Insights
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            BLOG
        </span>

        <h2 class="text-4xl font-bold py-10">
            Latest Blog Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Stay updated with our latest posts about development, coding tips, and blogging for tech enthusiasts.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    REACTJS
                </span>

                <h3 class="text-xl font-bold py-10">
                    React.js - A Powerful Tool for Modern Web Development
                </h3>

                <a 
                    href="#"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Read More
                </a>
            </div>
        </div>
        <div>
            <!-- Image for ReactJS -->
            <img src="{{ asset('/images/tips.jpg') }}" alt="React Tips" width="700">
        </div>
        <br><br><br>
    </div>
@endsection
