    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="<?= base_url(); ?>">PSI-GAME</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="<?= base_url('diagnosa/diagnosa'); ?>">Diagnosa</a></li>
                    <li><a href="#services">Info Penyakit</a></li>
                    <li><a href="<?= base_url('login'); ?>">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h3>Selamat datang di <strong>Psi-Game</strong></h3>
            <div class="section-title">
                <p style="color:aliceblue">Sistem Pakar Deteksi Kecanduan Game Online Pada Pelajar Menggunakan Metode Certainty Factor Berbasis Web.</p>
            </div>
            <a href="#about" class="btn-get-started scrollto">Lebih Lanjut</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang</h2>
                    <h3>Pelajari Lebih Tentang <span>Sistem Ini</span></h3>
                    <p>Sistem pakar adalah sistem informasi yang mengandung pengetahuan dari satu atau lebih pakar manusia mengenai suatu bidang spesifik.</p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Sistem pakar ini dilengkapi data pengetahuan dari pakar terpercaya.
                        </p>
                        <!-- <ul>

                            <li><i class="ri-check-double-line"></i> Beberapa Jenis Penyakit Jerawat</li>

                        </ul> -->
                        <ul>
                            <li><i class="ri-check-double-line"></i> Gejala beberapa jenis jerawat</li>
                            <li><i class="ri-check-double-line"></i> identifikasi jenis jerawat</li>
                            <li><i class="ri-check-double-line"></i> Saran yang harus dilakukan jika terkena jerawat tersebut</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Pakar yang menjadi sumber pengetahuan sudah lama berpengalaman di bidang kesehatan kulit. Dan sudah melakukan praktek di Personal Beauty Aesthic Clinic.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="text-center">
                    <h3>Coba Diagnosa Sekarang</h3>
                    <p>Anda dapat mencoba melakukan diagnosa sekarang juga, secara gratis tanpa dipungut biaya. Dapatkan diagnosa secara akurat seperti halnya diagnosa dari seorang pakar asli.</p>
                    <a class="cta-btn" href="<?= base_url('diagnosa/diagnosa'); ?>">Diagnosa Sekarang</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Info Penyakit</h2>
                    <h3>Informasi Penyakit Kecanduan <span>Game Online</span></h3>
                    <p>Informasi yang dibuat untuk melihat macam macam penyakit dari efek kecanduan game online</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shape-polygon"></i></div>
                            <h4 class="title"><a href="">Salliance (Arti) </a></h4>
                            <p class="description" style="text-align: justify;">Dikarenakan adanya dominasi pikiraan, perasaan perilaku asyik bermain game maka perlu dilakukan kegiatan – kegiatan olah fisik yang membuat lebih asyik lagi agar tidak terdominasi dengan game online. Sesekali diberikan pengetahuan tentang olah raga dan disela bermain game melakukan olah raga untuk menstimulus agar tidak mementingkan bermain game. Sehingga nantinya muncul pikiran tidak terlalu mementingkan game online</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shape-polygon"></i></div>
                            <h4 class="title"><a href="">Tolerance (Toleransi) </a></h4>
                            <p class="description" style="text-align: justify;">Disini masih ada sikap menerima terhadap diri sendiri sehingga bemain game onlie cukup diberikan nasehat – nasehat positif terkait baik buruknya dalam permainan game online. Dia tetap bia melaksanakan kegiatan tersebut tetapi nantinya bisa menyadari bahwa kepuasan bisa didapatkan dari mana saja tidak selalu dari bermain game online.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shape-polygon"></i></div>
                            <h4 class="title"><a href="">Mood Modification (Modifikasi perasaan)</a></h4>
                            <p class="description" style="text-align: justify;">Suasana hati untuk penenang jika terjadi permasalahan dan stress bisa dilakukan dengan melakukan hal hal positif atau melakukan sesuatu yang menyenangkan. Sepanjang pelarian ke game online bisa secara wajar dan tidak menggangu pola piker masih dikatakan normal. Tetapi jika pelarian ke game online disamping mood membaik tetapi mempengaruhi pikiran dan jiwa sehingga terjadi habituasi dan mengganggu fisik dan psikis tetap diperlukan pendampingan orang ketiga. </p>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section><!-- End Services Section -->

        <section id="services" class="services">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shape-polygon"></i></div>
                            <h4 class="title"><a href="">Relapse (Perulangan) </a></h4>
                            <p class="description" style="text-align: justify;">Agar pemain game tidak melakkan pengulangan maka perlu adanya orang ketiga yang melakukan pendekatan untuk melakukan kegiatan positif. Pemain tersebut diajak untuk berkegiatan selain bermain game terutama kegiatan bersifat olah fisik dan piker. Olah raga fisik maupun olah raga non Fisik. Maka kecanduan kembali lagi akan tertangani. </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shape-polygon"></i></div>
                            <h4 class="title"><a href="">Withdrawal (Penarikan) </a></h4>
                            <p class="description" style="text-align: justify;">Jika sudah mencapai tahap menarik diri dari kebiasan bermain game yang berlebihan maka disini sudah terjadi gangguan psikis. Maka pemain game online perlu dilakukan konsuluasi dan Therapi Psikologi dan mungkin juga diperlukan Hipnotherapi. Yaitu memberikan sugesti positif akan kondisi negative bisa dihindari.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shape-polygon"></i></div>
                            <h4 class="title"><a href="">Conflict (Konflik) </a></h4>
                            <p class="description" style="text-align: justify;">Salah satu awal gangguan kejiwaan adalah jika seorang pemain game online sering terjadi konflik dan adanya gangguang social terhadap sekitar. Penanganan dalam hal ini diperlukan pihak ke tiga untuk menanganinya yaitu Psikolog atau Psikiater yang akan melakukan anamnesa dan pengobatan yang perlu untuk mengembalikan kehidupannya menjadi normal kembali. Dikarenakan jika tidak ditangani segera mungkin maka akan terjadi gangguan kejiwaan yang lebih paranh dan membutuhkan obat – obatan jiwa dalam penangannya. </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shape-polygon"></i></div>
                            <h4 class="title"><a href="">Problem (Masalah) </a></h4>
                            <p class="description" style="text-align: justify;">Pecandu game online yang sudah menunjukkan terjadi permasalahan baik individu maupun social perlu penanganan Psikolog dan Pikiater. Jika masalah semakin berat disamping Therapi Psikis, Hipnotherapi juga dimungkinkan obat – obatan kejiwaan. Sebelum terjadinya kegagalan dalam pekerjaan/ perkuliahan</p>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section><!-- End Services Section -->


        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>
                </div>

                <ul class="faq-list">

                    <li>
                        <a data-toggle="collapse" class="" href="#faq1">Apa itu sistem pakar? <i class="icofont-simple-up"></i></a>
                        <div id="faq1" class="collapse show" data-parent=".faq-list">
                            <p>
                                Sistem pakar adalah suatu program komputer yang mengandung pengetahuan dari satu atau lebih pakar manusia mengenai suatu bidang spesifik. Jenis program ini pertama kali dikembangkan oleh periset kecerdasan buatan pada dasawarsa 1960-an dan 1970-an dan diterapkan secara komersial selama 1980-an.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">Apa itu metode certainty factor? <i class="icofont-simple-up"></i></a>
                        <div id="faq2" class="collapse" data-parent=".faq-list">
                            <p>
                                Certainty Factor atau faktor kepastian diperkenalkan pertama kali pada tahun 1975 oleh shortliffe buchanan. Certainty factor adalah suatu metode untuk membuktikan apakah suatu fakta itu pasti ataukah tidak pasti.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Bagaimana cara melakukan diagnosa? <i class="icofont-simple-up"></i></a>
                        <div id="faq3" class="collapse" data-parent=".faq-list">
                            <p>
                                Anda dapat menuju halaman diagnosa di menu bagian atas, lalu mengisi data diri, dan menjawab kuisioner deteksi penyakit secara jujur. Hasil diagnosa akan ditampilkan secara otomatis.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">Apakah hasil diagnosa dapat dipertanggung jawabkan? <i class="icofont-simple-up"></i></a>
                        <div id="faq4" class="collapse" data-parent=".faq-list">
                            <p>
                                Perhitungan diagnosa dilakukan berdasarkan pengetahuan seorang pakar ahli dalam penyakit dalam, sehingga akurasi diagnosa dapat dipastikan tinggi.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Apakah proses diagnosa dipungut biaya? <i class="icofont-simple-up"></i></a>
                        <div id="faq5" class="collapse" data-parent=".faq-list">
                            <p>
                                Diagnosa tidak dipungut biaya sepeser pun. Layanan ini dibuat secara gratis untuk mempermudah pekerjaan seorang pakar.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Untuk apa menginput data diri? <i class="icofont-simple-up"></i></a>
                        <div id="faq6" class="collapse" data-parent=".faq-list">
                            <p>
                                Data diri digunakan untuk keperluan statistik, seperti mengetahui persebaran deteksi penyakit pada rentang usia tertentu, jenis kelamin tertentu. Data yang anda input akan terjaga kerahasiaannya, dan keamanannya.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <!-- <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3>Contact <span>Us</span></h3>
                    <p>Jika ingin mengetahui lebih banyak tentang sistem ini, anda dapat menghubungi kami melalui form dibawah.</p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.446961988223!2d113.72069951478045!3d-8.15764189412816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b68d87fb43%3A0xabe23a31a78289d3!2sJurusan%20Teknologi%20Informasi%2C%20Politeknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1615042160026!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>Lingkungan Panji, Tegalgede, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68124</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>farizazik@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 815 5302 6285</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>End Contact Section -->

    </main><!-- End #main -->