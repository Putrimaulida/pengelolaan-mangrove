<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mangrove.In</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">



    <!-- Favicons logo web -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <style>
        .card-container {
            display: flex;
            justify-content: space-between;
        }

        .card {
            flex: 1;
            max-width: 300px;
            /* Lebar maksimum kartu */
            margin: 10px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
            /* Perbesar kartu saat hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Tambahkan bayangan saat hover */
        }

        .card-body {
            text-align: center;
        }

        .card i {
            font-size: 36px;
            margin-bottom: 10px;
            color: #007BFF;
        }

        .btn {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Gaya CSS untuk tombol "Clear" */
        #trackComplaintForm button[type="reset"] {
            background: transparent;
            /* Latar belakang transparan */
            border: none;
            /* Hapus border */
            cursor: pointer;
            /* Tampilkan cursor pointer saat mengarahkan ke tombol */
            margin-left: 10px;
            /* Jarak antara tombol "Track" dan "Clear" */
            font-size: 16px;
            /* Ukuran font teks */
            color: red;
            /* Warna teks (misalnya, merah) */
        }

        /* Gaya CSS untuk menghilangkan efek klik pada tombol "Clear" */
        #trackComplaintForm button[type="reset"]:focus {
            outline: none;
            /* Hapus efek outline saat tombol ditekan */
        }

        .website-link {
            color: #ffD700;
            text-decoration: none;
        }

        .map-controls {
            position: absolute;
            top: 1px;
            right: 1px;
            z-index: 1000;
            background-color: rgba(255, 255, 255, 0.8);
            /* Atur opacity background */
            padding: 2px;
            border-radius: 3px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            max-width: 200px;
            /* Atur maksimal lebar kontrol */
        }

        #toggleControls {
            font-size: 0.8rem;
            /* Atur ukuran font tombol */
            padding: 1px 1px;
        }

        .input-group,
        .form-check {
            font-size: 0.7rem;
            /* Atur ukuran font elemen input dan label */
        }

        .form-check-input {
            transform: scale(0.7);
            /* Atur ukuran checkbox */
        }

        .d-none {
            display: none;
        }

        .btn i {
            font-size: 1rem;
            margin: 2px;
        }

        /* Styling Container Checkbox */
        .custom-checkbox {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
            font-size: 0.9rem;
            user-select: none;
        }

        /* Hide Checkbox default */
        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Style untuk kotak checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Ketika user meng-hover cursor */
        .custom-checkbox:hover input~.checkmark {
            background-color: #ccc;
        }

        /* Style untuk checkbox ketika dicentang */
        .custom-checkbox input:checked~.checkmark {
            background-color: #2196F3;
        }

        /* Membuat tanda centang */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .custom-checkbox input:checked~.checkmark:after {
            display: block;
        }

        .custom-checkbox .checkmark:after {
            left: 7px;
            top: 3px;
            width: 7px;
            height: 13px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
        }

        .btn-transparent {
            background-color: transparent;
            border: 2px solid #fff;
            padding: 0;
            /* Menghilangkan padding */
            color: #fff;
            /* Warna teks untuk tombol transparan */
            cursor: pointer;
        }
        /* CSS untuk mengatur lebar maksimum gambar dalam hero section */
        .hero-img img {
            max-width: 100%; /* Membatasi lebar gambar agar tidak melebihi lebar container */
            height: auto; /* Memastikan tinggi gambar disesuaikan secara proporsional */
        }
        #slider{
            padding: 10px 0 10px;
            position: relative;
            width: 300px;
            height: 300px;
        }
        #slider img{
            width: 300px;
            height: 300px;
            position: absolute;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px;
            -moz-border-radius: 5px 5px 5px 5px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="beranda"style="text-decoration: none;">Mangrove.In</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#pantai">Data Pantai</a></li>
                    <li><a class="nav-link scrollto" href="#mangrove">Jenis Mangrove</a></li>
                    <li><a class="nav-link scrollto" href="#rekomendasi">Analisis Data</a></li>
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background-image: url('assets/images/mangrove5.jpg');  background-repeat: no-repeat; background-size: cover;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 style="font-size:34px;">Pengelolaan Vegetasi Mangorve</h1>
                    <h1>Mangrove.In Siap Melayani!</h1>
                    <h2>Informasi Seputar Perkembangan dan Pengelolaan Vegetasi Mangrove Kabupaten Malang Selatan</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#"
                            class="btn-get-started"style="text-decoration: none; margin-right: 10px;">Get
                            Started</a>
                        <a href="#" class="btn-get-started" style="text-decoration: none;" data-bs-toggle="modal"
                            data-bs-target="#trackComplaintModal">Track Complaint</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->


    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p style="text-align: justify;">
                            Sistem Informasi Pengelolaan Vegetasi Mangrove berkomitmen untuk memberikan layanan terbaik dalam
                            menjaga kelestarian ekosistem wilayah pesisir. Dengan semangat pelayanan yang unggul, kami bertekad untuk
                            meningkatkan kualitas hidup masyarakat melalui aksesibilitas, efisiensi, dan kepedulian terhadap lingkungan.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Pelayanan Unggul: Memberikan layanan dengan
                                profesionalisme, integritas, dan rasa tanggung jawab tinggi.</li>
                            <li><i class="ri-check-double-line"></i> Inovasi: Mengadopsi teknologi dan metode terbaru
                                untuk terus meningkatkan kualitas dan efisiensi layanan.</li>
                            <li><i class="ri-check-double-line"></i> Kolaborasi: Bekerja sama dengan berbagai pihak
                                untuk mencapai tujuan bersama dan mendukung kemajuan masyarakat.</li>
                            <li><i class="ri-check-double-line"></i>Transparansi: Menjaga keterbukaan dalam proses
                                pelayanan dan pengambilan keputusan.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p style="text-align: justify;">
                            Kami yakin bahwa menangani informasi pengelolaan vegetasi mangrove dengan baik adalah kunci untuk membangun
                            sebuah ekosistem yang ramah lingkungan dan kepedulian masyarakat terhadap lingkungan dapat meningkat. Setiap pengaduan yang kami tangani adalah
                            kontribusi nyata bagi kemajuan masyarakat secara keseluruhan. Informasi ini diharapkan
                            dapat membantu dalam menjaga kelestarian ekosistem ditiap periodenya berdasarkan garis trendnya.
                            Komunikasi yang jujur
                            dan terbuka merupakan dasar bagi hubungan yang kuat antara kami dan masyarakat yang kami
                            layani. Perubahan yang kami ciptakan hari ini adalah investasi bagi masa depan yang lebih
                            baik. Bersama-sama, mari membangun
                            masyarakat yang lebih baik dan sejahtera untuk generasi mendatang. Terima kasih atas
                            dukungan dan kepercayaan Anda dalam sistem pengelolaan vegetasi mangrove ini. Mari bersama-sama
                            menciptakan kelestarian ekositem mangrove yang lebih baik dan memberdayakan seluruh masyarakat
                            untuk mencapai kesejahteraan dan kemajuan bersama.
                        </p>
                        {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="pantai" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Data <strong>Pantai</strong></h3>
                            <p style="text-align: justify;">
                                untuk memfasilitasi dan meningkatkan partisipasi masyarakat dalam menyampaikan pengaduan
                                terkait berbagai masalah, pelayanan publik, atau isu sosial kepada pihak berwenang atau
                                instansi yang berwenang untuk menanganinya
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"
                                        style="text-decoration: none;"><span>01</span> Meningkatkan Transparansi <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show"
                                        data-bs-parent=".accordion-list">
                                        <p style="text-align: justify;">
                                            SIPMA bertujuan untuk menciptakan transparansi dalam proses penanganan
                                            pengaduan. Dengan adanya sistem yang terbuka, informasi mengenai status dan
                                            penyelesaian pengaduan dapat diakses oleh masyarakat secara mudah dan jelas.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"
                                        style="text-decoration: none;"><span>02</span> Memperkuat Akuntabilitas
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p style="text-align: justify;">
                                            Tujuan lain dari SIPMA adalah meningkatkan akuntabilitas lembaga pemerintah
                                            dan institusi publik. Dengan adanya mekanisme pengaduan yang efektif, pihak
                                            berwenang harus merespons laporan masyarakat dan bertanggung jawab atas
                                            penanganan masalah yang dihadapi oleh warga.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"
                                        style="text-decoration: none;"><span>03</span> Memberdayakan Masyarakat
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p style="text-align: justify;">
                                            SIPMA bertujuan untuk memberdayakan masyarakat dalam menyampaikan keluhan
                                            dan permasalahan yang mereka alami. Dengan adanya sistem ini, masyarakat
                                            merasa didengar dan memiliki sarana untuk berpartisipasi aktif dalam proses
                                            perbaikan dan pengawasan pelayanan publik.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"
                                        style="text-decoration: none;"><span>04</span> Meningkatkan Kualitas Pelayanan
                                        Publik
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                        <p style="text-align: justify;">
                                            Melalui SIPMA, lembaga pemerintah dan institusi publik dapat mendapatkan
                                            umpan balik dari masyarakat secara langsung. Informasi ini menjadi bahan
                                            evaluasi dan perbaikan untuk meningkatkan kualitas layanan yang diberikan
                                            kepada masyarakat.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"
                                        style="text-decoration: none;"><span>05</span> Mendukung Pemantauan dan
                                        Evaluasi
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                                        <p style="text-align: justify;">
                                            Dengan mencatat pengaduan dan respon yang diberikan, SIPMA memberikan basis
                                            data yang berharga untuk pemantauan dan evaluasi kinerja pelayanan publik.
                                            Hal ini membantu mengidentifikasi pola permasalahan, kebutuhan prioritas,
                                            dan mencari solusi yang lebih baik.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in"
                        data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->


        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <!-- ======= Services Section ======= -->
        <section id="mangrove" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Jenis Mangrove</h2>
                    <p>Sistem Pengaduan Masyarakat (SIPMA)! Kami menyediakan berbagai layanan untuk
                        mempermudah Anda dalam mengajukan pengaduan dan mendapatkan bantuan yang Anda butuhkan. Di bawah
                        ini, Anda dapat menemukan berbagai fitur yang kami tawarkan. Kami siap melayani dengan sepenuh
                        hati.❤️</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-cast"></i></div>
                            <h4><a>Aksesibilitas Online</a></h4>
                            <p style="text-align: justify;">Pelayanan SIPMA memberikan kemudahan akses bagi masyarakat
                                untuk mengakses layanan
                                publik secara online dari perangkat mereka, seperti komputer atau ponsel pintar, kapan
                                saja dan di mana saja.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a>Integrasi Layanan</a></h4>
                            <p style="text-align: justify;">Pelayanan SIPMA mengintegrasikan berbagai layanan publik
                                dalam satu platform,
                                memungkinkan masyarakat untuk mengakses berbagai layanan dari instansi yang berbeda
                                secara terpadu. Dengan demikian, masyarakat tidak perlu berurusan dengan beberapa
                                platform atau mengulang proses yang sama saat menggunakan layanan yang berbeda.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-rss"></i></div>
                            <h4><a>Pemantauan Status Permohonan</a></h4>
                            <p style="text-align: justify;">Masyarakat dapat memantau status permohonan atau proses
                                pelayanan mereka secara real-time melalui platform online, sehingga mereka mengetahui
                                perkembangan prosesnya dengan mudah dan transparan.kami berharap dapat memberikan
                                layanan yang lebih baik dan memperkuat
                                hubungan yang saling menguntungkan antara pihak berwenang dan masyarakat.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-key"></i></div>
                            <h4><a>Keamanan Data</a></h4>
                            <p style="text-align: justify;">Pelayanan SIPMA dirancang dengan sistem keamanan yang kuat
                                untuk melindungi data pribadi
                                dan informasi sensitif masyarakat dari akses yang tidak sah.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        

        <!-- ======= Portfolio Section ======= -->

        <!-- ======= Team Section ======= -->
        <section id="rekomendasi" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Rekomendasi</h2>
                    <p style="text-align: justify;">Team Sistem Pengaduan Masyarakat kami adalah sebuah tim lintas
                        dinas yang bertanggung jawab atas
                        pengelolaan dan pengembangan Sistem Pengaduan Masyarakat. Tim ini dibentuk dengan tujuan untuk
                        memberikan platform yang efisien dan responsif bagi masyarakat dalam menyampaikan pengaduan,
                        keluhan, atau masukan terkait layanan publik dan isu-isu komunitas.

                        Anggota dalam tim berasal dari berbagai departemen atau dinas yang memiliki keterkaitan dengan
                        isu-isu yang sering dihadapi oleh masyarakat. Kami memiliki perwakilan dari berbagai bidang,
                        seperti IT, hukum, layanan publik, dan hubungan masyarakat. Kehadiran anggota dari berbagai
                        dinas memungkinkan kami untuk merancang solusi yang holistik dan berorientasi pada kebutuhan
                        masyarakat.

                        Sebagai tim kolaboratif, kami menjunjung tinggi transparansi, kecepatan, dan akurasi dalam
                        menangani setiap pengaduan yang masuk. Kami terus berupaya meningkatkan layanan dan efisiensi
                        dalam menangani pengaduan agar setiap masukan masyarakat dapat direspon dengan tepat waktu dan
                        diberikan tindakan yang sesuai.

                        Selain itu, kami bekerja sama dengan berbagai instansi dan mitra eksternal untuk menyediakan
                        saluran pengaduan yang lebih luas dan aksesibel bagi masyarakat. Kami berkomitmen untuk
                        memastikan bahwa setiap pengaduan diperlakukan secara adil, amanah, dan kerahasiaannya terjaga.

                        Sebagai garda terdepan dalam menghadapi isu-isu masyarakat, kami menganggap tanggung jawab kami
                        sebagai kesempatan untuk melayani dan membantu memajukan kehidupan masyarakat. Kami siap untuk
                        menghadapi perubahan dan tantangan dalam menerapkan teknologi terbaru dan inovasi dalam Sistem
                        Pengaduan Masyarakat demi memberikan pelayanan yang lebih baik dan bermanfaat bagi seluruh
                        komunitas yang kami layani.</p>
                </div>

                <div class="row">

                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="member-carousel">
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="tugasModal" tabindex="-1" role="dialog"
                        aria-labelledby="tugasModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tugasModalLabel">TUGAS</h5>
                                    <button type="button" class="close" data-dismiss="modal" id="closeModalX1">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Duties will be loaded here -->
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- End Pricing Section -->

        <!-- ======= Services Section ======= -->
        <section id="statistik" class="services section-bg" style="background-color: #37517E;">
            <div class="container" data-aos="fade-up">

                <div class="section-title" style="color: #fff;">
                    <h2 style="color: #fff;">Grafik Data</h2>
                    <p>Statistik Sistem Pengaduan Masyarakat adalah kumpulan data yang mencatat laporan pengaduan dari
                        masyarakat terkait masalah pelayanan publik dan berbagai isu sosial. Angka-angka ini
                        mencerminkan partisipasi masyarakat dalam menyampaikan keluhan serta respons pihak dinas terkait
                        dalam menangani laporan tersebut.</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="text-center">
                                <div class="icon"><i class="bx bx-envelope"></i></div>
                            </div>
                            <h4 style="font-size:25px" align="center"><a>Complaints Pending</a></h4>
                            <p style="font-size:40px" align="center"><span id="pendingCounter">0</span></p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="text-center">
                                <div class="icon"><i class="bx bx-time"></i></div>
                            </div>
                            <h4 style="font-size:22px" align="center"><a>Complaints In Progress</a></h4>
                            <p style="font-size:40px" align="center"><span id="inProgressCounter">0</span></p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="text-center">
                                <div class="icon"><i class="bx bx-task"></i></div>
                            </div>
                            <h4 style="font-size:24px" align="center"><a>Complaints Resolved</a></h4>
                            <p style="font-size:40px" align="center"><span id="resolvedCounter">0</span></p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="text-center">
                                <div class="icon"><i class="bx bx-file"></i></div>
                            </div>
                            <h4 style="font-size:20px" align="center"><a>Jumlah Laporan Sekarang</a></h4>
                            <p style="font-size:40px" align="center"><span id="totalCounter">0</span></p>
                        </div>
                    </div>

                    <script>
                        // Fungsi untuk memulai penghitungan dari 0 ke nilai akhir (finalValue) dengan durasi yang ditentukan
                        function startCounting(targetElement, finalValue, duration) {
                            let currentValue = 0;
                            const incrementValue = finalValue / duration;
                            const element = document.getElementById(targetElement);

                            // Fungsi untuk memperbarui nilai hitungan
                            function updateCounter() {
                                currentValue += incrementValue;
                                element.textContent = Math.round(currentValue);

                                // Memeriksa apakah mencapai finalValue, jika belum, lanjutkan pembaruan
                                if (currentValue < finalValue) {
                                    requestAnimationFrame(updateCounter);
                                } else {
                                    element.textContent = finalValue; // Pastikan finalValue tercapai
                                }
                            }

                            updateCounter(); // Memulai animasi penghitungan
                        }

                        // Fungsi untuk mengatur penghitungan saat elemen berada dalam tampilan
                        function setupCounting(targetElement, value, duration) {
                            let hasStarted = false;
                            const element = document.getElementById(targetElement);

                            // Fungsi untuk menangani peristiwa scroll dan memulai penghitungan
                            function scrollHandler() {
                                const rect = element.getBoundingClientRect();
                                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                                    // Elemen berada dalam tampilan
                                    if (!hasStarted) {
                                        hasStarted = true;
                                        startCounting(targetElement, value, duration);
                                    }
                                } else {
                                    hasStarted = false;
                                }
                            }

                            window.addEventListener('scroll', scrollHandler);
                            scrollHandler(); // Pengecekan awal jika elemen sudah berada dalam tampilan
                        }

                        // Panggil fungsi setupCounting untuk setiap elemen dengan durasi 600ms
                        
                    </script>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Kami menghargai setiap pertanyaan, umpan balik, atau permintaan bantuan yang Anda sampaikan
                        kepada kami. Kami ingin memastikan bahwa pengalaman Anda dengan layanan kami adalah yang
                        terbaik. Oleh karena itu, jika Anda membutuhkan bantuan tambahan atau informasi lebih lanjut
                        tentang layanan kami, jangan ragu untuk memberi tahu kami. Tim kami selalu siap dan berkomitmen
                        untuk memberikan dukungan terbaik kepada Anda. Semoga ini memenuhi harapan Anda. Jika Anda
                        membutuhkan perubahan lebih lanjut atau memiliki permintaan lainnya, beri tahu saya. Kami siap
                        untuk membantu Anda. Kami ingin menjadikan interaksi dengan kami sebaik mungkin, jadi jangan
                        ragu untuk menghubungi kami dengan menggunakan rincian kontak di bawah ini.</p>
                </div>

                <div class="row">
                    <!-- location -->
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Komplek Perkantoran Pemerintah Kabupaten Pasuruan JL.Raya Raci KM - 9 Bangil,
                                    Pasuruan</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>diskominfo@pasuruankab.go.id</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>(0343) 429064</p>
                            </div>
                        </div>

                    </div>
                    <!-- map -->
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <div class="php-email-form">
                            <div class="row">
                                <!-- merubah posisi map -->
                                <div id="map" style="width: 100%; height: 290px; position: relative;">
                                    <!-- Menempatkan kontrol di dalam div peta agar dapat diletakkan di atas peta -->
                                    <div class="map-controls">
                                        <button id="toggleControls" class="btn btn-info">Toggle Controls</button>
                                        <div id="controls" class="d-none">
                                            <div class="input-group mb-3">
                                                <input type="text" id="search" class="form-control"
                                                    placeholder="Cari Departemen">
                                                <button onclick="searchDepartment()" class="btn btn-primary">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                                <button onclick="clearSearch()" class="btn btn-secondary">
                                                    <i class="fas fa-times"></i>
                                                    <!-- Ini adalah icon untuk 'clear' atau 'close', Anda dapat menggantinya sesuai kebutuhan -->
                                                </button>
                                            </div>
                                            <label class="custom-checkbox">Tampilkan Marker
                                                <input type="checkbox" id="toggleMarker" checked
                                                    onchange="toggleMarker()">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById('toggleControls').addEventListener('click', function() {
                                        var controls = document.getElementById('controls');
                                        if (controls.classList.contains('d-none')) {
                                            controls.classList.remove('d-none');
                                        } else {
                                            controls.classList.add('d-none');
                                        }
                                    });

                                    function clearSearch() {
                                        document.getElementById('search').value = ''; // Mengatur nilai dari kotak pencarian menjadi string kosong
                                    }
                                    // Inisialisasi peta dengan properti pusat dan zoom awal
                                    // menampilkan gmaps sebelum login
                                    var map = L.map('map', {
                                        center: [-8.230845, 112.591375],
                                        zoom: 10,
                                        attributionControl: false
                                    });

                                    // Inisialisasi lapisan peta jalanan
                                    var streets = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                                        maxZoom: 100,
                                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                                        attribution: false
                                    });

                                    // Inisialisasi lapisan peta satelit
                                    var satellite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                                        maxZoom: 100,
                                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                                        attribution: false
                                    });

                                    // Menambahkan lapisan jalanan ke peta
                                    map.addLayer(streets);

                                    // Inisialisasi grup marker untuk departemen-departemen
                                    var markerLayer = L.layerGroup().addTo(map);


                                    function searchDepartment() {
                                        var searchValue = document.getElementById('search').value.toLowerCase();
                                        markerLayer.eachLayer(function(layer) {
                                            var popupContent = layer.getPopup().getContent().toLowerCase();
                                            if (popupContent.includes(searchValue)) {
                                                map.setView(layer.getLatLng(), map.getZoom());
                                                layer.openTooltip(); // Buka tooltip saat pencarian cocok.
                                            } else {
                                                layer.closeTooltip(); // Tutup tooltip untuk marker lain yang tidak cocok.
                                            }
                                        });
                                    }


                                    // Fungsi untuk menampilkan/menyembunyikan marker
                                    function toggleMarker() {
                                        var isChecked = document.getElementById('toggleMarker').checked;
                                        if (isChecked) {
                                            markerLayer.addTo(map);
                                        } else {
                                            map.removeLayer(markerLayer);
                                        }
                                    }
                                    // Iterasi melalui data departemen dan menambahkan marker jika koordinat dan nama tersedia
                                   
                                    // Menentukan pilihan lapisan peta
                                    var baseLayers = {
                                        "Streets": streets,
                                        "Satellite": satellite
                                    };

                                    // Membuat tombol "Toggle View" untuk beralih antara lapisan peta
                                    var toggleButton = L.Control.extend({
                                        options: {
                                            position: 'bottomleft'
                                        },

                                        onAdd: function(map) {
                                            // Membuat elemen tombol
                                            var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');
                                            container.style.backgroundColor = 'white';
                                            container.style.padding = '5px 10px';
                                            container.style.borderRadius = '5px';
                                            container.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.2)';
                                            container.innerHTML = 'Toggle View';

                                            // Menangani klik pada tombol untuk mengganti lapisan peta
                                            container.onclick = function() {
                                                if (map.hasLayer(satellite)) {
                                                    map.removeLayer(satellite);
                                                    streets.addTo(map);
                                                    container.innerHTML = 'Toggle View';
                                                } else {
                                                    map.removeLayer(streets);
                                                    satellite.addTo(map);
                                                    container.innerHTML = 'Toggle View';
                                                }
                                            }

                                            return container;
                                        }
                                    });

                                    // Menambahkan tombol "Toggle View" sebagai kontrol peta
                                    map.addControl(new toggleButton());
                                </script>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Lacak Status Pengaduanmu</h4>
                        <p style="text-align:justify">Fitur ini memungkinkan pengguna untuk mengikuti dan memantau
                            perkembangan pengaduan yang telah mereka ajukan. Dengan demikian, pengguna dapat dengan
                            mudah mengetahui status dan tahapan penanganan pengaduan mereka, menciptakan transparansi
                            dan keterlibatan dalam proses tersebut.</p>
                        <form id="trackComplaintForm" action="{{ route('track.complaint') }}" method="post">
                            @csrf
                            <input type="text" name="code_ticket" placeholder="Enter Code Number" required>
                            <button type="reset"><i class="fas fa-times"></i></button>
                            <!-- Tombol Clear dengan ikon Font Awesome "times" -->
                            <button type="submit">Track</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="modal fade" id="trackResultModal" tabindex="-1" role="dialog"
            aria-labelledby="trackResultModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="trackResultModalLabel">Ticket Tracking Result</h5>
                        <button type="button" class="close" data-dismiss="modal" id="closeModalX">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="userName">Nama Pengadu: No user name found.</p>
                        <p id="ticketStatus">Status Pengaduan: No ticket status found.</p>
                        <p id="ticketTitle">Judul Pengaduan: No ticket title found.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="closeModalButton">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mx-auto text-center">
                        <h4>SIPMA Pasuruan</h4>
                        <p>
                            Jl. Raya Raci Km. 09 <br>
                            Pasuruan - Bangil Dinas Komunikasi dan Informatika Kabupaten Pasuruan 671115<br>
                            Indonesia <br><br>
                            <strong>Telepon/Fax:</strong> 0343429064<br>
                            <strong>Email:</strong> diskominfo@pasuruankab.go.id<br>
                        </p>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> --}}

                    <div class="col-lg-3 col-md-6 mx-auto text-center">
                        <h4>Temukan Kami di Media Sosial</h4>
                        <p>Ikuti kami untuk informasi terbaru dan interaksi lebih lanjut.</p>
                        <div class="social-links mt-3">
                            <a href="https://www.twitter.com/pemkabpasuruan_" class="twitter"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/pasuruankab.go.id/" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/pemkabpasuruan/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/@ILOVEPASTV" class="google-plus"><i
                                    class="bx bxl-youtube"></i></a>
                            {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>PKL 2023</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Tombol "like" -->
    <!-- Tombol "like" -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            // Fungsi doAction() digunakan untuk melakukan tindakan (like atau dislike) pada suatu polling.
            function doAction(action, pollId) {
                $.ajax({
                    // Mengirim permintaan AJAX ke URL yang sesuai dengan tindakan dan ID polling.
                    url: `/poll/${action}/${pollId}`,
                    type: 'POST', // Menggunakan metode HTTP POST.
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Mengirim token CSRF untuk keamanan.
                    },
                    dataType: 'json', // Mengharapkan respons berupa JSON.
                    success: function(data) {
                        // Ketika permintaan berhasil, pembaruan tampilan dilakukan.
                        $('#likesCount' + pollId).text(data.likes); // Memperbarui jumlah suka.
                        $('#dislikesCount' + pollId).text(data
                            .dislikes); // Memperbarui jumlah tidak suka.

                        // Memuat ulang halaman (reloading) untuk menampilkan pembaruan secara lengkap.
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Ketika terjadi kesalahan, pesan kesalahan ditampilkan.
                        console.error(xhr.responseText); // Menampilkan pesan kesalahan di konsol.
                        alert(
                            "An error occurred. Please try again."
                        ); // Menampilkan pesan kesalahan kepada pengguna.
                    }
                });
            }

            // Mengatur event click untuk tombol "Like" pada polling.
            $(document).on('click', '.btn-like', function(event) {
                event.preventDefault(); // Mencegah tindakan default dari tautan.
                var pollId = $(this).data('poll-id'); // Mendapatkan ID polling dari atribut data.
                doAction('like', pollId); // Memanggil fungsi doAction() dengan tindakan 'like'.
            });

            // Mengatur event click untuk tombol "Dislike" pada polling.
            $(document).on('click', '.btn-dislike', function(event) {
                event.preventDefault(); // Mencegah tindakan default dari tautan.
                var pollId = $(this).data('poll-id'); // Mendapatkan ID polling dari atribut data.
                doAction('dislike', pollId); // Memanggil fungsi doAction() dengan tindakan 'dislike'.
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Ketika halaman telah sepenuhnya dimuat, kita akan menjalankan kode berikutnya.
        document.addEventListener("DOMContentLoaded", function() {
            // Mencari tombol yang akan menutup modal dan menyimpannya dalam variabel.
            let closeModalButton1 = document.querySelector('#closeModalButton');

            // Mencari semua tautan dengan kelas CSS "show-tugas" dan menyimpannya dalam variabel.
            let links = document.querySelectorAll('.show-tugas');

            // Mencari elemen modal dengan ID "tugasModal" dan menyimpannya dalam variabel.
            let modal = document.querySelector('#tugasModal');

            // Mencari judul modal di dalam elemen modal dan menyimpannya dalam variabel.
            let modalTitle = modal.querySelector('.modal-title');

            // Mengatur event click untuk tombol-tutup-modal dan tombol "X".
            $('#closeModalButton1, #closeModalX1').click(function() {
                // Ketika tombol ini diklik, modal akan disembunyikan.
                $('#tugasModal').modal('hide');
            });

            // Mengatur event click untuk setiap tautan yang memicu modal.
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Mencegah tindakan default (navigasi tautan).
                    e.preventDefault();

                    // Mengambil ID departemen dari data atribut tautan yang diklik.
                    let departementId = this.getAttribute('data-id');

                    // Mengambil informasi tentang departemen dari API backend.
                    // Data ini berisi daftar tugas departemen.
                    fetch('/api/departements/' + departementId)
                        .then(response => response.json())
                        .then(data => {
                            // Mengosongkan konten modal.
                            let modalBody = modal.querySelector('.modal-body');
                            modalBody.innerHTML = '';

                            // Menambahkan tugas-tugas departemen ke dalam modal.
                            data.tugas.forEach(tugas => {
                                modalBody.innerHTML += '<p>' + tugas + '</p>';
                            });

                            // Add the website link to the modal body
                            // if (data.link_website) {
                            //     modalBody.innerHTML +=
                            //         '<div class="text-center mt-3"><a href="' + data
                            //         .link_website + '" target="_blank">Visit Website</a></div>';
                            // }
                            // Menambahkan class CSS ke elemen HTML yang Anda buat
                            if (data.linkWebsite) {
                                modalBody.innerHTML +=
                                    '<div class="text-center mt-3"><a href="' + data
                                    .linkWebsite +
                                    '" target="_blank" class="website-link">Visit Website</a></div>';
                            }
                            // Memperbarui judul modal dengan nama departemen.
                            modalTitle.textContent = 'TUGAS (' + data.name + ')';

                            // Menampilkan modal kepada pengguna.
                            $(modal).modal('show');
                        });
                });
            });

            // Fungsi ini seharusnya digunakan jika ingin menutup modal secara program,
            // meskipun tidak digunakan dalam kode ini.
            function closeModal() {
                $(modal).modal('hide');
            }
        });
    </script>
    {{-- <script src="path_to_bootstrap_js"></script> --}}
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    @include('landingpage.trackticketjs')

</body>

</html>
