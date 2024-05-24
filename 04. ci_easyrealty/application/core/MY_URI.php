<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_URI extends CI_URI {
    protected $config; // Add this line

    public function __construct() {
        parent::__construct();
        // Your custom constructor logic here
    }

    // The rest of your custom methods
}
