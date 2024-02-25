@extends('layouts.app')
@section('title', 'Добавление продукта')
@section('content')
    <div>
        <div class="container">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-4xl my-5 font-FiraSansCondensed">Изменение продукта</h1>
                <form action="{{route('product.update', $product->id)}}" class="flex flex-col gap-7" method="post">
                    @csrf
                    <input
                        type="text"
                        name="name"
                        placeholder="Название продукта"
                        value="{{$product->name}}"
                        class="input {{ $errors->get('name') ? 'border-2 border-red-500' : '' }}"
                    >
                    <input
                        type="text"
                        name="description"
                        placeholder="Описание продукта"
                        value="{{$product->description}}"
                        class="input {{ $errors->get('description') ? 'border-2 border-red-500' : '' }}"
                    >
                    <input
                        type="text"
                        name="price"
                        placeholder="Стоимость продукта"
                        value="{{$product->price}}"
                        class="input {{ $errors->get('price') ? 'border-2 border-red-500' : '' }}"
                    >
                    <select name="categories_id">
                        @foreach($categories as $category)
                            <option @selected($product->categories_id === $category->id) value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <button
                        type="submit"
                        class="button-fill cursor-pointer text-xl"
                    >Обновить</button>
                </form>
            </div>

        </div>
    </div>
@endsection
