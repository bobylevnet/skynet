<div class="container"> 
<h3> Описание тарифа </h3>
<?php 
use app\models\Tarifs;

$tr = new Tarifs();

echo $tr->getDetailTarifs($_REQUEST['id']);
?>

</div>