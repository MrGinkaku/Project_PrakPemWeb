<?php
class PengembalianBuku {
    public function kembalikanBuku($judul, $peminjam) {
        // Ambil data peminjaman dari file data_peminjaman.txt
        $dataPeminjaman = file_get_contents('data_peminjaman.txt');
        $dataPeminjamanList = json_decode($dataPeminjaman, true);

        // Cari data peminjaman berdasarkan judul buku dan peminjam
        foreach ($dataPeminjamanList as $key => $peminjaman) {
            if ($peminjaman['judul'] == $judul && $peminjaman['peminjam'] == $peminjam) {
                // Hapus data peminjaman dari data_peminjaman.txt
                unset($dataPeminjamanList[$key]);

                // Update file data_peminjaman.txt
                file_put_contents('data_peminjaman.txt', json_encode(array_values($dataPeminjamanList)));

                // Tambahkan data pengembalian ke file data_pengembalian.txt
                $dataPengembalian = [
                    'judul' => $judul,
                    'peminjam' => $peminjam,
                    'tanggal_pengembalian' => date('Y-m-d H:i:s')
                ];

                $dataPengembalianList = file_get_contents('data_pengembalian.txt');
                $dataPengembalianList = json_decode($dataPengembalianList, true);
                $dataPengembalianList[] = $dataPengembalian;

                // Update file data_pengembalian.txt
                file_put_contents('data_pengembalian.txt', json_encode($dataPengembalianList));

                return "Buku dengan judul $judul berhasil dikembalikan oleh $peminjam.";
            }
        }

        // Jika buku tidak ditemukan dalam data_peminjaman.txt
        return "Buku dengan judul $judul oleh $peminjam tidak ditemukan atau belum dipinjam.";
    }
}
?>
