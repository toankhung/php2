<?php

use App\controllers\BaseController;
use App\Core\BaseRender;

class AdminController extends BaseController
{
    private $_renderBase;
    private $UserModel;
    private $BlogModel;

    public function __construct()
    {
        checkAdmin();
        parent::__construct();
        $this->_renderBase = new BaseRender();
        $this->UserModel = $this->load->renderModels("UserModel");
        $this->BlogModel = $this->load->renderModels('BlogModel');
    }

    public function index()
    {
        $id = $_SESSION['admin_id'];
        
        $adminName = $this->UserModel->GetOneById($id);
        $BlogList = $this->BlogModel->GetAllBlog();

        $this->_renderBase->renderHeaderAdmin();
        $this->_renderBase->renderNavbarAdmin();
        
        $this->load->render("blocks/sidebar", [
            "adminName" => $adminName
        ]);
        
        $this->load->render("pages/homeAdminLayout", [
            "BlogList" => $BlogList
        ]);
        
        $this->_renderBase->renderFooterAdmin();
    }

    public function add()
    {
        $id = $_SESSION['admin_id'];
        
        $adminName = $this->UserModel->GetOneById($id);
        $this->_renderBase->renderHeaderAdmin();
        $this->_renderBase->renderNavbarAdmin();
        $this->load->render("blocks/sidebar", [
            "adminName" => $adminName
        ]);
        
        $this->load->render("pages/Blog/AddBlog", [
            
        ]);
        $this->_renderBase->renderFooterAdmin();
    }

}