<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'info')
    {
        switch($type) {
            case 'info':
                $this->class = 'p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg';
                break;
            case 'danger':
                $this->class = 'p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg';
                break;
            case 'success':
                $this->class = 'p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg';
                break;
            case 'warning':
                $this->class = 'p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg';
                break;
            case 'dark':
                $this->class = 'p-4 mb-4 text-sm text-dark-700 bg-dark-100 rounded-lg';
                break;
            default:
                $this->class = 'p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg';
            break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
