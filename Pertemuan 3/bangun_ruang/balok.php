<?php
    class balok {
        private $panjang;
        private $lebar;
        private $tinggi;

        public function getPanjang() {
            return $this->panjang;
        }

        public function getLebar() {
            return $this->lebar;
        }

        public function getTinggi() {
            return $this->tinggi;
        }

        public function setPanjang($value) {
            $this->panjang=$value;
        }

        public function setLebar($value) {
            $this->lebar=$value;
        }

        public function setTinggi($value) {
            $this->tinggi=$value;
        }

        // <--------Rumus-------->
        public function getLuas() {
            $luas = 2*(($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
            return $luas ;
        }

        public function getVolume() {
            $volume = $this->panjang * $this->lebar * $this->tinggi;
            return $volume;
        }
    }

?>