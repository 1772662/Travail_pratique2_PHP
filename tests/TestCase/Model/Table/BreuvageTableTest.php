<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BreuvageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BreuvageTable Test Case
 */
class BreuvageTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BreuvageTable
     */
    public $Breuvage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Breuvage'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Breuvage') ? [] : ['className' => BreuvageTable::class];
        $this->Breuvage = TableRegistry::getTableLocator()->get('Breuvage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Breuvage);

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
}
