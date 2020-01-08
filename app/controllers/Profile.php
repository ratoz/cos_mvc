<?php

class Profile extends Controller
{
    public function index()
    {
        if ($_SESSION['id']=='' || $_SESSION['id'] == null){
            header('Location: '.BASEURL.'logout');
        }
        else{
        $data['page']='profile';
        $data['edit']=true;
        $model = $this->model('DataModel');
        $data['profil'] = $model->selectDatawithID($_SESSION['id']); //diganti dengan session
        $data['profil']['age'] = $model->getAge($data['profil']['tgl_lahir']);
        $data['profil']['gender'] = $model->getGender($data['profil']['gender']);
        $data['profil']['prov'] = $model->selectAllDataAddress('prov');
        $this->view('templates/header',$data); //memanggil file header pada folder templates
        $this->view('templates/navbar',$data);
        $this->view('profile/index', $data); //memanggil file index pada folder dashboard
        $this->view('templates/editprofil',$data); //memanggil file footer pada folder templates
        }
    }

    public function toUser(){
        if ($_SESSION['id']=='' || $_SESSION['id'] == null){
            header('Location: '.BASEURL.'logout');
        }
        $model = $this->model('DataModel');
        $url=explode('/',$_GET['url']);
        $data['profil'] = $model->selectDatawithID($url[2]); //diganti dengan session
        $data['profil']['age'] = $model->getAge($data['profil']['tgl_lahir']);
        $data['profil']['gender'] = $model->getGender($data['profil']['gender']);
        $data['profil']['prov'] = $model->selectAllDataAddress('prov');
        $data['profil']['temp']=$url[2];
        $data['edit']=false;
        $this->view('templates/header',$data); //memanggil file header pada folder templates
        $this->view('templates/navbar',$data);
        $this->view('profile/index', $data); //memanggil file index pada folder dashboard
        $this->view('templates/editprofil'); //memanggil file footer pada folder templates
    }


    public function getKab()
    {
        $model = $this->model('DataModel');
        if ($_POST['mode']=='edit'){
            $data = $model->selectDatawithID($_SESSION['id']);
            $id=$data['id_prov'];
        }
        else{
        $id = substr($_POST['id'], 1);
        $id = 'PR' . sprintf('%03d', $id);
        }
        echo $model->selectAllDataAddress('kab', $id);
    }

    public function getAllData()
    {
        $model = $this->model('DataModel');

        $url=explode('/',$_GET['url']);
        if ($url[2]!=null){

            $data['profil'] = $model->selectDatawithID($url[2]);
        }
        else{
            $data['profil'] = $model->selectDatawithID($_SESSION['id']);
        }
        //diganti dengan session
        $data['profil']['gender'] = $model->getGender($data['profil']['gender']);
        $id = substr($data['profil']['id_prov'], 2,3);
        $data['profil']['id_prov'] = 'p'.$id;
        echo json_encode($data['profil']);
    }

    public function updateDataFoto()
    {
        //echo "hapus";
        $model = $this->model('DataModel');
        $data=$model->selectDatawithID($_SESSION['id']); //diganti dengan session
        $id= $data['id_berkas'];
        $model->ubahDataFoto($_FILES['image'],$id);
        sleep (1);
        header("Location: ".BASEURL."Profile");
    }

    public function updateDataPengguna(){
        $model = $this->model('DataModel');

        $data['name']=$_POST['name'];
        if ($_POST['gender']=='laki-laki'){
            $data['gender']='M';
        }
        else $data['gender']='F';
        $data['nisn']=$_POST['nisn'];
        $data['email']=$_POST['email'];
        $data['phone']=$_POST['phone'];

        $data['alamat']=$_POST['address'];
        $data['sekolah']=$_POST['sekolah'];
        $id = substr($_POST['kabupaten'], 1);
        $data['kabupaten'] = 'KB' . sprintf('%03d', $id);
        $data['id']=$_SESSION['id']; //diganti dengan session
        $model->ubahDataPengguna($data);
        header("Location: ".BASEURL."Profile");
    }
}