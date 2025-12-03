<?php

declare(strict_types=1);

namespace Test;

use Test\Event\Failure;

final readonly class TestResult
{
    public function __construct(
        private array $pass,
        private array $incomplete,
        private array $failure,
        private array $error
    ) {}

    public function isSuccess(): bool
    {
        return count($this->failure) === 0 && count($this->error) === 0;
    }

    public function getPassCount(): int
    {
        return count($this->pass);
    }

    /**
     * @return Failure[]
     */
    public function getIncomplete(): array
    {
        return $this->incomplete;
    }

    public function getIncompleteCount(): int
    {
        return count($this->incomplete);
    }

    /**
     * @return Failure[]
     */
    public function getFailure(): array
    {
        return $this->failure;
    }

    public function getFailureCount(): int
    {
        return count($this->failure);
    }

    /**
     * @return Failure[]
     */
    public function getError(): array
    {
        return $this->error;
    }

    public function getErrorCount(): int
    {
        return count($this->error);
    }
}
