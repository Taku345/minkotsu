<x-app-layout>
    <div class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="left max-w-xl">
                <div class="pt-4 border p-4">
                    <h1 class='text-3xl font-bold text-black dark:text-white'>コツ詳細画面</h1>
                    {{-- {{dd($newCreatedFlag)}}
                    @if($newCreatedFlag)
                        <p class="text-red-500 py-4">新規投稿しました</p>
                        {{$newCreatedFlag=false}}
                    @endif --}}
                    @if(isset($trick))
                        <table>
                            <tr>
                                <td width="100" class='py-2'>
                                    コツタイトル
                                </td>
                                <td>
                                    {{ $trick->title }}
                                </td>
                            </tr>
                            <tr>
                                <td class='py-2'>
                                    本文
                                </td>
                                <td>
                                    {{ $trick->body }}
                                </td>
                            </tr>
                            <tr>
                                <td class='py-2'>
                                    タグ
                                </td>
                                <td>
                                    @foreach($trick->tags as $trick_tag)
                                        <span class="">{{$trick_tag->name.",　　"}}</span>
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <td class='py-2'>
                                    イイネ数
                                </td>
                                <td>
                                    {{ $trick->good_count }}
                                </td>
                            </tr>
                        </table>
                    @else
                        エラー：データが取得できませんでした
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
