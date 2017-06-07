<?php
	session_start();
	if (!isset ($_SESSION['uname']) && $username=="admin"){
		echo "<script>
		alert('Anda belum login!');
		window.location.replace('login.html');
		</script>";}
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>main</title>
  <meta name="viewport" content="width=device-width" />

  <style>
    * {margin:0; padding:0; word-wrap:break-word;}
    #atas {background-color:darkred; height: 100px;}
    #kiri {float:left; width:20%; background-color:cyan; height: 1500px; padding:0 0 0 1%}
    #tengah {position:absolute; width:60%; margin:0 20%; background-color:brown; height: 1500px;}
    #kanan {float:right; width:20%; background-color:cyan; height: 1500px;}
    #bawah {margin:1500px 0 0; background-color:darkred; color:black; height: 100px;}
  </style>
</head><body>
  <div id="atas">
    <h1 align=center><br/>Diary Maistro<h1>
	
  </div>
  <div id="tengah">
	
    <textarea rows="40" style="margin:2%; width:95%;background:aqua;text-color:white;">
	
	Jaman dulu sebelum teknologi se bomming saat ini mungkin kita masih disuguhkan dengan buku diary. Buku diary ini pernah saya rasakan booming pas waktu jaman-jaman sekolah dulu. Uniknya buku diary ini  bak primadona di jamannya. Dengan adanya diary kita bisa menuangkan berbagai macam apa yang kita rasakan baik itu pengalaman manis, pahit, senang, sedih pokoknya diary yang setia menjadi tempat kita mencurahkan isi hati.

Waktu pun begitu cepat berlalu hingga akhirnya  saat ini kita mengantikan diary dengan teknologi seperti munculnya internet. Saya jadi teringat waktu jaman sekolah dulu,  kemana-mana dan hampir setiap remaja putri memiliki diary. Mulai dari yang tipis sampai yang tebal, dan isinya pun rahasia sebab itu curhatan pribadi kita loh..!!.



Tapi kini semua jauh lebih mudah, untuk menulis curhatan kita bisa menggunakan internet disana kita bisa memanfaatkan  Blog untuk membuat cerita apa yang kita inginkan. Namun kerahasiannya kurang bisa dipastikan. Beda halnya dengan dairy, bahkan dulu dary saja sudah memiliki gembok yang terpasang di samping tepi buku guna menjaga kerhasiaannya agar tidak ada siapapun yang bisa membacanya. Pernah terfikir gak sama kalian dulu diary itu sangat spesial banget buat kita??



Pengalaman  masa remaja akan diary mungkin tidak akan pernah terlupakan bagi saya dan juga bagi kalian yang sempat merasakan betul bahwa diary dikala waktu itu  bisa menjadi  tempat yang tepat kita untuk mencurahkan semua isi hati. Namun saat ini disaat semua serba dinamis dan lebih canggih kita hanya membutuhkan satu unit komputer  atau satu buah notebook/ laptop dan setia ” ketak-ketik keyboard”  untuk menulis baik itu yang penting-penting ataupun yang gak penting.

Meskipun saat ini saya tidak lagi menggunakan diary namun sampai saat inipun saya masih menyimpan diary – diary jaman dulu di suatu tempat yang saya simpan khusus. Paling tidak jika saya membuka-buka dan mengulas tulisan saya di dalam diary saya jadi teringat apa yang sedang saya rasakan saat itu tentunya sambil tersenyum simpul mengenang peristiwa tersebut.(hmmm…).

Dan ketika diary tergeser oleh teknologi namun sampai saat ini diary  bagi saya sangat spesial karena di diary kita bisa bebas meluapkan apa yang kita rasa dengan coretan natural di dalamnya, bisa jauh berkesan mengekspresiakn apa yang kita rasa lewat coretan baik senang, sedih, kesal, badmood dan sebagainya. So at any time until the diary was never replaced by me,,,,, bagaimana cerita kalian???
</textarea>
  </div>
  <div id="kiri">
    <h2><br/>&nbsp;Penulis	:</h2><br/>
    <img style="margin:1%; width:90%;" src="IMG_4841.jpg"><br/>
    <table width="90%" border=3 style="margin:1%;"><tbody><tr><td>
      <table><tbody><tr>
        <td>Nama</td>
        <td>: Fauzi bahran</td>
      </tr><tr>
        <td>NPM</td>
        <td>: 1517051075</td>
      </tr><tr>
        <td>Ruang</td>
        <td>: 2</td>
      </tr><tr>
        <td>No. HP</td>
        <td>: 089656653263</td>
      </tr><tr>
        <td>Email</td>
        <td>: bangmas014@gmail.com</td>
      </tr></tbody></table>
    </td></tr></tbody></table>
  </div>
  <div id="kanan">
    <br/>
    <br/>
	<table width="60%" border=3 style="margin:3%;"><tbody><tr><td>
      <strong>&nbsp;Tanggal :</strong>
	  <tbody><tr>
        <td>&nbsp;:- 9 s/d 15</td>
		<tbody><tr>
        <td>Bulan</td>
		<tbody><tr>
		<td>:- Mei</td>
		<tbody><tr>
        <td>Tahun</td>
		<tbody><tr>
		<td>:- 2017</td>
    </tr></tbody></table>
    </td></tr></tbody></table>
    <br/><br/><br/>
    <a href="LogOut.php">&nbsp;&nbsp;[LOGOUT]</a>
  </div>
  <div id="bawah">
    <h3 align=center>
      <br/>My Diary
    </h3>
  </div>
</body></html>


