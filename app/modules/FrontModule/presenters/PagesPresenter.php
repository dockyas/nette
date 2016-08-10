<?php

/**
 * @author Ondřej Dočkal <www.dockycode.eu>
 * e-mail docky0@email.cz
 */

namespace App\Modules\FrontModule\Presenters;

use App\Model\Facades\NavigationFacade;
use App\Model\Facades\PagesFacade;

/*
 * Pages presenter
 * @package App\FrontModule\Presenters
 */
class PagesPresenter extends BasePresenter {

    /** @var NavigationFacade @inject */
    public $navigationFacade;

    /** @var PagesFacade @inject */
    public $pagesFacade;

    /**
     * @param string $slug
     */
    public function renderNavigation($slug) {

        /* GET Navigation */
        $navigation = $this->navigationFacade->getOne($slug);

        /* CHECK IF DOESN'T EXISTS */

        if ($navigation) {
            $this->template->item = $navigation;
        } else {
            $this->error('Stránka neexistuje', 404);
        }
    }

    /**
     * @param string $slug
     */
    public function renderPage($slug) {

        /* GET Page */
        $page = $this->pagesFacade->getOne($slug);

        /* CHECK IF DOESN'T EXISTS */

        if ($page) {
            $this->template->item = $page;
        } else {
            $this->error('Stránka neexistuje', 404);
        }
    }

}
