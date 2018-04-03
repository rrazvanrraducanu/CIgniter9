<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FormsController extends CI_Controller {
 public function add(){
            $var1="";
             $var2="";
if(isset($_POST['text1'])){
        $var1=$_POST['text1'];
        }
        else { $var1=''; }
        if(isset($_POST['text2'])){
            $var2=$_POST['text2'];
        }
        else {$var2='';}
        $var3=(int)$var1+(int)$var2;
       $data['var1']=$var1;
       $data['var2']=$var2;
       $data['var3']=$var3;
       $this->load->view('forma3',$data);
        }
public function add1(){
            
            $var1="";
             $var2="";
             $var3="";
       if($this->input->post('text1')){
        $var1=$this->input->post('text1');
        }
        else {
            $var1='';
             }
             
        if($this->input->post('text2')){
            $var2=$this->input->post('text2');
        }
        else {
            $var2='';
             }
        $var3=(int)$var1+(int)$var2;
       $data['var1']=$var1;
       $data['var2']=$var2;
       $data['var3']=$var3;
       $this->load->view('forma3',$data);
        }
}