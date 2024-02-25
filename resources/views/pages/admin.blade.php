@extends('layouts.app')
@section('title', 'Чаевариум - Админ панель')
@section('content')
    <div>
        <div class="container flex flex-col gap-7">
            <div>
                <div class="flex items-center justify-between">
                    <h1 class="text-3xl my-5 font-FiraSansCondensed">Категории</h1>
                    <a href="{{route('category.create')}}" class="button-fill">Добавить категорию</a>
                </div>
                <div class="flex flex-col gap-4">
                    @if($categories->count() > 0)
                        @foreach($categories as $category)
                            <div class="px-7 py-4 rounded bg-blue-700 flex gap-4 self-start">
                                <p class="text-white">{{$category->name}}</p>
                                <div class="flex gap-4">
                                    <a href="{{route('category.edit', $category->id)}}">✏️</a>
                                    <form action="{{route('category.destroy', $category->id)}}" class="cursor-pointer" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">❌</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <h1 class="text-3xl my-5 font-FiraSansCondensed">Продукты</h1>
                    <a href="{{route('product.create')}}" class="button-fill">Добавить продукт</a>
                </div>
                <div class="flex flex-wrap gap-4">
                    @if($products->count() > 0)
                        @foreach($products as $product)
                            <div class="w-64 h-80 border-black border-opacity-20 rounded border-2 flex flex-col px-2 gap-4 py-3">
                                <img src="#" alt="Изображение" class="w-52 h-44 object-cover">
                                <h3 class="text-xl">{{$product->name}}</h3>
                                <p class="text-[1rem]">{{$product->price}} $</p>
                                <form action="#" method="post">
                                    <button type="submit" class="button-fill">Добавить в корзину</button>
                                </form>
                                <div class="flex gap-4">
                                    <a href="{{route('product.edit', $product->id)}}">✏️</a>
                                    <form action="{{route('product.destroy', $product->id)}}" class="cursor-pointer" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">❌</button>
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
