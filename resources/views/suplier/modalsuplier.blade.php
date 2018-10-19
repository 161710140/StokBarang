<!DOCTYPE html>
<html>
<head>
	<title>Perdagangan</title>
</head>
<body>
	<div id="suplierModal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog">
         <div class="modal-content">
            <form method="post" id="suplier_form" enctype="multipart/form-data">
               <div class="modal-header" style="background-color: lightblue;">
               	<h5 class="modal-title" >Add Data</h5>
                  <button type="button" class="close" data-dismiss="modal" >&times;</button>
               </div>

               <div class="modal-body">
                  {{csrf_field()}} {{ method_field('POST') }}
                  <span id="form_tampil"></span>
               
                  <div class="form-group">
                     <input type="hidden" name="id" id="id">
               
                     <label>Nama Suplier</label>
                     <input type="text" name="Nama" id="Nama" class="form-control" placeholder="masukan nama anda" />
                     <span class="help-block has-error Nama_error"></span>
                  </div>

                 <div>    
                  <div class="form-group">
                  	<label>Asal Kota</label>
                  	<select id="Asal_Kota" name="Asal_Kota" class="selectdua" style="width: 468px">
                     	<option disabled selected>Pilih Kota</option>
					    <option value="Aceh Barat">Aceh Barat</option>
					    <option value="Aceh Barat Daya">Aceh Barat Daya</option>
					    <option value="Aceh Besar">Aceh Besar</option>
					    <option value="Aceh Jaya">Aceh Jaya</option>
					    <option value="Aceh Selatan">Aceh Selatan</option>
					    <option value="Aceh Singkil">Aceh Singkil</option>
					    <option value="Aceh Tamiang">Aceh Tamiang</option>
					    <option value="Aceh Tengah">Aceh Tengah</option>
					    <option value="Aceh Tenggara">Aceh Tenggara</option>
					    <option value="Aceh Timur">Aceh Timur</option>
					    <option value="Aceh Utara">Aceh Utara</option>
					    <option value="Agam">Agam</option>
					    <option value="Alor">Alor</option>
					    <option value="Ambon">Ambon</option>
					    <option value="Asahan">Asahan</option>
					    <option value="Asmat">Asmat</option>
					    <option value="Batam">Batam</option>
					    <option value="Badung">Badung</option>
					    <option value="Balangan">Balangan</option>
					    <option value="Balikpapan">Balikpapan</option>
					    <option value="Banda Aceh">Banda Aceh</option>
					    <option value="Bandar Lampung">Bandar Lampung</option>
					    <option value="Bandung">Bandung</option>
					    <option value="Bandung Barat">Bandung Barat</option>
					    <option value="Banggai">Banggai</option>
					    <option value="Banggai Kepulauan">Banggai Kepulauan</option>
					    <option value="Bangka">Bangka</option>
					    <option value="Bangka Barat">Bangka Barat</option>
					    <option value="Bangka Selatan">Bangka Selatan</option>
					    <option value="Bangka Tengah">Bangka Tengah</option>
					    <option value="Bangkalan">Bangkalan</option>
					    <option value="Bangli">Bangli</option>
					    <option value="Banjar">Banjar</option>
					    <option value="Banjar Baru">Banjar Baru</option>
					    <option value="Banjarmasin">Banjarmasin</option>
					    <option value="Banjarnegara">Banjarnegara</option>
					    <option value="Bantaeng">Bantaeng</option>
					    <option value="Bantul">Bantul</option>
					    <option value="Banyu Asin">Banyu Asin</option>
					    <option value="Banyumas">Banyumas</option>
					    <option value="Banyuwangi">Banyuwangi</option>
					    <option value="Barito Kuala">Barito Kuala</option>
					    <option value="Barito Selatan">Barito Selatan</option>
					    <option value="Barito Timur">Barito Timur</option>
					    <option value="Barito Utara">Barito Utara</option>
					    <option value="Barru">Barru</option>
					    <option value="Baru">Baru</option>
					    <option value="Batang">Batang</option>
					    <option value="Batang Hari">Batang Hari</option>
					    <option value="Batu">Batu</option>
					    <option value="Batu Bara">Batu Bara</option>
					    <option value="Baubau">Baubau</option>
					    <option value="Bekasi">Bekasi</option>
					    <option value="Belitung">Belitung</option>
					    <option value="Belitung Timur">Belitung Timur</option>
					    <option value="Belu">Belu</option>
					    <option value="Bener Meriah">Bener Meriah</option>
					    <option value="Bengkalis">Bengkalis</option>
					    <option value="Bengkayang">Bengkayang</option>
					    <option value="Bengkulu">Bengkulu</option>
					    <option value="Bengkulu Selatan">Bengkulu Selatan</option>
					    <option value="Bengkulu Tengah">Bengkulu Tengah</option>
					    <option value="Bengkulu Utara">Bengkulu Utara</option>
					    <option value="Berau">Berau</option>
					    <option value="Biak Numfor">Biak Numfor</option>
					    <option value="Bima">Bima</option>
					    <option value="Binjai">Binjai</option>
					    <option value="Bintan">Bintan</option>
					    <option value="Bireuen">Bireuen</option>
					    <option value="Bitung">Bitung</option>
					    <option value="Blitar">Blitar</option>
					    <option value="Blora">Blora</option>
					    <option value="Boalemo">Boalemo</option>
					    <option value="Bogor">Bogor</option>
					    <option value="Bojonegoro">Bojonegoro</option>
					    <option value="Bolaang Mongondow">Bolaang Mongondow</option>
					    <option value="Bolaang Mongondow Selatan">Bolaang Mongondow Selatan</option>
					    <option value="Bolaang Mongondow Timur">Bolaang Mongondow Timur</option>
					    <option value="Bolaang Mongondow Utara">Bolaang Mongondow Utara</option>
					    <option value="Bombana">Bombana</option>
					    <option value="Bondowoso">Bondowoso</option>
					    <option value="Bone">Bone</option>
					    <option value="Bone Bolango">Bone Bolango</option>
					    <option value="Bontang">Bontang</option>
					    <option value="Boven Digoel">Boven Digoel</option>
					    <option value="Boyolali">Boyolali</option>
					    <option value="Brebes">Brebes</option>
					    <option value="Bukittinggi">Bukittinggi</option>
					    <option value="Buleleng">Buleleng</option>
					    <option value="Bulukumba">Bulukumba</option>
					    <option value="Bulungan">Bulungan</option>
					    <option value="Bungo">Bungo</option>
					    <option value="Buol">Buol</option>
					    <option value="Buru">Buru</option>
					    <option value="Buru Selatan">Buru Selatan</option>
					    <option value="Buton">Buton</option>
					    <option value="Buton Utara">Buton Utara</option>
					    <option value="Ciamis">Ciamis</option>
					    <option value="Cianjur">Cianjur</option>
					    <option value="Cilacap">Cilacap</option>
					    <option value="Cilegon">Cilegon</option>
					    <option value="Cimahi">Cimahi</option>
					    <option value="Cirebon">Cirebon</option>
					    <option value="Dumai">Dumai</option>
					    <option value="Dairi">Dairi</option>
					    <option value="Deiyai">Deiyai</option>
					    <option value="Deli Serdang">Deli Serdang</option>
					    <option value="Demak">Demak</option>
					    <option value="Denpasar">Denpasar</option>
					    <option value="Depok">Depok</option>
					    <option value="Dharmasraya">Dharmasraya</option>
					    <option value="Dogiyai">Dogiyai</option>
					    <option value="Dompu">Dompu</option>
					    <option value="Donggala">Donggala</option>
					    <option value="Empat Lawang">Empat Lawang</option>
					    <option value="Ende">Ende</option>
					    <option value="Enrekang">Enrekang</option>
					    <option value="Fakfak">Fakfak</option>
					    <option value="Flores Timur">Flores Timur</option>
					    <option value="Garut">Garut</option>
					    <option value="Gayo Lues">Gayo Lues</option>
					    <option value="Gianyar">Gianyar</option>
					    <option value="Gorontalo">Gorontalo</option>
					    <option value="Gorontalo Utara">Gorontalo Utara</option>
					    <option value="Gowa">Gowa</option>
					    <option value="Gresik">Gresik</option>
					    <option value="Grobogan">Grobogan</option>
					    <option value="Gunung Kidul">Gunung Kidul</option>
					    <option value="Gunung Mas">Gunung Mas</option>
					    <option value="Gunungsitoli">Gunungsitoli</option>
					    <option value="Halmahera Barat">Halmahera Barat</option>
					    <option value="Halmahera Selatan">Halmahera Selatan</option>
					    <option value="Halmahera Tengah">Halmahera Tengah</option>
					    <option value="Halmahera Timur">Halmahera Timur</option>
					    <option value="Halmahera Utara">Halmahera Utara</option>
					    <option value="Hulu Sungai Selatan">Hulu Sungai Selatan</option>
					    <option value="Hulu Sungai Tengah">Hulu Sungai Tengah</option>
					    <option value="Hulu Sungai Utara">Hulu Sungai Utara</option>
					    <option value="Humbang Hasundutan">Humbang Hasundutan</option>
					    <option value="Indragiri Hilir">Indragiri Hilir</option>
					    <option value="Indragiri Hulu">Indragiri Hulu</option>
					    <option value="Indramayu">Indramayu</option>
					    <option value="Intan Jaya">Intan Jaya</option>
					    <option value="Jakarta Barat">Jakarta Barat</option>
					    <option value="Jakarta Pusat">Jakarta Pusat</option>
					    <option value="Jakarta Selatan">Jakarta Selatan</option>
					    <option value="Jakarta Timur">Jakarta Timur</option>
					    <option value="Jakarta Utara">Jakarta Utara</option>
					    <option value="Jambi">Jambi</option>
					    <option value="Jayapura">Jayapura</option>
					    <option value="Jayawijaya">Jayawijaya</option>
					    <option value="Jember">Jember</option>
					    <option value="Jembrana">Jembrana</option>
					    <option value="Jeneponto">Jeneponto</option>
					    <option value="Jepara">Jepara</option>
					    <option value="Jombang">Jombang</option>
					    <option value="Kaimana">Kaimana</option>
					    <option value="Kampar">Kampar</option>
					    <option value="Kapuas">Kapuas</option>
					    <option value="Kapuas Hulu">Kapuas Hulu</option>
					    <option value="Karang Asem">Karang Asem</option>
					    <option value="Karanganyar">Karanganyar</option>
					    <option value="Karawang">Karawang</option>
					    <option value="Karimun">Karimun</option>
					    <option value="Karo">Karo</option>
					    <option value="Katingan">Katingan</option>
					    <option value="Kaur">Kaur</option>
					    <option value="Kayong Utara">Kayong Utara</option>
					    <option value="Kebumen">Kebumen</option>
					    <option value="Kediri">Kediri</option>
					    <option value="Keerom">Keerom</option>
					    <option value="Kendal">Kendal</option>
					    <option value="Kendari">Kendari</option>
					    <option value="Kepahiang">Kepahiang</option>
					    <option value="Kepulauan Anambas">Kepulauan Anambas</option>
					    <option value="Kepulauan Aru">Kepulauan Aru</option>
					    <option value="Kepulauan Mentawai">Kepulauan Mentawai</option>
					    <option value="Kepulauan Meranti">Kepulauan Meranti</option>
					    <option value="Kepulauan Sangihe">Kepulauan Sangihe</option>
					    <option value="Kepulauan Selayar">Kepulauan Selayar</option>
					    <option value="Kepulauan Seribu">Kepulauan Seribu</option>
					    <option value="Kepulauan Sula">Kepulauan Sula</option>
					    <option value="Kepulauan Talaud">Kepulauan Talaud</option>
					    <option value="Kepulauan Yapen">Kepulauan Yapen</option>
					    <option value="Kerinci">Kerinci</option>
					    <option value="Ketapang">Ketapang</option>
					    <option value="Klaten">Klaten</option>
					    <option value="Klungkung">Klungkung</option>
					    <option value="Kolaka">Kolaka</option>
					    <option value="Kolaka Utara">Kolaka Utara</option>
					    <option value="Konawe">Konawe</option>
					    <option value="Konawe Selatan">Konawe Selatan</option>
					    <option value="Konawe Utara">Konawe Utara</option>
					    <option value="Kotamobagu">Kotamobagu</option>
					    <option value="Kotawaringin Barat">Kotawaringin Barat</option>
					    <option value="Kotawaringin Timur">Kotawaringin Timur</option>
					    <option value="Kuantan Singingi">Kuantan Singingi</option>
					    <option value="Kubu Raya">Kubu Raya</option>
					    <option value="Kudus">Kudus</option>
					    <option value="Kulon Progo">Kulon Progo</option>
					    <option value="Kuningan">Kuningan</option>
					    <option value="Kupang">Kupang</option>
					    <option value="Kutai Barat">Kutai Barat</option>
					    <option value="Kutai Kartanegara">Kutai Kartanegara</option>
					    <option value="Kutai Timur">Kutai Timur</option>
					    <option value="Labuhan Batu">Labuhan Batu</option>
					    <option value="Labuhan Batu Selatan">Labuhan Batu Selatan</option>
					    <option value="Labuhan Batu Utara">Labuhan Batu Utara</option>
					    <option value="Lahat">Lahat</option>
					    <option value="Lamandau">Lamandau</option>
					    <option value="Lamongan">Lamongan</option>
					    <option value="Lampung Barat">Lampung Barat</option>
					    <option value="Lampung Selatan">Lampung Selatan</option>
					    <option value="Lampung Tengah">Lampung Tengah</option>
					    <option value="Lampung Timur">Lampung Timur</option>
					    <option value="Lampung Utara">Lampung Utara</option>
					    <option value="Landak">Landak</option>
					    <option value="Langkat">Langkat</option>
					    <option value="Langsa">Langsa</option>
					    <option value="Lanny Jaya">Lanny Jaya</option>
					    <option value="Lebak">Lebak</option>
					    <option value="Lebong">Lebong</option>
					    <option value="Lembata">Lembata</option>
					    <option value="Lhokseumawe">Lhokseumawe</option>
					    <option value="Lima Puluh Kota">Lima Puluh Kota</option>
					    <option value="Lingga">Lingga</option>
					    <option value="Lombok Barat">Lombok Barat</option>
					    <option value="Lombok Tengah">Lombok Tengah</option>
					    <option value="Lombok Timur">Lombok Timur</option>
					    <option value="Lombok Utara">Lombok Utara</option>
					    <option value="Lubuklinggau">Lubuklinggau</option>
					    <option value="Lumajang">Lumajang</option>
					    <option value="Luwu">Luwu</option>
					    <option value="Luwu Timur">Luwu Timur</option>
					    <option value="Luwu Utara">Luwu Utara</option>
					    <option value="Madiun">Madiun</option>
					    <option value="Magelang">Magelang</option>
					    <option value="Magetan">Magetan</option>
					    <option value="Majalengka">Majalengka</option>
					    <option value="Majene">Majene</option>
					    <option value="Makassar">Makassar</option>
					    <option value="Malang">Malang</option>
					    <option value="Malinau">Malinau</option>
					    <option value="Maluku Barat Daya">Maluku Barat Daya</option>
					    <option value="Maluku Tengah">Maluku Tengah</option>
					    <option value="Maluku Tenggara">Maluku Tenggara</option>
					    <option value="Maluku Tenggara Barat">Maluku Tenggara Barat</option>
					    <option value="Mamasa">Mamasa</option>
					    <option value="Mamberamo Raya">Mamberamo Raya</option>
					    <option value="Mamberamo Tengah">Mamberamo Tengah</option>
					    <option value="Mamuju">Mamuju</option>
					    <option value="Mamuju Utara">Mamuju Utara</option>
					    <option value="Manado">Manado</option>
					    <option value="Mandailing Natal">Mandailing Natal</option>
					    <option value="Manggarai">Manggarai</option>
					    <option value="Manggarai Barat">Manggarai Barat</option>
					    <option value="Manggarai Timur">Manggarai Timur</option>
					    <option value="Manokwari">Manokwari</option>
					    <option value="Mappi">Mappi</option>
					    <option value="Maros">Maros</option>
					    <option value="Mataram">Mataram</option>
					    <option value="Maybrat">Maybrat</option>
					    <option value="Medan">Medan</option>
					    <option value="Melawi">Melawi</option>
					    <option value="Merangin">Merangin</option>
					    <option value="Merauke">Merauke</option>
					    <option value="Mesuji">Mesuji</option>
					    <option value="Metro">Metro</option>
					    <option value="Mimika">Mimika</option>
					    <option value="Minahasa">Minahasa</option>
					    <option value="Minahasa Selatan">Minahasa Selatan</option>
					    <option value="Minahasa Tenggara">Minahasa Tenggara</option>
					    <option value="Minahasa Utara">Minahasa Utara</option>
					    <option value="Mojokerto">Mojokerto</option>
					    <option value="Morowali">Morowali</option>
					    <option value="Muara Enim">Muara Enim</option>
					    <option value="Muaro Jambi">Muaro Jambi</option>
					    <option value="Mukomuko">Mukomuko</option>
					    <option value="Muna">Muna</option>
					    <option value="Murung Raya">Murung Raya</option>
					    <option value="Musi Banyuasin">Musi Banyuasin</option>
					    <option value="Musi Rawas">Musi Rawas</option>
					    <option value="Nabire">Nabire</option>
					    <option value="Nagan Raya">Nagan Raya</option>
					    <option value="Nagekeo">Nagekeo</option>
					    <option value="Natuna">Natuna</option>
					    <option value="Nduga">Nduga</option>
					    <option value="Ngada">Ngada</option>
					    <option value="Nganjuk">Nganjuk</option>
					    <option value="Ngawi">Ngawi</option>
					    <option value="Nias">Nias</option>
					    <option value="Nias Barat">Nias Barat</option>
					    <option value="Nias Selatan">Nias Selatan</option>
					    <option value="Nias Utara">Nias Utara</option>
					    <option value="Nunukan">Nunukan</option>
					    <option value="Ogan Ilir">Ogan Ilir</option>
					    <option value="Ogan Komering Ilir">Ogan Komering Ilir</option>
					    <option value="Ogan Komering Ulu">Ogan Komering Ulu</option>
					    <option value="Ogan Komering Ulu Selatan">Ogan Komering Ulu Selatan</option>
					    <option value="Ogan Komering Ulu Timur">Ogan Komering Ulu Timur</option>
					    <option value="Pacitan">Pacitan</option>
					    <option value="Padang">Padang</option>
					    <option value="Padang Lawas">Padang Lawas</option>
					    <option value="Padang Lawas Utara">Padang Lawas Utara</option>
					    <option value="Padang Panjang">Padang Panjang</option>
					    <option value="Padang Pariaman">Padang Pariaman</option>
					    <option value="Padangsidimpuan">Padangsidimpuan</option>
					    <option value="Pagar Alam">Pagar Alam</option>
					    <option value="Pakpak Bharat">Pakpak Bharat</option>
					    <option value="Palangka Raya">Palangka Raya</option>
					    <option value="Palembang">Palembang</option>
					    <option value="Palopo">Palopo</option>
					    <option value="Palu">Palu</option>
					    <option value="Pamekasan">Pamekasan</option>
					    <option value="Pandeglang">Pandeglang</option>
					    <option value="Pangandaran">Pangandaran</option>
					    <option value="Pangkajene Dan Kepulauan">Pangkajene Dan Kepulauan</option>
					    <option value="Pangkal Pinang">Pangkal Pinang</option>
					    <option value="Paniai">Paniai</option>
					    <option value="Parepare">Parepare</option>
					    <option value="Pariaman">Pariaman</option>
					    <option value="Parigi Moutong">Parigi Moutong</option>
					    <option value="Pasaman">Pasaman</option>
					    <option value="Pasaman Barat">Pasaman Barat</option>
					    <option value="Paser">Paser</option>
					    <option value="Pasuruan">Pasuruan</option>
					    <option value="Pati">Pati</option>
					    <option value="Payakumbuh">Payakumbuh</option>
					    <option value="Pegunungan Bintang">Pegunungan Bintang</option>
					    <option value="Pekalongan">Pekalongan</option>
					    <option value="Pekanbaru">Pekanbaru</option>
					    <option value="Pelalawan">Pelalawan</option>
					    <option value="Pemalang">Pemalang</option>
					    <option value="Pematang Siantar">Pematang Siantar</option>
					    <option value="Penajam Paser Utara">Penajam Paser Utara</option>
					    <option value="Pesawaran">Pesawaran</option>
					    <option value="Pesisir Barat">Pesisir Barat</option>
					    <option value="Pesisir Selatan">Pesisir Selatan</option>
					    <option value="Pidie">Pidie</option>
					    <option value="Pidie Jaya">Pidie Jaya</option>
					    <option value="Pinrang">Pinrang</option>
					    <option value="Pohuwato">Pohuwato</option>
					    <option value="Polewali Mandar">Polewali Mandar</option>
					    <option value="Ponorogo">Ponorogo</option>
					    <option value="Pontianak">Pontianak</option>
					    <option value="Poso">Poso</option>
					    <option value="Prabumulih">Prabumulih</option>
					    <option value="Pringsewu">Pringsewu</option>
					    <option value="Probolinggo">Probolinggo</option>
					    <option value="Pulang Pisau">Pulang Pisau</option>
					    <option value="Pulau Morotai">Pulau Morotai</option>
					    <option value="Puncak">Puncak</option>
					    <option value="Puncak Jaya">Puncak Jaya</option>
					    <option value="Purbalingga">Purbalingga</option>
					    <option value="Purwakarta">Purwakarta</option>
					    <option value="Purworejo">Purworejo</option>
					    <option value="Raja Ampat">Raja Ampat</option>
					    <option value="Rejang Lebong">Rejang Lebong</option>
					    <option value="Rembang">Rembang</option>
					    <option value="Rokan Hilir">Rokan Hilir</option>
					    <option value="Rokan Hulu">Rokan Hulu</option>
					    <option value="Rote Ndao">Rote Ndao</option>
					    <option value="Siak">Siak</option>
					    <option value="Sabang">Sabang</option>
					    <option value="Sabu Raijua">Sabu Raijua</option>
					    <option value="Salatiga">Salatiga</option>
					    <option value="Samarinda">Samarinda</option>
					    <option value="Sambas">Sambas</option>
					    <option value="Samosir">Samosir</option>
					    <option value="Sampang">Sampang</option>
					    <option value="Sanggau">Sanggau</option>
					    <option value="Sarmi">Sarmi</option>
					    <option value="Sarolangun">Sarolangun</option>
					    <option value="Sawah Lunto">Sawah Lunto</option>
					    <option value="Sekadau">Sekadau</option>
					    <option value="Seluma">Seluma</option>
					    <option value="Semarang">Semarang</option>
					    <option value="Seram Bagian Barat">Seram Bagian Barat</option>
					    <option value="Seram Bagian Timur">Seram Bagian Timur</option>
					    <option value="Serang">Serang</option>
					    <option value="Serdang Bedagai">Serdang Bedagai</option>
					    <option value="Seruyan">Seruyan</option>
					    <option value="Siau Tagulandang Biaro">Siau Tagulandang Biaro</option>
					    <option value="Sibolga">Sibolga</option>
					    <option value="Sidenreng Rappang">Sidenreng Rappang</option>
					    <option value="Sidoarjo">Sidoarjo</option>
					    <option value="Sigi">Sigi</option>
					    <option value="Sijunjung">Sijunjung</option>
					    <option value="Sikka">Sikka</option>
					    <option value="Simalungun">Simalungun</option>
					    <option value="Simeulue">Simeulue</option>
					    <option value="Singkawang">Singkawang</option>
					    <option value="Sinjai">Sinjai</option>
					    <option value="Sintang">Sintang</option>
					    <option value="Situbondo">Situbondo</option>
					    <option value="Sleman">Sleman</option>
					    <option value="Solok">Solok</option>
					    <option value="Solok Selatan">Solok Selatan</option>
					    <option value="Soppeng">Soppeng</option>
					    <option value="Sorong">Sorong</option>
					    <option value="Sorong Selatan">Sorong Selatan</option>
					    <option value="Sragen">Sragen</option>
					    <option value="Subang">Subang</option>
					    <option value="Subulussalam">Subulussalam</option>
					    <option value="Sukabumi">Sukabumi</option>
					    <option value="Sukamara">Sukamara</option>
					    <option value="Sukoharjo">Sukoharjo</option>
					    <option value="Sumba Barat">Sumba Barat</option>
					    <option value="Sumba Barat Daya">Sumba Barat Daya</option>
					    <option value="Sumba Tengah">Sumba Tengah</option>
					    <option value="Sumba Timur">Sumba Timur</option>
					    <option value="Sumbawa">Sumbawa</option>
					    <option value="Sumbawa Barat">Sumbawa Barat</option>
					    <option value="Sumedang">Sumedang</option>
					    <option value="Sumenep">Sumenep</option>
					    <option value="Sungai Penuh">Sungai Penuh</option>
					    <option value="Supiori">Supiori</option>
					    <option value="Surabaya">Surabaya</option>
					    <option value="Surakarta">Surakarta</option>
					    <option value="Tabalong">Tabalong</option>
					    <option value="Tabanan">Tabanan</option>
					    <option value="Takalar">Takalar</option>
					    <option value="Tambrauw">Tambrauw</option>
					    <option value="Tana Tidung">Tana Tidung</option>
					    <option value="Tana Toraja">Tana Toraja</option>
					    <option value="Tanah Bumbu">Tanah Bumbu</option>
					    <option value="Tanah Datar">Tanah Datar</option>
					    <option value="Tanah Laut">Tanah Laut</option>
					    <option value="Tangerang">Tangerang</option>
					    <option value="Tangerang Selatan">Tangerang Selatan</option>
					    <option value="Tanggamus">Tanggamus</option>
					    <option value="Tanjung Balai">Tanjung Balai</option>
					    <option value="Tanjung Jabung Barat">Tanjung Jabung Barat</option>
					    <option value="Tanjung Jabung Timur">Tanjung Jabung Timur</option>
					    <option value="Tanjung Pinang">Tanjung Pinang</option>
					    <option value="Tapanuli Selatan">Tapanuli Selatan</option>
					    <option value="Tapanuli Tengah">Tapanuli Tengah</option>
					    <option value="Tapanuli Utara">Tapanuli Utara</option>
					    <option value="Tapin">Tapin</option>
					    <option value="Tarakan">Tarakan</option>
					    <option value="Tasikmalaya">Tasikmalaya</option>
					    <option value="Tebing Tinggi">Tebing Tinggi</option>
					    <option value="Tebo">Tebo</option>
					    <option value="Tegal">Tegal</option>
					    <option value="Teluk Bintuni">Teluk Bintuni</option>
					    <option value="Teluk Wondama">Teluk Wondama</option>
					    <option value="Temanggung">Temanggung</option>
					    <option value="Ternate">Ternate</option>
					    <option value="Tidore Kepulauan">Tidore Kepulauan</option>
					    <option value="Timor Tengah Selatan">Timor Tengah Selatan</option>
					    <option value="Timor Tengah Utara">Timor Tengah Utara</option>
					    <option value="Toba Samosir">Toba Samosir</option>
					    <option value="Tojo Una-una">Tojo Una-una</option>
					    <option value="Toli-toli">Toli-toli</option>
					    <option value="Tolikara">Tolikara</option>
					    <option value="Tomohon">Tomohon</option>
					    <option value="Toraja Utara">Toraja Utara</option>
					    <option value="Trenggalek">Trenggalek</option>
					    <option value="Leuwi Panjang">Leuwi Panjang</option>
					    <option value="Tuban">Tuban</option>
					    <option value="Tulang Bawang Barat">Tulang Bawang Barat</option>
					    <option value="Tulangbawang">Tulangbawang</option>
					    <option value="Tulungagung">Tulungagung</option>
					    <option value="Wajo">Wajo</option>
					    <option value="Wakatobi">Wakatobi</option>
					    <option value="Waropen">Waropen</option>
					    <option value="Way Kanan">Way Kanan</option>
					    <option value="Wonogiri">Wonogiri</option>
					    <option value="Wonosobo">Wonosobo</option>
					    <option value="Yahukimo">Yahukimo</option>
					    <option value="Yalimo">Yalimo</option>
					    <option value="Yogyakarta">Yogyakarta</option>
					</select>
					<span class="help-block has-error Asal_Kota_error"></span>
				</div>

				<div class="modal-footer">
					<input type="submit" name="submit" id="aksi" value="Tambah" class="btn btn-info" />
					<input type="button" value="Cancel" class="btn btn-default" data-dismiss="modal"/>
				</div>
               </form>
            </div>
         </div>
      </div>

</body>
</html>