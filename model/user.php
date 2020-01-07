<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 07.03.19
 * Time: 14:39
 */

class User extends Model
{
    private $_firstname;
    private $_lastname;
    private $_username;
    private $_password;
    private $_dateOfBirth;
    private $_email;
    private $_address;
    private $_id_role;

    /**
     * Set the values from the Form to the firstname.
     *
     * @param string $value the value of firstname.
     *
     * @return set the value.
     */
    public function setFirstname($value)
    {
        $this->_firstname = $value;
    }

    /**
     * Get the firstname´s value.
     *
     * @return the firstname´s value.
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * Set the values from the Form to the lastname.
     *
     * @param string $value the value of lastname.
     *
     * @return set the value.
     */
    public function setLastname($value)
    {
        $this->_lastname = $value;
    }

    /**
     * Get the lastname´s value.
     *
     * @return the lastname´s value.
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * Set the values from the Form to the username.
     *
     * @param string $value the value of title.
     *
     * @return set the value.
     */
    public function setUsername($value)
    {
        $this->_username = $value;
    }

    /**
     * Get the username´s value.
     *
     * @return the title´s value.
     */
    public function getUsername()
    {
        return $this->_username ;
    }

    /**
     * Set the values from the Form to the password.
     *
     * @param string $value the value of password.
     *
     * @return set the value.
     */
    public function setPassword($value)
    {
        $this->_password = $value;
    }

    /**
     * Get the password´s value.
     *
     * @return the password´s value.
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * Set the values from the Form to the date of birth.
     *
     * @param string $value the value of date of birth.
     *
     * @return set the value.
     */
    public function setDateOfBirth($value)
    {
        $this->_dateOfBirth = $value;
    }

    /**
     * Get the date´s value.
     *
     * @return the date´s value.
     */
    public function getDateOfBirth()
    {
        return $this->_dateOfBirth;
    }

    /**
     * Set the values from the Form to the email.
     *
     * @param string $value the value of email.
     *
     * @return set the value.
     */
    public function setEmail($value)
    {
        $this->_email = $value;
    }

    /**
     * Get the email´s value.
     *
     * @return the email´s value.
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * Set the values from the Form to the address.
     *
     * @param string $value the value of address.
     *
     * @return set the value.
     */
    public function setAddress($value)
    {
        $this->_address = $value;
    }

    /**
     * Get the address´s value.
     *
     * @return the address´s value.
     */
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * Set the values from the Form to the id role.
     *
     * @param string $value the value of id role.
     *
     * @return set the value.
     */
    public function setIdRole($value)
    {
        $this->_id_role = $value;
    }

    /**
     * Get the id role´s value.
     *
     * @return the id´s value.
     */
    public function getIdRole()
    {
        return $this->_id_role;
    }

    /**
     * login
     * @return array|null|string
     */
    public function login()
    {
        $sql = "SELECT * FROM user WHERE username=\"" . $this->getUsername()."\" AND password=\"" . $this->getPassword()."\"";
        $row = $this->fromDatabase('show', $sql);
        return $row;
    }

    /**
     * Register
     * @return array|null|string
     */
    public function Register()
    {
        $sql = "INSERT INTO user ( firstname, lastname,  username, password, dateOfBir, email, address, id_role)
              VALUES (\"" . $this->getFirstname() . "\", \"" . $this->getLastname() . "\", \"" . $this->getUsername() . "\",\"" . $this->getPassword() . "\", \"" . $this->getDateOfBirth() . "\",  \"" . $this->getEmail() . "\", \"" . $this->getAddress() . "\" , \"" . $this->getIdRole() . "\")";
        $row = $this->fromDatabase('insert', $sql);
        return $row;

    }
}