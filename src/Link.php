<?php

namespace Gamespecu\LaravelNav;

class Link implements Node
{
    /**
     * @var string
     */
    public $route;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $icon;

    public function __construct(string $title, string $route, string $icon = '')
    {

        $this->title = $title;
        $this->route = $route;
        $this->icon = $icon;
    }


}
