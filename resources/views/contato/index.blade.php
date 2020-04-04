<h3>Essa é a view INDEX</h3>

@foreach($contatos as $contato)
	<p>{{$contato->nome}}</p>
	<p>{{$contato->tel}}</p>
@endforeach