<?php
namespace Olegg\UnitBase\Controller;
class Home extends \ModernWays\Mvc\Controller{
      
      private $pdo;
      
    public function __construct(\ModernWays\Mvc\Route $route = null, \ModernWays\Dialog\Model\INoticeBoard $noticeBoard = null){
          parent::__construct($route,$noticeBoard);
          try{
            $this->pdo = new \PDO('mysql:host=localhost;dbname=unitbase;charset=utf8','olegg','');
          }catch(\Exception $e){
                echo '<script type="text/javascript"> alert("'.$e->getMessage().'")</script>';
          }
            
      }
      
      public function editing(){
            if($this->pdo){
                  $result = $this->pdo->prepare("call UnitBaseSelectAll");
                  $result->execute();
                  $model = new \Olegg\UnitBase\Model\UnitBase();
                  $model->setList($result->fetchAll(\PDO::FETCH_ASSOC));
                  return $this->view('Home','Editing',$model);
            }
      }
      
      public function ReadingOne(){
          if($this->pdo){
                  $model = new \Olegg\UnitBase\Model\UnitBase();
                  $result = $this->pdo->prepare("call UnitBaseSelectAll");
                  $result->execute();
                  $model->setList($result->fetchAll(\PDO::FETCH_ASSOC));
                  $model->setId($this->route->getId());
                  $pdo2 = new \PDO('mysql:host=localhost;dbname=unitbase;charset=utf8','olegg','');
                  $statement = $pdo2->prepare("call UnitBaseSelectOne(:pId)"); 
                  $statement->bindValue(':pId', $model->getId(), \PDO::PARAM_INT);
                  $statement->execute();
                  $untiBaseOne = $statement->fetch(\PDO::FETCH_ASSOC);
                  $model->setName($untiBaseOne['Name']);
                  $model->setDescription($untiBaseOne['Description']);
                  $model->setShippingCostMultiplier($untiBaseOne['ShippingCostMultiplier']);
                  $model->setCode($untiBaseOne['Code']);
                  return $this->view('Home','ReadingOne', $model);
            }
      }
      
      public function inserting(){
            $result = $this->pdo->prepare("call UnitBaseSelectAll");
            $result->execute();
            $model = new \Olegg\UnitBase\Model\UnitBase();
            $model->setList($result->fetchAll(\PDO::FETCH_ASSOC));
            return $this->view('Home','Inserting',$model);
      }
      
      public function insert(){
            if($this->pdo){
                  $model = new \Olegg\UnitBase\Model\UnitBase();
                  $model->setName($_POST['UnitBaseName']);
                  $model->setDescription($_POST['UnitBaseDescription']);
                  $model->setShippingCostMultiplier($_POST['UnitBaseShippingCostMultiplier']);
                  $model->setCode($POST['UnitBaseCode']);
                  $command = $this->pdo->prepare(
                      'call UnitBaseInsert(:pName,:pDescription,:pShippingCostMultiplier,:pCode,@pId)');
                  $command->bindValue(':pName',$model->getName(),\PDO::PARAM_STR);
                  $command->bindValue(':pDescription',$model->getDescription(),\PDO::PARAM_STR);
                  $command->bindValue(':pShippingCostMultiplier',$model->getShippingCostMultiplier(),\PDO::PARAM_STR);
                  $command->bindValue(':pCode',$model->getCode(),\PDO::PARAM_STR);
                  $command->execute();
                  return $this->editing();
            }
      }
      
      public function updating() {
            if($this->pdo){
                  $model = new \Programmeren4\Article\Model\Article();
                  $model->setId($this->route->getId());
                  $statement = $this->pdo->prepare("call ArticleSelectOne(:pId)"); 
                  $statement->bindValue(':pId', $model->getId(), \PDO::PARAM_INT);
                  $statement->execute();
                  $articleOne = $statement->fetch(\PDO::FETCH_ASSOC);
                  $model->setName($articleOne['Name']);
                  $model->setPurchaseDate($articleOne['PurchaseDate']);
                  $model->setPrice($articleOne['Price']);
                  return $this->view('Home','Updating', $model);
            }
    }
}