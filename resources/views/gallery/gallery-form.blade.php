@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>Input <span>Data Gallery</span></h3>
  </div>
<br>

<div class="card_content">
    <form method="POST" action="/gallery/view-gallery" enctype="multipart/form-data">
        @csrf
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">Title</td>
              <td><input type="text" name="title"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">Description</td>
        <td>
        <textarea  rows="4", cols="54"  name="description" style="resize:none" class="css_input1"></textarea>
        </td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">Tanggal</td>
        <td>
        <input type="date" name="tanggal"  class="css_input1">
        </td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">Type</td>
              <td>
              <select name="type" id="type" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="photo">Photo</option>
                        <option value="video">Videos</option>
                    </select>
              </td>
          </tr>
      <!------------------------------------------------------------------------------------->
        <tr id="photoForm" style="display:none;">
            <td for="image" class="label1">File</td>
            <td>
            <div class="mb-3 input-group">
                <label for="image" class="form-label"></label>
                <input class="form-control" type="file"  name="photo" id="photo">
            </div>
            </td>
        </tr>
      <!------------------------------------------------------------------------------------->
      <tr id="videoForm" style="display:none;">
                    <td class="label1">File Video</td>
                    <td>
                        <div class="mt-1 input-group">
                            <label for="video" class="form-label"></label>
                            <input class="form-control" type="text" name="video" id="video">
                        </div>
                    </td>
                </tr>
      <!------------------------------------------------------------------------------------->
        <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/gallery/view-gallery" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
                  <button class="button_simpan" type="submit"><i class="fas fa-save"></i> Simpan </button>
              </td>
          </tr>
      <!------------------------------------------------------------------------------------->
        </table>
        <br>
    </form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#type').change(function () {
                var selectedType = $(this).val();
                if (selectedType === 'photo') {
                    $('#photoForm').show();
                    $('#videoForm').hide();
                    $('#videoInput').val('');
                } else if (selectedType === 'video') {
                    $('#photoForm').hide();
                    $('#videoForm').show();
                    $('#photo').val('');
                } else {
                    $('#photoForm').hide();
                    $('#videoForm').hide();
                }
            });
        });
    </script>      

</div>
</div>
</div>

@endsection