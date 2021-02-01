<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

    <h1>Information sur les salles</h1>
    <p>Listes de salles :</p>

<table>
    <caption>Salles disponibles à la réservation</caption>
    <thead>
    <tr><th>#</th><th>salle</th><th>places</th><th>statut</th></tr>
    </thead>
    <tbody>
<?php
$html='';
foreach ($salles as $salle) {
    $html.='<tr>';
    $html.='<td>'.$salle['id'].'</td>';
    $html.='<td>'.$salle['libelle'].'</td>';
    $html.='<td>'.$salle['nbPlaces'].'</td>';
    $html.='<td>'.$salle['statut'].'</td>';
    $html.='</tr>';
}
echo $html
?>
    </tbody>
    <tfoot>
    <tr><th>#</th><th>salle</th><th>places</th><th>statut</th></tr>
</table>
        
<?php include('template/footer.php'); ?>
