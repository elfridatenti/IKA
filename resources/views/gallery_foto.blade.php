@extends('layout')
@section('title', 'Student Add')

@section('content')
    <div class="site-section bg-light pl-5 ">
      <div class="container-fluid mt-4 pl-5">
        <div class="text-left pb-1 border-primary mb-3 col-mt-12">
              <h2 class="text-primary">Gallery Image</h2>
        </div>
          <div class="row mx-auto">
        @foreach ($nama as $data)
    <!---dwada-->
          <div class="mt-4 ml-4 mr-4">
            <div class="card position-relative" style="width: 33rem;">
              <img src="{{asset('storage/photo/' .$data->images)}}" class="card-img-top" style="height: 33rem;" alt="...">
              <div class="">
                <h5 class="card-title margin_image">{{$data->title}}</h5>
                <p class="card-text margin_image">{{$data->description}}</p>
                <a href="#" class="btn btn-primary button_image ">Details</a>
              </div>
              @csrf
            </div>
          </div>
        @endforeach
        </div>
      </div>
        <div class=" justify-content-center paginator paginator-front ">
          {{$nama->links()}}
        </div>
    </div>
    @stop
    @section('JavaScript')
    @endsection