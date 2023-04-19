<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MX_Controller
{
    
    function error()
    {
        $data['title'] = "Radhika Cargo Packers and Movers";
        $data['description'] = "Error Page";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }

    function index()
    {
        $data['title'] = "Top Packers and Movers in Siliguri " . str_replace(" ", "", $this->comp['phone1']) . ", Best Packing and Moving Company";
        $data['description'] = "Radhika Cargo Packers and Movers is the best packers and movers company in Siliguri. We offer various services from packing to unpacking and loading to unloading.";
        $data['keywords'] = "Radhika Cargo Packers and Movers, Siliguri Movers, Packers in siliguri, siliguri Movers and Packers, best packing and moving company";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }
}
