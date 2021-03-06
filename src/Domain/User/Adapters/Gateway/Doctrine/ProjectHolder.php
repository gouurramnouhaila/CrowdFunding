<?php


namespace App\Domain\User\Adapters\Gateway\Doctrine;

use App\Domain\Project\Adapters\Gateway\Doctrine\ProjectEntity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class ProjectHolder
 * @package App\Domain\User\Adapters\Gateway\Doctrine
 * @ORM\Entity(repositoryClass="DoctrineProjectHolderRepository")
 */
class ProjectHolder
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string")
     */
    private $lastName;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string")
     */
    private $photo;

    /**
     * @ORM\Column(type="string")
     */
    private $bio;

    /**
     * @ORM\Column(type="date")
     */
    private $birthday;


    /**
     * @ORM\Column(type="string")
     */
    private $state;

    /**
     * @ORM\OneToMany(targetEntity="App\Domain\Project\Adapters\Gateway\Doctrine\Project", mappedBy="projectHolder")
     */
    private $projects;


    /**
     * ProjectHolder constructor.
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $password
     * @param $verify
     * @param $photo
     * @param $bio
     * @param $birthday
     */
    public function __construct($firstName, $lastName, $email, $password, $state, $photo, $bio, $birthday)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->state = $state;
        $this->photo = $photo;
        $this->bio = $bio;
        $this->birthday = $birthday;
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
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

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
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }



    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }




}