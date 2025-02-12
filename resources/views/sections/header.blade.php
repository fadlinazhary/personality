<header class="px-3 mt-2 sticky w-full">
    <section class="p-2 mx-auto mb-4 w-full md:w-11/12 rounded-md flex justify-between">
          <section>
            <a href="{{ home_url('/') }}" class="font-semibold text-black dark:text-white">{{ $siteName }}</a>
          </section>
          @if (has_nav_menu('primary_navigation'))
            <nav class="" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex justify-end text-white']) !!}
            </nav>
          @endif
    </section>
</header>