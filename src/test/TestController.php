<?php
namespace test;
use token\Privilege;
use shared\CrudController;

require_once 'TestService.php';



class TestController extends CrudController{
    function get(array $id): void
    {
        $request = new TestService();
        if ($id == []) {
            $test = $request->getAll();
        } else {
            $test = $request->findById($id[0]);
        }
        echo json_encode($test);
    }

    function post(array $id, object $input): void
    {
        $request = new TestService();

        Privilege::admin();
        $request->save($input);
        http_response_code(201);
        echo('{"message" : "test créé avec succès"}');
    }

    function patch(array $id, object $input): void
    {
        $request = new TestService();

        Privilege::admin();
        $request->update($input);
    }

    function delete(array $id): void
    {
        $request = new TestService();
        Privilege::admin();
        $request->delete($id[0]);
    }
}