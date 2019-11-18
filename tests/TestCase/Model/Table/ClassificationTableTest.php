<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassificationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassificationTable Test Case
 */
class ClassificationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassificationTable
     */
    public $Classification;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Classification'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Classification') ? [] : ['className' => ClassificationTable::class];
        $this->Classification = TableRegistry::getTableLocator()->get('Classification', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Classification);

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
