<?php

namespace Gamespecu\LaravelNav;

class Section implements Node
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $icon;

    /**
     * @var Link[]
     */
    public $children;

    public function __construct(string $title, string $icon = '')
    {
        $this->title = $title;
        $this->icon = $icon;
    }


    public function addChild(Link $node): void
    {
        $this->children[] = $node;
    }


}
