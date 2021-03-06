<?php
declare(strict_types=1);

namespace Tests\Unit\Dummy\Domain\Service;

use BernardoSecades\Testing\Domain\Entity\Employed;
use BernardoSecades\Testing\Domain\Entity\EmployersCollection;
use BernardoSecades\Testing\Domain\Service\CalculateSalariesService;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * Doubles: Dummy
 */
class CalculateSalariesServiceTest extends TestCase
{
    /**
     * @test
     */
    public function calculate_total_salaries()
    {
        $loggerPro = $this->prophesize(LoggerInterface::class);
        $sut = new CalculateSalariesService($loggerPro->reveal());

        $this->assertEquals(30000, $sut->calculateTotalSalaries($this->getEmployersCollection()));
    }

    /**
     * @return EmployersCollection
     */
    private function getEmployersCollection(): EmployersCollection
    {
        $employers = new EmployersCollection();
        $employers->add(Employed::create('John', 20000));
        $employers->add(Employed::create('John', 10000));
        $employers->add(Employed::create('John', 25000)->deactivate());

        return $employers;
    }
}
