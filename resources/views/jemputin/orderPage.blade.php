@extends('jemputin.tema')

<?php $page = "Order" ?>

<main id="main">

    @include('jemputin.tree')

    @section('konten')

    <style>
        input[type="number"] {
            width: 100px;
        }

        input+span {
            padding-right: 30px;
        }

        input:invalid+span:after {
            position: absolute;
            content: '✖';
            padding-left: 5px;
            color: #000000;
        }

        input:valid+span:after {
            position: absolute;
            content: '✓';
            padding-left: 5px;
            color: #009000;
        }

        .w3-theme {
            color: #000 !important;
            background-color: #ffcab8 !important
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #E56234;
            color: rgb(0, 0, 0);
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #E56234;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .navbar a:not(:first-child) {
                display: none;
            }

            .navbar a.icon {
                float: right;
                display: block;
            }

            .navbar.responsive .icon {
                position: absolute;
                right: 0;
                bottom: 0;
            }

            .navbar.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        #panel,
        #flip {
            padding: 5px;
            text-align: center;
            background-color: #E56234;
            border: solid 1px #c3c3c3;
        }

        #panel {
            text-align: left;
            padding: 50px;
            display: none;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.error').hide();
            $('.cekbiaya').click(function (event) {
                var amt = 0; //mendeklarasikan variabel amt dengan nilai awal 0
                var count = $('input:checked').length;
                if (count == 0) //apabila tidak mengklik salah satu checkbox setelah cek biaya
                {
                    $('p.result').hide(); //menyebunyikan notif hasil perhitungan
                    $('.error').show(); //muncul error karena tidak memilih salah satu setelah di cek
                } else {
                    $('form').find(':checkbox').each(function () { //mencari checbox
                        if ($(this).is(
                                ':checked'
                                )) //apabila telah mengklik minimal salah satu checkbox setelah cek biaya
                        {
                            amt = amt + parseInt($(this)
                                .val()); //penjumlahan dari nilai value yang di klik
                        }
                    });
                    $('.error').hide(); //menyembunyikan notif error
                    $('p.result').show(); //keluar notif hasil perhitungan
                    $('p.result').text('Estimasi biaya perjalanan adalah Rp' + amt +
                        ',00'); //keluar text dan amt yang merupakan hasil perhitungan
                }
                event.preventDefault();
            });
        });

        $(document).ready(function () {
            $("#flip").click(function () { //ketika mengklik tombol dengan id flip
                $("#panel").slideToggle("slow"); //maka panel dengan id panel akan terbuka
            });
        });

        $("select").on("change", function () { //memilih select kemudian mengubahnya ke div selanutnya
            $("#" + $(this).val()).show().siblings()
                .hide(); //div selanjutnya terbuka dan div sebelumnya yang telah terselect di hide
        });
    </script>

    <div class="container">
        <div class="row">
            <div class="col-sm-5 bg-white">
                <!--sm 7 yaitu untuk mengatur lebar row sebesar 5 dari 12-->
                <h2>Estimasi Biaya</h2>
                <div id="Estimasi Biaya">
                    <ul>
                        <p>Titik Jemput :<p>
                                <select name="tiktik jemput">
                                    <option value="" selected="selected">Pilih Lokasi Penjemputan</option>
                                    <option value="form_1">Kampus ITS</option>
                                    <option value="form_2">Kampus UNAIR</option>
                                    <option value="form_3">Kampus UPN</option>
                                    <option value="form_4">Kampus UNESA</option>
                                    <option value="form_5">Kampus UINSA</option>
                                </select>

                                <form name="form_1" id="form_1" style="display:none">
                                    <p>Titik Jemput :<p>
                                            <select>
                                                <option value="" selected="selected">Kampus ITS</option>
                                                <option value="form_2">Kampus UNAIR</option>
                                                <option value="form_3">Kampus UPN</option>
                                                <option value="form_4">Kampus UNESA</option>
                                                <option value="form_5">Kampus UINSA</option>
                                            </select>
                                            <!--ditulis ulang biar bisa membandingkan harga-->

                                            <p>Tujuan :<p>
                                                    <input type="checkbox" id="Kampus UNAIR" name="Kampus UNAIR"
                                                        value=5000 class="infobox">Kampus UNAIR<br>
                                                    <input type="checkbox" id="Kampus UPN" name="Kampus UPN" value=7000
                                                        class="infobox">Kampus UPN<br>
                                                    <input type="checkbox" id="Kampus UNESA" name="Kampus UNESA"
                                                        value=10000 class="infobox">Kampus UNESA<br>
                                                    <input type="checkbox" id="Kampus UINSA" name="UINSA" value=9000
                                                        class="infobox">UINSA<br>
                                                    <p class="error" style="color:red;">Silahkan pilih salah satu
                                                        tujuan! </p>
                                                    <p class="result"></p>
                                                    <input class="cekbiaya text-white" type="submit"
                                                        value="Cek Biaya Perjalanan">
                                </form>
                                <!--value berfungsi untuk memberikan nilai pada tiap inputan, misalnya inputan Kampus Unair memiliki value 5000 yang mana merepresentasikan Tarif biaya perjalanan ke Kampus UNAIR yaitu Rp5000,00-->

                                <form name="form_2" id="form_2" style="display:none">
                                    <p>Titik Jemput :<p>
                                            <select>
                                                <option value="form_1">Kampus ITS</option>
                                                <option value="form_2" selected="selected">Kampus UNAIR</option>
                                                <option value="form_3">Kampus UPN</option>
                                                <option value="form_4">Kampus UNESA</option>
                                                <option value="form_5">Kampus UINSA</option>
                                            </select>
                                            <!--ditulis ulang biar bisa membandingkan harga-->
                                            <p>Tujuan :<p>
                                                    <input type="checkbox" id="Kampus ITS" name="Kampus ITS" value=5000
                                                        class="infobox">Kampus ITS<br>
                                                    <input type="checkbox" id="Kampus UPN" name="Kampus UPN" value=6000
                                                        class="infobox">Kampus UPN<br>
                                                    <input type="checkbox" id="Kampus UNESA" name="Kampus UNESA"
                                                        value=8000 class="infobox">Kampus UNESA<br>
                                                    <input type="checkbox" id="Kampus UINSA" name="Kampus UINSA"
                                                        value=9000 class="infobox">Kampus UINSA<br>
                                                    <p class="error" style="color:red;">Silahkan pilih salah satu
                                                        tujuan! </p>
                                                    <p class="result"></p>
                                                    <input class="cekbiaya text-white" type="submit"
                                                        value="Cek Biaya Perjalanan">
                                </form>
                                <!--value berfungsi untuk memberikan nilai pada tiap inputan, misalnya inputan Kampus Unair memiliki value 5000 yang mana merepresentasikan Tarif biaya perjalanan ke Kampus UNAIR yaitu Rp5000,00-->

                                <form name="form_3" id="form_3" style="display:none">
                                    <p>Titik Jemput :<p>
                                            <select>
                                                <option value="form_1">Kampus ITS</option>
                                                <option value="form_2">Kampus UNAIR</option>
                                                <option value="form_3" selected="selected">Kampus UPN</option>
                                                <option value="form_4">Kampus UNESA</option>
                                                <option value="form_5">Kampus UINSA</option>
                                            </select>
                                            <!--ditulis ulang biar bisa membandingkan harga-->
                                            <p>Tujuan :<p>
                                                    <input type="checkbox" id="Kampus ITS" name="Kampus ITS" value=6000
                                                        class="infobox">Kampus ITS<br>
                                                    <input type="checkbox" id="Kampus UNAIR" name="Kampus UNAIR"
                                                        value=7000 class="infobox">Kampus UNAIR<br>
                                                    <input type="checkbox" id="Kampus UNESA" name="Kampus UNESA"
                                                        value=10000 class="infobox">Kampus UNESA<br>
                                                    <input type="checkbox" id="Kampus UINSA" name="Kampus UINSA"
                                                        value=8000 class="infobox">Kampus UINSA<br>
                                                    <p class="error" style="color:red;">Silahkan pilih salah satu
                                                        tujuan! </p>
                                                    <p class="result"></p>
                                                    <input class="cekbiaya text-white" type="submit"
                                                        value="Cek Biaya Perjalanan">
                                </form>
                                <!--value berfungsi untuk memberikan nilai pada tiap inputan, misalnya inputan Kampus Unair memiliki value 5000 yang mana merepresentasikan Tarif biaya perjalanan ke Kampus UNAIR yaitu Rp5000,00-->

                                <form name="form_4" id="form_4" style="display:none">
                                    <p>Titik Jemput :<p>
                                            <select>
                                                <option value="form_1">Kampus ITS</option>
                                                <option value="form_2">Kampus UNAIR</option>
                                                <option value="form_3">Kampus UPN</option>
                                                <option value="form_4" selected="selected">Kampus UNESA</option>
                                                <option value="form_5">Kampus UINSA</option>
                                            </select>
                                            <!--ditulis ulang biar bisa membandingkan harga-->
                                            <p>Tujuan :<p>
                                                    <input type="checkbox" id="Kampus ITS" name="Kampus ITS" value=10000
                                                        class="infobox">Kampus ITS<br>
                                                    <input type="checkbox" id="Kampus UNAIR" name="Kampus UNAIR"
                                                        value=9000 class="infobox">Kampus UNAIR<br>
                                                    <input type="checkbox" id="Kampus UPN" name="Kampus UPN" value=8000
                                                        class="infobox">Kampus UPN<br>
                                                    <input type="checkbox" id="Kampus UINSA" name="Kampus UINSA"
                                                        value=6000 class="infobox">Kampus UINSA<br>
                                                    <p class="error" style="color:red;">Silahkan pilih salah satu
                                                        tujuan! </p>
                                                    <p class="result"></p>
                                                    <input class="cekbiaya text-white" type="submit"
                                                        value="Cek Biaya Perjalanan">
                                </form>
                                <!--value berfungsi untuk memberikan nilai pada tiap inputan, misalnya inputan Kampus Unair memiliki value 5000 yang mana merepresentasikan Tarif biaya perjalanan ke Kampus UNAIR yaitu Rp5000,00-->

                                <form name="form_5" id="form_5" style="display:none">
                                    <p>Titik Jemput :<p>
                                            <select>
                                                <option value="form_1">Kampus ITS</option>
                                                <option value="form_2">Kampus UNAIR</option>
                                                <option value="form_3">Kampus UPN</option>
                                                <option value="form_4">Kampus UNESA</option>
                                                <option value="form_5" selected="selected">Kampus UINSA</option>
                                            </select>
                                            <!--ditulis ulang biar bisa membandingkan harga-->
                                            <p>Tujuan :<p>
                                                    <input type="checkbox" id="Kampus ITS" name="Kampus ITS" value=9000
                                                        class="infobox">Kampus ITS<br>
                                                    <input type="checkbox" id="Kampus UNAIR" name="Kampus UNAIR"
                                                        value=7000 class="infobox">Kampus UNAIR<br>
                                                    <input type="checkbox" id="Kampus UPN" name="Kampus UPN" value=6000
                                                        class="infobox">Kampus UPN<br>
                                                    <input type="checkbox" id="Kampus UNESA" name="Kampus UNESA"
                                                        value=8000 class="infobox">Kampus UNESA<br>
                                                    <p class="error" style="color:red;">Silahkan pilih salah satu
                                                        tujuan! </p>
                                                    <p class="result"></p>
                                                    <input class="cekbiaya text-white" type="submit"
                                                        value="Cek Biaya Perjalanan">
                                </form>
                                <!--value berfungsi untuk memberikan nilai pada tiap inputan, misalnya inputan Kampus Unair memiliki value 5000 yang mana merepresentasikan Tarif biaya perjalanan ke Kampus UNAIR yaitu Rp5000,00-->
                    </ul>
                </div>
                <div id="flip" class="text-white">Pesan Sekarang!</div>
                <!--id flip terhubung dengan javascript dan css-->
                <div id="panel">
                    <!--id panel terhubung dengan javascript dan css-->
                    <form action="order_terkirim.html" target="_blank" name="form1" id="orderojek">
                        <ul>
                            <!--pada form nama hingga email terdapat class validity yang mana dilambangkan dengan centang dan cross yang berfungsi untuk membantu memberikan notifikasi kepada user jika inputan mereka sudah sesuai atau belum-->
                            <p class="text-white">Nama kamu : </p><input type="form" id="uname" name="nama"
                                placeholder="Nama" size="20" required size="45" pattern="[a-z A-Z]{4,20}"><span
                                class="validity"></span>
                            <hr>
                            <!--pola inputan pada patern yaitu semua huruf besar dan kecil, spasi, dan minimal 4 dan maksimal 20 inputan-->
                            <p class="text-white">Phone (Ex: 088812341234)</p><input id="telNo" name="telNo"
                                placeholder="No HP" required pattern="[0-9]{8,12}"><span class="validity"></span>
                            <hr>
                            <!--pola inputan pada patern yaitu semua angka. minimal inputan yaitu 8 dan maksimal 12-->
                            <p class="text-white">Email kamu : </p> <input id="emailAddress" type="form" size="20"
                                maxLength="64" required placeholder="username@mail.com" requied
                                pattern=[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}
                                title="Silakan masukkan email kamu dengan tepat"><span class="validity"></span>
                            <hr>
                            <hr>
                            <!--pola inputan pada patern yaitu terdapat format inputan yaitu semua huruf besar/kecil, angka, simbol ._- selanjutnya @ lalu format yang sama dengan sebelum @ dan diakhiri dengan. dan 2-4 huruf besar/kecil-->
                            <p class="text-white">Pilih (Rute - Tujuan) : </p>
                            <select name="multiple" multiple="multiple" id="input_form">
                                <option>Kampus ITS - Kampus UNAIR</option>
                                <option>Kampus ITS - Kampus UPN</option>
                                <option>Kampus ITS - Kampus UNESA</option>
                                <option>Kampus ITS - Kampus UINSA</option>
                                <option>Kampus UNAIR - Kampus ITS</option>
                                <option>Kampus UNAIR - Kampus UPN</option>
                                <option>Kampus UNAIR - Kampus UNESA</option>
                                <option>Kampus UNAIR - Kampus UINSA</option>
                                <option>Kampus UPN - Kampus ITS</option>
                                <option>Kampus UPN - Kampus UNAIR</option>
                                <option>Kampus UPN - Kampus UNESA</option>
                                <option>Kampus UPN - Kampus UINSA</option>
                                <option>Kampus UNESA - Kampus ITS</option>
                                <option>Kampus UNESA - Kampus UNAIR</option>
                                <option>Kampus UNESA - Kampus UPN</option>
                                <option>Kampus UNESA - Kampus UINSA</option>
                                <option>Kampus UINSA - Kampus ITS</option>
                                <option>Kampus UINSA - Kampus UNAIR</option>
                                <option>Kampus UINSA - Kampus UPN</option>
                                <option>Kampus UINSA - Kampus UNESA</option>
                            </select>
                            <hr>
                            <p class="text-white">Waktu Penjemputan : </p><input class="input" id="waktu" size="10"
                                type="datetime-local" placeholder="Date and time" required name="date"
                                value="2020-11-15T20:00">
                            <hr>
                            <p class="text-white">Pesan untuk driver (opsional) : </p><input class="input"
                                id="pesan driver" type="text" placeholder="Tulis pesan">
                            <hr>
                            <p><button onclick="kirim()">Kirim</button><input type="reset" value="Reset" --></p>
                            <!--value reset yaitu untuk mereset semua inputan yang telah diisikan di dalam form-->

                        </ul>
                    </form>
                </div>
            </div>
            <div class="col-sm-7 bg-white">
                <!--sm 7 yaitu untuk mengatur lebar row sebesar 7 dari 12-->
                <h2>Lokasi Pelayanan jemput.in</h2>
                <p>Berikut merupakan daftar lokasi pelayanan ojek kami</p>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Kampus ITS
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <h2>Institut Teknologi Sepuluh Nopember</h2>
                                <img src="assets/img/bundaranits.jpg" class="rounded img-fluid" alt="ITS Surabaya"
                                    width="350" height="300">
                                <!--sumber gambar : https://seruji.co.id/readers/uploads/2017/11/ITS-Surabaya-2-696x360.jpg-->
                                <p>Gambar : Bundaran ITS</p>
                                <p>Institut Teknologi Sepuluh Nopember (disingkat ITS) (bahasa Jawa:
                                    ꦆꦤ꧀ꦱ꧀ꦠꦶꦠꦸꦠ꧀​ꦠꦼꦏ꧀ꦤꦺꦴꦭꦺꦴꦒꦶ​ꦱꦼꦥꦸꦭꦸꦃ​ꦤꦺꦴꦥꦼꦩ꧀ꦧꦼꦂ) adalah perguruan tinggi negeri yang
                                    terletak di
                                    Surabaya. ITS awalnya didirikan oleh Yayasan Perguruan Tinggi Teknik (YPTT) yang
                                    diketuai
                                    oleh dr. Angka Nitisastro pada tanggal 10 November 1957.
                                    Dies Natalis ITS pertama adalah 10 November 1960, sementara nama ITS mulai digunakan
                                    dalam
                                    Peraturan Pemerintah No. 9 tahun 1961 (ditetapkan tanggal 23 Maret 1961). Dalam visi
                                    awal,
                                    ITS ditujukan untuk mendidik para pemimpin yang unggul di bidang sains dan
                                    teknologi, untuk
                                    mengangkat Republik Indonesia menjadi negara berperadaban maju dan tinggi.
                                    Kampus ITS Sukolilo menempati areal seluas 180 hektare, dengan luas bangunan
                                    seluruhnya
                                    kurang lebih 150.000 m2. Selain itu terdapat Kampus Manyar yang dipergunakan oleh
                                    Program
                                    D-3 dan D-4 Teknik Sipil dengan luas bangunan 5.176 m2 dan Kampus ITS Cokroaminoto
                                    yang
                                    dipergunakan untuk magister manejemen serta beberapa lembaga kerjasama dengan luas
                                    bangunan
                                    4.000 m2. (Wikipedia)</p>
                                <p>Lokasi ITS Surabaya</p>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6655.892289144855!2d112.79209087929597!3d-7.28431740077297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1323221a93%3A0x306c3c99adedb258!2sSepuluh%20Nopember%20Institute%20of%20Technology%20(ITS)!5e0!3m2!1sen!2sid!4v1605379287640!5m2!1sen!2sid"
                                    width="300" height="225" frameborder="0" class="img-fluid" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                Kampus UNAIR
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <img src="assets/img/rektoratunair.jpg" class="rounded img-fluid" alt="UNAIR Surabaya"
                                    width="350" height="300">
                                <!--sumber gambar : https://cdn1-production-images-kly.akamaized.net/zKoeeMCo5bVg-HNcFlZN4v7QWLA=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1343702/original/061085900_1473707989-20160913-kampus-unair-surabaya.jpg-->
                                <p>Gambar : Rektorat UNAIR</p>
                                <h2>Universitas Airlangga</h2>
                                <p>Universitas Airlangga (disingkat UNAIR atau UA) (bahasa Jawa: ꦈꦤꦶꦮ꦳ꦼꦂꦱꦶꦠꦱ꧀​ꦄꦲꦶꦂꦭꦁꦒ)
                                    adalah
                                    sebuah perguruan tinggi negeri yang terletak di Surabaya, Jawa Timur. Universitas
                                    ini
                                    didirikan tanggal 10 November 1954 bertepatan dengan hari pahlawan yang ke-9.
                                    Berdasarkan
                                    data 30 September 2015, terdapat 38.047 mahasiswa yang terdaftar di UNAIR.
                                    Universitas Airlangga secara resmi berdiri pada tahun 1954 berdasarkan Peraturan
                                    Pemerintah
                                    No. 57/1954 dan diresmikan oleh Presiden Republik Indonesia pada tanggal 10 November
                                    1954,
                                    bertepatan dengan perayaan hari pahlawan yang kesembilan. Pada tahun yang sama pula
                                    berdiri
                                    Fakultas Hukum yang dulunya merupakan cabang dari Fakultas Hukum, Ekonomi dan Sosial
                                    Politik
                                    Universitas Gadjah Mada, Yogyakarta. (Wikipedia)</p>
                                <p>Lokasi UNAIR B</p>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.734149565287!2d112.75624051546049!3d-7.271063573466933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb26ec0f10a9%3A0x2f805c9f2d4e762a!2sUnair%20b!5e0!3m2!1sen!2sid!4v1605379779786!5m2!1sen!2sid"
                                    width="300" height="225" frameborder="0" style="border:0;" class="img-fluid"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                Kampus UPN
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <img src="assets/img/upnvjt.jpg" class="rounded img-fluid" alt="UPN Veteran Jawa Timur"
                                    width="350" height="300">
                                <!--sumber gambar : https://cdn-2.tstatic.net/jatim/foto/bank/images/kampus-upn-veteran-jatim-wwwupnjatimacid.jpg-->
                                <p>Gambar : Kampus UPN</p>
                                <h2>Universitas Pembangunan Nasional Veteran Jatim</h2>
                                <p>Universitas Pembangunan Nasional "Veteran" Jawa Timur, disingkat UPN "Veteran" Jatim
                                    atau UPN
                                    V JT berlokasi di Surabaya merupakan salah satu Perguruan Tinggi Negeri di Indonesia
                                    yang
                                    berdiri sejak 5 Juli 1959. UPN "Veteran" Jatim saat ini dipimpin oleh Rektor Prof.
                                    Dr. Ir.
                                    Akhmad Fauzi, MMT
                                    UPN "Veteran" Jawa Timur didirikan oleh para veteran pejuang perang kemerdekaan
                                    sebagai
                                    monumen hidup dalam mengembangkan pendidikan di Indonesia. Dalam perkembangannya,
                                    UPN
                                    "Veteran" Jawa Timur telah mengalami beberapa kali perubahan nama dan status.
                                    UPN "Veteran" Jawa Timur didirikan oleh para veteran pejuang perang kemerdekaan
                                    sebagai
                                    monumen hidup dalam mengembangkan pendidikan di Indonesia khususnya pendidikan
                                    tinggi. Dalam
                                    perkembangannya UPN "Veteran" Jawa Timur telah mengalami beberapa perubahan nama dan
                                    statusnya. (Wikipedia)</p>
                                <p>Lokasi UPN</p>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1830078167513!2d112.7863989154609!3d-7.333333474163985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fab87edcad15%3A0xb26589947991eea1!2sUniversitas%20Pembangunan%20Nasional%20%E2%80%9CVeteran%E2%80%9D%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1605379996798!5m2!1sen!2sid"
                                    width="300" height="225" frameborder="0" class="img-fluid" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                Kampus UNESA
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <img src="assets/img/kampusunesa.jpg" class="rounded img-fluid"
                                    alt="UPN Veteran Jawa Timur" width="350" height="300">
                                <!--sumber gambar : https://cdn2.tstatic.net/surabaya/foto/bank/images2/unesa-kampus-lidah-wetan-surabaya.jpg-->
                                <p>Gambar : Kampus UNESA</p>
                                <h2>Universitas Negeri Surabaya</h2>
                                <p>Universitas Negeri Surabaya (Unesa) merupakan Perguruan Tinggi Negeri di Surabaya,
                                    Indonesia,
                                    yang didirikan pada 19 Desember 1964. Pada awal pendirinnya, dahulu Unesa bernama
                                    Institut
                                    Keguruan dan Ilmu Pendidikan Surabaya (IKIP Surabaya). Berdasarkan Keppres RI No. 93
                                    Tahun
                                    1999, IKIP Surabaya berubah menjadi Universitas Negeri Surabaya. Sesuai hasil
                                    keputusan
                                    rapat senat pada tanggal 12 Oktober 1998, yang menyepakati bahwa nama IKIP Surabaya
                                    pasca-konversi adalah Universitas Negeri Surabaya (Inggris: State University of
                                    Surabaya).
                                    Saat ini Unesa memiliki 7 fakultas; 4 fakultas berada di kompleks Kampus Ketintang:
                                    Fakultas
                                    Teknik, Fakultas Ekonomi, Fakultas Matematika dan Ilmu Pengetahuan Alam, serta
                                    Fakultas Ilmu
                                    Sosial. Sementara 3 fakultas berada di kompleks Kampus Lidah Wetan: Fakultas Ilmu
                                    Keolahragaan, Fakultas Ilmu Pendidikan juga Fakultas Bahasa dan Seni. Rektor Unesa
                                    saat ini
                                    adalah Prof. Dr. Nurhasan, M.Kes. Sementara itu, motto yang menjadi pedoman
                                    perguruan tinggi
                                    ini adalah "Growing with Character". (Wikipedia)</p>
                                <p>Lokasi UNESA Lidah Wetan</p>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.4738541918846!2d112.67040681546062!3d-7.300538473796055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb7a806b1ce1%3A0x571f4546e898d79a!2sUniversitas%20Negeri%20Surabaya!5e0!3m2!1sen!2sid!4v1605380149353!5m2!1sen!2sid"
                                    width="300" height="225" frameborder="0" class="img-fluid" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                Kampus UINSA
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <img src="assets/img/kampusuinsa.jpeg" class="rounded img-fluid" alt="UINSA Surabaya"
                                    width="350" height="300">
                                <!--sumber gambar : https://ikilhojatim.com/wp-content/uploads/2019/07/WhatsApp-Image-2019-07-09-at-17.20.15.jpeg-->
                                <p>Gambar : Kampus UINSA</p>
                                <h2>Universitas Islam Negeri Sunan Ampel</h2>
                                <p>Universitas Islam Negeri Sunan Ampel disingkat UIN Sunan Ampel atau UINSA adalah
                                    salah satu
                                    perguruan tinggi negeri di Surabaya yang menyelenggarakan pendidikan tinggi dengan
                                    paradigma
                                    keilmuan model menara kembar tersambung (integrated twin-towers). Paradigma ini
                                    menerapkan
                                    pendekatan Islamisasi nalar yang dibutuhkan demi terciptanya tata keilmuan yang
                                    saling
                                    melengkapi antara ilmu-ilmu keislaman, sosial-humaniora, serta sains dan teknologi.
                                    Kata
                                    Sunan Ampel pada UIN tersebut merupakan nama salah seorang Walisongo, tokoh penyebar
                                    Islam
                                    di Indonesia. (Wikipedia)</p>
                                <p>Lokasi UINSA</p>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2807852341257!2d112.73206241546086!3d-7.322324674040267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6c094d1b87%3A0xbc3def4f4bd2fa7!2sUIN%20Sunan%20Ampel%20Surabaya!5e0!3m2!1sen!2sid!4v1605380261607!5m2!1sen!2sid"
                                    width="300" height="225" frameborder="0" class="img-fluid" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

@endsection