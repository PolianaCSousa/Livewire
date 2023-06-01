<div class="container">
  <div class="row">
    <div class="col-6"> 
      Clique aqui
      <button wire:click="incrementa">+</button>
    </div>
    <div class="col-6">
      <p>{{$count}}</p>
    </div>
  </div>

  <hr/>

  <div class="row">
    <div class="col-auto">
      <input class="mb-2" type="text" wire:model="item">

      @if($acao == 'adicionar')
        <button wire:click="add" class="btn btn-primary">Adicionar</button>
      @else
        <button wire:click="update" class="btn btn-primary">Atualizar</button>
      @endif
      <button wire:click="resetList" class="btn btn-secondary">Limpar Lista</button>
      
      <ul>
        @foreach($lista as $key => $nome)
          <div class="row">
            <div class="col-auto mb-3">
            <li>{{$nome}}</li>
            </div>
            <div class="col-auto">
              <button class="btn btn-success" wire:click="edit ({{$key}})">Editar</button>
            </div>
            <div class="col-auto">
              <button class="btn btn-danger" wire:click="delete({{$key}})">Deletar</button>
            </div>    
          </div>
        @endforeach
      </ul>
    </div>
  </div>
</div>

