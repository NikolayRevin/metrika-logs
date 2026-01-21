<?php

declare(strict_types=1);

namespace Volga\MetrikaLogs\Responses\Concerns;

use JMS\Serializer\Annotation as JMS;

/**
 * Trait ErrorResponse
 *
 * @package Volga\MetrikaLogs\Responses\Concerns
 */
trait ErrorResponse
{
    /**
     * Ошибки
     *
     * @var array
     */
    #[JMS\Type("array<Volga\MetrikaLogs\Responses\Types\Error>")]
    protected array $errors = [];

    /**
     * HTTP-статус ошибки
     *
     * @var null|string
     */
    #[JMS\SerializedName("code")]
    #[JMS\Type("string")]
    protected ?string $error_code;

    /**
     * Причина ошибки
     *
     * @var null|string
     */
    #[JMS\SerializedName("message")]
    #[JMS\Type("string")]
    protected ?string $error_message;

    /**
     * Есть ли ошибки?
     *
     * @return bool
     */
    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    /**
     * Ошибки
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * HTTP-статус ошибки
     *
     * @return null|string
     */
    public function getErrorCode(): ?string
    {
        return $this->error_code;
    }

    /**
     * Причина ошибки
     *
     * @return null|string
     */
    public function getErrorMessage(): ?string
    {
        return $this->error_message;
    }
}
