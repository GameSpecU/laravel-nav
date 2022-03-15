<?php

namespace Gamespecu\LaravelNav;

class Section implements Node
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $icon;

    /**
     * @var Node[]
     */
    protected $children;

    public function __construct(string $title, string $icon = '')
    {
        $this->title = $title;
        $this->icon = $icon;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function addChild(Node $node)
    {
        $this->children[] = $node;
    }

}
