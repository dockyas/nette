<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\BaseEntity;

/**
 * Doctrine entita pro tabulku settings.
 * @package App\Model\Entities
 * @ORM\Entity
 */
class Settings extends BaseEntity {
    
    /**
     * Sloupec pro ID uživatele.
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * Sloupec pro title.
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * Sloupec pro keywords.
     * @ORM\Column(type="string")
     */
    protected $keywords;

    /**
     * Sloupec pro description.
     * @ORM\Column(type="string")
     */
    protected $description;
    
    /**
     * Sloupec pro google.
     * @ORM\Column(type="string")
     */
    protected $google;
    
    /**
     * Sloupec pro maintenance.
     * @ORM\Column(type="integer")
     */
    protected $maintenance;

}
