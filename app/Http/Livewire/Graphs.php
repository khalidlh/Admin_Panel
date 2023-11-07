<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Support\ValidatedData;
use Livewire\Component;

class Graphs extends Component
{
    protected $layouts = 'layouts.app';
    public $data;
    public $val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9;
    public $M1, $M2, $M3;
    public function render()
    {
        $this->data = [
            'labels' => ["Jan1", "Feb", "Mar"],
            'values' => [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000],
        ];

        // Emit the data to the view
        $this->emit('dataFetched', $this->data);
        return view('livewire.graphs');
    }

    public function Creat_graph()
    {
        $validatedData = $this->validate(
            [
                'M1' => 'required',
                'M2' => 'required',
                'M3' => 'required',
                'val1'=>'required',
                'val2'=>'required',
                'val3'=>'required',
                'val4'=>'required',
                'val5'=>'required',
                'val6'=>'required',
                'val7'=>'required',
                'val8'=>'required',
                'val9'=>'required'
            ]
        );
          $this->data = [
            'labels'=>[$this->M1,$this->M2,$this->M3],
             'values'=>[$this->val1,$this->val2,$this->val3,$this->val4,$this->val5,$this->val6]
          ];
          dd($this->data);
          $this->emit('dataFetched', $this->data);
         return view('livewire.graphs');
    }
}
