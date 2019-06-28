<?php 
$states = array("WA","KY","FL","TX");
$states2 = array("CT","AK","NY","MT");

echo "<h1>States Array with Foreach</h1>";
echo "<select>";
foreach ($states as $key) {
    echo "<option value=$key>$key</option>";
}
echo "</select>";

echo "<h1>States Array with for loop</h1>";
echo "<select>";
for ($i = 0; $i < count($states); $i++) {
    echo "<option value=".$states[$i].">".$states[$i]."</option>";
}
echo "</select>";

echo "<h1>Merging two arrys into one dropdown</h1>";
echo "<select>";
foreach ($states as $key) {
    echo "<option value=$key>$key</option>";
}
foreach ($states2 as $key) {
    echo "<option value=$key>$key</option>";
}
echo "</select>";

?>