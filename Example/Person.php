<?php
declare(strict_types=1);

namespace Example;

use DateTimeImmutable;

class Person implements OwnerInterface
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
    private $firstName, $lastName;
    /**
     * @var DateTimeImmutable
     */
    private $birthday;


    public function __construct(
        Owner $owner,
        string $firstName,
        string $lastName,
        DateTimeImmutable $birthday
    ) {
        $this->id = $owner->getId();
        $this->owner = $owner;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
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
        $this->owner->setName(sprintf('%s %s', $this->firstName, $this->lastName));
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
        $this->owner->setName(sprintf('%s %s', $this->firstName, $this->lastName));
    }

    public function getBirthday(): DateTimeImmutable
    {
        return $this->birthday;
    }

    public function setBirthday(DateTimeImmutable $birthday): void
    {
        $this->birthday = $birthday;
    }

    // Owner ******************************************************************/

    public function getType(): OwnerType
    {
        return OwnerType::PERSON();
    }

    public function getName(): string
    {
        return $this->owner->getName();
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