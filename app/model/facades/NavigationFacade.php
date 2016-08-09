<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Model\Facades;

use App\Model\Entities\Navigation as NavigationEntity;

/**
 * Fasáda pro manipulaci s navigací.
 * @package App\Model\Facades
 */
class NavigationFacade extends BaseFacade {
    
    /**
     * @return Navigation
     */
    public function getAll() {
        return $this->em->getRepository(NavigationEntity::class)->findAll();
    }
    
    /**
     * @param string $slug
     */
    public function getOne($slug) {
        return $this->em->getRepository(NavigationEntity::class)->findOneBy(array("slug" => $slug));
    }

}
