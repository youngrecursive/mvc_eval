<section id="listorders">

    <table style="width:100%">
        <tr>
            <th>Numéro de commande</th>
            <th>Date de commande</th>
            <th>Date souhaitée</th>
            <th>Date envoi</th>
            <th>Statut</th>
            <th>Commentaires</th>
            <th>Numéro de client</th>
        </tr>

        <?php
        foreach ($orders as $order) {
            echo '<tr>';
            echo '<td>' . $order->orderNumber . '</td>';
            echo '<td>' . $order->orderDate . '</td>';
            echo '<td>' . $order->requiredDate . '</td>';
            echo '<td>' . $order->shippedDate . '</td>';
            echo '<td>' . $order->status . '</td>';
            echo '<td>' . $order->comments . '</td>';
            echo '<td>' . $order->customerNumber . '</td>';
            echo '</tr>';
        }
        ?>
    </table>


</section>