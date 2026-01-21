<?php

declare(strict_types=1);

namespace Volga\MetrikaLogs\Responses\Types;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Error
 *
 * @package Volga\MetrikaLogs\Responses\Types
 */
class Error
{
    /**
     * Тип ошибки
     *
     * @var string
     */
    #[JMS\Type("string")]
    protected string $error_type;

    /**
     * Причина ошибки
     *
     * @var string
     */
    #[JMS\Type("string")]
    protected string $message;

    /**
     * Место возникновения ошибки
     *
     * @var null|string
     */
    #[JMS\Type("string")]
    protected $location;

    /**
     * Тип ошибки
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->error_type;
    }

    /**
     * Причина ошибки
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Место возникновения ошибки
     *
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }
}
