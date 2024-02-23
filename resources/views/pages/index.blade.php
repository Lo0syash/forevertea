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
                        можно расслабиться и насладиться чашечкой
                        ароматного чая.
                    </p>
                </div>
                <img src="/public/logotype.png" alt="logotype with banner" class="max-w-xs">
            </div>
            <p class="text-justify text-xl leading-10 max-w-[1068px] md:mb-0 mt-10 mb-16 mx-auto">
                Войдя в Чаевариум, вы почувствуете особую энергетику и тепло. Приятные ароматы и мелодии создают
                уникальное сочетание, которое погрузит вас в состояние гармонии и покоя. Ответственность и любовь к
                своему делу чувствуются во всем – от дизайна интерьера до безупречного обслуживания.
            </p>
        </div>
    </div>
@endsection
