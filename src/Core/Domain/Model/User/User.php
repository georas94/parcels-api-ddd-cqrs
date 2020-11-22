<?php

declare(strict_types=1);

namespace App\Core\Domain\Model\User;

use App\Shared\Domain\Exception\InvalidInputDataException;
use App\Shared\Domain\Model\Aggregate;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use OpenApi\Annotations as OA;


/**
 * @ORM\Entity()
 * @OA\Schema()
 */
class User extends Aggregate implements UserInterface
{
    use UserGS;

    public const DEFAULT_USER_ROLE = 'ROLE_USER';
    public const MAX_USER_NAME_LENGTH = 180;
    public const MAX_PASSWORD_LENGTH = 255;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", options={"unsigned"=true})
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @OA\Property(type="string")
     */
    private string $username;

    /**
     * @var array<int, string>
     *
     * @ORM\Column(type="json", nullable=false)
     */
    private array $roles = [];

    /**
     * @ORM\Column(type="string", nullable=false)
     * @OA\Property(type="string")
     */
    private string $password;

    /**
     * @ORM\Column(type="datetime_immutable", options={"default"="CURRENT_TIMESTAMP"}, nullable=false)
     */
    private \DateTimeImmutable $createdAt;

    /**
     * @param string $username
     * @param string $password
     * @param array|string[] $roles
     */
    public function __construct(
        string $username,
        string $password,
        array $roles = [self::DEFAULT_USER_ROLE]
    ) {


        $this->setUsername($username);
        $this->setPassword($password);
        $this->setRoles($roles);
        $this->setCreatedAt(new \DateTimeImmutable());
    }

    public function eraseCredentials(): void
    {
        //dont need
    }

    public function equals(User $user): bool
    {
        return $user->getId() === $this->getId();
    }
}
