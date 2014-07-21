<?php

Yii::app()->moduleManager->register(array(
    'id' => 'tour',
    'class' => 'application.modules_core.tour.TourModule',
    'isCoreModule' => true,
    'import' => array(
        'application.modules_core.tour.*',
    ),
    // Events to Catch
    'events' => array(
        //array('class' => 'PageAddonStackWidget', 'event' => 'onInit', 'callback' => array('TourModule', 'onTourWidgetInit')),
    ),
));
?>