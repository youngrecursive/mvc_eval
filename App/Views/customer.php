<?php

foreach ($customers as $customer) { ?>
  <a href="index.php?page=detailcustomer&id=<?= $customer->customerNumber ?>"><?= $customer->customerName; ?></a>

<?php } ?>
