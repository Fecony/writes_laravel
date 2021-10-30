<main class="flex flex-col flex-auto bg-coolGray-50 transition" :class="{ 'lg:ml-72' : $store.sidebar }">
    <header class="flex flex-row flex-none justify-between items-center h-16 px-6">
        <button type="button" @click.stop="$store.sidebar = true" x-show="$store.sidebar === false" aria-label="Open Menu">
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

    <div class="md:flex md:flex-row flex-none grid grid-cols-5 gap-2 mb-2 px-3 md:mb-4 md:-mt-2 md:space-x-2.5" :class="$store.sidebar ? 'lg:px-7' : 'lg:pl-19 lg:pr-14.5'">
        <button type="button"
                id="quill-scissors-button"
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
                @click="$store.preview = true"
                class="block md:hidden flex justify-center items-center bg-blue-100 hover:bg-blue-200 px-3.5 py-1 rounded transition group">
            <x-eva-layout-outline class="w-5 h-5 text-blue-700 group-hover:text-blue-800"/>
        </button>
    </div>

    <div class="flex flex-row flew-auto h-full min-h-0 sm:px-8 md:space-x-4 lg:space-x-14.5 mb-4 px-3" :class="$store.sidebar ? 'lg:px-7' : 'lg:pl-19 lg:pr-14.5'">
        <div class="flex flex-col flex-auto">
            <div class="flex-none h-full">
                <div x-data="quillEditor()" x-init="init()" class="h-full">
                    <input type="hidden" x-ref="input" wire:model.debounce.200ms="editor">

                    <div wire:ignore class="h-full">
                        <div x-ref="editor">{!! $editor !!}</div>
                    </div>
                </div>
            </div>
        </div>

        @livewire('tweet-preview', ['previewTweets' => $previewTweets])
    </div>
</main>

@push('scripts')
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        function quillEditor() {
            return {
                instance: null,
                scissorsButton: null,
                NEW_LINE_INSERT: '\n\n---\n\n',
                init() {
                    this.$nextTick(() => {
                        this.instance = new Quill(this.$refs.editor, {
                            theme: 'snow',
                            placeholder: 'Gee, Brain. What are we going to do tonight?',
                            modules: {
                                toolbar: false
                            }
                        });

                        this.instance.on('text-change', () => {
                            this.$refs.input.dispatchEvent(new CustomEvent('input', {
                                detail: this.instance.root.innerHTML
                            }));
                            console.log(this.instance.root.innerHTML);
                        });

                        this.scissorsButton = document.querySelector('#quill-scissors-button');
                        this.scissorsButton.addEventListener('click', () => {
                            this.instance.insertText(
                                this.instance.getSelection().index,
                                this.NEW_LINE_INSERT
                            );
                        });
                    })
                },
            }
        }
    </script>
@endpush
