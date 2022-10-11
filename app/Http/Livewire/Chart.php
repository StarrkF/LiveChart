<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Chart extends Component
{
    public $labels= [];
    public $datasets= [];

    public $limit=100;
    public $days=31;


    public function mount(){
        $this->labels=$this->getLabels();

        $this->datasets=[
            [
                'label' => 'LineChart Example',
                'backgroundColor' => '#FFD700',
                'borderColor' => '#000',
                'data' => $this->getData()
            ]
        ];
    }

    public function render()
    {
        return view('livewire.chart');
    }

    public function changeData(){
        $labels=$this->getLabels();

        $datasets= [
            [
                'label' => 'LineChart Example',
                'backgroundColor' => '#FFD700',
                'borderColor' => '#000',
                'data' => $this->getData()
            ]
        ];

        $this->emit('changeData',[
            'labels' => $labels,
            'datasets' => $datasets
        ]);

    }

    public function getData(){
        $data=[];
        for ($i=$this->days; $i >=1 ; $i--) { 
            $data[]=rand(0,$this->limit);
        }
        return $data;
    }

    public function getLabels(){
        $label=[];
        for ($i=$this->days; $i >=1 ; $i--) { 
            $label[]=Carbon::now()->subWeekdays($i)->format('d-m');
        }

        return $label;
    }
}
