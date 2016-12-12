<?php 

namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Session;

Class CartsController extends AppController 
{

    public function initializer()
    {
        parent::initializer();
    }

    public function add() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            if($this->Cart->addProduct($this->request->data)) {
                $this->Flash->success(__('Product Added Successfully'));
            } else {
                $this->Flash->error(__('Unable to Add Product to Shopping Cart!'));
            }
        }
        $this->redirect($this->referer());
    }

    public function remove($productId)
    {
        $this->autoRender = false;
        if($this->Cart->removeProduct($productId)) {
                $this->Flash->success(__('Product Removed from Cart.'));
            } else {
                $this->Flash->error(__('Unable to Remove Product to Cart.'));
        }
        $this->redirect($this->referer());
    }

    public function update()
    {
        $this->autoRender = false;
        if ($this->request->is('post')) { 
            if($this->Cart->updateQuantity($this->request->data)) {
                    $this->Flash->success(__('Product Quantities Successfully Updated.'));
                } else {
                    $this->Flash->error(__('Unable to Update Product Quantities.'));
            }
        }
        $this->redirect($this->referer());
    }

    public function view()
    {
        $this->loadModel('Products');
        $carts = $this->Cart->readCart();

        $products = array();
        if ($carts != null) {
            foreach ($carts as $productId => $count) {
                $product = $this->Products->get($productId);
                $product['count'] = $count;
                $products[] = $product;
            }
        }
        $this->set(compact('products'));
    }

}

?>