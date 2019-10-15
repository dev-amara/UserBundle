<?php
namespace UserBundle\Models\User;

/**
 * it defines the structure of class User
 * Interface UserInterface
 * @package UserBundle\Models\User
 */
interface UserInterface
{
    /**
     * Return id
     * @return int
     */
    public function getId();

    /**
     * Return first name
     * @return string
     */
    public function getFirstName();

    /**
     * Return self
     * @return string
     */
    public function setFirstName();

    /**
     * Return last name
     * @return string
     */
    public function getLastName();

    /**
     * Return self
     * @return string
     */
    public function setLastName();

    /**
     * Return email
     * @return string
     */
    public function getEmail();

    /**
     * Return self
     * @return string
     */
    public function setEmail();

    /**
     * Return user name
     * @return string
     */
    public function getUserName();

    /**
     * Return self
     * @return string
     */
    public function setUserName();

    /**
     * Return password
     * @return string
     */
    public function getPassword();

    /**
     * Return self
     * @return string
     */
    public function setPassword();

    /**
     * Return roles
     * @return string
     */
    public function getRoles();

    /**
     * Return self
     * @return string
     */
    public function setRoles();

    /**
     * Return salt
     * @return string
     */
    public function getSalt();

    /**
     * Return self
     * @return string
     */
    public function setSalt();

    /**
     * Return is enabled
     * @return bool
     */
    public function getIsEnabled();

    /**
     * Return self
     * @return bool
     */
    public function setIsEnabled();

    /**
     * Return is locked
     * @return bool
     */
    public function getIsLocked();

    /**
     * Return self
     * @return bool
     */
    public function setIsLocked();
}
