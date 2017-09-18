<?php include 'header2.php' ?>
<div class="container">
        <br>
        <br>
        <h3>Sistem Penunjang Keputusan Kepemilikan Barang</h3>
        <div class="row">
            <div class="col s3">
                <ul>
                    <li><p><strong>Kartu Tanda Mahasiswa</strong></p></li>
                    <li><p>Rabu, 17 Mei 2017</p></li>
                    <li><p>Kampus H Gunadarma</p></li>
                    <li><p>Warna Ungu</p></li>
                    <li><p><strong>Deskripsi :</strong></p></li>
                    <li><p>NPM 57413521</p></li>
                    <li><p>Reza Wisnu Wardhana</p></li>
                    <li><p>Terdapat noda kuning</p></li>
                </ul>
            </div>
            <div class="col s4">
            Masukkan Nilai kepercayaan pada setiap Alternatif dibawah ini
                <div class="row">
                    <form action="result_spk.php" class="col s12">
                        <div class="row">
                            <div class="col s4">
                                <ul>
                                    <li>
                                        <p><strong>Sub Kategori :</strong></p>
                                        <p class="range-field">
                                          <input type="range" id="test1" min="0" max="5" />
                                        </p>
                                    </li>
                                    <li>
                                        <p><strong>Warna  :</strong></p>
                                        <p class="range-field">
                                          <input type="range" id="test2" min="0" max="5" />
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s4">
                                <ul>
                                    <li>
                                        <p><strong>Merek/Model Barang :</strong></p>
                                        <p class="range-field">
                                          <input type="range" id="test3" min="0" max="5" />
                                        </p>
                                    </li>
                                    <li>
                                        <p><strong>Lokasi Lengkap :</strong></p>
                                        <p class="range-field">
                                          <input type="range" id="test4" min="0" max="5" />
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s4">
                                <ul>
                                    <li>
                                        <p><strong>Deskripsi Barang :</strong></p>
                                        <p class="range-field">
                                          <input type="range" id="test5" min="0" max="5" />
                                        </p>
                                    </li>
                                    <li>
                                        <p><strong>Tanggal :</strong></p>
                                        <p class="range-field">
                                          <input type="range" id="test6" min="0" max="5" />
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <button class="btn waves-effect waves-light right" type="submit" name="action">Hitung
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col s5">
                <table class="bordered striped">
                    <thead>
                      <tr>
                          <th>Bobot</th>
                          <th>Keterangan Bobot</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Sangat Tidak Setuju</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Tidak Setuju</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Ragu-ragu</td>
                      </tr>
                        <tr>
                        <td>4</td>
                        <td>Setuju</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Sangat Setuju</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
    </div>
	<?php include 'footer.php' ?>