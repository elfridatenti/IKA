@extends('layout1')
@section('content')
<div class="content">
  <div class="title_area">
      <h3>Isi <span>Data Contact us</span></h3>
  </div>
<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
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
					<th>nama</th>
                    <th>No HP</th>
					<th>email</th>
                    <th>Description</th>
                    <th>Action</th>
				</tr>
		</thead>
    <tbody>
                @foreach ($nama as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->no_hp}}</td>
                    <td>{{$data->email}}</td>
                    <td style="white-space: pre-line;">{{$data->description}}</td>
                    <td>
                      <form style="display :inline-block" action="/contact-delete/{{$data->id}}" method="post">
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