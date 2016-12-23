<?php

namespace OneMustWork\Paginator;

use JsonSerializable;

/**
 * Interface PaginatorInterface
 * @package OneMustWork\Paginator
 */
interface PaginatorInterface extends JsonSerializable
{
    /**
     * @return array
     */
    public function getItems();

    /**
     * @return int
     */
    public function getCurrentPage();

    /**
     * @return int
     */
    public function getLastPage();

    /**
     * @return int
     */
    public function getTotal();

    /**
     * @return int
     */
    public function getCount();

    /**
     * @return int
     */
    public function getPerPage();
}