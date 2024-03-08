@extends('layout')
@section('title', 'Student Add')

@section('content')
    <div class="site-section bg-light ">
      <div class="container mt-5">
      <div class="text-left pb-1 border-primary mb-3 col-mt-12">
              <h2 class="text-primary">Contact Us</h2>
            </div>
        <div class="row">
    <!---dwada-->
          <div class="col-md-5">
          <form method="POST" action="/contact" enctype="multipart/form-data">
            @csrf
              <div class="p-4 mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Contact Us</p><p></p>
                <p class="mb-0 font-weight-bold">
                    <label class="text-black" for="name">Name</label>
                    <input type="text"  class="form-control" name="name">
                </p>
                <p class="mb-0 font-weight-bold">
                    <label class="text-black" for="no_hp">Phone Number</label> 
                    <input type="text" name="no_hp" class="form-control">
                </p>
                <p class="mb-0 font-weight-bold">
                    <label class="text-black" for="email">Email</label> 
                    <input type="text"  name="email" class="form-control">
                </p>
                <p class="mb-0 font-weight-bold">
                    <label class="text-black" for="ftext">Text</label> 
                    <textarea id="textarea" name="description" class="form-control fixed-textarea"></textarea>
                </p>
                <p>
                    <div class="col-md-0">
                    <input type="submit" class="btn btn-primary py-2 px-4 text-white">
                </p>
            </div>
          <form>
          </div>
          

          </div>
<!----------------bagian kotak2------>
    <div class="col-md-7 mb-5">
      <form action="#" class="p-4 bg-white">
        <p class="mb-0 font-weight-bold">Maps</p>
        <div class="container-fluid">
          <div class="map-responsive">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.048108187939!2d104.04896957570534!3d1.1258310988633884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9891dc75e6d49%3A0xdd4f3f4a69a931cb!2sGraha%20Pena%20Batam%20Building!5e0!3m2!1sen!2sus!4v1680858194475!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      </div>
    </div>

  </form>
</div>
        </div>
      </div>
    </div>
    @stop
    @section('JavaScript')
    @endsection