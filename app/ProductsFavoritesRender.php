<?php
/**
 * Created by PhpStorm.
 * User: Гагарин
 * Date: 21.09.2020
 * Time: 14:16
 */

namespace App;


class ProductsFavoritesRender extends ProductsRender
{
    public function __construct($request, $categoryName)
    {
        parent::__construct($request, $categoryName);
        $this->filterByProductIdsInFavorites();

        $this->pageName = 'Избранное';
        $this->pageRootRoute = route('favorites');
        $this->sidebarRouteName = 'favorites_category';
    }

    protected function filterByProductIdsInFavorites()
    {
        $this->productsQuery->whereIn('id', $this->favoritesListContent);
    }
}
