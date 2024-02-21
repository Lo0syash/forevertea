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
        </div>
    </div>
@endsection
