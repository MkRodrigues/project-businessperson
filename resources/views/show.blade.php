@extends('welcome')

@section('content')
<main class="container space">
    <h2 class="">{{ $person->name }}</h2>

    <div class="m-4">
        <span class="">Pai Empresarial</span>
        <p class="h4">{{ $person->entrepreneur }}</p>
    </div>
   <a class="btn btn-primary" href="{{route('main.index')}}">Voltar</a>
</main>
@endsection
