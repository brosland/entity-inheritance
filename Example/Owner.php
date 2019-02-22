<?php
declare(strict_types=1);

namespace Example;

class Owner implements OwnerInterface
{
    /**
     * @var OwnerId
     */
    private $ownerId;
    /**
     * @var OwnerType
     */
    private $type;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $address;
    /**
     * @var string
     */
    private $email;


    public function __construct(
        OwnerId $ownerId,
        OwnerType $type,
        string $name,
        string $address,
        string $email
    ) {
        $this->ownerId = $ownerId;
        $this->type = $type;
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
    }

    public function getId(): OwnerId
    {
        return $this->ownerId;
    }

    public function getType(): OwnerType
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}