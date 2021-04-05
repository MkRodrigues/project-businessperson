@extends('welcome')

@section('content')
<main class="">

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <section class="container space">

        <h1 class="h1 text-center mb-5">Cadastro de Empresários</h1>
        <img class="register-img" src="{{ asset('/assets/Register.png') }}"
            alt="created by vectorjuice">

        <div class="">
            <form class="pt-5 pb-5" action="{{ route('businessperson.store') }}"
                enctype="multipart/form-data" method="POST">
                @csrf

                <div class="row">
                    <div class="form-group col-8">
                        <label for="">Nome Completo</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                            value="{{ old('name') }}">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group col-4">
                        <label for="">Celular</label>
                        <input class="form-control @error('phone') is-invalid @enderror" type="number" name="phone"
                            value="{{ old('phone') }}">
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label for="">Estado</label>
                        <select class="form-control" name="state" id="">
                            <option value="SP">São Paulo</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="">Cidade</label>
                        <select class="form-control" name="city" id="">
                            <option value="Sao Paulo">São Paulo</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Pai Empresarial</label>
                    <select class="form-control" name="entrepreneur" id="">
                        <option selected>Não contém</option>
                        @foreach($people as $person)
                            <option value="{{ $person->name }}">{{ $person->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row justify-content-end pr-3 mt-4">
                    <button class="btn btn-success mr-2" type="submit">Cadastrar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </form>
        </div>
    </section>

    <div class="teste1">
        <img class="pencil-img" src="{{ asset('/assets/Pencil.png') }}" alt="">
    </div>

    <section class="m-5">
        <h2 class="h1 text-center mb-5">Cadastrados</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Cidade/UF</th>
                    <th scope="col">Cadastrado em</th>
                    <th scope="col">Pai Empresarial</th>
                    <th scope="col">Rede</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($table as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->city }}/{{ $item->state }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->entrepreneur }}</td>
                        <td>
                            <a href="{{route('businessperson.show', $item->id)}}" class="btn btn-primary btn-sm">Ver rede</a>
                        </td>
                        <td>
                            <form action="{{ route('businessperson.destroy', $item->id) }}"
                                class="d-inline" method="POST"
                                onsubmit="return confirm('Você tem certeza que deseja excluir este registro?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $table->links() }}
    </section>
</main>
@endsection
