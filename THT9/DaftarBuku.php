<?php
class DaftarBuku {
    public function tampilkanDaftarBuku() {
        // Ambil data buku dari file atau database (disesuaikan dengan kebutuhan)
        $daftarBuku = file_get_contents('daftar_buku.txt');
        $daftarBukuList = json_decode($daftarBuku, true);

        // Tampilkan data buku dalam bentuk tabel HTML
        $output = '<table>
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Penulis</th>
                                <th>Tahun Terbit</th>
                            </tr>
                        </thead>
                        <tbody>';

        foreach ($daftarBukuList as $buku) {
            $output .= '<tr>
                            <td>' . $buku['judul'] . '</td>
                            <td>' . $buku['pengarang'] . '</td>
                            <td>' . $buku['tahun_terbit'] . '</td>
                        </tr>';
        }

        $output .= '</tbody></table>';

        return $output;
    }
}
?>
