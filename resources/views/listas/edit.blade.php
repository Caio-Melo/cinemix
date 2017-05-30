
<form method="POST" action="{{ route('listas.update', $listas[0]->id) }}">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="put">
Nome: 
<input type="text" name="nome" value="{{$listas[0]->nome}}">

<input type="submit" value="Cadastrar">
</form>