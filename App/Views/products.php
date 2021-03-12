<section id="listproducts">

  <table style="width:100%">
    <tr>
      <th>Code</th>
      <th>Nom</th>
      <th>Ligne</th>
      <th>Echelle</th>
      <th>Vendor</th>
      <th>Description</th>
      <th>Quantité en stock</th>
      <th>Prix</th>
    </tr>

    <?php


    foreach ($products as $product) {
      echo '<tr>';
      echo '<td>' . $product->productCode . '</td>';
      echo '<td>' . $product->productName . '</td>';
      echo '<td>' . $product->productLine . '</td>';
      echo '<td>' . $product->productScale . '</td>';
      echo '<td>' . $product->productVendor . '</td>';
      echo '<td>' . $product->productDescription . '</td>';
      echo '<td>' . $product->quantityInStock . '</td>';
      echo '<td>' . $product->buyPrice . '</td>';


      echo '</tr>';
    }
    ?>
  </table>


</section>