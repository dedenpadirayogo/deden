<<?php
//date_default_timezone_set('Asia/Makassar');//

    $hasil.= "Semangat Pagii!!💪🏻💪🏻 \n";

    $hasil.= "\nJANGAN LUPA ABSEN KAWAN!!";
    $hasil.= "\nSudah jam 08:00:00 Looooh!!!!\n";

    $hasil.= "\nCek SDMS!\n";
    $hasil.= "Online-kan atau Geser NOP!\n";

    $hasil.= "\nUntuk menjadi kegiatan yang dilakukan tiap hari   :\n";
    $hasil.= "✅ Tiap pagi teman2 MO login ke apk LENSA Dan Absen SUPER HANA, paling lambat jam 08:00 waktu setempat.\n";
    $hasil.= "✅ Untuk pengimputan evident bot @inventory_spbu_bot dan bot @Maintenance_Preventiv_bot pastikan menggunakan taggingan lokasi/kordinat serta tanggal pengambilan gambar.\n";
    $hasil.= "✅ Pastikan BAnya diserahkan ke HD/TL dengan format lengkap seperti tanda tangan teknisi, NIK teknisi, tanggal pengerjaan, stempel dari pihak SPBU dan ttd dari pihak SPBU.\n";
    $hasil.= "✅ Moban para TL/HD/rekan teknisi untuk memperhatikan eviden yang telah di input di bot preventive maintanance dan bot inventory.\n";
    $hasil.= "✅ Untuk pengerjaan preventive maintanance pastikan groundingnya di ukur menggunakan alat ukur grounding tester.\n";
    $hasil.= "✅ Segera merespon no TACC (Telkom Akses Command Centre) 0215469800 (wajib save nomor TACC).\n";
    $hasil.= "✅ Cek tiket gangguan dan segera melakukan eksekusi perbaikan pada Bot @mo_spbu_bot, jika terdapat gangguan yang bukan ranah kiTA agar nelfon ke TACC dan laporkan kendalanya agar bisa diteruskan ke unit terkait.\n";
    $hasil.= "\nTerima kasiiih..\n";
    $hasil.= "\n@AKAIJAYA @Majaddawajada @styping @Dhyfens @diyatt @peju4ngC1NT4 @markicaps @kuli_dollar96 @dani_ergi @fahril07 @Liquitmangga @qolbualsidik @vir_070503";

    $hasilku = urlencode($hasil);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot6281537907:AAG_8BR0HLfU9BDBa7G0aRXk8NP_PTrrK-g/sendmessage?chat_id=-1001236797057&parse_mode=HTML&text=".$hasilku);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_exec($ch);

?>