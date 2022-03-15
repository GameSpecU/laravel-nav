<?php

namespace Gamespecu\LaravelNav;

use Illuminate\Support\Str;

class Nav
{
    /**
     * @var Node[]
     */
    protected $items;


    public function add(string $title, string $route, string $icon = null): void
    {
        $link = new Link($title, $route, $icon);
        if ($section = $this->findSection($route)) {
            $section->addChild($link);
            return;
        }
        $this->items[$route] = $link;
    }


    public function registerSection(string $title, string $as, string $icon = null): void
    {
        $this->items[$as] = new Section($title, $icon);
    }

    protected function findSection(string $route)
    {
        if (empty($this->items)) {
            return null;
        }
        foreach ($this->items as $key => $item) {
            if ($item instanceof Section && Str::startsWith($route, $key)) {
                return $item;
            }
        }
        return null;
    }

    public function items(): array
    {
        return $this->items;
    }
}
