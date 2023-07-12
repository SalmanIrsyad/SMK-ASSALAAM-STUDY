  <div class="row">
                        {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/er.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Efek rumah kaca menyebabkan panas yang ada di Bumi terperangkap di atmosfer dan tidak bisa dipantulkan ke luar angkasa. Sebenarnya, efek rumah kaca ini dapat berguna untuk kehidupan manusia. Namun, saat jumlahnya berlebih bisa menimbulkan perubahan iklim dan cuaca di Bumi.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Efek Rumah Kaca</h3>
                                    <a class="" href="img/er1.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/pu.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Pemanasan global terjadi karena adanya polusi udara. Fenomena ini diakibatkan oleh pembakaran bahan bakar mesin kendaraan bermotor yang menghasikan gas karbondioksidan. Gas tersebut diketahui tidak bisa diteruskan keluar angkasa sehingga panas terperangkap di bumi. Hal inilah yang menyebabkan bumi terasa lebih panas.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Polusi Udara</h3>
                                    <a class="" href="img/pu.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/sp.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            saat plastik terkena sinar matahari dan rusak, maka sampah tersebut akan mengeluarkan gas metana dan etlena. Perlu dipahami bahwa gas metana bisa menyebabkan perubahaan iklim dan hal lain yang berhubungan dengan peningkatan risiko pemanasan global.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Sampah Plastik</h3>
                                    <a class="" href="img/sp.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/pm.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Gas kimia ini juga memiliki kadar tinggi yang bisa mengurangi oksidan di atmosfer bumi. Kadar gas ini akan semakin tinggi saat bercampur ke udara dan menyebabkan kebakaran atau ledakan. Gas metana bisa dihasilkan dari sektor peternakan yaitu dari pakan ternak yang digunakan
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Polusi Metana</h3>
                                    <a class="" href="img/pm.jpg" ></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/li.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                        Keberadaan industri bahkan ditengarai jadi penyebab paling awal pemanasan global. Studi menunjukkan global warming perlahan mulai terjadi pada pertengahan abad ke-19 mengikuti maraknya revolusi industri di Amerika Serikat dan negara-negara lainnya.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Limbah Industri</h3>
                                    <a class="" href="img/li.jpg" ></a>
                                </div>
                            </div>
                        </div> --}}
                        
                        @foreach($berita as $data)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/pb1.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                           {{$data->isi_berita}}
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>{{$data->judul_berita}}</h3>                                    
                                    <a class="" href="img/pb1.jpg"></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>