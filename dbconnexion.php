<?php
try {
 $bdd = new PDO('mysql:host=localhost:3307;dbname=dsi22_g1_2019;charset=utf8', 'root', '');
} catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
}
?>
