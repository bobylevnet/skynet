<?php
namespace app\components;



use yii\bootstrap\Nav;
use app\models\Menu;
use yii\bootstrap\Html;


class Navdata  extends Nav {
	
	
 public $menuTop;
	  public $menuBottom;
	
	public function  init() {
		
		
		parent::init();
		
		
	}
	

	public function renderItems()
	{
		$menu  = new Menu();
		$items = [];
		$this->items= $menu->getList(0);
		foreach ($this->items as $i => $item) {
			if (isset($item['visible']) && !$item['visible']) {
				continue;
			}
			$items[] = $this->renderItem($item);
		}
	
		return Html::tag('ul', implode("\n", $items), $this->options);
	}
	
	
	
}