<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateCustom extends Composer
{
    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */

    public function with()
    {
        return [
            'textField' => $this->textField(),
            'templateName' => $this->templateName(),
            'blortTest' => $this->blorttest()
        
        ];
    }

    protected $acf = true;

    public function textField()
    {
        return 'Suck my ass you automated field fucker!';
    }

    public function templateName()
    {
        $tmpNm = get_page_template(); 
       
        return basename($tmpNm);
    }

    public function blorttest()
    {
        return get_field('blorttest');
    }

}




