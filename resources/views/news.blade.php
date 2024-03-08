@extends('layout')
@section('title', 'Halaman Berita Terbaru')

@section('content')
<div class="site-section pl-5 pr-5">
    <div class="container-fluid">
        <!-- Konten lainnya di sini -->

        <!-- Bagian Banner Berita Utama -->
        <div class="row mb-5 mt-5 mt-4 pl-5 pr-5">
            <div class="col-md-20 order-md-10" data-aos="fade">
                <div class="text-left pb-1 border-primary mb-4">
                    <h2 class="text-primary">Keanggotaan IKA UNDIP</h2>
                </div>

                <!-- Tampilkan berita terbaru sebagai banner -->
                
                <div class="swiper-container mt-5">
                        @if($latestNews)
                            <img src="{{ asset('storage/photo/' . $latestNews->gambar) }}" alt="Banner Image" class="img-fluid rounded" style="width:100%; height:50vh;" >
                                <tr>
                                <td><h4 class="mt-2 pd-5"><strong>{{ $latestNews->title }}</strong></h4></td>
                                    <h3>{{ $latestNews->judul }}</h3>
                                </tr>
                                <p><strong>{{ $latestNews->tanggal }}</strong></p>
                                <p>{{ $latestNews->description }}</p>

                        @else
                        <p>Tidak ada berita terbaru saat ini.</p>
                        @endif
                </div>
            </div>
        </div>
        <!-- Akhir dari Bagian Banner Berita Utama -->

        <!-- Bagian Daftar Berita Lainnya -->
        <div class="row mb-5 mt-5 mt-4 pl-5 pr-5">
            <div class="col-md-20 order-md-10" data-aos="fade">
                <div class="other-news">
                    <h4>Berita Lainnya</h4>
                    <ul>
                        @foreach($latestNewsExceptTop as $news)
                        <li>
                            <table style="display: flex; justify-content: space-between; align-items: center;">
                                <tr>
                                    <td style="padding: 10px; "><h5 style="margin: 0;"><strong>{{ $news->title }}</strong></h5></td>
                                    <td style="padding: 10px; ">{{ $news->tanggal }}</td>
                                </tr>
                            </table>
                            <p>{{ $latestNews->description }}</p>
                            <!-- Anda bisa menampilkan cuplikan isi berita atau informasi lainnya -->
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- Akhir dari Bagian Daftar Berita Lainnya -->
    </div>
    <div class=" justify-content-center paginator paginator-front ">
          {{$latestNewsExceptTop->links()}}
        </div>
</div>

@stop

@section('JavaScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/6.8.4/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        // Opsi lainnya sesuai kebutuhan
    });
</script>
@endsection
