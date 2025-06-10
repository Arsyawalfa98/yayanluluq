<?php
// Template pesan undangan
$template = "Bismillahirrahmannirrahim
Assalamu'alaikum Warahmatullahi Wabarakatuh
Tanpa mengurangi rasa hormat, kami mengundang Bpk/Ibu/Sdr/i untuk menghadiri acara pernikahan putra-putri kami.
Berikut link undangan kami, untuk info lengkap acara:

{LINK}

Merupakan suatu kebahagiaan bagi kami, apabila Bpk/Ibu/Sdr/i berkenan hadir dan memberikan doa restu.
Wassalamu'alaikum Warahmatullahi Wabarakatuh";

// Base URL untuk undangan
$baseUrl = "https://imamzahra.site";

// Daftar nama tamu
$daftarTamu = [
'Ainul Mutmainnah',
'Pipit',
'Aluh Indra Asniati',
'Lilis herawati, S.IP'
    // Tambahkan nama-nama lainnya di sini
];

// Hasil generate
$hasilGenerate = [];

// Generate undangan untuk setiap tamu
foreach ($daftarTamu as $nama) {
    // Encode nama untuk URL
    $namaEncoded = urlencode($nama);
    
    // Buat link custom
    $linkCustom = $baseUrl . "?name=" . $namaEncoded;
    
    // Ganti placeholder link di template
    $pesanUndangan = str_replace("{LINK}", $linkCustom, $template);
    
    // Simpan hasil
    $hasilGenerate[] = [
        'nama' => $nama,
        'link' => $linkCustom,
        'pesan_lengkap' => $pesanUndangan
    ];
}

// Tampilkan hasil
echo "<h2>Hasil Generate Undangan</h2>";

foreach ($hasilGenerate as $undangan) {
    echo "<hr>";
    echo "<h3>Undangan untuk: " . htmlspecialchars($undangan['nama']) . "</h3>";
    echo "<p><strong>Link:</strong> " . htmlspecialchars($undangan['link']) . "</p>";
    echo "<p><strong>Pesan Lengkap:</strong></p>";
    echo "<pre>" . htmlspecialchars($undangan['pesan_lengkap']) . "</pre>";
}
?>