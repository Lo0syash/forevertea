@extends('layouts.app')
@section('title', 'Чаевариум - регистрация')
@section('content')
    <div>
        <div class="container">
            <div class="flex flex-col items-center gap-7 my-24">
                <h1 class="text-center text-4xl font-bold">Регистрация</h1>
                <form action="" class="flex flex-col gap-7" method="post">
                    <input
                        type="text"
                        name="name"
                        placeholder="Имя"
                        class="input"
                    >
                    <input
                        type="text"
                        name="surname"
                        placeholder="Фамилия"
                        class="input"
                    >
                    <input
                        type="text"
                        name="phone_number"
                        placeholder="Номер телефона"
                        class="input"
                    >
                    <input
                        type="password"
                        name="password"
                        placeholder="Пароль"
                        class="input"
                    >
                    <input
                        type="password"
                        name="re_password"
                        placeholder="Повторите пароль"
                        class="input"
                    >
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
