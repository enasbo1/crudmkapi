<?php
namespace test;
use shared\Repository;


class TestRepository extends Repository {
    public function __construct()
    {
        parent::__construct('"test"', new TestModelType());
    }
}
