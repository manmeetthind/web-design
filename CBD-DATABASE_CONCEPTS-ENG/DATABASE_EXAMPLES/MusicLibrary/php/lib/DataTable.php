<?php

 class DataTable{
   protected $db;
   protected $name;
   protected $count;
   protected $data;

   public function __construct($name){
     $this->name = $name;
   }
   public function __toString(){
    return $this->html();
  }
   public function db($connect){
     $this->db = $connect;
   }

   private function html(){
     return sprintf("<table class=\"table table-striped\">
     <thead><tr>%s</tr></thead>
     <tbody><tr>%s</tr></tbody></table>",
      $this->table_head('<th scope="col">%s</th>'),
      $this->table_body('<td>%s</td>',"</tr><tr>"));
   }

   public function json(){
     $data['name'] = $this->name;
     $data['count'] = $this->count;
     $data['data'] = $this->data;
     return json_encode($data);
   }

   private function table_head($tag){
     $head = '';
     $fields = $this->db->query("DESCRIBE `$this->name`");

     while( $field = $fields->fetch_array() ){
       $head.=sprintf($tag,$field[0]);
     }
     return $head;
   }

   private function table_body($tag,$sep=''){
     $body = '';
     $result = $this->db->query("SELECT * FROM `$this->name`");
     $this->count = $result->num_rows;
     while( $row = $result->fetch_assoc() ){

       foreach ($row as $col ) {
         $body.=sprintf($tag,$col);
       }
       $this->data[] = $row;
        $body.=$sep;
     }
     
     // remove the last seperator
     if(!empty($sep)){
       return substr($body,0,-strlen($sep));
     }else{
       return $body;
     }
   }


 }
