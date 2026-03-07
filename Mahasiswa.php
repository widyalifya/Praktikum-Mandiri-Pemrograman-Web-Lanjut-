<?php
class Mahasiswa
{
    // List of properties 
    public $nim; 
    public $nama; 
    public $programStudi;

    function setData($nim, $nama, $programStudi)
    {
        $this->nim = $nim; 
        $this->nama = $nama; 
        $this->programStudi = $programStudi; 
    }

    
    function getData()
    {
        return [
            'nim' => $this->nim, 
            'nama' => $this->nama, 
            'programStudi' => $this->programStudi
        ];
    }

   
    function tampilkanData()
    {
        echo "<b>NIM: " . $this->nim . "</b><br>";
        echo "<b>Nama: " . $this->nama . "</b><br>";
        echo "<b>Program Studi: " . $this->programStudi . "</b><br>";
    }
}
?>