@extends('layouts.app')

@section('content')
    <section class="flex flex-row h-screen bg-coolGray-50"
             x-data="{ isSidebarOpen: true, previewOpen: true }"
             x-init="isSidebarOpen = previewOpen = window.outerWidth > 768"
    >
        <aside :class="isSidebarOpen ? 'translate-x-0' : '-translate-x-full'" x-cloak="mobile"
               class="fixed flex flex-col flex-shrink-0 top-0 left-0 h-full overflow-x-hidden overflow-y-auto transition origin-left transform w-full md:w-72 bg-warmGray-100"
        >
            <header class="flex flex-none items-center justify-between w-full px-7 h-16">
                <button
                    class="flex items-center space-x-1 py-1 px-2 capitalize font-bold text-xs bg-warmGray-200 text-gray-900 rounded hover:bg-warmGray-300 focus:outline-none focus:bg-warmGray-300">
                    <x-eva-chevron-left class="w-5 h-5"/>
                    <span>Back</span>
                </button>

                <button type="button" class="block" @click.stop="isSidebarOpen = false" x-show="isSidebarOpen"
                        aria-label="Close Menu">
                    <span class="sr-only">Close Menu</span>
                    <x-eva-toggle-right-outline class="w-5 h-5 text-rose-600"/>
                </button>
            </header>
            <nav class="flex-1 text-base overflow-auto font-medium space-y-5 mt-3" aria-label="Main Navigation">
                <div>
                    <h3 class="font-bold text-xl px-7 mb-2 text-gray-900 cursor-default">Account Settings</h3>
                    <a class="flex items-center justify-between px-7 py-2 transition cursor-pointer text-trueGray-600 hover:bg-warmGray-200 hover:text-gray-900"
                       href="#">
                        <span>Profile</span>
                        <x-eva-chevron-right class="w-5 h-5"/>
                    </a>
                    <a class="flex items-center justify-between px-7 py-2 transition cursor-pointer text-trueGray-600 hover:bg-warmGray-200 hover:text-gray-900"
                       href="#">
                        <span>Appearance</span>
                        <x-eva-chevron-right class="w-5 h-5"/>
                    </a>
                </div>

                <div>
                    <h3 class="font-bold text-xl px-7 mb-2 text-gray-900 cursor-default">Other</h3>
                    <a class="flex items-center justify-between px-7 py-2 transition cursor-pointer text-trueGray-600 hover:bg-warmGray-200 hover:text-gray-900"
                       href="#">
                        <span>Contact Us</span>
                        <x-eva-chevron-right class="w-5 h-5"/>
                    </a>
                    <a class="flex items-center justify-between px-7 py-2 transition cursor-pointer text-trueGray-600 hover:bg-warmGray-200 hover:text-gray-900"
                       href="#">
                        <span>Privacy Policy</span>
                        <x-eva-external-link-outline class="w-5 h-5"/>
                    </a>
                    <a class="flex items-center justify-between px-7 py-2 transition cursor-pointer text-trueGray-600 hover:bg-warmGray-200 hover:text-gray-900"
                       href="#">
                        <span>Terms Of Use</span>
                        <x-eva-external-link-outline class="w-5 h-5"/>
                    </a>
                    <a class="flex items-center justify-between px-7 py-2 transition cursor-pointer text-trueGray-600 hover:bg-warmGray-200 hover:text-gray-900 group"
                       href="#">
                        <span>Built With</span>
                        <x-eva-heart class="w-5 h-5 text-red-400 group-hover:text-red-500"/>
                    </a>
                </div>
            </nav>
            <div class="w-full flex-shrink-0 mt-auto flex items-center justify-between px-7 h-20">
                <img src="https://images.unsplash.com/photo-1569913486515-b74bf7751574?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&facepad=2&fit=facearea&w=256&h=256&q=80" alt="Your Profile Image" class="w-7 h-7 rounded-full">
                <a class="flex items-center space-x-5 capitalize leading-tight font-medium transition text-base text-gray-400 hover:text-gray-900 focus:text-gray-900"
                   href="#">
                    <span>Log Out</span>
                    <x-eva-log-out-outline class="w-5 h-5"/>
                </a>
            </div>
        </aside>

        <main class="flex flex-col flex-auto bg-coolGray-50 transition" :class="{ 'lg:ml-72' : isSidebarOpen }">
            <header class="flex flex-row flex-none justify-between items-center h-16 px-6">
                <button type="button" @click.stop="isSidebarOpen = true" x-show="!isSidebarOpen" aria-label="Open Menu">
                    <span class="sr-only">Open Menu</span>
                    <x-eva-toggle-left-outline class="w-5 h-5 text-gray-300"/>
                </button>

                <button type="button" class="shadow-sm bg-gray-100 group hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 ml-auto p-3 rounded transition duration-300 ">
                    <span class="sr-only">Enable Dark Theme</span>
                    <x-eva-moon class="w-4 h-4 text-gray-700 group-hover:text-gray-900"></x-eva-moon>
                    {{-- <span class="sr-only">Enable Light Theme</span> --}}
                    {{-- <x-eva-sun class="w-5 h-5 -m2 text-gray-100 group-hover:text-gray-50"></x-eva-sun> --}}
                </button>
            </header>

            <div class="md:flex md:flex-row flex-none grid grid-cols-5 gap-2 mb-2 px-3 md:mb-4 md:-mt-2 md:space-x-2.5" :class="isSidebarOpen ? 'lg:px-7' : 'lg:pl-19 lg:pr-14.5'">
                <button type="button"
                        class="flex justify-center items-center bg-blue-100 hover:bg-blue-200 px-3.5 py-1 rounded transition group">
                    <x-eva-scissors-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>
                </button>

                <button type="button"
                        class="flex justify-center items-center bg-blue-100 hover:bg-blue-200 px-3.5 py-1 rounded transition group">
                    <x-eva-save-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>
                </button>

                <button type="button"
                        class="flex justify-center items-center bg-blue-100 hover:bg-blue-200 px-3.5 py-1 rounded transition group">
                    <x-eva-smiling-face-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>
                </button>

                <button type="button"
                        class="flex justify-center items-center bg-blue-100 hover:bg-blue-200 px-3.5 py-1 rounded transition group">
                    <x-eva-plus-square-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>
                </button>

                <button type="button"
                        class="flex justify-center items-center bg-blue-100 hover:bg-blue-200 px-3.5 py-1 rounded transition group">
                    <x-eva-options-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>
                </button>

                <button type="button"
                        class="flex justify-center items-center bg-blue-100 hover:bg-blue-200 px-3.5 py-1 rounded transition group">
                    <x-eva-clock-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>
                </button>

                <button type="button"
                        class="flex justify-center items-center bg-blue-100 hover:bg-blue-200 px-3.5 py-1 rounded transition group"
                >
                    <x-eva-undo-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>
                </button>

{{--                <button type="button" class="bg-blue-100 flex flex-shrink-0 group hover:bg-blue-200 items-center justify-center px-1 px-2 py-0.5 rounded space-x-1.5 transition">--}}
{{--                    <x-eva-close-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>--}}
{{--                    <span class="text-blue-700 font-medium text-normal">Reply to tweet: 1114755901083140096</span>--}}
{{--                </button>--}}

                <button type="button"
                        aria-label="Open Thread Preview"
                        @click="previewOpen = true"
                        class="block md:hidden flex justify-center items-center bg-blue-100 hover:bg-blue-200 px-3.5 py-1 rounded transition group">
                    <x-eva-layout-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>
                </button>
            </div>

            <div class="flex flex-row flew-auto h-full min-h-0 sm:px-8 md:space-x-4 lg:space-x-14.5 mb-4 px-3" :class="isSidebarOpen ? 'lg:px-7' : 'lg:pl-19 lg:pr-14.5'">
                <div class="flex flex-col flex-auto">
                    <div class="flex-none h-full">
                        <label for="editor"></label>
                        <textarea name="editor" id="editor" placeholder="Gee, Brain. What are we going to do tonight?"
                                  class="w-full h-full outline-none resize-none border border-warmGray-100 bg-coolGray-50 focus:border-blue-600 hover:border-blue-600 transition duration-300 rounded-2xl p-5 text-trueGray-600 placeholder-trueGray-400 text-4xl"
                        ></textarea>
                    </div>
                </div>

                <div class="flex flex-col flex-none origin-right fixed p-4 bg-coolGray-50 h-full w-full right-0 shadow-sm top-0 transform sm:max-w-sm md:max-w-none md:bg-none md:shadow-none md:p-0 md:h-auto md:static md:w-2/5 lg:w-80 xl:w-90"
                     :class="previewOpen ? 'translate-x-0 ease-in transition' : 'translate-x-full ease-out transition'" x-cloak="mobile"
                >
                    <div class="py-1.5 sm:px-1 cursor-default px-3 lg:px-7 flex flex-none items-center justify-between bg-blue-100 rounded">
                        <span class="text-blue-700 text-xs">201 character</span>
                        <span class="border-b-2 border-blue-200 w-1/5"></span>
                        <span class="text-blue-700 text-xs">2 tweets</span>
                    </div>

                    <div class="flex my-4 md:my-7 flex-col space-y-0.5 overflow-y-auto">
                        <article class="flex flex-row h-full">
                            <div class="flex flex-col h-full flex-grow-0 mr-2.5 flex-shrink-0 items-center">
                                <a href="#">
                                    <img class="rounded-full w-12 h-12" alt="avatar"
                                         src="https://images.unsplash.com/photo-1569913486515-b74bf7751574?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&facepad=2&fit=facearea&w=256&h=256&q=80">
                                </a>
                                <span class="mx-auto mt-0.5 w-0.25 bg-blue-200 h-full"></span>
                            </div>

                            <div class="flex flex-col pb-5 space-y-0.5">
                                <div class="flex flex-1 items-center justify-start">
                                    <a href="#" class="flex flex-row group flex-center space-x-1 text-sm">
                                        <h3 class="font-bold text-gray-900 group-hover:text-gray-700">Voyager1</h3>
                                        <span class="text-gray-300">·</span>
                                        <span class="text-gray-400 group-hover:text-gray-500">@voyager1</span>
                                    </a>
                                </div>
                                <div class="w-full leading-4 text-sm text-gray-900">
                                    <p>Hello, world!</p>
                                    <p>I am so happy to use this awesome app!</p>
                                    <p>It allows you to write threads and post them in your twitter without struggle!</p>
                                </div>
                            </div>
                        </article>

                        <article class="flex flex-row h-full">
                            <div class="flex flex-col h-full flex-grow-0 mr-2.5 flex-shrink-0 items-center">
                                <a href="#">
                                    <img class="rounded-full w-12 h-12" alt="avatar"
                                         src="https://images.unsplash.com/photo-1569913486515-b74bf7751574?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&facepad=2&fit=facearea&w=256&h=256&q=80">
                                </a>
                                {{--                 <span class="mx-auto mt-0.5 w-0.25 bg-blue-200 h-full"></span>--}}
                            </div>

                            <div class="flex flex-col pb-5 space-y-0.5">
                                <div class="flex flex-1 items-center justify-start">
                                    <a href="#" class="flex flex-row group flex-center space-x-1 text-sm">
                                        <h3 class="font-bold text-gray-900 group-hover:text-gray-700">Voyager1</h3>
                                        <span class="text-gray-300">·</span>
                                        <span class="text-gray-400 group-hover:text-gray-500">@voyager1</span>
                                    </a>
                                </div>
                                <div class="w-full leading-4 text-sm text-gray-900">
                                    <p>Look!</p>
                                    {{-- TODO: create component to handle multiple images in one tweet--}}
                                    {{--                    <div class="mt-2.5 w-full">--}}
                                    {{--                        <img class="h-32 object-cover rounded-xl w-full" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                    </div>--}}
                                    {{--                    <div class="grid grid-flow-col gap-1 mt-2.5 w-full">--}}
                                    {{--                        <img class="h-32 object-cover rounded-xl w-full" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                        <img class="h-32 object-cover rounded-xl w-full" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                    </div>--}}

                                    {{--                    <div class="grid grid-rows-2 grid-flow-col gap-1 mt-2.5">--}}
                                    {{--                        <img class="h-32 w-full row-span-2 rounded-xl object-cover" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                        <img class="h-full w-full rounded-xl object-cover" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                        <img class="h-full w-full rounded-xl object-cover" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                    </div>--}}
                                    {{--                    <div class="grid grid-rows-2 grid-cols-2 gap-1 mt-2.5">--}}
                                    {{--                        <img class="w-full h-32 rounded-xl object-cover" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                        <img class="w-full h-32 rounded-xl object-cover" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                        <img class="w-full h-32 rounded-xl object-cover" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                        <img class="w-full h-32 rounded-xl object-cover" alt=""--}}
                                    {{--                             src="https://images.unsplash.com/photo-1591635765048-088b34505c45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">--}}
                                    {{--                    </div>--}}
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="mt-auto flex flex-row space-x-2">
                        <button type="button" @click.stop="previewOpen = false" aria-label="Close Preview"
                                class="block md:hidden flex-shrink-0 rounded-lg bg-gray-200 px-3.5"
                        >
                            <span class="sr-only">Close Preview</span>
                            <x-eva-chevron-left class="w-5 h-5 text-gray-700"/>
                        </button>
                        <a href="#" class="transition flex items-center justify-center md:flex-shrink-0 w-full text-white bg-twitter rounded-lg shadow-sm hover:bg-twitter-light">
                            <div class="px-4 py-3">
                                <x-eva-twitter class="w-6 h-6"/>
                            </div>
                            <span class="px-4 py-3 w-5/6 text-center font-bold">Sign in with Twitter</span>
                        </a>
                        {{--                        <button class="w-full transition flex items-center justify-center text-white bg-cyan-500 rounded-lg shadow-sm hover:bg-cyan-400">--}}
                        {{--                            <span class="px-5 py-3 text-center font-bold">Publish</span>--}}
                        {{--                            <x-eva-twitter class="w-6 h-6"/>--}}
                        {{--                        </button>--}}
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
