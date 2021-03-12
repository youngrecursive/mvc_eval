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