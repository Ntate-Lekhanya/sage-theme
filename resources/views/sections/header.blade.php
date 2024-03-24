<header class="banner flex justify-between p-4 bg-red-400">
  <a class="brand" href="{{ home_url('/') }}">
    {{-- {!! $siteName !!} --}}
    {!! wp_get_attachment_image( $siteLogo ) !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
