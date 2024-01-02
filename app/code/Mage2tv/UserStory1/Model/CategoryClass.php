<?php
namespace Mage2tv\UserStroy1\Model;

class CategoryClass implements \Magento\Catalog\Api\Data\CategoryInterface {
    protected $id;
    protected $name;
    protected $parentId;
    public function getId() {
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getParentId(){
        return $this->parentId;
    }
    public function setParentId($parentId){
        $this->parentId = $parentId;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getIsActive(){
        return null;
    }
    public function setIsActive($isActive){}
    public function getPosition(){
        return null;
    }
    public function setPosition($position){}
     public function getLevel(){
        return null;
     }
    public function setLevel($level){}
    public function getChildren(){
        return null;
    }
    public function getCreatedAt(){
        return null;
    }
    public function setCreatedAt($createdAt){}
    public function getUpdatedAt(){
        return null;
    }
    public function setUpdatedAt($updatedAt){}
    public function getPath(){
        return null;
    }
    public function setPath($path){}
    public function getAvailableSortBy(){
        return null;
    }
    public function setAvailableSortBy($availableSortBy){}
    public function getIncludeInMenu(){
        return null;
    }
    public function setIncludeInMenu($includeInMenu){}
    public function getExtensionAttributes(){
        return null;
    }
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes){}
}