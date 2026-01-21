<?php

declare(strict_types=1);

namespace Volga\MetrikaLogs\Responses\Types;

use JMS\Serializer\Annotation as JMS;

/**
 * Class LogRequestEvaluation
 *
 * @package Volga\MetrikaLogs\Responses\Types
 */
class LogRequestEvaluation
{
    /**
     * Возможность создания запроса логов за указанный период
     *
     * @var bool
     */
    #[JMS\Type("bool")]
    protected bool $possible;

    /**
     * Максимальное количество дней периода, который можно указать в запросах логов, с учетом текущей квоты
     *
     * @var int
     */
    #[JMS\Type("int")]
    protected int $max_possible_day_quantity;

    /**
     * Возможность создания запроса логов за указанный период
     *
     * @return bool
     */
    public function isPossible(): bool
    {
        return $this->possible;
    }

    /**
     * Максимальное количество дней периода, который можно указать в запросах логов, с учетом текущей квоты
     *
     * @return int
     */
    public function getMaxPossibleDayQuantity(): int
    {
        return $this->max_possible_day_quantity;
    }
}
