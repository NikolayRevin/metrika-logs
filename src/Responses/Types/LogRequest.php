<?php

declare(strict_types=1);

namespace Volga\MetrikaLogs\Responses\Types;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class LogRequest
 *
 * @package Volga\MetrikaLogs\Responses\Types
 */
class LogRequest
{
    /**
     * Идентификатор запроса логов
     *
     * @var int
     */
    #[JMS\Type("int")]
    protected int $request_id;

    /**
     * Идентификатор счётчика
     *
     * @var int
     */
    #[JMS\Type("int")]
    protected int $counter_id;

    /**
     * Источник логов
     *
     * @var string
     */
    #[JMS\Type("string")]
    protected string $source;

    /**
     * Первый день
     *
     * @var null|DateTime
     */
    #[JMS\Type("DateTime<'Y-m-d'>")]
    protected ?DateTime $date1;

    /**
     * Последний день
     *
     * @var null|DateTime
     */
    #[JMS\Type("DateTime<'Y-m-d'>")]
    protected ?DateTime $date2;

    /**
     * Список полей
     *
     * @var array
     */
    #[JMS\Type("array<string>")]
    protected array $fields = [];

    /**
     * Статус запроса
     *
     * @var string
     */
    #[JMS\Type("string")]
    protected string $status;

    /**
     * Размер логов запроса в байтах
     *
     * @var null|int
     */
    #[JMS\Type("int")]
    protected ?int $size;

    /**
     * Части ответа
     *
     * @var array
     */
    #[JMS\Type("array<Volga\MetrikaLogs\Responses\Types\LogRequestPart>")]
    protected array $parts = [];

    /**
     * Идентификатор запроса логов
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->request_id;
    }

    /**
     * Идентификатор счётчика
     *
     * @return int
     */
    public function getCounterId(): int
    {
        return $this->counter_id;
    }

    /**
     * Источник логов
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Первый день
     *
     * @return DateTime|null
     */
    public function getDate1(): ?DateTime
    {
        return $this->date1;
    }

    /**
     * Последний день
     *
     * @return DateTime|null
     */
    public function getDate2(): ?DateTime
    {
        return $this->date2;
    }

    /**
     * Список полей
     *
     * @return array
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * Статус запроса
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Размер логов запроса в байтах
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * Части ответа
     *
     * @return array
     */
    public function getParts(): array
    {
        return $this->parts;
    }
}
