<?php

class contoh{
    public function __destruct(){
        echo "Ini adalah method destruct";
    }
    public function aaaa(){
        echo "Hallo dunia";
    }
    public function bbbb(){
        echo "Halo dunia 2";
    }
    public function __construct(){
        echo "Ini adalah method destruct";
    }
}
$cetak = new contoh();

echo "<br>";
echo $cetak ->aaaa();
echo "<br>";
echo $cetak->bbbb();

?>