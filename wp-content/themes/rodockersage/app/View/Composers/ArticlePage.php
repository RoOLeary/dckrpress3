<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ArticlePage extends Composer
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
            'blortTest' => $this->blorttest(),
            'articles' => $this->articles()
        ];
    }

    protected $acf = true;

    public function textField()
    {
<<<<<<< HEAD
        return get_field('sagetitle');
=======
        return 'You automated field bollocks!';
>>>>>>> d1ceb73 (adds a bunnch of stuff like cpt support)
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

    public function articles()
    {

        $articles = get_posts([
            'post_type' => 'article',
            'posts_per_page'=> '-1',
<<<<<<< HEAD
            'order'=>'ASC',
        ]);
    
       
        return array_map(function ($post) {
            
            return [
                'id' => $post->ID,
                'slug' => $post->post_name,
                'title' => apply_filters('the_title', $post->post_title),
                'article_title' => get_field('article_title', $post->ID),  
                'item_sage' => get_field('sagetitle', $post->ID),   
            ];
        }, $articles);

        wp_reset_postdata();
=======
        ]);
    
        // var_dump($articles);
        return array_map(function ($post) {
            return [
                'title' => apply_filters('the_title', $post->post_title),   
            ];
        }, $articles);

    
>>>>>>> d1ceb73 (adds a bunnch of stuff like cpt support)
    }

}




