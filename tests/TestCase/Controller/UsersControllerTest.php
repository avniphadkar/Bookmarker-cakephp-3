<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

class UsersControllerTest extends IntegrationTestCase
{

    public $fixtures = [
        'app.users',
        'app.apps',
        'app.bookmarks',
        'app.profiles'
    ];

    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
