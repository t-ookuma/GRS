<?php

namespace App\View\Components;

use Illuminate\View\Component;

class News extends Component
{
    /**
     * News list
     * 
     * @var string
     */
    public $news;

    /**
     * Create a new component instance.
     *
     * @param  string  $news
     * @return void
     */
    public function __construct($news)
    {
        $this->news = $news;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.news');
    }
}
