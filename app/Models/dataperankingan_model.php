<?php 
namespace App\Models;
use CodeIgniter\Model;

class dataperankingan_model extends Model
{
    protected $table = 'konversi_penilaian';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilranking()
    {
        $dataquery1 = $this->db->query("select SQRT(SUM(POW(C1,2))) as maxminK1, SQRT(SUM(POW(C2,2))) as maxminK2, SQRT(SUM(POW(C3,2))) as maxminK3,SQRT(SUM(POW(C4,2))) as maxminK4,SQRT(SUM(POW(C5,2))) as maxminK5,SQRT(SUM(POW(C6,2))) as maxminK6,SQRT(SUM(POW(C7,2))) as maxminK7 from konversi_penilaian");
        $rdataquery1 = $dataquery1->getResult();
        $dataquery4 = $this->db->query("select nilai_bobot as bobot from data_bobot");
        $rdataquery4 = $dataquery4->getResult();

        $dataquery2 = $this->db->query("select * from konversi_penilaian");
        $rdataquery2 = $dataquery2->getResult();
        $dataquery3 = $this->db->query("select * from data_bobot");
        $rdataquery3 = $dataquery3->getResult();

        $dataquery5 = $this->db->query("select nilai_bobot from data_bobot where kode_bobot='C1'");
        $rdataquery5 = $dataquery5->getResult();
        $dataquery6 = $this->db->query("select nilai_bobot from data_bobot where kode_bobot='C2'");
        $rdataquery6 = $dataquery6->getResult();
        $dataquery7 = $this->db->query("select nilai_bobot from data_bobot where kode_bobot='C3'");
        $rdataquery7 = $dataquery7->getResult();
        $dataquery8 = $this->db->query("select nilai_bobot from data_bobot where kode_bobot='C4'");
        $rdataquery8 = $dataquery8->getResult();
        $dataquery9 = $this->db->query("select nilai_bobot from data_bobot where kode_bobot='C5'");
        $rdataquery9 = $dataquery9->getResult();
        $dataquery10 = $this->db->query("select nilai_bobot from data_bobot where kode_bobot='C6'");
        $rdataquery10 = $dataquery10->getResult();
        $dataquery11 = $this->db->query("select nilai_bobot from data_bobot where kode_bobot='C7'");
        $rdataquery11 = $dataquery11->getResult();

        return array(
            'maxmin' => $rdataquery1,
            'all' => $rdataquery2,
            'allbobot' => $rdataquery3,
            'bobot' => $rdataquery4,
            'B1' => $rdataquery5,
            'B2' => $rdataquery6,
            'B3' => $rdataquery7,
            'B4' => $rdataquery8,
            'B5' => $rdataquery9,
            'B6' => $rdataquery10,
            'B7' => $rdataquery11,) ;
    }

    
}