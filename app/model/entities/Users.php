<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\BaseEntity;

/**
 * Doctrine entita pro tabulku user.
 * @package App\Model\Entities
 * @ORM\Entity
 */
class Users extends BaseEntity {
    // Pomocné konstanty pro náš model.

    /** Konstanty pro uživatelské role. */
    const ROLE_USER = 1,
          ROLE_ADMIN = 2;

    /** Konstanty pro uživatelské jméno. */
    const MAX_NAME_LENGTH = 15,
          NAME_FORMAT = "^[a-zA-Z0-9]*$";

    // Proměné reprezentující jednotlivé sloupce tabulky.

    /**
     * Sloupec pro ID uživatele.
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * Sloupec pro jméno.
     * @ORM\Column(type="string")
     */
    protected $username;

    /**
     * Sloupec pro heslo.
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * Sloupec pro email.
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * Sloupec pro datum registrace.
     * @ORM\Column(type="datetime")
     */
    protected $date;

}
