<?php
class Bc_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        
    }
    
    function get_bc_user($level=null,$name=null,$password=null)
    {

        $data = array();

       $this->load->database();
      $sql = "select * from bc_user where bc_user_grade = '$level' and bc_user_name = '$name' and bc_user_password = '$password'";
    
   
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            $data[] = $row;
            }
        }
        $query->free_result();
        return $data;

function get_bc_message($id=null, $status=null)
    {

        $data = array();
if($id!=null && $status!=null){
$aw= "WHERE bc_message_id = '$id' and bc_message_status = '$status'";
}
elseif($id==null && $status!=null){
    $aw="WHERE bc_message_status='$status'";
}
elseif($id!=null && $status==null){
    $aw="WHERE bc_message_id = '$id'";
}
else{
    $aw="";
}
       $this->load->database();
      $sql = "select * from bc_message $aw";
    
   
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            $data[] = $row;
            }
        }
        $query->free_result();
        return $data;

    }
    }
     function get_bc_menu($where = '0')
    {

        $data = array();

       $this->load->database();
       $sql = "select * from bc_menu where bc_menu_parent = $where";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            $data[] = $row;
            }
        }
        $query->free_result();
        return $data;

    }
    function get_bc_config($config){
        $query="select * from bc_config where bc_config_name = '$config'";
        $hasil=$this->db->query($query);
        return $hasil->row();
    }
    function get_bc_content_search($cari=null,$cat=null,$start=null,$limit=null)
    {
         $data = array();

      

       $this->load->database();
       if ($start!=null) {
        $lim ="LIMIT $start,$limit";}
            else{
          $lim ="";       
            }
      
      $sql = "SELECT *, GROUP_CONCAT(DISTINCT bc_tag.bc_tag_name) as content_tag
FROM bc_content
LEFT JOIN bc_content_tag ON bc_content.bc_content_id = bc_content_tag.bc_content_id
LEFT JOIN bc_tag ON bc_content_tag.bc_tag_id = bc_tag.bc_tag_id
LEFT JOIN bc_content_cat ON bc_content.bc_content_id = bc_content_cat.bc_content_id
LEFT JOIN bc_cat ON bc_content_cat.bc_cat_id = bc_cat.bc_cat_id
WHERE bc_cat.bc_cat_name = '$cat' and bc_content.bc_content_tittle LIKE '%$cari%'
group by bc_content.bc_content_id order by bc_content.bc_content_id DESC  $lim ";
  
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }
    function get_bc_content($id=null,$cat=null,$start=null,$limit=null)
    {

        $data = array();

      

       $this->load->database();
       if ($start!=null) {
        $lim ="LIMIT $start,$limit";}
            else{
          $lim ="";       
            }
       if ($id !=null){
       $sql = "SELECT *, GROUP_CONCAT(DISTINCT bc_tag.bc_tag_name) as content_tag
FROM bc_content
LEFT JOIN bc_content_tag ON bc_content.bc_content_id = bc_content_tag.bc_content_id
LEFT JOIN bc_tag ON bc_content_tag.bc_tag_id = bc_tag.bc_tag_id
LEFT JOIN bc_content_cat ON bc_content.bc_content_id = bc_content_cat.bc_content_id
LEFT JOIN bc_cat ON bc_content_cat.bc_cat_id = bc_cat.bc_cat_id
WHERE bc_content.bc_content_id ='$id' and bc_cat.bc_cat_name = '$cat'
group by bc_content.bc_content_id order by bc_content.bc_content_id DESC
";
}
else {
      $sql = "SELECT *, GROUP_CONCAT(DISTINCT bc_tag.bc_tag_name) as content_tag
FROM bc_content
LEFT JOIN bc_content_tag ON bc_content.bc_content_id = bc_content_tag.bc_content_id
LEFT JOIN bc_tag ON bc_content_tag.bc_tag_id = bc_tag.bc_tag_id
LEFT JOIN bc_content_cat ON bc_content.bc_content_id = bc_content_cat.bc_content_id
LEFT JOIN bc_cat ON bc_content_cat.bc_cat_id = bc_cat.bc_cat_id
WHERE bc_cat.bc_cat_name = '$cat'
group by bc_content.bc_content_id order by bc_content.bc_content_id DESC  $lim ";
}
    
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            $data[] = $row;
            }
        }
        $query->free_result();
        return $data;

    }
    function get_all_bc_content($cat=null,$tag=null)
    {

        $data = array();

       $this->load->database();
       if($tag!=null){
        $query_tag = " and bc_tag.bc_tag_id = $tag";
       }
       else{
        $query_tag="";
       }
       $sql = "SELECT *, GROUP_CONCAT(DISTINCT bc_tag.bc_tag_name) as content_tag
FROM bc_content
LEFT JOIN bc_content_tag ON bc_content.bc_content_id = bc_content_tag.bc_content_id
LEFT JOIN bc_tag ON bc_content_tag.bc_tag_id = bc_tag.bc_tag_id
LEFT JOIN bc_content_cat ON bc_content.bc_content_id = bc_content_cat.bc_content_id
LEFT JOIN bc_cat ON bc_content_cat.bc_cat_id = bc_cat.bc_cat_id
WHERE bc_cat.bc_cat_name = '$cat' $query_tag
group by bc_content.bc_content_id order by bc_content.bc_content_id  ";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            $data[] = $row;
            }
        }
        $query->free_result();
        return $data;

    }
    function get_bc_tag()
    {

        $data = array();

       $this->load->database();
       $sql = "SELECT * FROM bc_tag";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            $data[] = $row;
            }
        }
        $query->free_result();
        return $data;

    }

}
?>