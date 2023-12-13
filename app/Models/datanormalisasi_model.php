<?php 
namespace App\Models;
use CodeIgniter\Model;

class datanormalisasi_model extends Model
{
    protected $table = 'konversi_penilaian';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilnormalisasi()
    {
        $dataquery1=$this->db->query("select SQRT(SUM(POW(C1,2))) as maxminK1, SQRT(SUM(POW(C2,2))) as maxminK2, SQRT(SUM(POW(C3,2))) as maxminK3,SQRT(SUM(POW(C4,2))) as maxminK4,SQRT(SUM(POW(C5,2))) as maxminK5,SQRT(SUM(POW(C6,2))) as maxminK6,SQRT(SUM(POW(C7,2))) as maxminK7 from konversi_penilaian");
        $rdataquery1=$dataquery1->getResult();
        // $dataquery3=$this->db->query("select max(C1) as maxminK1, min(C2) as maxminK2, min(C3) as maxminK3,max(C4) as maxminK4,max(C5) as maxminK5,max(C6) as maxminK6,max(C7) as maxminK7 from konversi_penilaian");
        // $rdataquery3=$dataquery3->getResult();

        $dataquery2=$this->db->query("select * from konversi_penilaian");
        $rdataquery2=$dataquery2->getResult();

        return array('maxmin' => $rdataquery1, 'all' => $rdataquery2);
    }

    
}