<?php
// Template pesan undangan
$template = "{LINK}";

// Base URL untuk undangan
$baseUrl = "https://imamzahra.site";

// Daftar nama tamu
$daftarTamu = [
'Ovaldy Dwify Risqoni',
'Mahmud',
'M Irfan Faishol',
'Ezriyan',
'Ibong',
'Reno',
'Dani',
'Yayaq',
'Fiyan ',
'Sani',
'Aldhi Finsa',
'Velystiandi Nugroho',
'Putra',
'Aldo maulandika',
'Christian Wiratama',
'Alfian',
'Mamang Ody',
'Papah Alpin',
'Aditama nugroho p',
'Antonius Aldi Winata',
'Elma Kartika'
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