<?php

    class Mobil{
        // attribut: apa yang dia punya
        private $ban;
        private $spion;
        private $kaca;
        private $warna;
        private $mesin;
        
        function __Construct(){
            
        }    

        private $kecepatan;
        // method: apa yang bisa dia lakukan
        function jalan($km,$jam)  //public
        {
            return $this->kecepatan = $km / $jam;
        }

        function setBan($jml)
        {
            $this ->$ban =$jml;
            return $this->$ban;
        }

        function setWarna($warna)
        {
            $this->warna=$warna;
            return $this->warna;
        }

        function setMerk($merk)
        {
            $this->merk = $merk;
            return $this->merk;
        }

        static function ini_static(){
            return " <h3> Hello, I am static </h3>";
        }

        function __Destruct(){

        }
    }
?>