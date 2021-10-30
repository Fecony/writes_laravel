@extends('layouts.base')

@section('body')
    <section class="flex flex-row h-screen bg-coolGray-50" x-data
             x-init="$store.sidebar = $store.preview = window.outerWidth > 768"
    >
        <aside :class="$store.sidebar ? 'translate-x-0' : '-translate-x-full'" x-cloak="mobile"
               class="fixed flex flex-col flex-shrink-0 top-0 left-0 h-full overflow-x-hidden overflow-y-auto transition origin-left transform w-full md:w-72 bg-warmGray-100"
        >
            <header class="flex flex-none items-center justify-between w-full px-7 h-16">
                <button
                    class="flex items-center space-x-1 py-1 px-2 capitalize font-bold text-xs bg-warmGray-200 text-gray-900 rounded hover:bg-warmGray-300 focus:outline-none focus:bg-warmGray-300">
                    <x-eva-chevron-left class="w-5 h-5"/>
                    <span>Back</span>
                </button>

                <button type="button" class="block" @click.stop="$store.sidebar = false" x-show="$store.sidebar"
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
                <img
                    src="https://images.unsplash.com/photo-1569913486515-b74bf7751574?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&facepad=2&fit=facearea&w=256&h=256&q=80"
                    alt="Your Profile Image" class="w-7 h-7 rounded-full">
                <a class="flex items-center space-x-5 capitalize leading-tight font-medium transition text-base text-gray-400 hover:text-gray-900 focus:text-gray-900"
                   href="#">
                    <span>Log Out</span>
                    <x-eva-log-out-outline class="w-5 h-5"/>
                </a>
            </div>
        </aside>

        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </section>
{{--    <div x-data>--}}
{{--        <div x-show="$store.modal.open === 'login'">--}}
{{--            <p>--}}
{{--                This "login" modal isn't built with a11y in mind, don't actually use it--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div x-data>--}}
{{--        <div x-show="$store.modal.open === 'register'">--}}
{{--            <p>--}}
{{--                This "register" modal isn't built with a11y in mind, don't actually use it--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div x-data>--}}
{{--        <select x-model="$store.modal.open">--}}
{{--            <option value="login" selected>login</option>--}}
{{--            <option value="register">register</option>--}}
{{--        </select>--}}
{{--    </div>--}}
@endsection
