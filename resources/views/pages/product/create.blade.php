@extends('layouts.app')
@section('title', 'Добавление продукта')
@section('content')
    <div>
        <div class="container">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-4xl my-5 font-FiraSansCondensed">Добавление продукта</h1>
                <form action="{{route('product.store')}}" class="flex flex-col gap-7" method="post">
                    @csrf
                    <input
                        type="text"
                        name="name"
                        placeholder="Название продукта"
                        class="input {{ $errors->get('name') ? 'border-2 border-red-500' : '' }}"
                    >
                    <input
                        type="text"
                        name="description"
                        placeholder="Описание продукта"
                        class="input {{ $errors->get('description') ? 'border-2 border-red-500' : '' }}"
                    >
                    <input
                        type="text"
                        name="price"
                        placeholder="Стоимость продукта"
                        class="input {{ $errors->get('price') ? 'border-2 border-red-500' : '' }}"
                    >
                    <select name="categories_id">
                        @foreach($categories as $category)
                            <option @selected(old('categories_id') == $category->id) value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <button
                        type="submit"
                        class="button-fill cursor-pointer text-xl"
                    >Добавить</button>
                </form>
            </div>

        </div>
    </div>
@endsection
