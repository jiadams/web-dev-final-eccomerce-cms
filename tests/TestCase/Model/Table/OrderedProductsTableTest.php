<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderedProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderedProductsTable Test Case
 */
class OrderedProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderedProductsTable
     */
    public $OrderedProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ordered_products',
        'app.orders',
        'app.users',
        'app.profiles',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrderedProducts') ? [] : ['className' => 'App\Model\Table\OrderedProductsTable'];
        $this->OrderedProducts = TableRegistry::get('OrderedProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderedProducts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
