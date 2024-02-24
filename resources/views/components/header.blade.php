<header class="py-2 border-b-2 border-blue-800 border-opacity-25">
    <div class="container flex flex-wrap md:gap-0 gap-4 items-center md:justify-between justify-center py-5">
        <a
            class="font-FiraSansCondensed text-3xl"
            href="{{route('index.index')}}">
            Чаевариум
        </a>
        @auth()
            @if(auth()->user()->role_id === 2)
                <a href="{{route('index.admin')}}" class="button">Админ панель</a>
            @endif
            <form action="{{route('auth.logout')}}" method="post">
                @csrf
                <button type="submit" class="button-fill">Выйти</button>
            </form>
        @endauth
        @guest()
            <div class="flex items-center gap-7 md:flex-row flex-col">
                <a href="{{route('auth.loginPage')}}" class="button">Войти</a>
                <a href="{{route('auth.registrationPage')}}" class="button-fill">Зарегистрироваться</a>
            </div>
        @endguest
    </div>
</header>
