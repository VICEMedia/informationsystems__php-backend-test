<?php declare(strict_types=1);


namespace App;

interface StatisticsService
{
    public function getOrderStatistics(int $orderId, \DateTimeInterface $monthOfService);
    public function getJobStatistics(string $jobCode);
}
