<?php

class ServiceProviderModel 
{
    private $companyId;
    public function setCompanyId($companyId){
        $this->$companyId = $companyId;
    }
    
    public function getCompanyId(){
        return $this->$companyId;
    }
    
    private $companyModel;
    public function setCompanyModel($companyModel){
        $this->$companyModel = $companyModel;
    }
    
    public function getCompanyModel(){
        return $this->$companyModel;
    }
    
    private $providerName;
    public function setProviderName($providerName){
        $this->$providerName = $providerName;
    }
    
    public function getProviderName(){
        return $this->$providerName;
    }
    
    private $serviceProviderId;
    public function setServiceProviderId($serviceProviderId){
        $this->$serviceProviderId = $serviceProviderId;
    }
    
    public function getServiceProviderId(){
        return $this->$serviceProviderId;
    }
}
?>