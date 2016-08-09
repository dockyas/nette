<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\BaseEntity;

/**
 * Doctrine entita pro tabulku gallery.
 * @package App\Model\Entities
 * @ORM\Entity
 */
class Gallery extends BaseEntity {

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
     * @ORM\OneToMany(targetEntity="Navigation", mappedBy="gallery")
     */
    protected $title;

}
