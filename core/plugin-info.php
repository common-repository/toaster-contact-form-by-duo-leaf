<?php

class dl_tcf_PluginInfo {

    /**
     * Properties
     */
    public $name;
    public $smallDisplayName;
    public $displayName;

    /**
     * Constructor
     */
    public function __construct() {

        $this->name = "toaster-contact-form-by-duo-leaf";
        $this->smallDisplayName = "Toaster Contact Form";
        $this->displayName = $this->smallDisplayName . " by Duo Leaf";
    }

}
