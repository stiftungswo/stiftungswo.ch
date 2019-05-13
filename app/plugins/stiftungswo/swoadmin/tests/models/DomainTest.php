<?php
namespace plugins\stiftungswo\swoadmin\tests\models;

use PluginTestCase;
use Stiftungswo\Swoadmin\Models\Domain;

class DomainTest extends PluginTestCase
{
    public function testCreateValidDomain()
    {
        $domain = new Domain();
        $domain->title = 'Hi!';
        $domain->save();
        $this->assertEquals(Domain::first(), $domain);
    }

    public function testCreateInValidDomain()
    {
        $domain = new Domain();
        $domain->title = 'Hi!';
        $domain->save();
        $this->assertEquals(Domain::first(), $domain);
    }
}