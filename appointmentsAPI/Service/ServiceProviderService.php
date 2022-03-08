<?php
require_once PROJECT_ROOT_PATH."/Model/Database.php";
require_once PROJECT_ROOT_PATH."/Model/ServiceProviderModel.php";
class ServiceProviderService extends Database {
    public function getServiceProviders()
    {
        $serviceProviders = [];
        $rows = $this->select("SELECT sp.ServiceProviderId,sp.CompanyId, sp.ProviderName, c.CompanyId, c.CompanyName ,
        c.CompanyAddress  FROM serviceprovider sp join company c on sp.CompanyId = c.companyId ORDER BY ServiceProviderId");
      
        foreach ($rows as $row) {
            $serviceProviderModel = new ServiceProviderModel();
            
            $serviceProviderModel->setServiceProviderId($row["ServiceProviderId"]);
            $serviceProviderModel->setCompanyId($row["CompanyId"]);
            $serviceProviderModel->setProviderName($row["ProviderName"]);
            
            $companyModel = new CompanyModel();
            $companyModel->setCompanyId($row["CompanyId"]);
            $companyModel->setCompanyName($row["CompanyName"]);
            $companyModel->setCompanyAddress($row["CompanyAddress"]);
            array_push($serviceProviders, $serviceProviderModel);
        }

        return $rows ;
    }
    
    public function getServiceProvider($id)
    {
        $companyModel = new CompanyModel();
        $rows = $this->select("SELECT * FROM company WHERE CompanyId = ?", ["i", $id]);
        foreach ($rows as $row) {
            $companyModel->setCompanyId($row["CompanyId"]);
            $companyModel->setCompanyName($row["CompanyName"]);
            $companyModel->setCompanyAddress($row["CompanyAddress"]);
        }
         
        return $rows;
    }
}
?>
