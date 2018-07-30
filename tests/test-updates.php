<?php

class UpdatesTest extends \WP_UnitTestCase {

	/**
	 * @var \Pressbooks\Shibboleth\Updates
	 */
	protected $updates;

	/**
	 *
	 */
	public function setUp() {
		parent::setUp();
		$this->updates = new \Pressbooks\Shibboleth\Updates();
	}

	public function test_gitHubUpdater() {
		$this->updates->gitHubUpdater();
		$this->assertTrue( has_filter( 'puc_is_slug_in_use-' ) ); // TODO: https://github.com/YahnisElsts/plugin-update-checker/issues/180 (fix not in a release yet)
	}

}