<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticulosFixture
 */
class ArticulosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'texto' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-05-22 18:36:04',
                'modified' => '2025-05-22 18:36:04',
            ],
        ];
        parent::init();
    }
}
