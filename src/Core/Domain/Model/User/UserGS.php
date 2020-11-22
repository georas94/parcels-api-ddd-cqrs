<?php

declare(strict_types=1);

namespace App\Core\Domain\Model\User;

use App\Shared\Domain\Service\Assert\Assert;

trait UserGS
{
    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return array<int, string>
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getSalt(): string
    {
        return '';
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    // Setters

    private function setPassword(string $password): void
    {
        $this->password = $password;
    }

    private function setUsername(string $username): void
    {
        $this->username = $username;
    }

    private function setCreatedAt(\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param array<int, string> $roles
     */
    private function setRoles(array $roles): void
    {
        if (!\in_array(self::DEFAULT_USER_ROLE, $roles, true)) {
            $roles[] = self::DEFAULT_USER_ROLE;
        }

        $this->roles = array_unique($roles);
    }
}
