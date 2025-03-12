<?php
class Mahasiswa {
    private $nim;
    private $nama;

    public function setData($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function getData() {
        $mhs = [
            'nim' => $this->nim,
            'nama' => $this->nama
        ];
        return $mhs;    
    }
}
?>
