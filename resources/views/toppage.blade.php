<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            トップページ
        </h2>
    </x-slot> --}}

    <div class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="left max-w-xl">
                <div class="suggestion pt-4 border p-4">
                    @if(isset($suggestions))
                        <h1 class='text-3xl font-bold text-black dark:text-white'>興味のあるタグのおすすめ</h1>
                        @foreach($suggestions as $sg)
                            <div class='py-2 text-black dark:text-white'>
                                {{-- ここのリンクはGET通信なのでURL指定でOKだが、本来はRouteを使うべきなのかもしれない？しらんけど --}}
                                <a href='/tricks/{{$sg->id}}' class='text-xl font-bold underline text-blue-600'>{{ $sg->title }}</a>
                                {{-- <form action="{{ route('tricks.show',['trick' => $sg->id, 'newCreatedFlag' => false])}}" method="GET">
                                    <x-primary-button class="ml-3">
                                        {{ __('詳細を見る') }}
                                    </x-primary-button>
                                </form> --}}
                                <p>{{ $sg->body }}</p>
                            </div>
                        @endforeach
                    @else
                        <h1 class='text-3xl font-bold text-black dark:text-white'>おすすめ</h1>
                        未実装
                        {{-- @foreach($suggestions as $sg)
                            <div class='py-2 text-black dark:text-white'>
                                <a href='' class='text-xl font-bold underline text-blue-600'>{{ $sg->title }}</a>
                                <p>{{ $sg->body }}</p>
                            </div>
                        @endforeach --}}
                    @endif
                </div>
                <div class="new">

                </div>
            </div>
            <div class="right-ranking">

            </div>
        </div>
    </div>
</x-app-layout>

