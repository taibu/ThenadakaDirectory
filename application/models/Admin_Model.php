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

    function fetch_mostratedlisting($cat=null){
        $this->load->database();
        $this->db;
        if($cat==null){
            $q = $this->db->query("SELECT `ListingId`, `adName`, lc.`Category`,
             `Description`, `keywords`, `Adress`, `MonworkHours`, `TueworkHours`, 
             `WedworkHours`, `ThursworkHours`, `FriworkHours`, `SatworkHours`, 
             `SunworkHours`, `photo`, `photo2`, `photo3`, `photo4`, `photo5`, 
             `facebooklink`, `twitterlink`, `instalink`, `Approved`, 
             `ApprovedBy`, `Reason`, `addedBy`, l.`RecordDate`,
             ((select sum(Rating) from ratings r where r.ListingId=l.ListingId)/(select count(Rating) from ratings r where r.ListingId=l.ListingId)) as rating,
             (select count(Rating) from ratings r where r.ListingId=l.ListingId) as ratingcount
             FROM Listing l inner join users u on l.addedBy=u.UserId  
            inner join ListingCategories lc on l.Category=lc.CategoryId where l.Approved='APPROVED'
            order by rating  desc limit 4;");
            return $q;
        }else{
            $q = $this->db->query("SELECT * FROM Listing l inner join users u on l.addedBy=u.UserId  
            inner join ListingCategories lc on l.Category=lc.CategoryId
            where ListingId='".$this->db->escape_str($cat)."'   order by ListingId desc;");
            return $q->row_array();
        }
        
        
    }
    function fetch_mostrecentlisting(){
        $this->load->database();
        $this->db;

            $q = $this->db->query("SELECT `ListingId`, `adName`, lc.`Category`,
             `Description`, `keywords`, `Adress`, `MonworkHours`, `TueworkHours`, 
             `WedworkHours`, `ThursworkHours`, `FriworkHours`, `SatworkHours`, 
             `SunworkHours`, `photo`, `photo2`, `photo3`, `photo4`, `photo5`, 
             `facebooklink`, `twitterlink`, `instalink`, `Approved`, 
             `ApprovedBy`, `Reason`, `addedBy`, l.`RecordDate`,
             ((select sum(Rating) from ratings r where r.ListingId=l.ListingId)/(select count(Rating) from ratings r where r.ListingId=l.ListingId)) as rating,
             (select count(Rating) from ratings r where r.ListingId=l.ListingId) as ratingcount
             FROM Listing l inner join users u on l.addedBy=u.UserId  
            inner join ListingCategories lc on l.Category=lc.CategoryId where l.Approved='APPROVED'
            order by ListingId  desc limit 8;");
            return $q;
        
    }
    function fetch_Pendinglisting($cat=null){
        $this->load->database();
        $this->db;
        if($cat==null){
            $userrole=$this->session->userdata('loggedinUser')['RoleCode'];
            if($userrole=="03"){
                $userid=$this->session->userdata('loggedinUser')['UserId'];
                $q = $this->db->query("SELECT * FROM Listing l inner join users u on l.addedBy=u.UserId  
                inner join ListingCategories lc on l.Category=lc.CategoryId where Approved='PENDING'  and addedBy='$userid'
                order by ListingId desc;");
            }else{
                $q = $this->db->query("SELECT * FROM Listing l inner join users u on l.addedBy=u.UserId  
                inner join ListingCategories lc on l.Category=lc.CategoryId where Approved='PENDING'
                order by ListingId desc;");
            }
          
            return $q;
        }else{
            $q = $this->db->query("SELECT * FROM Listing l inner join users u on l.addedBy=u.UserId  
            inner join ListingCategories lc on l.Category=lc.CategoryId where Approved='PENDING' and ListingId='".$this->db->escape_str($cat)."'
            order by ListingId desc;");
            return $q->row_array();
        }
            
        
        
    }
    function fetch_ratings($cat){
        $this->load->database();
        $this->db;
       
            $q = $this->db->query("SELECT * FROM ratings where ListingId='".$this->db->escape_str($cat)."'   order by RatingId desc;");
            return $q;
       
        
    }
    function Search_Listing(){
        $this->load->database();
        $this->db;
        $keyword=$this->input->get_post('keyword');
        $location=$this->input->get_post('location');
        $category=$this->input->get_post('category');
            $q = $this->db->query("SELECT `ListingId`, `adName`, lc.`Category`,
            `Description`, `keywords`, `Adress`, `MonworkHours`, `TueworkHours`, 
            `WedworkHours`, `ThursworkHours`, `FriworkHours`, `SatworkHours`, 
            `SunworkHours`, `photo`, `photo2`, `photo3`, `photo4`, `photo5`, 
            `facebooklink`, `twitterlink`, `instalink`, `Approved`, 
            `ApprovedBy`, `Reason`, `addedBy`, l.`RecordDate`,
            ((select sum(Rating) from ratings r where r.ListingId=l.ListingId)/(select count(Rating) from ratings r where r.ListingId=l.ListingId)) as rating,
            (select count(Rating) from ratings r where r.ListingId=l.ListingId) as ratingcount 
            FROM Listing l  
            inner join ListingCategories lc on l.Category=lc.CategoryId 
            where l.Approved='APPROVED' and adName like '%".$this->db->escape_str($keyword)."%' and l.Adress like '%".$this->db->escape_str($location)."%' and l.Category like '%".$this->db->escape_str($category)."%' order by ListingId desc;");
            return $q;
       
    }   
    function ViewBy_Category($id){
        $this->load->database();
        $this->db;
        
        $q = $this->db->query("SELECT `ListingId`, `adName`, lc.`Category`,
        `Description`, `keywords`, `Adress`, `MonworkHours`, `TueworkHours`, 
        `WedworkHours`, `ThursworkHours`, `FriworkHours`, `SatworkHours`, 
        `SunworkHours`, `photo`, `photo2`, `photo3`, `photo4`, `photo5`, 
        `facebooklink`, `twitterlink`, `instalink`, `Approved`, 
        `ApprovedBy`, `Reason`, `addedBy`, l.`RecordDate`,
        ((select sum(Rating) from ratings r where r.ListingId=l.ListingId)/(select count(Rating) from ratings r where r.ListingId=l.ListingId)) as rating,
        (select count(Rating) from ratings r where r.ListingId=l.ListingId) as ratingcount 
        FROM Listing l  
            inner join ListingCategories lc on l.Category=lc.CategoryId 
            where l.Approved='APPROVED' and lc.Category='".$this->db->escape_str($id)."' 
            order by ListingId desc;");
        return $q;
       
    }  
    function fetch_homestats(){
        $this->load->database();
        $this->db;
        $userrole=$this->session->userdata('loggedinUser')['RoleCode'];
          if($userrole=="03"){
            $userid=$this->session->userdata('loggedinUser')['UserId'];
            $q = $this->db->query("SELECT (Select count(*) from listing where Approved='APPROVED' and addedBy='$userid') as Approved,
                                  (Select count(*) from listing where Approved='PENDING' and addedBy='$userid') as Pending,
                                  (Select count(*) from listing where Approved='REJECTED' and addedBy='$userid') as Rejected
                                  ");
          }else{
            $q = $this->db->query("SELECT (Select count(*) from listing where Approved='APPROVED') as Approved,
            (Select count(*) from listing where Approved='PENDING') as Pending,
            (Select count(*) from listing where Approved='REJECTED') as Rejected
            ");
          }
            
            return $q->row_array();
       
        
    }
    function Approve_Listing($id){
        $this->load->database();
        $this->db;
        $userid=$this->session->userdata('loggedinUser')['UserId'];
        $q = $this->db->query("Update listing set Approved='APPROVED',Reason='APPROVED',ApprovedBy='$userid' where ListingId='".$this->db->escape_str($id)."';");
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

    $phone=$this->input->get_post('phone'); 
    $website=$this->input->get_post('website'); 
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
        'photo'=>$imgone,'Phone'=>$phone,'Website'=>$website,
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
   function Add_Rating(){
    $rating=$this->input->get_post('ratings'); 
    $name=$this->input->get_post('name'); 
    $Id=$this->input->get_post('Id'); 
    $message=$this->input->get_post('message'); 
   
    $date=date("d/m/Y/-h:i:sa");
    
   
    $insertRating=array(
        'Rating'=>$rating,'User'=>$name,'Description'=>$message,'ListingId'=>$Id,
        'RecordDate'=> $date);

      return  $this->insertData($insertRating,"ratings");
   }

  
}

?>