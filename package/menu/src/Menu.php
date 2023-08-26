<?php

namespace Nwidart\Menus;

use Closure;
use Countable;
use Illuminate\Contracts\Config\Repository;
use Illuminate\View\Factory;

class Menu implements Countable
{
    /**
     * The menus collections.
     *
     * @var array
     */
    protected $menus = array();
    /**
     * @var Repository
     */
    private $config;
    /**
     * @var Factory
     */
    private $views;

    /**
     * The constructor.
     *
     * @param Factory    $views
     * @param Repository $config
     */
    public function __construct(Factory $views, Repository $config)
    {
        $this->views = $views;
        $this->config = $config;
    }

    /**
     * Make new menu.
     *
     * @param string $name
     * @param Closure $callback
     *
     * @return \Nwidart\Menus\MenuBuilder
     */
    public function make($name, \Closure $callback)
    {
        return $this->create($name, $callback);
    }

    /**
     * Create new menu.
     *
     * @param string   $name
     * @param Callable $resolver
     *
     * @return \Nwidart\Menus\MenuBuilder
     */
    public function create($name, Closure $resolver)
    {
        $builder = new MenuBuilder($name, $this->config);

        $builder->setViewFactory($this->views);

        $this->menus[$name] = $builder;

        return $resolver($builder);
    }
}