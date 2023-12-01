document.addEventListener('DOMContentLoaded', function() {
    const papanPermainan = document.getElementById('board');
    const sel = document.querySelectorAll('.cell');
    const statusPermainan = document.getElementById('status');
    const tombolReset = document.getElementById('reset');
    const tombolGantiModeGelap = document.getElementById('toggleDarkMode');

    let pemainSekarang = 'X';
    let papanPermainanArray = ['', '', '', '', '', '', '', '', ''];
    let permainanAktif = true;
    let modeGelap = false;

    // fungsi untuk handle ketika user melakukan klik
    const handleKlikSel = function(indeks) {
        if (!papanPermainanArray[indeks] && permainanAktif) {
            papanPermainanArray[indeks] = pemainSekarang;
            sel[indeks].innerText = pemainSekarang;

            const pemenang = cekPemenang();

            if (pemenang) {
                statusPermainan.innerText = `${pemenang} menang!`;
                permainanAktif = false;
            } else if (papanPermainanArray.every(cell => cell !== '')) {
                statusPermainan.innerText = "Ini seri!";
                permainanAktif = false;
            } else {
                pemainSekarang = pemainSekarang === 'X' ? 'O' : 'X';
                statusPermainan.innerText = `Giliran Pemain ${pemainSekarang}`;
            }
        }
    };

    // Fungsi untuk menghandle ketika user klik ke sel
    const handleEventKlikSel = function(event){
        const indeks = event.target.dataset.index;
        handleKlikSel(indeks);
    };
    // Event listenerste
    sel.forEach(sel => {
        sel.addEventListener('click', handleEventKlikSel);
    });
    // Fungsi cek pemenang
    const cekPemenang = function(){
        const polaMenang = [
            [0, 1, 2], [3, 4, 5], [6, 7, 8], // Baris
            [0, 3, 6], [1, 4, 7], [2, 5, 8], // Kolom
            [0, 4, 8], [2, 4, 6]              // Diagonal
        ];

        for (const pola of polaMenang) {
            const [a, b, c] = pola;
            if (papanPermainanArray[a] && papanPermainanArray[a] === papanPermainanArray[b] && papanPermainanArray[a] === papanPermainanArray[c]) {
                return papanPermainanArray[a]; // return pemenang ('X' atau 'O')
            }
        }

        return null; // gak ada pemenang
    };
    // Fungsi reset game 
    const resetPermainan = function() {
        papanPermainanArray = ['', '', '', '', '', '', '', '', ''];
        permainanAktif = true;
        pemainSekarang = 'X';
        statusPermainan.innerText = `Giliran Pemain ${pemainSekarang}`;

        sel.forEach(sel => {
            sel.innerText = '';
        });
    };

    tombolReset.addEventListener('click', resetPermainan);

    
    tombolGantiModeGelap.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
        modeGelap = !modeGelap;
        if (modeGelap) {
            tombolGantiModeGelap.textContent = 'Toggle mode terang';
        } else {
            tombolGantiModeGelap.textContent = 'Toggle mode gelap';
        }
    });
});
