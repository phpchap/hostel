<?php

namespace Atlas\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller {
    
    public function homeAction()
    {
        return $this->render('AtlasFrontEndBundle:Page:home.html.twig');
    }
    
    public function aimsAndObjectivesAction()
    {
        return $this->render('AtlasFrontEndBundle:Page:aimsAndObjectives.html.twig');
    }
    
    public function ourOperationsAction()
    {
        return $this->render('AtlasFrontEndBundle:Page:ourOperations.html.twig');
    }

    public function contactsAction()
    {
        return $this->render('AtlasFrontEndBundle:Page:contacts.html.twig');
    }

    public function privacyAction()
    {
        return $this->render('AtlasFrontEndBundle:Page:privacy.html.twig');
    }

    public function termsAction()
    {
        return $this->render('AtlasFrontEndBundle:Page:terms.html.twig');
    }

    public function importantNoticeAction()
    {
        return $this->render('AtlasFrontEndBundle:Page:importantNotice.html.twig');
    }

    public function riskWarningAction()
    {
        return $this->render('AtlasFrontEndBundle:Page:riskWarning.html.twig');
    }
    
/*
    public function homeAction() {
        return $this->render('AtlasFrontEndBundle:Page:home.html.twig');
    }

    public function bookingAction() {
        return $this->render('AtlasFrontEndBundle:Page:booking.html.twig');
    }    

    public function roomsAction() {
        return $this->render('AtlasFrontEndBundle:Page:rooms.html.twig');
    }    

    public function galleryAction() {
        return $this->render('AtlasFrontEndBundle:Page:gallery.html.twig');
    }    

    public function locationAction() {
        return $this->render('AtlasFrontEndBundle:Page:location.html.twig');
    }
    
    public function helpAction() {
        return $this->render('AtlasFrontEndBundle:Page:help.html.twig');
    }    
    
    public function investorsAction() {
        return $this->render('AtlasFrontEndBundle:Page:investors.html.twig');
    }    

    public function privacyAction() {
        return $this->render('AtlasFrontEndBundle:Page:privacy.html.twig');
    }    
    
    public function termsAction() {
        return $this->render('AtlasFrontEndBundle:Page:terms.html.twig');
    }        
 * 
 */
}
