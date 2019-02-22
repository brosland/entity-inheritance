<?php
declare(strict_types=1);

namespace Example;

interface OwnerInterface
{
    function getId(): OwnerId;

    function getType(): OwnerType;

    function getName(): string;

    function getAddress(): string;

    function getEmail(): string;
}