
<a href="index.php?page=customer">Nombre de clients : <?= $countCustomers->count; ?></a>
<br>
<a href="index.php?page=products">Nombre de Produits : <?= $countProducts->count; ?></a>
<br>
<a href="index.php?page=orders">Nombre de commandes : <?= $countOrders->count; ?></a>
<br>
<a href="#">Nombre de commandes envoyées : <?= $countOrdersSh->count; ?></a>
<br>
<a href="#">Nombre de commandes annulées : <?= $countOrdersCan->count; ?></a>
