@extends('layouts.app')
@section('title', 'Чаевариум - Админ панель')
@section('content')
    <div>
        <div class="container">
            <div>
                <h1 class="text-3xl my-5 font-FiraSansCondensed">Каталоги</h1>
                <div class="flex flex-col gap-4">
                    @if($categories->count() > 0)
                        @foreach($categories as $category)
                            <div class="px-7 py-4 rounded bg-blue-700 flex gap-4 self-start">
                                <p class="text-white">{{$category->name}}</p>
                                <div class="flex gap-4">
                                    <a href="">✏️</a>
                                    <form action="" class="cursor-pointer">
                                        @method('DELETE')
                                        ❌
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
