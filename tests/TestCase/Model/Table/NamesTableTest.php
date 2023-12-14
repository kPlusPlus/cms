<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NamesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NamesTable Test Case
 */
class NamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NamesTable
     */
    protected $Names;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Names',
        'app.Details',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Names') ? [] : ['className' => NamesTable::class];
        $this->Names = $this->getTableLocator()->get('Names', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Names);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NamesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
