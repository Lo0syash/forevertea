@extends('layouts.app')
@section('title', 'Обновление категории')
@section('content')
    <div>
        <div class="container">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-4xl my-5 font-FiraSansCondensed">Изменение категории</h1>
                <form action="{{route('category.update', $category->id)}}" class="flex flex-col gap-7" method="post">
                    @csrf
                    <input
                        type="text"
                        name="name"
                        placeholder="Название категории"
                        value="{{$category->name}}"
                        class="input {{ $errors->get('name') ? 'border-2 border-red-500' : '' }}"
                    >
                    <button
                        type="submit"
                        class="button-fill cursor-pointer text-xl"
                    >Обновить</button>
                </form>
            </div>

        </div>
    </div>
@endsection
