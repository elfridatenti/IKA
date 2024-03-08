@extends('layout1')
@section('content')
<div class="content">
  <div class="title_area">
      <h3>Input <span>Data Berita</span></h3>
</div>

<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
	<a href="/berita/berita-form" class="btn_tambah"><i class="fas fa-newspaper"></i> Tambah Data</a>
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
<div class="scroll">
	<table id="myTable_contoh" class="styled-table">    
		<!----------------------------------------------------------------------->
		<thead>		
				<tr>
					<th>No</th>
					<th>Image</th>
					<th>Title</th>
					<th>Description</th>
					<th>Date</th>
          <th>Action</th>
				</tr>
		</thead>
    <tbody>
              @foreach ($nama as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                    <img src="{{asset('storage/photo/' .$data->gambar)}}" width="100px">
                    </td>
                    <td>{{$data->title}}</td>
                    <td style="white-space: pre-line;" >{{$data->description}}</td>
                    <td>{{$data->tanggal}}
                    <td>
                      <a href="/berita-edit/{{$data ->id}}" class="btn_edit">Edit</a>
                      <form style="display :inline-block" action="/berita-delete/{{$data->id}}" method="post">
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