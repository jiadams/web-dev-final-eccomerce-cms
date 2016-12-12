<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Cart component
 */
class CartComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function addProduct($productId)
    {
        $cart = $this->readCart();
        $productId =  $productId['id'];
        if($cart != null) {
            if(array_key_exists($productId, $cart)) {
                $cart[$productId] ++;
            } else {
                $cart[$productId] = 1;
            }
        } else {
            $cart[$productId] = 1;
        }
        $this->saveCart($cart);
        return true;
    }

    public function updateQuantity($productUpdate)
    {
        $cart = $this->readCart();
        print_r($productUpdate);
        foreach($productUpdate['product-id'] as $idkey => $id) {
            if ($productUpdate['count'][$idkey] != 0) {
                $cart[$id] = $productUpdate['count'][$idkey];
            } else {
                $this->removeProduct($id);
                $cart = $this->readCart();
            }

        }
        $this->saveCart($cart);
        return true;
    }


    public function removeProduct($productId)
    {
        echo $productId;
        $cart = $this->readCart();
        foreach($cart as $id => $count) {
            if ($id == $productId){
                unset($cart[$id]);
                $this->saveCart($cart);
                return true;
            }
        }
        return false;
    }

    public function getCount()
    {
        $cart = $this->readCart();
        $count = 0;
        if (count($cart)<1) {
            return $count;
        }

        foreach($cart as $product) {
            $count = $count + $product;
        }
        return $count;
    }

    public function saveCart($data)
    {
        return $this->request->session()->write('cart', $data);
    }

    public function readCart()
    {
        return $this->request->session()->read('cart');
    }
}
