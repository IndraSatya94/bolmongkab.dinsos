<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kabupaten Bolaang Mongondow</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="navbar d-flex align-items-center justify-content-between">

            <div class="logoheader d-flex align-items-center ">
                <img src="../assets/img/logobolmong.png" alt="">
                <h1 class="logo"><a href="index.html">PEMERINTAH KABUPATEN <br> BOLAANG MONGONDOW</a></h1>
            </div>


            <nav class="nav-menu d-none d-lg-block">

                <ul>
                    <li><a href="{{ ('/') }}">Beranda</a></li>

                    <li class="drop-down active"><a href="#">Pemerintah</a>
                        <ul>
                            <li><a href="{{ ('/visimisitemp') }}">Visi dan Misi</a></li>
                            <li class="drop-down"><a href="#">Pimpinan</a>
                                <ul>
                                    <li><a href="{{ ('/bupatitemp') }}">Bupati</a></li>
                                    <li><a href="{{ ('/wakilbupatitemp') }}">Wakil Bupati</a></li>
                                    <li><a href="{{ ('/sekdatemp') }}">Sekretariat</a></li>
                                </ul>
                            </li>
                            <li class="drop-down active"><a href="#">Perangkat Daerah</a>
                                <ul>
                                    <li><a href="https://setda.bolmongkab.go.id/#/">Sekretariat Daerah</a></li>
                                    <li><a href="https://inspektorat.bolmongkab.go.id/">Inspektorat</a></li>
                                    <li class="active"><a href="{{ ('/dinastemp') }}">Dinas</a></li>
                                    <li><a href="{{ ('/badandaerahtemp') }}">Badan Daerah</a></li>
                                    <li><a href="{{ ('/kecamatantemp') }}">Kecamatan</a></li>
                                    <li><a href="{{ ('/desatemp') }}">Desa</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="drop-down"><a href="#">Mengenal Bolmong</a>
                        <ul>
                            <li><a href="{{ ('/sejarahtemp') }}">Sejarah</a></li>
                            <li><a href="{{ ('/artilambangtemp') }}">Arti Lambang</a></li>
                        </ul>
                    </li>

                    <li class="drop-down"><a href="#">Layanan dan Informasi</a>
                        <ul>
                            <li><a href="{{ ('/agendatemp') }}">Agenda</a></li>
                            <li><a href="{{ ('/pengumumantemp') }}">Pengumuman</a></li>
                            <li><a href="{{ ('/puskesmastemp') }}">Puskesmas</a></li>
                            <!-- <li><a href="{{ ('/rpjmdtemp') }}">RPJMD</a></li> -->
                        </ul>
                    </li>

                    <li class="drop-down"><a href="#">Datang dan Kunjungi</a>
                        <ul>
                            <li><a href="{{ ('/ruangdatatemp') }}">Ruang Data</a></li>
                            <li><a href="{{ ('/wisatatemp') }}">Tempat Wisata</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ ('/downloadtemp') }}">Download</a></li>
                </ul>

            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex align-items-center">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Bupati</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= detail Section ======= -->
        <section id="detail" class="detail">
            <div class="container">
                <div class="judul">
                    <h2>INFORMASI DINAS</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-3 sidebar">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#diskominfo"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Dinas Komunikasi dan
                                Informatika</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#disdik" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Pendidikan</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dinkes" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Kesehatan</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dinsos" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Sosial</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#disbun" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Perkebunan</a>
                            <a class="nav-link" id="v-pills-disdukcapil-tab" data-toggle="pill" href="#disdukcapil"
                                role="tab" aria-controls="v-pills-disdukcapil" aria-selected="false">Dinas Kependudukan
                                & Catatan Sipil</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dishub" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Perhubungan</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#diskopukm" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Koperasi, Usaha Kecil &
                                Menengah</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#disnakertrans"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Dinas Tenaga Kerja &
                                Transmigrasi</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dispar" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Pariwisata</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#disperindag"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Dinas Perindustrian &
                                Perdagangan</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dispusip" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Perpustakaan & Kearsipan</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#distan" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Pertanian</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dkp" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Ketahanan Pangan</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dlh" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Lingkunga Hidup</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dp3a" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Pemberdayaan Perempuan &
                                Perlindungan Anak</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dpkp" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Perumahan Rakyat & Kawasan
                                Pemukiman</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dpmd" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Pemberdayaan Masyarakat dan
                                Desa</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dpmptsp" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Penanaman Modal & Pelayanan
                                Terpadu Satu Pintu</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dppkb" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Pengendalian Penduduk &
                                Keluarga Berencana</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dpupr" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Pelerjaan Umum dan Penataan
                                Ruang</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dikan" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Dinas Perikanan</a>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active animate__animated animate__bounceInDown"
                                id="diskominfo" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                @foreach($diskominfo as $kominfo)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kominfo->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kominfo->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kominfo->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kominfo->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kominfo->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $kominfo->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="disdik"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($disdik as $dis)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$dis->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$dis->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$dis->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$dis->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$dis->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$dis->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dinkes"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($dinkes as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dinsos"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($dinsos as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="disbun"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($disbun as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="disdukcapil"
                                role="tabpanel" aria-labelledby="v-pills-didukcapil-tab">
                                @foreach($disdukcapil as $capil)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$capil->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$capil->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$capil->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$capil->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$capil->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$capil->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $capil->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dishub"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($dishub as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="diskopukm"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($diskopukm as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="disnakertrans"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($disnakertrans as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dispar"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($dispar as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="disperindag"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($disperindag as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dispora"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($dispora as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dispusip"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($dispusip as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="distan"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($distan as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dkp" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                @foreach($dkp as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dlh" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                @foreach($dlh as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dp3a" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                @foreach($dp3a as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dpkp" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                @foreach($dpkp as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dpmd" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                @foreach($dpmd as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dpmptsp"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($dpmptsp as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dppkb"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($dppkb as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="dpupr"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($dpupr as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="distan"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @foreach($distan as $kes)
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Pimpinan</td>
                                            <td>:</td>
                                            <td>{{$kes->pimpinan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>:</td>
                                            <td>{{$kes->jabatan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$kes->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telp.</td>
                                            <td>:</td>
                                            <td>{{$kes->telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>:</td>
                                            <td>{{$kes->website}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$kes->email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="judul2">
                                    <h3>Struktur Organisasi</h3>
                                    <hr>
                                    <img src="/image/dinas/{{ $dis->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <br>
                    </div>
                </div>
            </div>

        </section><!-- End detail Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Pemerintah kabupaten Bolaang Mongondow</h3>
                            <p>
                                Lolak Tambolango, Lolak, Kabupaten Bolaang Mongondow, Sulawesi Utara <br>
                                KODE POS 95761, Bolaang Mongdong<br><br>
                                <strong>Phone:</strong> +62 -<br>
                                <strong>Email:</strong> Pemerintah@bolmongkab.go.id<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Link Terkait</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://ppid.bolmongkab.go.id/">PPID</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://jdih.bolmongkab.go.id/">JDIH</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://bolmongkab.go.id/sideka/">Sideka
                                    Bolmong</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://sicantikui.layanan.go.id/#/login">Sicantik Cloud</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://sinta.bolmongkab.go.id/">Sinta
                                    Bolmong</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                Pemerintah Kabupaten Bolaang Mongondow
            </div>
            <div class="credits">
                Copyright &copy; 2021 by <a href="#"> E-Government</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <!--back-to-top-->

    <script src="../assets/js/main.js"></script>
</body>

</html>
