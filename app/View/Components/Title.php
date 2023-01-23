<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Title extends Component
{
    /**
     * English title
     * 
     * @var string
     */
    public $title;

    /**
     * Japanese sub title
     * 
     * @var string
     */
    public $subTitle;

    /**
     * Create a new component instance.
     *
     * @param  string  $title
     * @param  string  $subTitle
     * @return void
     */
    public function __construct($title, $subTitle)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.title');
    }
}
