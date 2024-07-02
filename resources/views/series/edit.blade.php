<x-layout title="Editar Série">
    <form action="/series/{{$serie->id}}" method="post">
        @csrf
        @method('PUT')
        <div>
          <label for="title">{{$serie->nome}}</label>
          <input type="text" class="" id="{{$serie->id}}" name="nome"
            value="{{ $serie->nome }}" required>
        </div>       
        <button type="submit" class="">Update Serie</button>
    </form>
</x-layout>

