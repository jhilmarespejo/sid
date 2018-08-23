<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AffairsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AffairsTable Test Case
 */
class AffairsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AffairsTable
     */
    public $Affairs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.affairs',
        'app.nna'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Affairs') ? [] : ['className' => AffairsTable::class];
        $this->Affairs = TableRegistry::getTableLocator()->get('Affairs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Affairs);

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
