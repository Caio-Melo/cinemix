<a href="/filmes/create">Cadastrar</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            
            
            
            <th></th>

        </tr>
    </thead>

    <tbody>
        @foreach($listas as $lista)
        
        <tr>
            <td>{{$lista->id}}</td>
            <td>{{$lista->nome}}</td>
            
            <td>
                <a class="btn btn-primary" href="/listas/{{$lista->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('listas.destroy', $lista->id)}}" method="post">

                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="delete">

                    <button class="btn btn-danger">Apagar</button>

                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

