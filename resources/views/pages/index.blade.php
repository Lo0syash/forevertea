@extends('layouts.app')
@section('title', 'Чаевариум')
@section('content')
    <div>
        <div class="container">
            <div class="flex flex-wrap justify-around items-center md:my-0 md:mt-24  my-12">
                <div class="flex flex-col gap-7 max-w-xl">
                    <h1 class="text-3xl font-bold font-FiraSansCondensed">Чаевариум</h1>
                    <p class="text-2xl font-light">
                        Уютный и атмосферный чайный уголок, где
                        можно расслабиться и насладиться чашечкой ароматного чая.
                    </p>
                </div >
                <img src="/public/logotype.png" alt="logotype with banner" class="max-w-xs">
            </div>
            <div class="flex flex-col">
                <h2 class="text-3xl font-bold font-FiraSansCondensed text-center">Каталог</h2>
                <div class="flex gap-4 items-center flex-wrap mt-5">
                    <a href="/" class="px-7 py-4 rounded bg-blue-700 flex gap-4 self-start">
                        <p class="text-white">Все</p>
                    </a>
                    @if($categories->count() > 0)
                        @foreach($categories as $category)
                            <a href="?category={{$category->id}}" class="px-7 py-4 rounded bg-blue-700 flex gap-4 self-start">
                                <p class="text-white">{{$category->name}}</p>
                            </a>
                        @endforeach
                    @endif
                </div>
                <div class="flex items-center justify-center gap-4 flex-wrap mt-7">
                    @if($products->count() > 0)
                        @foreach($products as $product)
                            <div class="w-64 py-4 border-black border-opacity-20 rounded border-2 flex flex-col px-2 gap-4 py-3">
                                <img src="{{$product->getImageUrl()}}" name="path" alt="Изображение" class="w-52 h-44 object-cover">
                                <h3 class="text-xl">{{$product->name}}</h3>
                                <p class="text-[1rem]">{{$product->price}} $</p>
                                <form action="#" method="post">
                                    <button type="submit" class="button-fill">Добавить в корзину</button>
                                </form>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <p class="text-justify text-xl leading-10 max-w-[1068px] md:mb-0 mt-10 mb-16 mx-auto">
                Войдя в Чаевариум, вы почувствуете особую энергетику и тепло. Приятные ароматы и мелодии создают
                уникальное сочетание, которое погрузит вас в состояние гармонии и покоя. Ответственность и любовь к
                своему делу чувствуются во всем – от дизайна интерьера до безупречного обслуживания.
            </p>
        </div>
    </div>
@endsection
