<?php
/**
 * Created by PhpStorm.
 * User: Гагарин
 * Date: 21.09.2020
 * Time: 14:16
 */

namespace App;


class ProductsCatalogRender extends ProductsRender
{
    public function __construct($request, $categoryName)
    {
        parent::__construct($request, $categoryName);

        $this->pageName = 'Каталог';
        $this->pageRootRoute = route('catalog');
        $this->sidebarRouteName = 'category';
    }
}
