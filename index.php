<?php include 'connectAPI.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>infoCov-19</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#home"><h1><span>i</span>nfo<span>C</span>ov-19</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#home" data-after="Home">Home</a></li>
            <li><a href="#stay-home" data-after="#dirumah">#dirumah</a></li>
            <li><a href="#gejala" data-after="Gejala">Gejala</a></li>
            <li><a href="#pencegahan" data-after="Pencegahan">Pencegahan</a></li>
            <li><a href="#tracking" data-after="Tracking">Tracking</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Home Section  -->
  <section id="home">
    <div class="home container">
      <div>
        <h1>Stay In. <span></span></h1>
        <h1>Stay Safe. <span></span></h1>
        <h2>Mari kita semua bekerja sama untuk mengakhiri pandemi ini. <br> Bantu hentikan penyebaran. <span></span></h2>
        <a href="#stay-home" type="button" class="cta">Learn More</a>
      </div>
    </div>
  </section>
  <!-- End Home Section  -->

  <!-- Stay Home Section -->
  <section id="stay-home">
    <div class="stay-home container">
      <div class="stay-home-top">
        <h1 class="stay-home-title">Mengapa Penting Anda <span>Tetap </span>di Rumah?</h1>
        <p>Untuk membantu pemerintah meratakan kurva Covid-19, kita semua dihimbau untuk tetap di rumah selama masa pandemi ini. Alasan lain mengapa <i>stay at home</i> penting ialah</p>
      </div>
      <div class="stay-home-bottom">
        <div class="stay-home-item">
          <h2>Jumlah Kasus</h2>
          <p>Covid-19, yang sekarang menjadi pandemi global berkembang pesat. Jumlah kasus yang dikonfirmasi di seluruh dunia telah melebihi 77.223.126 karena penyebaran virus yang cepat.</p>
        </div>
        <div class="stay-home-item">
          <h2>Penyebaran</h2>
          <p>Covid-19, menyebar dengan sangat mudah, jauh lebih mudah daripada banyak penyakit biasa lainnya yang kita tangani secara teratur. Itulah yang membuatnya sangat berbahaya.</p>
        </div>
        <div class="stay-home-item">
          <h2>Layanan Kesehatan</h2>
          <p>Dengan melakukan kegiatan <i>stay at home</i>, kita juga membantu pusat kesehatan agar tidak kewalahan dengan pasien yang seharusnya tidak berada di sana dan mereka dapat fokus merawat pasien.</p>
        </div>
        <div class="stay-home-item">
          <h2>Vaksin</h2>
          <p>Untuk saat ini, vaksin <i>covid-19</i> masih belum dapat didistribusikan untuk khalayak umum. Oleh karena itu kita masih rentan terpapar virus corona ini apabila kita pergi keluar rumah.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Stay Home Section -->

  <!-- Gejala Section -->
  <section id="gejala">
    <div class="gejala container">
      <div class="gejala-top">
        <h1 class="gejala-title">Gejala <span>Covid-19</span></h1>
        <p>Gejala awal infeksi virus <span>Corona</span> atau <span>COVID-19</span> bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak bahkan berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut muncul ketika tubuh bereaksi melawan virus Corona.</p>
        <p>Secara umum, ada 3 <span>gejala umum</span> yang bisa menandakan seseorang terinfeksi virus Corona, yaitu:</p>
      </div>
      <div class="gejala-bottom">
        <div class="gejala-item">
          <div class="icon"><img src="img/high temp.png"></div>
          <div class="gejala-info">
            <h1>Demam</h1>
            <h2>Suhu tubuh di atas 38 derajat Celcius</h2>
          </div>
        </div>
        <div class="gejala-item">
          <div class="icon"><img src="img/dry cough.png"></div>
          <div class="gejala-info">
            <h1>Batuk Kering</h1>
          </div>
        </div>
        <div class="gejala-item">
          <div class="icon"><img src="img/short breath.png"></div>
          <div class="gejala-info">
            <h1>Sesak Napas</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gejala Section -->

  <!-- Pencegahan Section -->
  <section id="pencegahan">
    <div class="pencegahan container">
      <div class="pencegahan-header">
        <h1 class="pencegahan-title"><span>Pencegahan</span> Covid-19</h1>
      </div>
      <div class="all-pencegahan">
        <div class="pencegahan-item">
          <div class="pencegahan-info">
            <h1>Menggunakan Masker</h1>
            <p>Gunakan masker jika <i>physical distancing</i> tidak memungkinkan untuk dilakukan</p>
          </div>
          <div class="pencegahan-img">
            <img src="./img/mask.png" alt="img">
          </div>
        </div>
        <div class="pencegahan-item">
          <div class="pencegahan-info">
            <h1>Membersihkan Tangan</h1>
            <p>Bersikan tangan kalian dengan sabun dan air mengalir. Jika tidak menemukan sumber air, gunakan <i>hand sanitizer</i></p>
          </div>
          <div class="pencegahan-img">
            <img src="./img/hand-wash.png" alt="img">
          </div>
        </div>
        <div class="pencegahan-item">
          <div class="pencegahan-info">
            <h1>Cek Suhu Tubuh</h1>
            <p>Periksa suhu tubuh kalian secara rutin. Apabila terjadi kenaikan suhu tubuh yang signifikan dapat langsung ditanangani</p>
          </div>
          <div class="pencegahan-img">
            <img src="./img/temperature.png" alt="img">
          </div>
        </div>
        <div class="pencegahan-item">
          <div class="pencegahan-info">
            <h1>Jaga Jarak Aman</h1>
            <p>Jagalah jarak anda dengan orang lain setidaknya 2 meter</p>
          </div>
          <div class="pencegahan-img">
            <img src="./img/distance.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pencegahan Section -->

  <!-- Tracking Section -->
  <section id="tracking">
    <div class="tracking container">
      <div class="tracking-header">
        <h1 class="tracking-title">Tracking <span>Covid-19</span></h1>
        <p>Berikut data realtime kasus <span>Covid-19</span> secara global dan Indonesia</p>
      </div>
      <p class="title">GLOBAL</p>
      <div class="tracking-bottom">
        <div class="tracking-item">
          <div class="tracking-info">
            <h1>Total Positif</h1>
            <h2><?= $jumlah_positif; ?></h2>
            <h4>Orang</h4>
          </div>
          <div class="img-emot">
            <img src="img/emoji-04.png" alt="" height="100" width="100">
          </div>
        </div>
        <div class="tracking-item">
          <div class="tracking-info">
            <h1>Total Sembuh</h1>
            <h2><?= $jumlah_sembuh; ?></h2>
            <h4>Orang</h4>
          </div>
          <div class="img-emot">
            <img src="img/emoji-01.png" alt="" height="100" width="100">
          </div>
        </div>
        <div class="tracking-item">
          <div class="tracking-info">
            <h1>Total Meninggal</h1>
            <h2><?= $jumlah_meninggal; ?></h2>
            <h4>Orang</h4>
          </div>
          <div class="img-emot">
            <img src="img/emoji-03.png" alt="" height="100" width="100">
          </div>
        </div>
      </div>
      <p class="title">INDONESIA</p>
      <div class="tracking-bottom">
        <div class="tracking-item">
          <div class="tracking-info">
            <h1>Total Positif</h1>
            <h2><?= $positif; ?></h2>
            <h4>Orang</h4>
          </div>
          <div class="img-emot">
            <img src="img/emoji-04.png" alt="" height="100" width="100">
          </div>
        </div>
        <div class="tracking-item">
          <div class="tracking-info">
            <h1>Total Sembuh</h1>
            <h2><?= $sembuh; ?></h2>
            <h4>Orang</h4>
          </div>
          <div class="img-emot">
            <img src="img/emoji-01.png" alt="" height="100" width="100">
          </div>
        </div>
        <div class="tracking-item">
          <div class="tracking-info">
            <h1>Total Meninggal</h1>
            <h2><?= $meninggal; ?></h2>
            <h4>Orang</h4>
          </div>
          <div class="img-emot">
            <img src="img/emoji-03.png" alt="" height="100" width="100">
          </div>
        </div>
      </div>
      <div class="pt-30">
        <p class="title-2">PROVINSI</p>
      </div>
      <table class="table-content">
        <thead>
          <tr>
            <th>No</th>
            <th>Provinsi</th>
            <th>Positif</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($data_prov as $rows) { ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $rows->attributes->Provinsi; ?></td>
              <td><?php echo $rows->attributes->Kasus_Posi; ?></td>
              <td><?php echo $rows->attributes->Kasus_Semb; ?></td>
              <td><?php echo $rows->attributes->Kasus_Meni; ?></td>
            </tr>
          <?php
            $no++;
          } ?>
        </tbody>
      </table>
    </div>
  </section>
  <!-- End Tracking Section -->
  
  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>i</span>nfo<span>C</span>ov-19</h1></div>
      <h2>Stay In. Stay Safe.</h2>
      <p>Copyright © 2020 infoCov-19. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
</html>