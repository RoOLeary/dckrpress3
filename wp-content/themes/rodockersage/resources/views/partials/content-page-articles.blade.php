@php(the_content())
<x-alert message="An Alert Boiiii" type="warning"/>
{{-- @include('components.alert', [ $message = 'An alert message', $type = 'bg-red-700 text-white']) --}}
@foreach($articles as $article)
<article>
<h1 class="text-5xl font-black">{{ $article['title'] }}</h1>
<a href="/article/{{ $article['slug'] }}">{{ $article['article_title'] }}</a>
<p>ID: {{ $article['id'] }}</p>
<span>{{ $article['item_sage']}}</span>
</article>
@endforeach

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
