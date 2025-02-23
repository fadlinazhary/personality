<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Read More" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s" class="font-semibold">%s</a>', get_permalink(), __('Read More', ''));
});