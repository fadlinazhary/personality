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

// function customize_comment_form_defaults($defaults)
// {
//     // Set custom reply title
//     $defaults['title_reply'] = '<p class="font-semibold">' . __('Leave a Comment', 'personality') . '</p>';

//     // Define fields manually, excluding the URL field
//     $defaults['fields'] = [
//         'author' => '
//             <p class="comment-form-author">
//                 <label for="author" class="block font-semibold">Nama</label>
//                 <input id="author" name="author" type="text"
//                        class="border p-2 mt-1 w-full rounded-md"
//                        placeholder="Nama..." required>
//             </p>',
//         'email' => '
//             <p class="comment-form-email">
//                 <label for="email" class="block font-semibold">Email</label>
//                 <input id="email" name="email" type="email"
//                        class="border p-2 mt-1 w-full rounded-md"
//                        placeholder="Email..." required>
//             </p>',
//     ];

//     // Define the comment text area
//     $defaults['comment_field'] = '
//         <p class="comment-form-comment">
//             <label for="comment" class="block font-semibold">Komentar</label>
//             <textarea id="comment" name="comment"
//                       class="border p-2 mt-1 w-full rounded-md"
//                       placeholder="Tulis komentar..." required></textarea>
//         </p>';

//     // Style the submit button
//     $defaults['class_submit'] = 'bg-black text-white px-4 py-2 mt-3 rounded-lg shadow-sm cursor-pointer';
//     $defaults['label_submit'] = __('Submit', 'personality');

//     return $defaults;
// }
// add_filter('comment_form_defaults', 'customize_comment_form_defaults');

/**
 * Disable Gutenberg editor for specific post types.
 *
 * @param bool   $use_block_editor Whether the block editor is enabled.
 * @param string $post_type        Current post type.
 *
 * @return bool
 */
function disable_block_editor_for_pages(bool $use_block_editor, string $post_type): bool
{
    if ($post_type === 'page') {
        return false;
    }

    return $use_block_editor;
}

add_filter('use_block_editor_for_post_type', 'disable_block_editor_for_pages', 10, 2);
