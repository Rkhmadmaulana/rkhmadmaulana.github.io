<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portofolio extends Component
{

    public array $items = [];

    public array $tabs = [];


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Codeigniter', 'Bootsrap', 'PHP'],
                'title' => 'Aplikasi Penentuan Status Gizi Balita',
                'image' => url('img/statusgizi.png'),
                'github' => 'https://www.youtube.com/watch?v=hTtsSvacq14&t=2s'
            ],

            [
                'category' => ['Laravel', 'Bootsrap', 'PHP'],
                'title' => 'Aplikasi Ecommerce',
                'image' => url('img/ecommerce.png'),
                'github' => 'https://github.com/Rkhmadmaulana/ecommerce-laravel'
            ],

            [
                'category' => ['Laravel', 'Bootsrap', 'Jetstream'],
                'title' => 'Portofolio Jetstream',
                'image' => url('img/apahayo.png'),
                'github' => 'https://github.com/Rkhmadmaulana/'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portofolio');
    }
}