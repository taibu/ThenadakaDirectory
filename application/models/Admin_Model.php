<?php
class Admin_Model extends CI_Model

{

    function fetch_categories($cat=null){
        $this->load->database();
        $this->db;
        if($cat==null){
            $q = $this->db->query("SELECT * FROM ListingCategories l inner join users u on l.CreatedBy=u.UserId  order by CategoryId desc;");
        }else{
            $q = $this->db->query("SELECT * FROM ListingCategories l inner join users u on l.CreatedBy=u.UserId  where CategoryId='".$this->db->escape_str($cat)."'   order by CategoryId desc;");
        }
        
        return $q;
    }

    function Add_Category(){
        $this->load->database();
        $this->db;
        $name=$this->input->get_post('name');          
        $date=date("d/m/Y/-h:i:sa");
        $userid=$this->session->userdata('loggedinUser')['UserId'];
        $today = date("d/m/Y H:i:s");
        if($this->input->get_post('catId')!=null){
            $id=$this->input->get_post('catId'); 
            $q = $this->db->query("update ListingCategories set Category='$name' where CategoryId='$id'");
        }else{
            $q = $this->db->query("insert into ListingCategories(Category,Createdby,CreatedOn)
            values('$name','$userid','$today')");
        }
       
        return $q;
    }
   function Add_Listing(){
    $businessname=$this->input->get_post('businessname'); 
    $category=$this->input->get_post('category'); 
    $keywords=$this->input->get_post('keywords'); 
    $Description=$this->input->get_post('description'); 
    $address=$this->input->get_post('address'); 

    $monday= $address=$this->input->get_post('monopenning').' - '.$address=$this->input->get_post('monclosing'); 
    $tueday= $address=$this->input->get_post('tuesopening').' - '.$address=$this->input->get_post('tuesclosing'); 
    $wedday= $address=$this->input->get_post('wedopening').' - '.$address=$this->input->get_post('wedclosing'); 
    $thurday= $address=$this->input->get_post('thursdayopening').' - '.$address=$this->input->get_post('thursdayclosing'); 
    $friday= $address=$this->input->get_post('fridayopenning').' - '.$address=$this->input->get_post('fridayclosing'); 
    $satday= $address=$this->input->get_post('saturdayopening').' - '.$address=$this->input->get_post('sartudayclosing'); 
    $sunday= $address=$this->input->get_post('sundayopenning').' - '.$address=$this->input->get_post('sundayclosing'); 

    $facebook=$this->input->get_post('facebook'); 
    $twitter=$this->input->get_post('twitter'); 
    $pintrest=$this->input->get_post('pintrest'); 
    $instagram =$this->input->get_post('instagram'); 

    $date=date("d/m/Y/-h:i:sa");
    $userid=$this->session->userdata('loggedinUser')['UserId'];

    $imgone = $_FILES['imageone']['name'];
    $imagetwo=(isset($_FILES['image2']['name'])) ? $_FILES['image2']['name']: NULL;
     $imagethree=(isset($_FILES['image3']['name'])) ? $_FILES['image3']['name']: NULL;
     $imagefour=(isset($_FILES['image4']['name'])) ? $_FILES['image4']['name']: NULL;
     $imagefive=(isset($_FILES['image5']['name'])) ? $_FILES['image5']['name']: NULL;
     
    //RENAMING THE IMAGE FILES
      if($imgone!=NULL){
        $imageonearray=explode('.',$imgone);
        $imgext=explode('.',$imgone);
        $imgext=end($imgext);
       $imgone=$imageonearray[0].date("Ymdhisa").'1.'.$imgext;
       }
       if($imagetwo!=NULL){
        $imageonearray=explode('.',$imagetwo);
        $imgext=explode('.',$imagetwo);
        $imgext=end($imgext);
       $imagetwo=$imageonearray[0].date("Ymdhisa").'2.'.$imgext;
        }
       if($imagethree!=NULL){ $imageonearray=explode('.',$imagethree);$imgext=explode('.',$imagethree);
        $imgext=end($imgext);$imagethree=$imageonearray[0].date("Ymdhisa").'3.'.$imgext;
        }
        if($imagefour!=NULL){ $imageonearray=explode('.',$imagefour);$imgext=explode('.',$imagefour);
        $imgext=end($imgext);$imagefour=$imageonearray[0].date("Ymdhisa").'4.'.$imgext;
        }
        if($imagefive!=NULL){ $imageonearray=explode('.',$imagefive);$imgext=explode('.',$imagefive);
        $imgext=end($imgext);$imagefive=$imageonearray[0].date("Ymdhisa").'5.'.$imgext;
        }
       
       //MOVE ULOADE FILES
    move_uploaded_file($_FILES['imageone']['tmp_name'],"../ThenadakaDirectory/assets/images/listing/$imgone");
    isset($_FILES['image2']['name']) ? move_uploaded_file($_FILES['image2']['tmp_name'],"../ThenadakaDirectory/assets/images/listing/$imagetwo"):false;
    isset($_FILES['image3']['name']) ?move_uploaded_file($_FILES['image3']['tmp_name'],"../ThenadakaDirectory/assets/images/listing/$imagethree"):false;
    isset($_FILES['image4']['name']) ?move_uploaded_file($_FILES['image4']['tmp_name'],"../ThenadakaDirectory/assets/images/listing/$imagefour"):false;
    isset($_FILES['image5']['name']) ?move_uploaded_file($_FILES['image5']['tmp_name'],"../ThenadakaDirectory/assets/images/listing/$imagefive"):false;

    $insertlisting=array(
        'adName'=>$businessname,'Category'=>$category,'Description'=>$Description,'keywords'=>$keywords,
        'Adress'=> $address, 'MonworkHours'=>$monday,
        'TueworkHours'=> $tueday,'WedworkHours'=> $wedday, 'ThursworkHours'=> $thurday,
        'FriworkHours'=>$friday, 'SatworkHours'=> $satday, 'SunworkHours'=> $sunday,
        'photo'=>$imgone,
        'photo2'=> $imagetwo,'photo3'=> $imagethree, 'photo4'=>$imagefour, 'photo5'=>$imagefive, 'Approved'=>'PENDING',
        'facebooklink'=>$facebook, 'twitterlink'=>$twitter,'instalink'=> $instagram, 'addedBy'=>$userid,'RecordDate'=> $date);

      return  $this->insertData($insertlisting,"listing");
   }

   function  insertData($FormDataToInsert,$tablename){
    $this->load->database();
    $this->db;
    $this->db->insert($tablename,$FormDataToInsert);
    if ($this->db->affected_rows() ==1)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
   }
}

?>