<a href="/generos/create">Cadastrar</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            
            <th></th>

        </tr>
    </thead>

    <tbody>
        @foreach($generos as $genero)
        <tr>
            <td>{{$genero->id}}</td>
            <td>{{$genero->nome}}</td>
            <td>
                <a class="btn btn-primary" href="/generos/{{$genero->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('generos.destroy', $genero->id)}}" method="post">

                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="delete">

                    <button class="btn btn-danger">Apagar</button>

                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>