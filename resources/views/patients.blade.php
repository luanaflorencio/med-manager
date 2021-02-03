<strong>Pacientes</strong> 
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">

<div class="grid grid-cols-2"> 
       
        <div class="p-3 m-0.5 border rounded-lg bg-blue-100 hover:bg-blue-200 cursor-pointer">
            Adicionar</div>
        @foreach($patient->sortBy('name') as $item)
        <div class="p-3 border">
            {{ $item->name }} Idade:{{ $item->birth }} Peso:{{ $item->weight }} Altura:{{ $item->height }}
        </div>
        
        @endforeach    
    </div>
</div>
</div>