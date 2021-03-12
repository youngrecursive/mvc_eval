<section id="listclient">

<table style="width:100%">
  <tr>
    <th>Pseudo</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Phone</th>
    <th>ville</th>
    <th>Pays</th>
  </tr>

  <?php
  //on génere un tableau pour afficher la liste des clients on aurait pu mettre la redirection mais on manque de temps
  //SELECT customerNumber, paymentDate, amount FROM payments WHERE customerNumber = 'id dans lurl' pour avoir la liste des paiments par user
  //SELECT customerNumber, checkNumber, paymentDate, amount FROM payments WHERE customerNomber = 'id dans lurl' le détail des facture
  foreach ($customers as $customer) {
    echo '<tr>';
    echo '<td>' . $customer->customerName . '</td>';
    echo '<td>' . $customer->contactLastName . '</td>';
    echo '<td>' . $customer->contactFirstName . '</td>';
    echo '<td>' . $customer->phone . '</td>';
    echo '<td>' . $customer->city . '</td>';
    echo '<td>' . $customer->state . '</td>';
    echo '</tr>';

  }
  ?>
</table>


</section>