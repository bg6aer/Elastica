<?php
require_once dirname(__FILE__) . '/../../../bootstrap.php';

class Elastica_Filter_HasChildTest extends PHPUnit_Framework_TestCase
{
    public function testToArray()
    {
        $q = new Elastica_Query_MatchAll();

        $type = 'test';

        $filter = new Elastica_Filter_HasChild($q, $type);

        $expectedArray = array(
            'has_child' => array(
                'query' => $q->toArray(),
                'type' => $type
            )
        );

        $this->assertEquals($expectedArray, $filter->toArray());
    }
}
