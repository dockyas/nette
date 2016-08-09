<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\BaseEntity;

/**
 * Doctrine entita pro tabulku navigation.
 * @package App\Model\Entities
 * @ORM\Entity
 */
class Navigation extends BaseEntity {

    /**
     * Sloupec pro ID.
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * Sloupec pro název.
     * @ORM\Column(type="string")
     */
    protected $title;
    
    /**
     * Sloupec pro slug.
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * Sloupec pro obsah.
     * @ORM\Column(type="text")
     */
    protected $content;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $position;

}
