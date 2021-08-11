<!-- Sidebar -->
<nav class="sidebar">
				
    <!-- close sidebar menu -->
    <div class="dismiss">
        <i class="fas fa-arrow-left"></i>
    </div>
    
    <div class="logo">
        {{-- <h3><a href="index.html">Bootstrap 4 Template with Sidebar Menu</a></h3> --}}
        <h3><b>TPQ UNTITLE</b></h3>
    </div>
    
    <ul class="list-unstyled menu-elements">
        <li class="active">
            <a class="scroll-link" href="#top-content"><i class="fas fa-home"></i> Home</a>
        </li>

        <li>
            <a class="scroll-link" href="#section-1"><i class="fas fa-user"></i> Profil</a>
        </li>

        <li>
            <a class="scroll-link" href="#fasilitas"><i class="fas fa-building"></i> Fasilitas</a>
        </li>

        <li>
            <a class="scroll-link" href="#prestasi"><i class="fas fa-trophy"></i> Prestasi</a>
        </li>

        <li>
            <a class="scroll-link" href="#contact-us"><i class="fas fa-envelope"></i> Contact us</a>
        </li>

        {{-- <li>
            <a class="scroll-link" href="#section-5"><i class="fas fa-pencil-alt"></i> Portfolio</a>
        </li> --}}
         {{-- 
        <li>
            <a class="scroll-link" href="#section-1"><i class="fas fa-cog"></i> What we do</a>
        </li> 
        --}}

        {{-- <li>
            <a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                <i class="fas fa-sync"></i>Other sections
            </a>
            <ul class="collapse list-unstyled" id="otherSections">
                <li>
                    <a class="scroll-link" href="#section-3">Our projects</a>
                </li>
                <li>
                    <a class="scroll-link" href="#section-4">We think that...</a>
                </li>
            </ul>
        </li> --}}
    </ul>

    <a href="{{ route ('login')}}" class="btn btn-sm btn-primary ml-4 mb-1">Login</a> <br>
    <a href="{{ route ('pembayaranSPP')}}" class="btn btn-sm btn-primary ml-4 mb-1 ">Pembayaran SPP</a><br>
    <a href="{{ route ('form.create')}}" class="btn btn-sm btn-primary ml-4 ">Upload Bukti Transer</a>
    
    <div class="to-top">
        <a class="btn btn-primary btn-customized-3" href="#" role="button">
            <i class="fas fa-arrow-up"></i> Top
        </a>
    </div>
    
    <div class="dark-light-buttons">
        <a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
        <a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
    </div>

</nav>
<!-- End sidebar -->