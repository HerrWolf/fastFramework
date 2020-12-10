<?php

namespace fastFramework\model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\GeneratedValue;


/**
 * @Entity
 * @Table(name="Persons")
 **/
class Person
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * @var int
     **/
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $name;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $lastName;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $age;

    /**
     * @Column(type="text")
     * @var string
     */
    protected $address;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $telephone;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getTelephone(): int
    {
        return $this->telephone;
    }

    /**
     * @param int $telephone
     */
    public function setTelephone(int $telephone): void
    {
        $this->telephone = $telephone;
    }
}
