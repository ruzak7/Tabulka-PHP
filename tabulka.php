<?php
/**
 * Třída tabulka nám umožnuje jednouducho tvorbu tabulky pomocí PHP třídy.
 * 
 *
 * @author Tomáš Řůžička <ruzak7@gmail.com>
 * @version 1.0
 * @package Školní práce
 * 
 */
class tabulka {
    /**
     *
     * @var string V této proměné se uchovává nadpis cele tabulky.
     */
    private $nazev_tabulky;
    /**
     *
     * @var array Zde jsou ukládána data jednotlivých buněk v tabulce pomocí dvojrozměrného pole.
     */
    private $data = array();
    /**
     *
     * @var array Zde jsou uchovány názvy jednotlivých sloupců
     */
    private $nazvy_sloupcu = array();
    /**
     *
     * @var array Tady se ukládají čísla řádků z tabulek a potom se z nich vybírá největší.
     */
    private $cisla = array();
    /**
     *
     * @var string Zde se typ tabulky ( s ráměčkem.... atd.).
     */
    private $typ;
    
    /**
     * 
     * @param string $nazev Nastavuje název celé tabulky.
     * @todo Nastaví do proměnné třídy název tabulky.
     */
    function __construct($nazev) {
        $this->nazev_tabulky = $nazev;
    }
    
    /**
     * 
     * @param string $nazev Zde zadejte obsah buňky.
     * @param int $cislo Nastavuje to do jakého sloupce se to má vložit.
     * @todo Nastaví název sloupce.
     */
    function nazev_sloupce($nazev, $cislo) {
        $this->nazvy_sloupcu[$cislo] = $nazev;
        $this->cisla[] = $cislo;
    }

    /**
     * 
     * @param string $data Zde zadejte Obsah buňky.
     * @param int $cislo Číslo sloupce do kterého se to má vložit.
     * @todo Nastaví data jednotlivých buněk tabulky.
     */
    function vloz_data($data, $cislo) {
        $this->data[$cislo][] = $data;
        $this->cisla[] = $cislo;
    }

    /**
     * 
     * @param string $typ Zadejte typ tabulky. 
     * @todo Nastaví vzhled tabulky.
     */
    function typ_ohraniceni($typ) {
        $this->typ = $nazev;
    }

    /**
     * 
     * @return int Vrátí délků nejdelšího sloupce.
     * @todo Vybere nejvišší hodnotu z pole.
     */
    private function maxin() {
        $array[] = 0;
        for ($i = 1; $i < count($this->data); $i++) {
            if (array_key_exists($i, $this->data)) {
                $array[] = count($this->data[$i]);
            }
        }
        $max = max($array);
        return $max;
    }

    /**
     * 
     * @return string Vrátí vygenerovanou tabulku.
     * @todo Vygeneruje celou tabulku včetně jeního názvu.
     */
    function __toString() {
        $vrat = "<table>";
        $vrat .= "<tr>";
        for ($i = 0; $i < max($this->cisla); $i++) {
            $vrat .= "<th>";
            if (isset($this->nazvy_sloupcu[$i])) {
                $vrat .= $this->nazvy_sloupcu[$i];
            }
            $vrat .= "</th>";
        }
        $vrat .= "</tr>";
        for ($e = 0; $e < $this->maxin(); $e++) {
            $vrat .= "<tr>";
            for ($r = 0; $r <= max($this->cisla); $r++) {
                if (isset($this->data[$r][$e])) {
                    $vrat .= "<td>";
                    $vrat .= $this->data[$r][$e];
                    $vrat .= "</td>";
                }
            }
            $vrat .= "</tr>";
        }
        $vrat .= "</table>";
        return $vrat;
    }

}
