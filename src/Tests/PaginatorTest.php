<?php

namespace OneMustWork\Paginator\Tests;

use OneMustWork\Paginator\Paginator;

class PaginatorTest extends PHPUnit_Framework_TestCase
{
    protected $items = [
        ['item 1'], ['item 2'], ['item 3'], ['item 4'], ['item 5'],
        ['item 6'], ['item 7'], ['item 8'], ['item 9'], ['item 10']
    ];

    public function test_paginator()
    {
        $paginator = new Paginator($this->items, count($this->items), 1);

        $this->assertEquals(15, $paginator->getPerPage());
        $this->assertEquals(count($this->items), $paginator->getTotal());
        $this->assertEquals(1, $paginator->getLastPage());
        $this->assertEquals(1, $paginator->getCurrentPage());
        $this->assertEquals(10, $paginator->getCount());
        $this->assertEquals($this->items, $paginator->getItems());
    }
}
