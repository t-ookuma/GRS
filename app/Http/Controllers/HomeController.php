<?php

namespace App\Http\Controllers;

use App\Consts\TitleConst;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var TitleConst $titleConst
     */
    public function __construct(TitleConst $titleConst)
    {
        $this->titleConst = $titleConst;
    }

    /**
     * Display a home index
     */
    public function index()
    {
        $title = $this->titleConst->getTitle('news');
        $subTitle = $this->titleConst->getSubTitle('news');

        return view('home.index')->with([
            'title' => $title,
            'subTitle' => $subTitle,
        ]);
    }
}
