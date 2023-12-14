<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'username' => 'Lorem ipsum dolor ',
                'password' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-12-14 23:09:00',
                'modified' => '2023-12-14 23:09:00',
            ],
        ];
        parent::init();
    }
}
