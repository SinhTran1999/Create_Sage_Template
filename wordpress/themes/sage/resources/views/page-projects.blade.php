@extends('layouts.app')
@section('content')
      @include('partials.slider')
      <div class="container">
        
        <h1 class="text-center text-danger mb-4">Danh sách các hình ảnh</h1>

        <div class="d-flex justify-content-between">
        @foreach ($projects as $project)
            <div class="col-md-4 px-3 mb-4  ">
              <a href="{{$project->permalink}}" class="text-black-50">
                <div class="bg-gray-light d-flex flex-column p-3 rounded">
                  <img src= "{{$project->thumb}}" alt="{{$project->alt}}"  title="{{$project->title}}" class="image-fluid  rounded">
                  <p class="text-center text-uppercase">{{$project->name}}</p>
                </div>
              </a>
            </div>

            @if ($loop->iteration %3 === 0)
              </div>
              <div class="d-flex mb-5">
            @endif
        @endforeach         
    </div>
    
  </section>

@endsection
  