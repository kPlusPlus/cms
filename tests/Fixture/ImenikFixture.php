<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImenikFixture
 */
class ImenikFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'imenik';
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
                'ime' => 'Lorem ipsum dolor sit amet',
                'prezime' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
