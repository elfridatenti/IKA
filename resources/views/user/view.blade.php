@extends('layout1')
@section('content')
<div class="content">
  <div class="title_area">
      <h3>Input <span>Data User</span></h3>
  </div>
<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
	<a href="/user/view-form" class="btn_tambah"><i class="fas fa-user-plus"></i> Tambah Data</a>
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
          <th>Role</th>
					<th>email</th>
          <th>Action</th>
				</tr>
		</thead>
    <tbody>
                @foreach ($nama as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->role_id}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                      <a href="/user-edit/{{$data ->id}}" class="btn_edit">Edit</a>
                      <form style="display :inline-block" action="/user-delete/{{$data->id}}" method="post">
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