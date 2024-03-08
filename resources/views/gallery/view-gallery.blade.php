@extends('layout1')
@section('content')
      
  <div class="content">
	  <div class="title_area">
		  <h3><i class="fas fa-image"></i> List <span>Data  Gallery</span></h3>
	</div>
<br>

<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
	<a href="/gallery/gallery-form" class="btn_tambah"><i class="fas fa-image -plus"></i> Tambah Data</a>
	
  <!------>
  <div>
	<div class="search-box ">
    <form action="" method="get">
      <div class="input-group ">
        <button class="input-group-text">Search</button>
		    <input type="text" name="keyword" id="keyword" onkeyup="myFunction()" class="form-control" placeholder="Search for names..">
      <div>
      </form>
  </div>
  </div>
  <!------->
<div class="scroll">
	<table id="myTable_contoh" class="styled-table">    
		<!----------------------------------------------------------------------->
		<thead>		
				<tr>
					<th>No</th>
          <th>Image & Video</th>
					<th>Title</th>
					<th>Description</th>
					<th>Date</th>
					<th>type</th>
          <th>action</th>

				</tr>
		</thead>
    <tbody>
                @foreach ($nama as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                    @if ($data->images)
                      <img src="{{asset('storage/photo/' .$data->images)}}" width="100px">
                    @endif
                    @if ($data->video)
                      <iframe width="100px" src="https://www.youtube.com/embed/{{$data->video}}" frameborder="0" allowfullscreen></iframe>
                    @endif
                      </td>
                    <td>{{$data->title}}</td>
                    <td style="white-space: pre-line;">{{$data->description}}</td>
                    <td>{{$data->tanggal}}
                    <td>{{$data->type}}</td>

                  <td>
                      <a href="/gallery-edit/{{$data ->id}}" class="btn_edit">Edit</a>
                      <form style="display :inline-block" action="/gallery-delete/{{$data->id}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn_hapus_merah">Delete</button>

                      </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
    </table>
    <div class="">
    {{$nama->withQueryString()->links()}}
    </div>
</div>
</div>
</div>
@endsection