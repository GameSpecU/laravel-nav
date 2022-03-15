<?php

namespace Gamespecu\LaravelNav;

class Link implements Node
{
    /**
     * @var string
     */
    protected $route;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $icon;

    public function __construct(string $title, string $route, string $icon)
    {

        $this->title = $title;
        $this->route = $route;
        $this->icon = $icon;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }
}
