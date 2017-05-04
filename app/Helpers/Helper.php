<?php

namespace App\Helpers;

class Helper {

	public static function getMenuAdminArray(){
		//ul-type sidebar-menu
		//ul-type treeview-menu

		$menuHeader = array(
			'class'		=>		'header',
			'id'		=>		'',
			'style'		=>		'text-transform: uppercase',
			'href'		=>		'#',
			'attr'		=>		array(),
			'before_title'	=> '',
			'title'		=>		'Main Navigation',
			'after_title'	=>	'',
			'type_children'	=>	'',
			'children'		=>	array(),
		);
		$menuContent = array(
			'class'		=>		'header',
			'id'		=>		'',
			'style'		=>		'text-transform: uppercase',
			'href'		=>		'#',
			'attr'		=>		array(),
			'before_title'	=> '<i class="fa fa-book"></i>',
			'title'		=>		'Main Navigation',
			'after_title'	=>	'<i class="fa fa-angle-left pull-right"></i>',
			'type_children'	=>	'treeview-menu',
			'children'		=> array(
					'class'		=>		'',
					'id'		=>		'',
					'style'		=>		'',
					'href'		=>		'#',
					'attr'		=>		array(),
					'before_title'	=> '<i class="fa fa-play"></i>',
					'title'		=>		'Slogan',
					'after_title'	=>	'',
					'type_children'	=>	'',
					'children'		=>	array(),
				)
		);
		$menu = array(
			'sidebar-menu'	=> array(
				$menuHeader,
				$menuContent,
			),
		);

		return $menu;
	}

	public static function getMenuToHTML($menus,$typeMenu){
		$html = '';
		$html.= '<ul class="'.$typeMenu.'">';

		foreach ($menus as $menu) {	
			$html.=		'<li';

			if ($menu['class']) $html.= ' class="'. $menu['class'] .'"';
			if ($menu['id'])	$html.= ' id="'. $menu['id'] .'"';
			if ($menu['style']) $html.= ' style="'. $menu['style'] .'"';
			if ($menu['attr']){
				foreach ($menu['attr'] as $attrKey => $attrValue) {
					$html.= ' '. $attrKey . '="'. $attrValue .'"';
				}
			}
				$html.= '"><a href="'. $menu['href'] .'">';
					if ($menu['before_title']) $html.= $menu['before_title'];
					$html.= '<span>' . $menu['title'] . '</span>';
					if ($menu['after_title']) $html.= $menu['after_title'];
				$html.= '</a>'; //End <a>
				foreach ($menu['children'] as $children) {
					$html .= self::getMenuToHTML($children, $menu['type_children']);
				}
			$html.=		'</li>';
		}
		$html.=	'</ul>';
	}

	protected static function getMenuHeader(){
		// li-type treeview
		// li-type header
		$menu = array(
			'class'		=>		'header',
			'id'		=>		'',
			'style'		=>		'text-transform: uppercase',
			'href'		=>		'#',
			'attr'		=>		array(),
			'before_title'	=> '',
			'title'		=>		'Main Navigation',
			'after_title'	=>	'',
			'type_children'	=>	'',
		);
		return $menu;
	}

	protected static function getMenuContent(){
		$menu = array(
			'class'		=>		'header',
			'id'		=>		'',
			'style'		=>		'text-transform: uppercase',
			'href'		=>		'#',
			'attr'		=>		array(),
			'before_title'	=> '<i class="fa fa-book"></i>',
			'title'		=>		'Main Navigation',
			'after_title'	=>	'<i class="fa fa-angle-left pull-right"></i>',
			'type_children'	=>	'treeview-menu',
			'children'		=> array(
					'class'		=>		'',
					'id'		=>		'',
					'style'		=>		'',
					'href'		=>		'#',
					'attr'		=>		array(),
					'before_title'	=> '<i class="fa fa-play"></i>',
					'title'		=>		'Slogan',
					'after_title'	=>	'',
					'type_children'	=>	'',
				)
		);
		return $menu;
	}
}