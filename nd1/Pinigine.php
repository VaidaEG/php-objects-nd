<p>Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir
metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į
piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai,
jeigu didesnis nei 2 prie popieriniaiPinigai. Parašykite metodą
skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir
metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą.
</p>
<?php
class Pinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    static $popieriniuKiekis;
    static $metaliniuKiekis;

    public function ideti($kiekis) : void
    {
        if ($kiekis <= 2) {
            $this -> metaliniaiPinigai += $kiekis;
            self::$popieriniuKiekis++;
        } else {
            $this -> popieriniaiPinigai += $kiekis;
            self::$metaliniuKiekis++;
        }
    }
    public function skaiciuoti() {
        return print_r($this -> metaliniaiPinigai + $this -> popieriniaiPinigai);
    }
    public function getPopieriniai() {
        return print_r(self::$popieriniuKiekis);
    }
    public function getGeleziniai() {
        return print_r(self::$metaliniuKiekis);
    }
}
?>