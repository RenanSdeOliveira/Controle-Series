<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
     <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">{{$serie->nome}}
        <span class="d-flex">
                    <form action="/series/{{$serie->id}}/edit" method="post">
                      @csrf
                      @method('GET')
                      <button type="submit" class="">Editar</button>
                    </form>
       
        
                    <form action="/series/{{$serie->id}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="">Remover</button>
                    </form>
        
        </span>
        </li>
        @endforeach
     </ul>
    
     <script>
        const series = {{ Js::from($series) }}
    </script>
    
</x-layout>

