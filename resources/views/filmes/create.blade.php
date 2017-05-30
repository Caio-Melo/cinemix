
<form method="POST" action="{{ route('filmes.store')}}">
     {{csrf_field()}}
Nome: 
<input type="text" name="titulo">
Ano:
<input type="text" name="ano">
Trailer:
<input type="text" name="trailer">
Genero:
<select name="genero" id="genero" class="form-control">
                            
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                            
                        
                        </select>
Imagem:
<input type="text" name="imagem">



<input type="submit" value="Cadastrar">
</form>