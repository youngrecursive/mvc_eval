<?php
if(!empty($payments)){
  foreach ($payments as $payment) { ?>
    <table>
      <tr>
        <td>Nom</td>
        <td>Numéro transaction</td>
        <td>Date</td>
        <td>Montant</td>
      </tr>
      <tr>
        <td><?= $payment->customerName ?></td>
        <td><?= $payment->checkNumber ?></td>
        <td><?= $payment->paymentDate ?></td>
        <td><?= $payment->amount ?></td>
      </tr>
    </table>
  <?php }
}

else {
  echo 'aucune transaction effectuée';
}
