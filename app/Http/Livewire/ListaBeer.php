<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListaBeer extends Component
{

    //exemplo do site do livewire
    public $count = 0;

    public function incrementa()
    {
        $this->count++;
    }

    //codigo beer and code
    /*
    O Livewire atribuirá parâmetros automaticamente às propriedades públicas correspondentes. Portanto, se eu passar um atributo de nome item, ou lista, os valores passados (via componente ou via classe) serão atualizados pra view.
    */ 
    public $item;
    public $lista = ['Frank', 'Icaro', 'Lucas', 'Danilo', 'Lamarques', 'Tom'];
    public $key; 
    public $acao = 'adicionar';

    public function render()
    {
        return view('livewire.lista-beer');
    }

    public function add(){
        array_push($this->lista, $this->item);
        
        $this->item = '';
    }

    public function resetList(){
        unset($this->lista);
        $this->lista = [];
    }

    public function delete(int $key){
        unset($this->lista[$key]);
    }

    public function edit(int $key){
        $this->item = $this->lista[$key];
        $this->key = $key;
        $this->acao = 'atualizar';
    }

    public function update(){
        $this->lista[$this->key] = $this->item;
        $this->acao = 'adicionar';
        $this->item = '';
    }
}
