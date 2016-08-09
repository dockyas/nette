<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Model\Facades;

use Kdyby\Doctrine\EntityManager;
use Nette\Object;

/**
 * @package App\Model\Facades
 */
class BaseFacade extends Object {

    /** @var EntityManager Manager pro práci s entitami. */
    protected $em;

    /**
     * Konstruktor s injektovanou třídou pro práci s entitami.
     * @param EntityManager $em automaticky injektovaná třída pro práci s entitami
     */
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

}
