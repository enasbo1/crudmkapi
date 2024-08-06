<?php
namespace test;

use Exception;
use shared\Service;

include_once "TestRepository.php";

class TestService extends Service
{
    public function __construct()
    {
        parent::__construct(new TestModelType());
    }

    /**
     * @throws Exception
     */
    public function getAll(): array
    {
        $repo = new TestRepository();

        $test = [];
        $result = $repo->readAll("unable to find any test");

        foreach($result as $row) {
            $test[] = $row;
        }

        return $test;
    }

    /**
     * @throws Exception
     */
    public function findById(int $id): array
    {
        $repo = new TestRepository();
        return $repo->read($id, "test not found");
    }

    /**
     * @throws Exception
     */
    public function save(object $input): void
    {
        $repo = new TestRepository();
        $toquery = $this->modelType->isValidType($input);
        $repo->create($toquery, "unable to create test");
    }

    /**
     * @throws Exception
     */
    public function update(object $input): void
    {
        $repo = new TestRepository();
        $toquery = $this->modelType->isValidType($input);
        $repo->update($toquery, "unable to update test");
    }

    /**
     * @throws Exception
     */
    public function delete(int $id): void
    {
        $repo = new TestRepository();
        $repo->delete($id);
    }
}