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
     * @var Owner
     */
    private $owner;
    /**
     * @var string
     */
    private $vat;
    /**
     * @var string
     */
    private $website;


    public function __construct(
        string $name,
        string $vat,
        string $address,
        string $email,
        string $website
    ) {
        $this->id = OwnerId::create();
        $this->vat = $vat;
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

    public function getVat(): string
    {
        return $this->vat;
    }

    public function setVat(string $vat): void
    {
        $this->vat = $vat;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    // Owner ******************************************************************/

    public function getName(): string
    {
        return $this->owner->getName();
    }

    public function setName(string $name): void
    {
        $this->owner->setName($name);
    }

    public function getAddress(): string
    {
        return $this->owner->getAddress();
    }

    public function setAddress(string $address): void
    {
        $this->owner->setAddress($address);
    }

    public function getEmail(): string
    {
        return $this->owner->getEmail();
    }

    public function setEmail(string $email): void
    {
        $this->owner->setEmail($email);
    }
}