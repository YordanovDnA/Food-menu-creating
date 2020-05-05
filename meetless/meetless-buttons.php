<?php
require_once 'config.php';
$sql = "SELECT * FROM meetless";
$result = $conn->query($sql);

if ($result->num_rows > 0 ){
        
    while($row = $result->fetch_assoc()){
        $IDno = $row["ID"];
        $Name = $row["Name"];
        $Gram = $row["Gram"];
        $Price = $row["Price"];
        echo '
        <li class="list-inline-item">
        <form class="" action="meetless/inc-meetless-ntb.php" method="post">
        <input type="hidden" class="" type="text" name="product-id" id="product-id" value="40'.$IDno.'">
        <input type="hidden" class="" type="text" name="product-name" id="product-name" value="'.$Name.'">
        <input type="hidden" class="" type="text" name="product-grams" id="product-grams" value="'.$Gram.'">
        <input type="hidden" class="" type="text" name="product-price" id="product-price" value="'.$Price.'">
        
        <button class="btn btn-outline-primary hide-buttons" type="submi" value="">'.$Name.'</button>
        </form>
        </li>
        
        ';
    }
}
// btn btn-outline-primary hide-buttons
?>