@extends('../layouts.app')

@section('content')
  @while (have_posts()) @php the_post() @endphp
      <section class="py-5 font-sans min-h-screen -mb-10">
        <h2 class="text-2xl mb-4">{{the_title('<h2>','</h2>')}}</h2>
        {!! the_content()!!}
      </section>
      @php
        $args = [
          'post_per_page' => -1,
          'offset' => 0,
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' =>'projects'
        ];

        $the_query = new \WP_Query($args)
      @endphp

      @while ($the_query->have_posts()) 
        @php $the_query->the_post() @endphp
        hello
      @endwhile

      @php 
        wp_reset_postdata();

      @endphp
  @endwhile
@endsection
  