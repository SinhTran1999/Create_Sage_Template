<article @php post_class() @endphp>
    <header>
      hello
      <h1 class="entry-title">{{get_the_title()}}</h1>
      @include('partials/entry-meta')
    </header>
    <div class="entry-content">
      @php the_content() @endphp
    </div>
</article>