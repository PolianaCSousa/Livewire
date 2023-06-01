{{ $title }}

{{ $slot }}

O componente foi renderizado no lugar do slot

{{ $slot }}


{{-- DESSE JEITO NÃO FUNCIONA (É o caminho inverso - o componente ja ta pronto, e eu so coloco ele aqui. Passo o componente pro app.blade.php, não é o app.blade.php que invoca e passa dados para o componente): 
  
<x-home>
  <x-slot:title>
    <h1>Aprendendo Livewire</h1>
  </x-slot>
  Bem vindo ao Todo-list da Beer
</x-home>

--}}