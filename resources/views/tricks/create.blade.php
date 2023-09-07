<x-app-layout>
    <div class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="pt-4 border p-4">
                <h1 class='text-3xl font-bold text-black dark:text-white'>新規コツ投稿画面</h1>
                @auth
                    <form action="{{ route('tricks.store')}}" method="POST">
                        @csrf
                        <input hidden name="user_id" value={{Auth::user()->id}}>
                        <input hidden name="question_id" value="1">
                        <div class="flex sm:items-center mb-6 flex-col sm:flex-row py-4">
                            <label
                                class="block sm:w-1/5 font-bold sm:text-right mb-1 pr-4" {{-- sm:w-1/3が右詰めにしてる --}}
                                for="title"
                                >コツのタイトル <span class="text-red-600"> * </span></label
                            ><input
                                class="block w-full sm:w-2/3 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"
                                name="title"
                                {{-- id="title" --}}
                                type="text"
                                placeholder="〇〇〇〇のコツ"
                                value="{{ old('title') }}"
                            />
                        </div>

                        <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                            <label
                                class="block sm:w-1/5 font-bold sm:text-right mb-1 pr-4"
                                for="body"
                                >コツの内容 <span class="text-red-600"> * </span></label
                            ><textarea
                                class="block w-full sm:w-2/3 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"
                                name="body"
                                {{-- id="body" --}}
                                cols="30"
                                rows="10"
                                value="{{ old('body') }}"
                            ></textarea>
                        </div>

                        <div class="flex sm:items-center mb-6 flex-col sm:flex-row py-4">
                            <label
                                class="block sm:w-1/5 font-bold sm:text-right mb-1 pr-4" {{-- sm:w-1/3が右詰めにしてる --}}
                                for="title"
                                >タグ <span class="text-red-600"> * </span></label
                            ><input
                                class="block w-full sm:w-2/3 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"
                                name="tags"
                                {{-- id="title" --}}
                                type="text"
                                placeholder=",で区切ると複数のタグを入力できます。"
                                value="{{ old('tags') }}"
                            />
                        </div>

                        <div class="flex justify-center">
                            <x-primary-button class="ml-3">
                                {{ __('新規作成') }}
                            </x-primary-button>
                        </div>

                    </form>
                @else
                    新規コツ投稿するにはログインしてください
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>
