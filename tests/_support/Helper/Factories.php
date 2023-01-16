<?php

declare(strict_types=1);

namespace App\Tests\Helper;

use Codeception\Util\Fixtures;
use Faker\Provider\Base as FakerBase;
use League\FactoryMuffin\Faker\Facade as Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/*
 * Documentation:
 * - https://codeception.com/docs/modules/DataFactory
 * - https://github.com/thephpleague/factory-muffin
 * - https://github.com/fzaninotto/Faker
 * here you can define custom actions
 * all public methods declared in helper class will be available in $I
 */
class Factories extends \Codeception\Module
{
    public function _beforeSuite(array $settings = [])
    {
    }
}
