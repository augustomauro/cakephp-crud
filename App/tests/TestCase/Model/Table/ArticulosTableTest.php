<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticulosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticulosTable Test Case
 */
class ArticulosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticulosTable
     */
    protected $Articulos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Articulos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Articulos') ? [] : ['className' => ArticulosTable::class];
        $this->Articulos = $this->getTableLocator()->get('Articulos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Articulos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ArticulosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
