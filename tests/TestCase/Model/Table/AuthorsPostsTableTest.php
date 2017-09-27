<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthorsPostsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthorsPostsTable Test Case
 */
class AuthorsPostsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthorsPostsTable
     */
    public $AuthorsPosts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.authors_posts',
        'app.posts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AuthorsPosts') ? [] : ['className' => AuthorsPostsTable::class];
        $this->AuthorsPosts = TableRegistry::get('AuthorsPosts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuthorsPosts);

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
