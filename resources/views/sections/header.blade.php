<header class="banner sticky z-50 top-0 bg-white">
  <div class="flex justify-between max-w-7xl mx-auto items-center">
    <a class="brand" href="{{ home_url('/') }}">
      {{-- {!! $siteName !!} --}}
      {!! wp_get_attachment_image( $siteLogo ) !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif

    <div class="cta flex gap-2">
      <x-button type="outline" :href="$btn['url']">
        {{ $btn['title'] }}
      </x-button>

      <x-button :href="$btn['url']">
        {{ $btn['title'] }}
      </x-button>
    </div>
  </div>

</header>
