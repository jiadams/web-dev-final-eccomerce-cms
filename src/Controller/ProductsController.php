<?php 
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class ProductsController extends AppController
{

    public function initializer()
    {
        parent::initializer();

    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view']);
    }

    public $paginate = [
        'order' => ['Products.id' => 'ASC']
    ];

    public function index() {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
    }

    public function view($id = null)
    {
        $product = $this->Products->get($id);
        $this->set(compact('product'));
    }

    public function add()
    {
        $product = $this->Products->newEntity();
        if($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('Product Added Successfully'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('Unable to add product'));
        }
        $this->set('product', $product);
    }

    public function edit($id = null)
    {
        $product = $this->Products->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('Product Edited Successfully'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('Unable to eidt product'));
        }
        $this->set('product', $product);
    }

}
?>