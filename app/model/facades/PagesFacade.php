<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Model\Facades;

use App\Model\Entities\Pages as PagesEntity;

/**
 * Fasáda pro manipulaci s navigací.
 * @package App\Model\Facades
 */
class PagesFacade extends BaseFacade {
    
    /**
     * @return Pages
     */
    public function getOne($slug) {
        return $this->em->getRepository(PagesEntity::class)->findOneBy(array("slug" => $slug));
    }

}
