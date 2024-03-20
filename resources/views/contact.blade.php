<h1>Listagem de Contatos</h1>

@foreach ($contacts as $contact)

<div>
    <p> {{ $contact->name }}</p>
</div>

@endforeach

<form action="/contact/store" method="POST">
    @method('POST')
    @csrf
    <button type="submit">Criar contato</button>
</form>

<form action="/contact/update" method="POST">
    @method('PUT')
    @csrf
    <button type="submit">Atualizar contato</button>
</form>

<form action="/contact/delete/2" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar contato</button>
</form>