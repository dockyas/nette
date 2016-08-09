<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Model\Facades;

use App\Model\Entities\Settings as SettingsEntity;

/**
 * Fasáda pro manipulaci s navigací.
 * @package App\Model\Facades
 */
class SettingsFacade extends BaseFacade {
    
    /**
     * @return Settings
     */
    public function getAll() {
        return $this->em->getRepository(SettingsEntity::class)->findOneBy(array("id" => 1));
    }

}
