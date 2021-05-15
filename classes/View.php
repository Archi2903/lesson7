<?php


class View
{
    protected $names = [];

    public function assign($name, $value)
    {
        $this->names[$name] = $value;

    }

    public function display(string $template)
    {
        include $template;
    }

    public function render(string $template)
    {
        ob_start();
        include($template);
        $render=ob_get_contents();
        ob_end_clean();
        return $render;
    }
}