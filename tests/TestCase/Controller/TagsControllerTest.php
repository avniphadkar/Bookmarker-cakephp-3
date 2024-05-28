<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TagsController;
use Cake\TestSuite\IntegrationTestCase;


class TagsControllerTest extends IntegrationTestCase
{

    public $fixtures = [
        'app.tags',
        'app.bookmarks',
        'app.users',
        'app.apps',
        'app.profiles',
        'app.bookmarks_tags'
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
