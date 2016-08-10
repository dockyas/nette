<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Modules\FrontModule\Presenters;

use Nette\Application\UI\Presenter;
use App\Model\Facades\SettingsFacade as SettingsFacade;
use App\Model\Facades\NavigationFacade as NavigationFacade;

/**
 * Základní presenter pro všechny ostatní presentery aplikace.
 * @package App\Modules\FrontModule\Presenters
 */
abstract class BasePresenter extends Presenter {

    /** @var SettingsFacade @inject */
    public $settingsFacade;

    /** @var NavigationFacade @inject */
    public $navigationFacade;

    /** @var signaled */
    public $signaled = false;

    protected function startup() {
        parent::startup();

        if ($this->getSignal() !== null) {
            $this->signaled = true;
        }
    }

    protected function beforeRender() {
        parent::beforeRender();

        $this->template->settings = $this->settingsFacade->getAll();
        $this->template->navigation = $this->navigationFacade->getAll();
    }

    protected function afterRender() {
        parent::afterRender();

        if ($this->isAjax() && !$this->signaled && !$this->isControlInvalid()) {
            $this->redrawControl('title');
            $this->redrawControl('navigation');
            $this->redrawControl('content');
        }
    }

}
