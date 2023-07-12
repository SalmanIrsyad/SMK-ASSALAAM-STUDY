<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Global Warming</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="home" class="nav-item nav-link active">Home</a>
                                <a href="about" class="nav-item nav-link">About</a>
                                <a href="berita" class="nav-item nav-link">Berita</a>
                                <a href="contact" class="nav-item nav-link">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    {{-- <div class="section-header text-center">
                        <h2>Penyebab Pemanasan Global</h2>
                    </div> --}}
                  {{-- Start Berita --}}
                  
     @include('user.berita');
                </div>
            </div>
            <!-- Service End -->

            <!-- About Start -->
            {{-- <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                       
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <h3>Dampak Pemanasan Global</h3>
                            </div>
                            <div class="about-text">
                                <h4>1. Iklim Tidak Stabil </h4>
                                <p>
                                 Faktor -faktor yang mempengaruhi iklim dan cuaca adalah sama sinar matahari, suhu, tekanan udara,kelembaban udara ,angin, awan dan curah hujan. 
                                </p>
                                <p>
                                   Daerah-daerah yang dulu mengalami salju ringan kini tak mengalaminya lagi. Di pegunungan di daerah subtropis, bagian yang tertutup salju akan semakin sedikit serta akan lebih cepat mencair. Musim tanam akan lebih lama di beberapa area. Suhu pada musim dingin dan malam hari akan cenderung untuk bertambah. 
                                </p>
                                <p>
                                    Daerah yang hangat akan menjadi lebih lembap karena lebih banyak air yang menjadi uap dan lepas dari lautan. Curah hujan di seluruh dunia telah naik sebesar 1 persen dalam seratus tahun terakhir ini . Badai akan ternyata lebih sering melanda. Selain itu, air akan lebih cepat lepas jadi uap dari tanah.Akibatnya beberapa daerah akan menjadi lebih kering dari sebelumnya.
                                </p>
                                <p>
                                    Angin akan bertiup lebih kencang dan memiliki pola yang berbeda dengan sebelumnya. Topan badai (hurricane) yang mendapat kekuatannya dari penguapan air, akan menjadi lebih dahsyat. Pola cuaca menjadi sulit terprediksi dan lebih ekstrem.
                                </p>
                                <h4>2. Meningkatkan Permukaan air laut</h4>
                                <p>
                                    Cairnya es di daerah kutub telah menyebabkan volume air laut akan bertambah ,akibatnya akan terjadi peningkatan permukaan air laut. Tinggi muka laut di seluruh dunia telah meningkat 10 – 25 cm (4 – 10 inchi) selama abad ke-20, dan para ilmuwan IPCC memprediksi peningkatan lebih lanjut 9 - 88 cm (4 - 35 inci) pada abad ke-21 
                                </p>
                                <p>
                                     daerah seputaran pantai akan terendam. Seperti negara Belanda yang kehilangan 17,6 % daerahnya karena tenggelam oleh naiknya 100 cm permukaan laut. Erosi dari tebing, pantai, dan bukit pasir akan mengalami peningkatan. Ketika tinggi lautan mencapai muara sungai, banjir akibat air pasang tak bisa dihindari lagi.
                                </p>
                                <h4>3. Gangguan ekologis</h4>
                                <p>
                                    Manusia yang dikaruniai akal mungkin akan melakukan hal yang meminimalisir panas yang muncul, namun makhluk lain tentu tidak. Hewan dan tanaman bisa jadi berakhir dengan kepunahan karena tak mampu beradaptasi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- About End -->

            <!-- About Start -->
            {{-- <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <h3>Akibat Pemanasan global di Indonesia</h3>
                            </div>
                            <div class="about-text">
                                <p>
                               Pada tahun 2030 menurut Badan Klimatologi Meteorologi dan Geofisika akan terjadi peningkatan suhu sebesar 0,5 derajat celcius. 2030 
                                </p>
                                <p>
                                Selain kenaikan suhu udara, kasus kekeringan juga akan meningkat di Pulau Sumatera bagian selatan, sebagian besar Pulau Jawa, Madura, Bali, Nusa Tenggara Barat (NTB), hingga Nusa Tenggara Timur (NTT) pada 2030. Sementara musim hujan, lebat hingga ekstrim juga cenderung bertambah hingga 40 persen dibandingkan saat ini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- About End -->

            <!-- About Start -->
            {{-- <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <h3>Cara Mengantisipasi Pemanasan Global</h3>
                            </div>
                            <div class="about-text">
                                <p>
                               beberapa langkah yang bisa dilakukan untuk turut serta dalam meminimalisir dampak pemanasan global :
                                </p>
                                <p>
                                1.Konservasi lingkungan seperti melakukan reboisasi, penenaman pohon dan penghijauan lahan kritis.
                                </p>
                                <p>
                                2.Menggunakan energi yang bersumber dari energi alternatif (Energi air, matahari, angin, bioenergy) guna mengurangi penggunaan energi bahan bakar fosil (minyak bumi dan batu bara).
                                </p>
                                <p>
                                3.Daur ulang dan efisiensi energi.
                                </p>
                                <p>
                                4.Upaya pendidikan kepada masyarakat luas dengan memberikan pemahaman dan penerapan untuk mencegah terjadinya pemanasan global. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- About End -->


            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
