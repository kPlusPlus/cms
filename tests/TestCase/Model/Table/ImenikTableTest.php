<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImenikTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImenikTable Test Case
 */
class ImenikTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImenikTable
     */
    protected $Imenik;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Imenik',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Imenik') ? [] : ['className' => ImenikTable::class];
        $this->Imenik = $this->getTableLocator()->get('Imenik', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Imenik);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ImenikTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
