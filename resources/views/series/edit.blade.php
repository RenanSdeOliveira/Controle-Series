<x-layout title="Editar Série">
    <form action="/series/{{$serie->id}}" method="post">
        @csrf
        @method('PUT')
        <div>
          <label for="title">{{$serie->nome}}</label>
        </div> 
          <label for="title">Novo Nome: </label>
          <input type="text" class="" id="{{$serie->id}}" name="nome"
            value="{{ $serie->nome }}" required>
              
        <button type="submit" class="">Atualizar Serie</button>
    </form>
</x-layout>

