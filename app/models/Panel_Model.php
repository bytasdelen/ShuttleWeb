<?php

class Panel_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function select() {
        $sql = "SELECT * FROM table";
        return $this->db->select($sql);
    }

    public function insert($data) {
        return ($this->db->insert("table", $data));
    }

    public function update($data, $gelenid) {
        return ($this->db->update("table", $data, "table_id=$gelenid"));
    }

    public function delete($gelenid) {
        return ($this->db->delete("table", "table_id=$gelenid"));
    }

    public function userselect($kadi, $sifre) {
        $sql = "SELECT id FROM personel WHERE ad_soyad='$kadi' AND  sifre='$sifre'";
        error_log($sql);
        return $this->db->select($sql);
    }

}

?>
