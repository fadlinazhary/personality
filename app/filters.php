<?php

/**
 * Theme filters.
 */

namespace App;

use function Roots\add_filters;

/**
 * Add "… Read More" to the excerpt.
 *
 * @return string
 */

add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s" class="font-semibold">%s</a>', get_permalink(), __('Read More', ''));
});

add_filter('comment_form_defaults', function ($defaults) {
    remove_filter('comment_form_default_fields', 'url');

    $defaults['title_reply'] = '<p class="font-semibold">' . __('Leave a Comment', 'personality') . '</p>';

    // Atur ulang fields dengan urutan yang benar dan tambahkan label
    $defaults['fields'] = [
        'author' => '
            <p class="comment-form-author">
                <label for="author" class="block font-semibold">Nama</label>
                <input id="author" name="author" type="text" class="border p-2 mt-1 w-full rounded-md" placeholder="Nama..." required>
            </p>',
        'email'  => '
            <p class="comment-form-email">
                <label for="email" class="block font-semibold">Email</label>
                <input id="email" name="email" type="email" class="border p-2 mt-1 w-full rounded-md" placeholder="Email..." required>
            </p>',
    ];

    // Tambahkan field komentar di bawah
    $defaults['comment_field'] = '
        <p class="comment-form-comment">
            <label for="comment" class="block font-semibold">Komentar</label>
            <textarea id="comment" name="comment" class="border p-2 mt-1 w-full rounded-md" placeholder="Tulis komentar..." required></textarea>
        </p>';

    // Styling tombol submit
    $defaults['class_submit'] = 'bg-black text-white px-4 py-2 mt-3 rounded-lg shadow-sm cursor-pointer';
    $defaults['label_submit'] = __('Submit', 'personality');

    return $defaults;
});
