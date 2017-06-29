<?php
use yii\bootstrap\Html;
use yii\helpers\Url;
?>
<div class="container pdng-top" > 

<h2> Выделенный IP адрес </h2>

<p>
С помощью статического IP-адреса Вы можете создать через интернет соединение с внутренней сетью своего предприятия. 
Понятие «статический IP-адрес» означает, что соединение для передачи данных создается всегда с одного и того же IP-адреса.
</p>
<p>
Статический IP-адрес связан с принимающим оборудованием.
 Услуга необходима в том случае, если Вы желаете создавать соединение для передачи данных из общественного интернета с конкретным IP-адресом,
  например, обращаясь к камерам видеонаблюдения, доступ к сервисам вашей компании (сайт, ERP, VPN).
</p>
<?=    Html::a('Написать нам', Url::to(['/site/request']))?>

</div>
