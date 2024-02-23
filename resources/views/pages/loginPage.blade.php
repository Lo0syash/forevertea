@extends('layouts.app')
@section('title', 'Чаевариум - авторизация')
@section('content')
    <div>
        <div class="container">
            <div class="flex flex-col items-center gap-7 my-40">
                <h1 class="text-center text-4xl font-bold">Авторизация</h1>
                @error('invalid_credentials') <p class="text-red-500">{{$meassage}}</p> @enderror
                <form action="{{route('auth.login')}}" class="flex flex-col gap-7" method="post">
                    @csrf
                    <span class="flex flex-col items-center gap-2">
                        <input
                            type="text"
                            name="phone_number"
                            placeholder="+7(___)___-__-__"
                            id="login-phone"
                            class="input login-phone {{ $errors->get('phone_number') ? 'border-2 border-red-500' : '' }}"
{{--                            value="{{@old('phone_number')}}"--}}
                        >
                        <label for="name" class="{{ $errors->has('phone_number') ? 'block' : 'hidden' }}">
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
                        <label for="name" class="{{ $errors->has('password') ? 'block' : 'hidden' }}">
                            @error('password') <p class="text-red-500">{{$message}}</p> @enderror
                        </label>
                    </span>
                    <input
                        type="submit"
                        value="Войти"
                        class="button-fill cursor-pointer text-xl"
                    >
                </form>
            </div>
        </div>
    </div>
    <script>
        import inputmask from 'inputmask'
        const inputElement = document.querySelector('.login-phone');

        const mask = inputmask(inputElement, {
            mask: '+{7}(000)000-00-00',
        });
    </script>
@endsection
