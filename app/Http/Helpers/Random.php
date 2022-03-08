<?php
if(! function_exists('getkode')){
    function getkode()
    {
        $panjang = 55;
        $karakter = 'kodingin.com4543534-039849kldsam][].';
        $panjangKata = strlen($karakter) ;
        $kode =  '';
        for($i = 0; $i < $panjang; $i++){
            $kode .= $karakter[rand(0, $panjangKata - 1)] ;
        }
        return $kode;
    }
}