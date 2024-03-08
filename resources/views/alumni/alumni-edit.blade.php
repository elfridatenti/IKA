<@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>Edit <span>Data Alumni</span></h3>
  </div>
<br>

<div class="card_content">
    <form action="/alumni-update/{{$alumni->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id" class="css_input1" value="{{$alumni->id}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">full_name</td>
              <td><input type="text" name="full_name" class="css_input1" value="{{$alumni->full_name}}"></td>
          </tr>
          <tr>
              <td class="label1">nik</td>
              <td><input type="text" name="nik" class="css_input1" value="{{$alumni->nik}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">asal_institusi</td>
              <td><input type="text" name="asal_institusi" class="css_input1" value="{{$alumni->asal_institusi}}"></td>
          </tr>
          <tr>
              <td class="label1">phone</td>
              <td><input type="text" name="phone" class="css_input1" value="{{$alumni->phone}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">email</td>
              <td><input type="text" name="email" class="css_input1" value="{{$alumni->email}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">date_of_birth</td>
        <td>
        <input type="date" name="date_of_birth" class="css_input1" value="{{$alumni->date_of_brith}}" >
        </td>
        </tr>
         <!------------------------------------------------------------------------------------->
        
        <tr>
              <td class="label1">address</td>
              <td><input type="text" name="address" class="css_input1" value="{{$alumni->address}}"></td>
          </tr>
          
          <tr>
    <td class="label1">id_kota</td>
    <td><input type="text" name="id_kota" class="css_input1" value="{{$alumni->id_kota}}"></td> 
    </tr>
          <tr>
              <td class="label1">pekerjaan</td>
              <td><input type="text" name="pekerjaan" class="css_input1" value="{{$alumni->pekerjaan}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">status</td>
              <td><input type="text" name="status" class="css_input1" value="{{$alumni->status}}"></td>
          </tr>
          <tr>
              <td class="label1">instansi_pendidikan</td>
              <td><input type="text" name="instansi_pendidikan" class="css_input1" value="{{$alumni->instansi_pendidikan}}"></td>
          </tr>
          <tr>
              <td class="label1">username</td>
              <td><input type="text" name="username" class="css_input1" value="{{$alumni->username}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">password</td>
              <td><input type="text" name="password" class="css_input1" value="{{$alumni->password}}"></td>
          </tr>
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/alumni/view-alumni" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
                  <button class="button_simpan" type="submit"><i class="fas fa-save"></i> Simpan </button>
              </td>
          </tr>
      <!------------------------------------------------------------------------------------->
        </table>
        <br>
    </form>
</div>
</div> 
      
<div class='content'></div>

@endsection