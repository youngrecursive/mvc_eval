<section id="listproducts">
  <form class="" action="" method="post">
    <select class="" name="select">
      <option value="Classic Cars">Classic Cars</option>
      <option value="Motorcycles">Classic Cars</option>
      <option value="Planes">Planes</option>
      <option value="Ships">Ships</option>
      <option value="Trains">Trains</option>
      <option value="Trucks and Buses">Trucks and Buses</option>
      <option value="Vintage Cars">Vintage Cars</option>
    </select>
    <input type="submit" name="submitted" value="Envoyer">
  </form>

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
