<?php
      namespace Olegg\UnitBase\Model;
      class UnitBase extends \ModernWays\Mvc\Model{
            private $name;
            private $description;
            private $shippingcostmultiplier;
            private $code;
            private $id;
            
            public function getName(){
                  return $this->name;
            }
            
            public function getDescription(){
                  return $this->description;
            }
            
            public function getShippingCostMultiplier(){
                  return $this->shippingcostmultiplier;
            }
            
            public function getCode(){
                return $this->code;
            }
            
            public function getId(){
                  return $this->id;
            }
            
            public function setName($pName){
                  (strlen($pName)>0&&preg_match("/^[a-zA-Z 0-9]*$/",$pName))? $this->name = $pName : $this->name ="";
            }
            
            public function setDescription($pDescription){
                  $this->description = $pDescription;
            }
            
            public function setShippingCostMultiplier($pShippingCostMultiplier){
                  $this->shippingcostmultiplier = $pShippingCostMultiplier;
            }
            
            public function setCode($pCode){
                (strlen($pCode)>0 && strlen($pCode)<3 && preg_match("/^[a-zA-Z]*$/",$pCode))? $this->code = $pCode : $this->Code ="";
            }
            
            public function setId($pId){
                  $this->id = $pId;
            }
      }
?>