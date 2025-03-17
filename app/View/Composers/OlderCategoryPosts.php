<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class OlderCategoryPosts extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'single',
        'partials.content-single',
    ];

    public function with() {
        return [
            'olderCategoryPosts' => $this->getOlderCategoryPosts(),
        ];
    }

    private function getOlderCategoryPosts() {
        $categories = get_the_category();

        if (empty($categories)) {
            return [];
        }

        $category_id = $categories[0]->term_id;

        $olderCategoryPosts = new WP_Query([
            'cat'   => $category_id,
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'ASC',
            'post__not_in' => [get_the_ID()], 
        ]);

        return $olderCategoryPosts->posts;
    }
}
