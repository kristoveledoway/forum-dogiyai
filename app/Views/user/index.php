<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!--======= welcome section on top background=====-->
<main>
    <section class="welcome-part-one">
        <div class="container">
            <div class="welcome-demop102 text-center">
                <h2>Selamat Datang Di Forum Ikatan Mahasiswa Dogiyai</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio delectus perspiciatis, architecto, alias harum ea accusamus incidunt illo odit maiores sequi repudiandae! Laboriosam fuga qui, facilis provident ducimus recusandae asperiores?</p>
            </div>
        </div>
    </section>

    <!-- ======content section/body=====-->
    <section class="main-content920">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="main">
                        <h2>Daftar Surat Masuk</h2>
                        <section id="content1">
                            <!--Recent Question Content Section -->
                            <div class="panel panel-default">
                                <div class="panel-heading">Surat Masuk</div>
                                <div class="panel-body">

                                    <!-- Data Surat Masuk -->
                                    <!-- surat 1 -->
                                    <?php foreach ($surat_masuk as $row) : ?>
                                        <div class="question-type2033">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="left-user12923 left-user12923-repeat">
                                                        <img src="image/images.png" alt="image"> <i class="fa fa-check" aria-hidden="true"></i> </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="right-description893">
                                                        <div id="que-hedder2983">
                                                            <h3><a href="/user/detail/<?= $row['id_surat_masuk']; ?>"><?= $row['lampiran']; ?></a></h3>
                                                            <p>Diposting oleh admin, <?= tanggal($row['tgl_surat']); ?>, Sifat <span><?= $row['sifat']; ?></span></p>
                                                        </div>
                                                        <div class="ques-details10018">
                                                            <p><?= $row['perihal']; ?></p>
                                                        </div>
                                                        <hr>
                                                        <div class="ques-icon-info3293">
                                                            <a href="/assets/upload/dokument_surat_masuk/<?= $row['file']; ?>" target="_blank"><i class="fas fa-eye" aria-hidden="true"> Lihat Berkas</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <!-- end surat 1 -->

                                    <!-- end Data surat masuk -->
                                </div>
                                <div class="panel-footer text-center"><a href="/surat_masuk">-- Tampilkan Lebih Banyak --</a></div>
                            </div>
                        </section>
                        <!--  End of content-1------>
                        <h2>Daftar Surat Keluar</h2>
                        <section id="content1">
                            <!--Recent Question Content Section -->
                            <div class="panel panel-default">
                                <div class="panel-heading">Surat Masuk</div>
                                <div class="panel-body">

                                    <!-- Data Surat Masuk -->
                                    <!-- surat 1 -->
                                    <?php foreach ($surat_keluar as $row) : ?>
                                        <div class="question-type2033">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="left-user12923 left-user12923-repeat">
                                                        <img src="image/images.png" alt="image"> <i class="fa fa-check" aria-hidden="true"></i> </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="right-description893">
                                                        <div id="que-hedder2983">
                                                            <h3><a href="post-deatils.html" target="_blank"><?= $row['lampiran']; ?></a></h3>
                                                            <p>Diposting oleh admin, <?= tanggal($row['tgl_surat']); ?>, Sifat <span><?= $row['sifat']; ?></span></p>
                                                        </div>
                                                        <div class="ques-details10018">
                                                            <p><?= $row['perihal']; ?></p>
                                                        </div>
                                                        <hr>
                                                        <div class="ques-icon-info3293">
                                                            <a href="/assets/upload/dokument_surat_keluar/<?= $row['file']; ?>" target="_blank"><i class="fas fa-eye" aria-hidden="true"> Lihat Berkas</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <!-- end surat 1 -->

                                    <!-- end Data surat masuk -->
                                </div>
                                <div class="panel-footer text-center"><a href="/surat_keluar">-- Tampilkan Lebih Banyak --</a></div>
                            </div>
                        </section>
                        <!--  End of content-1------>
                    </div>
                </div>
                <!--end of col-md-9 -->
                <!--strart col-md-3 (side bar)-->
                <aside class="col-md-3 sidebar97239">
                    <h2>Inforamsi Kas</h2>
                    <!--        start recent post  -->
                    <?php foreach ($kas as $row) : ?>
                        <div class="recent-post3290">
                            <h4><?= $row['jenis']; ?></h4>
                            <div class="post-details021">
                                <h5>Jenis Kas <?= $row['jenis_kas']; ?></h5>
                                <p>Jumlah Uang Masuk : Rp. <?= number_format($row['jumlah_masuk'], 0, '', '.'); ?></p>
                                <p>Jumlah Uang Keluar : Rp. <?= number_format($row['jumlah_masuk'], 0, '', '.'); ?></p>
                                <p class="keterangan">Keterangan : <?= $row['keterangan']; ?></p>
                                <hr>
                                <div class="info">
                                    <small style="color: #848991"><?= tanggal($row['tgl']); ?></small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!--       end recent post    -->

                    <!-- panel aside footer -->
                    <div class="panel panel-default">
                        <div class="panel-footer text-center"><a href="/informasi_kas">-- Tampilkan Lebih Banyak --</a></div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>