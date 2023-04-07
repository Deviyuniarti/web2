<?php
    class Mamalia
    {   
        public $jumlahkaki;
        public $berekor;

        function menyusui()
        {
            return "Hewan Menyusui";

        }

        function melahirkan()
        {
            return "Hewan Melahirkan";

        }
    }

    $objekMamalia = new Mamalia();
    echo $objekMamalia->melahirkan();
    echo "<br>";
    echo $objekMamalia->menyusui();
    echo "<br>";
    echo $objekMamalia->jumlahkaki = 2;
?>