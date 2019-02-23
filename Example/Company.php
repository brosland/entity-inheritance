<?php
declare(strict_types=1);

namespace Example;

class Company
{
    /**
     * @var OwnerId
     */
    private $id;
    /**
     * @var string
     */
    private $name, $vat;
    /**
     * @var string
     */
    private $address, $email, $website;
    /**
     * @var Owner
     */
    private $owner;


    public function __construct(
        string $name,
        string $vat,
        string $address,
        string $email,
        string $website
    ) {
        $this->id = OwnerId::create();
        $this->name = $name;
        $this->vat = $vat;
        $this->address = $address;
        $this->email = $email;
        $this->website = $website;
        $this->owner = new Owner(
            $this->id,
            OwnerType::COMPANY(),
            $name,
            $address,
            $email
        );
    }

    public function getId(): OwnerId
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
        $this->owner->setName($name);
    }

    public function getVat(): string
    {
        return $this->vat;
    }

    public function setVat(string $vat): void
    {
        $this->vat = $vat;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
        $this->owner->setAddress($address);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
        $this->owner->setEmail($email);
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    public function getOwner(): Owner
    {
        return $this->owner;
    }
}