<?php

declare(strict_types=1);

namespace Volga\MetrikaLogs\Responses\Types;

use JMS\Serializer\Annotation as JMS;

/**
 * Class LogRequestPart
 *
 * @package Volga\MetrikaLogs\Responses\Types
 */
class LogRequestPart
{
    /**
     * Номер части
     *
     * @var int
     */
    #[JMS\Type("int")]
    protected int $part_number;

    /**
     * Размер в байтах
     *
     * @var int
     */
    #[JMS\Type("int")]
    protected int $size;

    /**
     * Номер части
     *
     * @return int
     */
    public function getNumber(): int
    {
        return $this->part_number;
    }

    /**
     * Размер в байтах
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}
