<?php

namespace Commerce\UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $googleplus_id;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $googleplus_access_token;
    

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set googleplusId
     *
     * @param string $googleplusId
     *
     * @return User
     */
    public function setGoogleplusId($googleplusId)
    {
        $this->googleplus_id = $googleplusId;

        return $this;
    }

    /**
     * Get googleplusId
     *
     * @return string
     */
    public function getGoogleplusId()
    {
        return $this->googleplus_id;
    }

    /**
     * Set googleplusAccessToken
     *
     * @param string $googleplusAccessToken
     *
     * @return User
     */
    public function setGoogleplusAccessToken($googleplusAccessToken)
    {
        $this->googleplus_access_token = $googleplusAccessToken;

        return $this;
    }

    /**
     * Get googleplusAccessToken
     *
     * @return string
     */
    public function getGoogleplusAccessToken()
    {
        return $this->googleplus_access_token;
    }
}
