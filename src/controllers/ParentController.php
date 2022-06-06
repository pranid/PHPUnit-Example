<?php

namespace PHPUnitExample\controllers;

class ParentController
{


    /**
     * ParentController constructor.
     */
    public function __construct()
    {
        echo __CLASS__;
    }

    public function getMyName() {
        return "Praneeth";
    }
}