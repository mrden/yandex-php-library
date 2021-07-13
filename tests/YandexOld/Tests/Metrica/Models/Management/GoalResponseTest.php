<?php
namespace YandexOld\Tests\Metrica\Models\Management;

use YandexOld\Metrica\Management\Models;
use YandexOld\Tests\TestCase;
use YandexOld\Tests\Metrica\Fixtures\Goals;

class GoalResponseTest extends TestCase
{
    public function testAddGoalResponse()
    {
        $fixtures = Goals::$goalFixtures;
        $response = new Models\AddGoalResponse();
        $goal     = new Models\Goal($fixtures['goal']);
        $response->setGoal($goal);
        $this->assertTrue($response->getGoal() instanceof Models\Goal);
    }

    public function testGetGoalResponse()
    {
        $fixtures = Goals::$goalFixtures;
        $response = new Models\GetGoalResponse();
        $goal     = new Models\Goal($fixtures['goal']);
        $response->setGoal($goal);
        $this->assertTrue($response->getGoal() instanceof Models\Goal);
    }

    public function testGetGoalsResponse()
    {
        $fixtures = Goals::$goalsFixtures;
        $response = new Models\GetGoalsResponse();
        $goals    = new Models\Goals($fixtures['goals']);
        $response->setGoals($goals);
        $this->assertTrue($response->getGoals() instanceof Models\Goals);
    }

    public function testUpdateGoalResponse()
    {
        $fixtures = Goals::$goalFixtures;
        $response = new Models\UpdateGoalResponse();
        $goal     = new Models\Goal($fixtures['goal']);
        $response->setGoal($goal);
        $this->assertTrue($response->getGoal() instanceof Models\Goal);
    }
}