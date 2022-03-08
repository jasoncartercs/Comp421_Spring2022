<?php
class CompanyModel
{
    private $companyId;
    public function setCompanyId($companyId){
        $this->$companyId = $companyId;
    }
    
    public function getCompanyId(){
        return $this->$companyId;
    }
    
    private $companyName;
    public function setCompanyName($companyName){
        $this->$companyName = $companyName;
    }
    
    public function getCompanyName(){
        return $this->$companyName;
    }
    
    private $companyAddress;
    public function setCompanyAddress($companyAddress){
        $this->$companyAddress = $companyAddress;
    }
    
    public function getCompanyAddress(){
        return $this->$companyAddress;
    }
}
?>