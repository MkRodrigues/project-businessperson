@extends('welcome')

@section('content')
<main class="">

    <section class="container teste">

        <h1 class="h1 text-center mb-5">Cadastro de Empresários</h1>
        <img class="register-img" src="{{ asset('/assets/Register.png') }}"
            alt="created by vectorjuice">

        <div class="">
            <form class="pt-5 pb-5" action="" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-8">
                        <label for="">Nome Completo</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="form-group col-4">
                        <label for="">Celular</label>
                        <input class="form-control" type="number" name="">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label for="">Estado</label>
                        <select class="form-control" name="" id="">
                            <option value="SP">São Paulo</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="">Cidade</label>
                        <select class="form-control" name="" id="">
                            <option value="Sao Paulo">São Paulo</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Pai Empresarial</label>
                    <select class="form-control" name="" id="">
                        <option selected disabled></option>
                        <option value=""></option>
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
                    <th scope="col">Data/Hora</th>
                    <th scope="col">Rede</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Exibir</a>
                    </td>
                    <td>
                        <form action="" class="d-inline" method="POST"
                            onsubmit="return confirm('Você tem certeza que quer excluir o registro?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" href="#" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                        <a href=""></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</main>
@endsection
