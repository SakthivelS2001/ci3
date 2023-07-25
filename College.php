<?php

//file in Controllers

class College extends CI_Controller{

    public function index(){

        $this->load->view('college_staff');

    }

    public function update(){

        extract($_POST);
        $Id=$id;
        $data=[
            'name'=>$Name,
            'date_of_joining'=>$Date_Of_Joining,
            'address'=>$Address,
            'department'=>$Department,
            'phone_number'=>$Phone_Number,
            'gender'=>$Gender,
            'blood_group'=>$Blood_Group
        ];

        $this->load->model('CollegeModel');
        $result=$this->CollegeModel->updatedata($data,$id);
        if ($result) {
            $this->fetchdata();
        }
    }

    public function edit($id){

        $this->load->model('CollegeModel');
        $result['data']=$this->CollegeModel->editdata($id);
        $this->load->view('college_staff_displayrecords',$result);

    }
    
    public function student(){

        $mes['msg']='Your Registration Form';

        $this->load->view('college_staff',$mes);

    }
    public function savedata(){
       
        extract($_POST);

        $data=[
            'name'=>$name,
            'date_of_joining'=>$date_of_joining,
            'address'=>$address,
            'department'=>$department,
            'phone_number'=>$phone_number,
            'gender'=>$gender,
            'blood_group'=>$blood_group
        ];

       

        $this->load->model('CollegeModel');
        $result=$this->CollegeModel->insertdata($data);

        if($result){

            $res['status']='Successfully inserted';
            $res['test']='200';

            $this->load->view('college_staff',$res);

        }else{
            $res['status']='error while inserting data';

            $this->load->view('college_staff',$res);
        }

    }
    public function fetchdata(){

        $this->load->model('CollegeModel');
        $result['table']=$this->CollegeModel->getRecord();
        $this->load->view('college_staff_displayrecords',$result);


    }


}

?>