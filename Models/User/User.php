<?php
namespace UserBundle\Models\User;

/**
 * Class User
 * @package UserBundle\Models\User
 */
class User
{
    /**
     * @var $Id
     */
    private $Id;

    /**
     * @var $FirstName
     */
    private $FirstName;

    /**
     * @var $LastName
     */
    private $LastName;

    /**
     * @var $Email
     */
    private $Email;

    /**
     * @var $UserName
     */
    private $UserName;

    /**
     * @var $Password
     */
    private $Password;

    /**
     * @var $Roles
     */
    private $Roles;

    /**
     * @var $Salt
     */
    private $Salt;

    /**
     * @var $IsEnabled
     */
    private $IsEnabled;

    /**
     * @var $IsLocked
     */
    private $IsLocked;

    /**
     * Return id
     * @return int
     */
    public function getId(): ?int
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return $this
     */
    public function setId(int $Id):self
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return $this
     */
    public function setFirstName(string $FirstName):self
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return $this
     */
    public function setLastName(string $LastName):self
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return $this
     */
    public function setEmail(string $Email):self
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return $this
     */
    public function setUserName(string $UserName):self
    {
        $this->UserName = $UserName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return $this
     */
    public function setPassword(string $Password):self
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoles(): string
    {
        return $this->Roles;
    }

    /**
     * @param string $Roles
     * @return $this
     */
    public function setRoles(string $Roles):self
    {
        $this->Roles = $Roles;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalt(): string
    {
        return $this->Salt;
    }

    /**
     * @param string $Salt
     * @return $this
     */
    public function setSalt(string $Salt):self
    {
        $this->Salt = $Salt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return $this->IsEnabled;
    }

    /**
     * @param bool $IsEnabled
     * @return $this
     */
    public function setIsEnabled(bool $IsEnabled):self
    {
        $this->IsEnabled = $IsEnabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsLocked():string
    {
        return $this->IsLocked;
    }

    /**
     * @param bool $IsLocked
     * @return $this
     */
    public function setIsLocked(bool $IsLocked):self
    {
        $this->IsLocked = $IsLocked;
        return $this;
    }
}
