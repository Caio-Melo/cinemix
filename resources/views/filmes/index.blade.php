<a href="/filmes/create">Cadastrar</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ano</th>
            
            
            <th></th>

        </tr>
    </thead>

    <tbody>
        @foreach($filmes as $filme)
        
        <tr>
            <td>{{$filme->id}}</td>
            <td>{{$filme->titulo}}</td>
            <td>{{$filme->ano}}</td>
            
            <td>
                <a class="btn btn-primary" href="/filmes/{{$filme->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('filmes.destroy', $filme->id)}}" method="post">

                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="delete">

                    <button class="btn btn-danger">Apagar</button>

                </form>


                

            </td>
        </tr>
        @endforeach
    </tbody>
</table>