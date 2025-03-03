<?php

namespace YandexOld\Tests\Metrica\Models\Management;

use YandexOld\Metrica\Management\Models;
use YandexOld\Tests\TestCase;
use YandexOld\Tests\Metrica\Fixtures\Operations;

class OperationResponseTest extends TestCase
{
    public function testAddOperationResponse()
    {
        $fixtures  = Operations::$operationFixtures;
        $response  = new Models\AddOperationResponse();
        $operation = new Models\Operation($fixtures['operation']);
        $response->setOperation($operation);
        $this->assertTrue($response->getOperation() instanceof Models\Operation);
    }

    public function testGetOperationResponse()
    {
        $fixtures  = Operations::$operationFixtures;
        $response  = new Models\GetOperationResponse();
        $operation = new Models\Operation($fixtures['operation']);
        $response->setOperation($operation);
        $this->assertTrue($response->getOperation() instanceof Models\Operation);
    }

    public function testGetOperationsResponse()
    {
        $fixtures   = Operations::$operationsFixtures;
        $response   = new Models\GetOperationsResponse();
        $operations = new Models\Operations($fixtures['operations']);
        $response->setOperations($operations);
        $this->assertTrue($response->getOperations() instanceof Models\Operations);
    }

    public function testUpdateOperationResponse()
    {
        $fixtures  = Operations::$operationFixtures;
        $response  = new Models\UpdateOperationResponse();
        $operation = new Models\Operation($fixtures['operation']);
        $response->setOperation($operation);
        $this->assertTrue($response->getOperation() instanceof Models\Operation);
    }
}
