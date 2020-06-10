<?php

namespace App;

use Illuminate\Session\Store;

class Cart
{
    protected $session;
    protected $content;
    public $redirectTo;

    /**
     * Cart constructor.
     * @param Store $session Текущая сессия пользователя
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
        $cartContent = $session->get('cart');
        if ($cartContent) {
            $this->content = json_decode($cartContent, true);
        } else {
            $this->content = [];
        }
        $this->redirectTo = '/';
    }


    /**
     * Добавляет товар в корзину
     * @param $productId int ID товара
     * @param $quantity int Количество
     * @return bool true - если товар добавлен, false - если товара не существует,
     * или пытаемся добавить 0 или отрицательное количество товаров
     */
    public function addProduct(int $productId, int $quantity)
    {
        $product = Product::find($productId);
        if (!$product) {
            return false;
        }
        $this->redirectTo = $product->friendly_url_name;
        if ($quantity <= 0) {
            return false;
        }
        if (isset($this->content[$productId])) {
            $this->content[$productId] += $quantity;
        } else {
            $this->content[$productId] = $quantity;
        }
        $this->session->put('cart', json_encode($this->content));
        return true;
    }

    /**
     * Возвращает содержимое корзины
     *
     * @return array Содержимое корзины в формате id товара => количество
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Удаляет товар из корзины
     *
     * @param int $productId ID товара
     */
    public function removeProduct(int $productId)
    {
        if (isset($this->content[$productId])) {
            unset($this->content[$productId]);
        }
        $this->session->put('cart', json_encode($this->content));
    }
}
