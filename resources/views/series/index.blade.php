<x-layout title="Séries">
    <a href="/series/criar">Adicionar</a>
     <ul>
        @foreach ($series as $serie)
        <li>{{$serie->nome}}</li>
        <div>
                    <form action="/series/{{$serie->id}}/edit" method="post">
                      @csrf
                      @method('GET')
                      <button type="submit" class="">Editar {{$serie->nome}}</button>
                    </form>
        </div>
        <div>
                    <form action="/series/{{$serie->id}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="">Remover {{$serie->nome}}</button>
                    </form>
        </div>
        
        @endforeach
     </ul>
    
     <script>
        const series = {{ Js::from($series) }}
    </script>
    
</x-layout>

