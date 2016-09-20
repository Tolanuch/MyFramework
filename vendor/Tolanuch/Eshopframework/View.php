<?php

namespace Eshopframework;


class View
{
    // The general layout for all pages.
    private $layout = 'layout';

    // CSS style.
    private $style = 'style';

    // Page title.
    private $title;

    // Setting up the layout page.
    public function setLayout($layout) {
        $this->layout = $layout;
    }

    // Getting the layout of the page.
    public function getLayout() {
        return $this->layout;
    }

    // Getting style of the page.
    public function getStyle() {
        return $this->style;
    }

    // Setting up page title.
    public function setTitle($title) {
        $this->title = $title;
    }
    // Getting page title.
    public function getTitle() {
        return $this->title;
    }
}