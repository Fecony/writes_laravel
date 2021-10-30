<div class="flex flex-col flex-none origin-right fixed p-4 bg-coolGray-50 h-full w-full right-0 shadow-sm top-0 transform sm:max-w-sm md:max-w-none md:bg-none md:shadow-none md:p-0 md:h-auto md:static md:w-2/5 lg:w-80 xl:w-90"
     :class="$store.preview ? 'translate-x-0 ease-in transition' : 'translate-x-full ease-out transition'" x-cloak="mobile"
>
    <div class="py-1.5 sm:px-1 cursor-default px-3 lg:px-7 flex flex-none items-center justify-between bg-blue-100 rounded">
        <span class="text-blue-700 text-xs">{{ $characterCount }} characters</span>
        <span class="border-b-2 border-blue-200 w-1/5"></span>
        <span class="text-blue-700 text-xs">{{ $tweetCount }} tweets</span>
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
        <button type="button" @click.stop="$store.preview = false" aria-label="Close Preview"
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
