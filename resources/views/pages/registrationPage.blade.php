@extends('layouts.app')
@section('title', 'Чаевариум - регистрация')
@section('content')
    <div>
        <div class="container">
            <div class="flex flex-col items-center gap-7 my-24">
                <h1 class="text-center text-4xl font-bold">Регистрация</h1>
                <form action="{{route('auth.registration')}}" class="flex flex-col gap-7" method="post">
                    @csrf
                    <span class="flex flex-col items-center gap-2">
                        <input
                            type="text"
                            name="name"
                            placeholder="Имя"
                            class="input {{ $errors->get('name') ? 'border-2 border-red-500' : '' }}"
                            value="{{@old('name')}}"
                        >
                        <label for="name" class="{{ $errors->has('name') ? 'block' : 'hidden' }}">
                            @error('name') <p class="text-red-500">{{$message}}</p> @enderror
                        </label>
                    </span>
                    <span class="flex flex-col items-center gap-2">
                        <input
                            type="text"
                            name="surname"
                            placeholder="Фамилия"
                            class="input {{ $errors->get('surname') ? 'border-2 border-red-500' : '' }}"
                            value="{{@old('surname')}}"
                        >
                        <label for="surname" class="{{ $errors->has('surname') ? 'block' : 'hidden' }}">
                            @error('surname') <p class="text-red-500">{{$message}}</p> @enderror
                        </label>
                    </span>
                    <span class="flex flex-col items-center gap-2">
                        <input
                            type="text"
                            name="phone_number"
                            placeholder="Номер телефона"
                            class="input {{ $errors->get('phone_number') ? 'border-2 border-red-500' : '' }}"
                            value="{{@old('phone_number')}}"
                        >
                        <label for="phone_number" class="{{ $errors->has('phone_number') ? 'block' : 'hidden' }}">
                            @error('phone_number') <p class="text-red-500">{{$message}}</p> @enderror
                        </label>
                    </span>
                    <span class="flex flex-col items-center gap-2">
                        <input
                            type="password"
                            name="password"
                            placeholder="Пароль"
                            class="input {{ $errors->get('password') ? 'border-2 border-red-500' : '' }}"
                        >
                        <label for="password" class="{{ $errors->has('password') ? 'block' : 'hidden' }}">
                            @error('password') <p class="text-red-500">{{$message}}</p> @enderror
                        </label>
                    </span>
                    <span class="flex flex-col items-center gap-2">
                        <input
                            type="password"
                            name="re_password"
                            placeholder="Повторите пароль"
                            class="input {{ $errors->get('re_password') ? 'border-2 border-red-500' : '' }}"
                        >
                        <label for="re_password">
                            @error('re_password') <p class="text-red-500">{{$message}}</p> @enderror
                        </label>
                    </span>
                    <input
                        type="submit"
                        value="Зарегистрироваться"
                        class="button-fill cursor-pointer text-xl"
                    >
                </form>
            </div>
        </div>
    </div>
@endsection
