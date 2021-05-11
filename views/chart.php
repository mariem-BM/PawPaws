<?php
// Merci d'avoir regardé la vidéo et d'avoir téléchargé le contenu.

/****************************************************************
* GraphPHP 1.0 développé par UBrain Fr                          *
*****************************************************************
* Merci de ne pas modifier ce message et de garder en cas de    *
* modifications "Basé sur WebController par UBrain Fr"          *
*****************************************************************
* Version 1.0 du 23 aout 2018                                   *
****************************************************************/

$graph_value = 0;
if (file_exists("pdo.php")) {
include('pdo.php');
        $sql = "SELECT * FROM graph_ubrain_data";
        foreach ($bdd->query($sql) as $graph) {
            $graph_value++;
        }
if($graph_value == NULL){
echo '[GRAPH_PLUGIN_UBRAIN] FATAL ERROR (PDO_VAR) : Variables corrompues, merci de consulter le manuel ou de réinstaller le plugin.<br>';
exit;
}
} else {
echo '[GRAPH_PLUGIN_UBRAIN] FATAL ERROR (FILE_NO_EXIST) : Le fichier PDO n\'a pas été trouvé sur le serveur.<br>';
echo '[GRAPH_PLUGIN_UBRAIN] ERROR (PDO_ERR) : Impossible de se connecter à la base de données : vérifiez l\'état du fichier<br>';
exit;
}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Année', 'Visiteurs'],
<?php
        $sql = "SELECT * FROM graph_ubrain_data";
        foreach ($bdd->query($sql) as $graph) {
            echo '["'.$graph['y'].'",  '.$graph['x'].'],';
        }
?>
        ]);

        var options = {

// Titre du graphique
          title: 'Nombre de reservation',
          hAxis: {title: 'Années',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>