<div id="contenu">
<h1>Liste des réservations</h1>
    <table border="1">
        <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Numero de réservation</th>
        <th>Nombre de Voyageurs</th>
        <th>PDF</th>
        <th>Supprimer</th>
        </tr>
<?php
    if($lesReservations!=NULL){
        for($i=0;$i<=count($lesReservations)-1;$i++){ 
           
            echo '<tr>';
                echo '<td>'.$lesReservations[$i]['nom'].'</td>';
                echo '<td>'.$lesReservations[$i]['prenom'].'</td>';
                echo '<td>'.$lesReservations[$i]['numero'].'</td>';
                echo '<td>'.$lesReservations[$i]['nbplaces'].'</td>';
                echo '<td><a href="index.php?action=pdfReservation&numReservation=0" ><img src="image/pdf.png"style="width: ;width: 50px;"></a></td>';
                echo '<td><a href="index.php?action=suppReservation"><img src="image/delete.png" style="width: ;width: 50px;"></a></td>';
            echo '<tr>';
         }
    }
  ?>
    </table>
</div>