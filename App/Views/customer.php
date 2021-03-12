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

  foreach ($customers as $customer) { ?>
    <tr>
      <td><a href="index.php?page=detailcustomer&id=<?= $customer->customerNumber ?>"><?= $customer->customerName ?> </a> </td>
      <td> <?= $customer->contactLastName ?> </td>
      <td> <?= $customer->contactFirstName ?></td>
      <td><?= $customer->phone ?></td>
      <td><?= $customer->city ?></td>
      <td><?= $customer->state ?></td>
    </tr>



  <?php }
  ?>
</table>


</section>
