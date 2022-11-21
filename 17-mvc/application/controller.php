<?php
class Controller {
    public $load;
    public $model;
    function __construct() {
        $this->load = new Load();
        $this->model = new Model();
        if($_GET){
            if($_GET['method']=='show'){
                $this->info();
            }
            if($_GET['method']=='edit'){
                $this->editU();

            }
            if($_GET['method']=='delete'){
                $this->deleteU();
            }
            if($_GET['method']=='add'){
                $this->addU();
            }
        }else{

            $this->welcome();
        }
        
    }
    private function welcome(){
        $data = $this->model->listUsers();
        $this->load->view('welcome.php',$data);
        
    }
    private function Info(){
        $id = $_GET['id'];
        $data = $this->model->showInfo($id);
        $this->load->view('show.php',$data);
        
    }
    private function addU(){
        if($_POST){
            $path  = "../public/images/";
            $data = $this->model->add();
        }
        $this->load->view('add.php');
        
    }
    private function editU(){
        if($_POST){

            $id = $_GET['id'];
            $data = $this->model->edit($id);
        }
        $this->load->view('edit.php');
        
    }
    private function deleteU(){
        $id = $_GET['id'];
        $data = $this->model->delete($id);
        header("Location: ./");
    }
}