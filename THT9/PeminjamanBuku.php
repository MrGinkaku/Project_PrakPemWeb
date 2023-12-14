<?php
class PeminjamanBuku {
    public function pinjamBuku($judul, $peminjam) {
        // Memeriksa ketersediaan buku dari file daftar_buku.txt
        $daftarBuku = file_get_contents('daftar_buku.txt');
        $daftarBukuList = json_decode($daftarBuku, true);

        // Memeriksa apakah buku ada dalam daftar buku
        foreach ($daftarBukuList as &$buku) {
            if ($buku['judul'] === $judul) {
                // Update data buku ke file daftar_buku.txt
                file_put_contents('daftar_buku.txt', json_encode(array_values($daftarBukuList)));

                // Tambahkan data peminjaman ke file data_peminjaman.txt
                $dataPeminjaman = [
                    'judul' => $judul,
                    'peminjam' => $peminjam,
                    'tanggal_pinjam' => date('Y-m-d H:i:s')
                ];

                $dataPeminjamanList = file_get_contents('data_peminjaman.txt');
                $dataPeminjamanList = json_decode($dataPeminjamanList, true);
                $dataPeminjamanList[] = $dataPeminjaman;

                // Update data peminjaman ke file data_peminjaman.txt
                file_put_contents('data_peminjaman.txt', json_encode($dataPeminjamanList));

                return "Buku berhasil dipinjam oleh $peminjam.";
            }
        }

        // Buku tidak tersedia atau tidak ada dalam daftar
        return "Buku tidak tersedia untuk dipinjam atau tidak terdaftar.";
    }
}
?>
