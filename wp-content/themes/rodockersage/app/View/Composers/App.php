<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'sageTitle' => $this->sageTitle(),
            'textField' => $this->textField()
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
<<<<<<< HEAD
}
=======

    public function sageTitle()
    {
        return get_field('sagetitle');
    }

    public function textField()
    {
        return get_field('blorttest');
    }
}
>>>>>>> d1ceb73 (adds a bunnch of stuff like cpt support)
