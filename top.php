<?php
	session_start();
	if (!isset ($_SESSION['uname'])){
		echo "<script>
		alert('Anda belum login!');
		window.location.replace('login.html');
		</script>";}
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>beranda</title>
<meta name="viewport" content="width=device-width" />
<style>
  * {margin:0;padding:0;word-wrap:break-word;}
  #l {overflow:hidden; width:600px;background-color:gray;}
  #c {background-color:black; width:100%;}
  .p {margin:10px;color:#fff;}
  .i {max-width:400px;}

  @media screen and (max-width:617px){#l {width:100%;}}
</style>
</head>
<body>
  <center><div id="l">
    <div class="p">
      <a name="atas" href="#bawah">Pengumuman</a>
    </div><div id="c" align="left"><div class="p">
      <br/>
      <h2>Hari Keluarga Nasional, Momentum Memaknai Arti Keluarga</h2>
      <br/><br/>
      <p>Momentum Hari Keluarga Nasional yang diselenggarakan setiap 21 Juni di Indonesia dinilai sangat bermakna sebagai fondasi membangun bangsa Indonesia sebagai Bangsa yang besar. Hari puncaknya jatuh pada 29 Juni namun berkenaan adanya bulan puasa dan liburan, maka acara peringatan Hari Keluarga Nasional diundur pelaksanaannya menjadi tanggal 30 Juli 2016 di Kupang, Nusa Tenggara Timur.

Pelaksanaan HARGANAS XXIII tahun 2016 mengedepankan keikutsertaan keluarga dengan mengangkat 4 konsep besar: Reuniting (Keluarga Berkumpul), Interacting (Keluarga Berinteraksi), Empowering (Keluarga Berdaya), Sharing and caring (Keluarga Berbagi)Kepala BKKBN Surya Chandra Surapaty menyampaikan pesan kepada seluruh keluarga Indonesia, “Hari keluarga tahun ini bertepatan dengan bulan Ramadan dan Hari Raya Idul Fitri, menjadikan Hari Keluarga tahun 2016 sebuah momentum bagi setiap keluarga Indonesia untuk kembali berkumpul bersama keluarganya (reuniting), berinteraksi dengan keluarganya setelah sibuk dengan segala aktivitas (interacting), memberdayakan lingkungan di sekitar keluarga kita (empowering) dan saling berbagi dengan keluarga yang lain dan masyarakat di sekitar kita (sharing and caring), menjadi momen keluarga Indonesia untuk saling berkunjung atau mengunjungi dalam rangka silaturahim ” ungkap Surya Chandra.

Diharapkan, melalui Hari Keluarga Nasional ke-23 tahun 2016 dengan tema, Harganas merupakan momentum upaya membangun Karakter Bangsa dan mewujudkan Indonesia Sejahtera, semakin mendorong Keluarga-Keluarga untuk terus menjaga dan memelihara nilai-nilai kebersamaan, menumbuhkan semangat kerjasama, rasa integritas, etos kerja dan nilai gotong royong dalam hidup berkeluarga.</p>
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div></div><div class="p">
      <a name ="bawah" href="LogOut.php">Log Out</a>
    </div>
  </div></center>
</body>
</html>