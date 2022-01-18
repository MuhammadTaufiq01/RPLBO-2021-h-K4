@extends('navigation.websitenav')
<title>Home | SISTEM INFORMASI PESANTREN AL-AZHAR</title>
@section('content')


<div  style="text-align: center">
    {{-- <h3>Halaman Utama</h3> --}}
    <h3>SELAMAT DATANG DI</h3>
    <h1>SISTEM INFORMASI PESANTREN AL-AZHAR</h1>
    <img width="100%" src="img/alazhar.jpg" alt="SISTEM IN FORMASI PESANTREN AL-AZHAR"></div>

    {{-- @dd(auth()->guard('pengguna')->nama) --}}
    <div>
        <h3>Pesantren Al-Azhar</h3>
    </div>

    {{-- <h1 style="text-align: center">Berita</h1> --}}

<div class="row">
    <div class="col-md-8" style="padding-right: 10px;">

        
            <article class="row" style="margin-top: 30px;">
                <div class="col-md-6" style="padding-left: 0;">
                    <img width="400px" src="#" class="img-responsive">
                </div>
                <div class="col-md-6" style="padding-left: 0;">
                    <h3 style="font-weight: bold; padding: 0; margin: 0;">
                        <a href="#" rel="bookmark" title="Permanent Link to PONPES Al-Azhar">SMP Islam Al Azhar 37 Pekanbaru, Sekolah Pertama Berbasis Digital di Riau</a>
                    </h3>
                    <p class="newsdate" style="font-size: 11px;">
                        <i class="fa fa-clock-o"></i>
                        Sabtu | 15 January 2022
                    </p>
                    <div class="just">
                        <p>Ponpes Al-Azhar Adalah "Pesantren yang menghasilkan lulusan yang berkualitas dan berprestasi"</p>
                    </div>
                </div>
            </article> 
        
        <div class="row">
            <div class="col-md-6 margin-top berita-lain" style="margin:40px 0 0 0;">
                <h4 class="rubrikdecs">BERITA LAIN</h4>
                <div class="decs"></div>
                <ul>
                    @foreach ($berita as $berita)
                    <li>
                        <h5 class="title-list">
                            <a href="#" rel="bookmark" title="{{$berita->judul}}">
                                {{$berita->judul}} </a>
                        </h5>
                        <p class="date-list">{{$berita->tanggal_berita}}</p>
                        <div class="just" style="height: 100px; overflow:hidden">
                            <p>{{$berita->isi}}</p>
                        </div>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="padding:25px 15px 0 5px;">
            <div class="col-md-6 col-xs-6" style="padding: 0 0 0 10px; margin-top: 5px;">
                <a href="#">
                    <img width="200px" src="data:image/png;base64,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" class="img-responsive">
                </a>
            </div>
            <div class="col-md-6 col-xs-6" style="padding: 0 0 0 10px; margin-top: 5px;">
                <a href="#">
                    <img height="200px"  src="https://www.harapanrakyat.com/wp-content/uploads/2020/10/Al-Azhar-Citangkolo.jpg" class="img-responsive">
                </a>
            </div>
        </div>
        <div class="row" style="padding:0 15px 0 5px;">
        </div>
        <div class="sidebar">
            <ul>
                <li class="quote">
                    <div class="kiri"></div>
                    <p>“Kemajuan Indonesia bermuara pada Sumber Daya Manusia. Upaya pemberdayaan dan memerdekakan guru harus menjadi prioritas. PONPES Al-Achar harus siap menjadi center of excellent pendidikan di Indonesia”</p>
                    <div class="kanan"></div>
                    <br>
                    <p style="font-size:12px; color:#999; line-height:12px;">
                        Mendikbud Nadiem Anwar Makarim </p>
                </li>
                <br>
                <li class="sidebar-content">
                    <h4 class="widget">PENGUMUMAN &amp; LELANG</h4>
                    <ul class="menu news-sidebar">
                        <li class="clearfix">
                            <h5><a href="https://unnes.ac.id/pengumuman/mini-class-serifikasiku-risk-management-certification">Mini Class Serifikasiku – Risk Management Certification</a></h5>
                            <span class="date-news">Selasa, 21 Desember 2021</span>
                        </li>
                        <li class="clearfix">
                            <h5><a href="https://unnes.ac.id/pengumuman/call-for-papers-korean-music-2022">Call for Papers Korean Music 2022</a></h5>
                            <span class="date-news">Selasa, 21 Desember 2021</span>
                        </li>
                        <li class="clearfix">
                            <h5><a href="https://unnes.ac.id/pengumuman/ntu-model-united-nations-ntumun-2022">NTU Model United Nations (NTUMUN)&nbsp; 2022</a></h5>
                            <span class="date-news">Selasa, 21 Desember 2021</span>
                        </li>
                        <li class="clearfix">
                            <h5><a href="https://unnes.ac.id/pengumuman/lomba-inovasi-pembelajaran-undiksha-2021">Lomba Inovasi Pembelajaran Undiksha 2021</a></h5>
                            <span class="date-news">Selasa, 14 Desember 2021</span>
                        </li>
                        <li class="clearfix">
                            <h5><a href="https://unnes.ac.id/pengumuman/webinar-data-science-dari-metrodata-academy">Webinar Data Science dari Metrodata Academy</a></h5>
                            <span class="date-news">Senin, 13 Desember 2021</span>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-content">
                    <div class="row" style="padding: 0 15px 0 0; color: #032739;">
                        <div class="pull-right">
                            <a href="https://unnes.ac.id/arsip-pengumuman/"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </li>
                <br>
                <li class="sidebar-content">
                    <h4 class="widget">LOWONGAN</h4>
                    <ul class="menu news-sidebar">
                        <li class="clearfix">
                            <h5><a href="https://unnes.ac.id/lowongan/lowongan-guru-smk-bina-bhakti-cilacap">Lowongan Guru SMK Bina Bhakti Cilacap</a></h5>
                            <span class="date-news">Selasa, 28 Desember 2021</span>
                        </li>
                        <li class="clearfix">
                            <h5><a href="https://unnes.ac.id/lowongan/kesempatan-berkarier-di-pt-juke-solusi-teknologi">Kesempatan Berkarier di PT. Juke Solusi Teknologi</a></h5>
                            <span class="date-news">Senin, 13 Desember 2021</span>
                        </li>
                        <li class="clearfix">
                            <h5><a href="https://unnes.ac.id/lowongan/lowongan-pekerjaan-it-support-dan-it-programmer">Lowongan Pekerjaan IT Support dan IT Programmer PT SUTINDO GROUP</a></h5>
                            <span class="date-news">Selasa, 14 September 2021</span>
                        </li>
                        <li class="clearfix">
                            <h5><a href="https://unnes.ac.id/lowongan/general-legal-counsel-di-itu">General Legal Counsel di ITU</a></h5>
                            <span class="date-news">Rabu, 25 Agustus 2021</span>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-content">
                    <div class="row" style="padding: 0 15px 0 0; color: #032739;">
                        <div class="pull-right">
                            <a href="https://unnes.ac.id/arsip-lowongan/"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
    
@endsection