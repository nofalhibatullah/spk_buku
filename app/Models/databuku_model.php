<?php 
namespace App\Models;
use CodeIgniter\Model;

class databuku_model extends Model
{
    protected $table = 'data_buku';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        $dataquery=$this->db->query("select * from data_buku");
        return $dataquery->getResult();
    }

    
}