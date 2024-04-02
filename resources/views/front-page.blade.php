@extends('layouts.app')

@section('content')

  <div class="content">
    {{-- Include other content or partials --}}
    {{-- Ensure that the cover block is not included here --}}
    @includeFirst(['partials.content-page', 'partials.content'])
  </div>
@endsection

@section('posts')
  <div class="posts-section mt-20 flex justify-center">
    <div class="max-w-4xl w-full mx-auto">
      @php
        $posts = get_posts(); // Retrieve WordPress posts
      @endphp

      @foreach($posts as $post)
        {{-- Accessing post properties --}}
        <div class="border p-2 mb-5">
          <div class="conatiner flex gap-10 flex-1">
            <div class="right">
                      {{-- Display the featured image --}}
                  @if(has_post_thumbnail($post->ID))
                  <img src="{{ get_the_post_thumbnail_url($post->ID, 'medium') }}" alt="{{ $post->post_title }}" class="mb-4">
                @endif
            </div>
            <div class="left">
              <h2 class="text-lg font-bold">{{ $post->post_title }}</h2>
                <p>{!! $post->post_content !!}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection




