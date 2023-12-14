<?php
class TambahBuku {
    public function tambahBuku($judul, $pengarang, $tahunTerbit) {
        // Memeriksa apakah buku sudah ada di daftar_buku.txt
        $daftarBuku = file_get_contents('daftar_buku.txt');
        $daftarBukuList = json_decode($daftarBuku, true);

        // Jika $daftarBukuList null atau kosong, inisialisasi sebagai array kosong
        if (!$daftarBukuList) {
            $daftarBukuList = [];
        }

        // Memeriksa apakah buku sudah ada berdasarkan judul
        foreach ($daftarBukuList as $buku) {
            if ($buku['judul'] === $judul) {
                return "Buku $judul sudah ada dalam daftar.";
            }
        }

        // Jika buku belum ada, tambahkan ke daftar_buku.txt
        $dataBuku = [
            'judul' => $judul,
            'pengarang' => $pengarang,
            'tahun_terbit' => $tahunTerbit,
        ];

        $daftarBukuList[] = $dataBuku;

        // Update data buku ke file daftar_buku.txt
        file_put_contents('daftar_buku.txt', json_encode($daftarBukuList));

        return "Buku $judul berhasil ditambahkan.";
    }
}
?>
