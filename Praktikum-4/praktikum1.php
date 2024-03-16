<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h2>Praktikum 1</h2>
<?php
$fruits = ["Mango", "Banana", "Melon", "Orange"];

echo $fruits[1];
echo "<br>";
echo "Jumlah buah = " . count($fruits);

echo "<ol>";
foreach ($fruits as $fruit) {
    echo "<li>Buah " . $fruit . "</li>";
}
echo "</ol>";

$fruits[] = "Avocado";
$fruits[2] = "Strawberry";

echo "<ol>";
foreach ($fruits as $i => $v) {
    echo "<li>Buah index ke-" . $i . " = " . $v . "</li>";
}
echo "</ol>"
?>

<?php
require_once 'footer.html';

?>