@extends('layouts.frontend')

@section('content')

<!-- Masthead-->
<header class="masthead">
    <div class="container">
         <div class="masthead-subheading">Welcome To Our Madrasah!</div>
       {{-- <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>--}}

        <a class="btn btn-primary btn-xl mb-3" href="{{ route('datasiswa') }}">PENDAFTARAN</a>
        <a class="btn btn-primary btn-xl mb-3 " href="{{ route('databerkas.create') }}">UPLOAD BERKAS</a>            
    </div>
</header>

<!-- About-->
<section class="page-section" id="sejarah">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Sejarah MI An Najiyah</h2>
            <h3 class="section-subheading text-muted">Yayasan Pendidikan Islam An Najiyah</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>1987/1988</h4>
                        <h4 class="subheading">Awal Berdiri</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">KH.Ahmad Mahdum selaku pendiri berpendapat bahwa aktifitas ini harus dikelola secara serius. Maka, setelah berunding disepakatilah untuk membuat sebuah yayasan berupa asrama panti yaitu yayasan untuk menampung anak-anak yatim piatu, dhuafa dan fakir miskin Awal berdirinya yayasan memiliki murid pertama yang bermuqim di asrama hanya 6 orang, semakin tahun semakin bertambah muridnya hingga mencapai 80 murid.
           </p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>1990</h4>
                        <h4 class="subheading">Madrasah Ibtidaiyah An Najiyyah berdiri. </h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Berdirinya Madrasah Ibtidaiyah An Najiyah diharapkan mampu memberikan kontribusi bagi upaya peningkatan sumber daya manusia yang beriman, bertaqwa, dan berakhlakul karimah demi  terwujudnya pembangunan nasional.
                        Saat ini Madrasah Ibtidaiyah An Najiyah telah melaksanakan kegiaan proses belajar dan mengajar selama 31 (Tiga Puluh Satu Tahun) tahun dan civitas akademika Madrasah Ibtidaiyah An Najiyah telah berkomitmen untuk terus melaksanakan program Pendidikan Nasional. </p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- Profil-->
{<section class="page-section bg-light" id="profil">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Profil</h2>
            <h3 class="section-subheading text-muted">MI An Najiyah</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <h4 class="my-3">VISI</h4>
                <p class="text-muted">Unggul dalam Prestasi dan Akhlak berdasarkan Iman dan Taqwa kepada Allah SWT.</p>
            </div>
            <div class="col-md-6">
                <h4 class="my-3">MISI</h4>
                <ol style="text-align: left;">
                    <li> Menumbuhkan semangat keunggulan secara intensif kepada seluruh civitas Madrasah.</li>
                    <li> Mendorong dan membantu siswa untuk mengenal potensi dirinya sehingga dapat di kembangkan secara optimal.</li>
                    <li> Menumbuhkan penghayatan terhadap ajaran agama yang dianut dan juga budaya bangsa sehingga menjadi manusia yang beriman , bertaqwa, berakhlak mulia</li>
                    <li> Membekali siswa dengan pengetahuan dan keterampilan dasar sesuai perkembangan IPTEK.</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"> KONTAK KAMI</h2>
            <h3 class="section-subheading text-muted">MI An Najiyah</h3>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('logo/LOGO.png') }}" alt="" style="width: 150px; height: 150px;">
                <p style="color: white;">Alamat : Jl. PLN No. 80 Rt. 002/Rw 001 Kel. Pondok Karya, Kec. Pondok Aren Kota Tangerang Selatan, Banten </p>
            </div>
        </div>
    </div>
</section>



@endsection
