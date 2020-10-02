@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection

<!--  -->
@if($images)
  <ul>
      @foreach($images as $images)
          <li><img src="{{$image['sizes']['thumbnail']}}" alt="{{$image['alt']}}"></li>
      @endforeach
  </ul>
@endif


