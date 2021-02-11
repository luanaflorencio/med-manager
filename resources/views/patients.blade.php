<div x-data="{ add_modal: false }">
  <strong>Pacientes</strong>
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
  <div class="p-6 bg-white border-b border-gray-200">
    
</div>


  <div class="grid grid-cols-2"> 
       
    <div class="p-3 m-0.5 border rounded-lg bg-blue-100 hover:bg-blue-200 cursor-pointer" @click="add_modal = true">
        Adicionar</div>
    @foreach($patient->sortBy('name') as $item)
    <div class="p-3 border">
        <div class="px-2 pb-2 border-b text-center">{{ $item->name }} Idade:{{ $item->birth }} Peso:{{ $item->weight }} Altura:{{ $item->height }}</div>
        <div class="grid grid-cols-2 text-center cursor-pointer">
          <a class="bg-green-100 hover:bg-green-200">Editar</a>
          <a class="bg-red-200 hover:bg-red-300" href="{{ route('del-patient', $item->id)}}">Excluir</a>
        </div>
    </div>
    
    @endforeach    
</div>
  

</div>
  <div class="fixed z-10 inset-0 overflow-y-auto" style="display:none" x-show="add_modal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

      <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>

      
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
          <div class="p-3">
              <h1>Dados do paciente:</h1>
              <form action="{{ action([\App\Http\Controllers\PatientController::class, 'store'])}}" method="POST">
                @csrf 

                <div>
                  <x-label for="name" :value="__('Nome')" />

                  <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
              </div>
              <div>
                  <x-label for="birth" :value="__('Data de nascimento')" />

                  <x-input id="birth" class="block mt-1 w-full" type="date" name="birth" :value="old('birth')" required autofocus />
              </div>
              <div>
                  <x-label for="weight" :value="__('Peso')" />

                  <x-input id="weight" class="block mt-1 w-full" type="text" name="weight"  data-mask="00.000" :value="old('weight')" required autofocus />
              </div>
              <div>
                  <x-label for="height" :value="__('Altura')" />

                  <x-input id="height" class="block mt-1 w-full" type="text" name="height"  data-mask="0.00" :value="old('height')" required autofocus />
              </div>


                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Salvar') }}
                    </x-button>
                </div>
              </form>
          </div>
      </div>
    </div>
  </div> 
</div>

