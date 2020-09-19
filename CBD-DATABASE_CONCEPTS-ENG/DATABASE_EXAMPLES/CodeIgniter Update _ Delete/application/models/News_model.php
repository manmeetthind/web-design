<?php

class News_model extends CI_Model
{
  public function __construct(){
    $this->load->database();
  }
  public function get_all($trashed=0)
  {
    $this->db->where('trashed',$trashed);
    $query = $this->db->get('news'); // SELECT * FROM `news`
    return $query->result_array();

    }
    public function get_by_slug($slug){
    // SELECT * FROM `news` WHERE `slug`='uri-segment'
    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
  }
    public function get_by_id($id){
    // SELECT * FROM `news` WHERE `id`=1
    $query = $this->db->get_where('news', array('id' => $id));
    return $query->row_array();
  }
  public function set_news()
  {
      $slug = url_title($this->input->post('title'), 'dash', TRUE);

      $data = array(
          'title' => $this->input->post('title'),
          'slug' => $slug,
          'text' => $this->input->post('text')
      );

      // INSERT INTO `news` (`title`, `slug`, `text`) VALUES ('The new tile', 'the-new-title', 'Lorem ipsum...')
      return $this->db->insert('news', $data);
  }

  public function update_news($id)
  {
      $data = array(
          'title' => $this->input->post('title'),
          'slug' => $this->input->post('slug'),
          'text' => $this->input->post('text')
      );

      // INSERT INTO `news` (`title`, `slug`, `text`) VALUES ('The new tile', 'the-new-title', 'Lorem ipsum...')
      $this->db->where('id',$id);
      return $this->db->update('news', $data);
  }

  public function trash($id, $trashed=1)
  {
      $data = array(
          'trashed' => $trashed
      );
      $this->db->where('id',$id);
      return $this->db->update('news', $data);
  }

  public function delete($id){
    $this->db->where('id',$id);
    return $this->db->delete('news');
  }
}
