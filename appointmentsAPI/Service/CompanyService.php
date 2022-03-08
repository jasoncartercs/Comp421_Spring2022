<?php
require_once PROJECT_ROOT_PATH."/Model/Database.php";
class CompanyService extends Database {
    public function getCompanies()
    {
        $rows = $this->select("SELECT * FROM company ORDER BY CompanyId");
        return $rows;
    }
    
    public function getCompany($id)
    {
        $rows = $this->select("SELECT * FROM company WHERE CompanyId = ?", ["i", $id]);
        return $rows;
    }
}
?>
