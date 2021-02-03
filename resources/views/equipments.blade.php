<div x-data="{ add_modal: false }">
    <strong>Equipamentos médicos</strong>
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
      
</div>

<div class="grid grid-cols-2">
   
    <div class="p-3 m-0.5 border rounded-lg bg-blue-100 hover:bg-blue-200 cursor-pointer"  @click="add_modal = true">
    Adicionar</div>
@foreach($equipment->sortBy('name') as $item)
<div class="p-3 border">
    {{ $item->name }} ({{ $item->identificationnumber }}}
</div>
@endforeach
</div>
</div>
<div class="fixed z-10 inset-0 overflow-y-auto" style="display:none" x-show="add_modal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <!--
        Background overlay, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
  
      <!-- This element is to trick the browser into centering the modal contents. -->
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <!--
        Modal panel, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
          <div class="p-3">
              <h1>Equipamento sendo utilizado</h1>
              <form action="{{ action([\App\Http\Controllers\EquipmentController::class, 'store'])}}" method="POST">
                @csrf 

                <div>
                    <x-label for="name" :value="__('Nome')" />
    
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <div>
                    <x-label for="identificationnumber" :value="__('Número de identificação')" />
    
                    <x-input id="identificationnumber" class="block mt-1 w-full" type="text" name="identificationnumber" :value="old('identificationnumber')" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Enviar') }}
                    </x-button>
                </div>
              </form>
          </div>
      </div>
    </div>
  </div> 
</div>
