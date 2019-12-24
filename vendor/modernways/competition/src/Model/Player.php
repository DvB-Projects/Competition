<?php
namespace ModernWays\Competition\Model;

class Player
{
    private $lastName;
    private $firstName;
    private $address;
    private $shirtNumber;

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $addresd
     */
    public function setAddress($address)
    {
        $this->addresd = $address;
    }

    /**
     * @return mixed
     */
    public function getShirtNumber()
    {
        return $this->shirtNumber;
    }

    /**
     * @param mixed $shirtNumber
     */
    public function setShirtNumber($shirtNumber)
    {
        $this->shirtNumber = $shirtNumber;
    }

}