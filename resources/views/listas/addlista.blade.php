<a href="/filmes/create">Cadastrar</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Filmes</th>
            <th>Ações</th>
            
            
            
            
            
            <th></th>

        </tr>
    </thead>

    <tbody>
        @foreach($filmes as $filmes)
        
        <tr>
            <td>{{$filmes->id}}</td>
            <td>{{$filmes->titulo}}</td>
          
           <td>
            <form>
<form type="hidden" name="usuario_id" value="{{ Auth::user()->id }}">

            <select name="lista" id="lista" class="form-control">
                            
                            @foreach($listas as $lista)
                                <option value="{{$lista->id}}">{{$lista->nome}}</option>
                            @endforeach
                            
                        
                        </select>

                        <input type="submit" value="Adicionar">
                        <form>

                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

