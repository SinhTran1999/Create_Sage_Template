@extends('layouts.app')
@section('content')
      <div class="container">
        <h1 class="text-center text-danger mb-4">Danh sách các hình ảnh</h1>
        <div class="d-flex justify-content-between">
        @foreach ($projects as $project)
            <div class="col-md-4">
              <img src= "{{$project->thumb}}" alt="{{$project->alt}}"  title="{{$project->title}}" class="image-fluid">
              <p class="text-center">{{$project->name}}</p>
            </div>

            @if ($loop->iteration %3 === 0)
              </div>
              <div class="d-flex mb-5">
            @endif
        @endforeach         
    </div>
    
  </section>

@endsection
  