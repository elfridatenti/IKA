@extends('layout1')
@section('content')
<br>
<div class="content">
  <div class="title_area">
      <h3>Input <span>Data kota</span></h3>
</div>

<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
	<a href="/kota/kota-form" class="btn_tambah"><i class="fas fa-newspaper"></i> Tambah Data</a>
	
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
          <th>NO</th>
					<th>ID</th>
					<th>name_kota</th>
					
          <th>Action</th>
				</tr>
		</thead>
    <tbody>
              @foreach ($nama as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name_kota}}</td>
                    
                    <td>
                      <a href="/kota-edit/{{$data ->id}}" class="btn_edit">Edit</a>
                      <form style="display :inline-block" action="/kota-delete/{{$data->id}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn_hapus_merah">Delete</button>

                      </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
</div>
</div>
      
@endsection