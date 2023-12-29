<article @php(post_class())>
  <header>
    <h2 class="text-2xl text-red font-extrabold p-4">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>
<<<<<<< HEAD
=======
    
>>>>>>> d1ceb73 (adds a bunnch of stuff like cpt support)
    @include('partials.entry-meta')
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
