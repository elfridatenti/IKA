<!DOCTYPE html>
<html>
  <head>
  <link rel="icon web" href="Logo.png">
    <title>Admin</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/icon/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
<!--------------------------------------------------------------------->
    <input type="checkbox" id="check">
		<header>
    </div>
    
		</header>
        <div class='sidebar'>
      <label for='check'>
          <i class='fas fa-bars sidebar_btn' id='sidebar_btn'></i>
          <i href='/home' id='admin'>Ika Undip</i>
        <!--  <i id='admin'>Ika Undip</i> -->
        </label>
        
        <a href='/user/view'><i class='fas fa-user'></i><span> Data user</span></a>
        <a href='/berita/view-berita'><i class='fas fa-newspaper'></i><span> Data Berita</span></a>
        <a href='/alumni/view-alumni'><i class='fas fa-graduation-cap'></i><span> Data Alumni</span></a>
        <a href='/pengalaman/view-pengalaman'><i class='fas fa-graduation-cap'></i><span> Data Pengalaman</span></a>
        <a href='/keahlian/view-keahlian'><i class='fas fa-graduation-cap'></i><span> Data Keahlian</span></a>
        <a href='/kota/view-kota'><i class='fas fa-city'></i><span> Data Kota</span></a>
        <a href='/gallery/view-gallery'><i class='fas fa-image'></i><span> Data Galeri</span></a>
        <a href='/contact_us/view-contact'><i class='fas fa-phone'></i><span> Data Contact Us</span></a>

        <a href="/logout" class="btn_logout">Logout <i class="fas fa-sign-out-alt"></i></a>
      </div>
      <!--<a href='#'><i class='fas fa-person'></i><span> {{auth()->user()->name}}</span></a>-->
      
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @include('sweetalert::alert')
</body>
</html>