<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Model\Facades;

use App\Model\Entities\Users;

/**
 * Fasáda pro manipulaci s uživateli.
 * @package App\Model\Facades
 */
class UserFacade extends BaseFacade {
    
    /**
     * Najde a vrátí uživatele podle jeho ID.
     * @param int|NULL $id ID uživatele
     * @return User|NULL vrátí entitu uživatele nebo NULL pokud uživatel nebyl nalezen
     */
    public function getUser($id) {
        return isset($id) ? $this->em->find(Users::class, $id) : NULL;
    }

}
