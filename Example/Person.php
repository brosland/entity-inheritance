<?php
declare(strict_types=1);

namespace Example;

use DateTimeImmutable;

class Person
{
    /**
     * @var OwnerId
     */
    private $id;
    /**
     * @var string
     */
    private $firstName, $lastName, $address, $email;
    /**
     * @var DateTimeImmutable
     */
    private $birthday;
    /**
     * @var Owner
     */
    private $owner;


    public function __construct(
        string $firstName,
        string $lastName,
        DateTimeImmutable $birthday,
        string $address,
        string $email
    ) {
        $this->id = OwnerId::create();
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->email = $email;
        $this->owner = new Owner(
            $this->id,
            OwnerType::PERSON(),
            $this->getFullName(),
            $address,
            $email
        );
    }

    public function getId(): OwnerId
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
        $this->owner->setName($this->getFullName());
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
        $this->owner->setName($this->getFullName());
    }

    public function getFullName(): string
    {
        return sprintf('%s %s', $this->firstName, $this->lastName);
    }

    public function getBirthday(): DateTimeImmutable
    {
        return $this->birthday;
    }

    public function setBirthday(DateTimeImmutable $birthday): void
    {
        $this->birthday = $birthday;
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

    public function getOwner(): Owner
    {
        return $this->owner;
    }
}