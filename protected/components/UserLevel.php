<?php 
  class UserLevel extends CWebUser
  {
              protected $_model;
   
              public function isInRole($nomeRegra){
                          $usuario = $this->loadUser();
                          $nivelRegra = ManageLevel::getLevel($nomeRegra); 
                           if ($usuario && $nivelRegra)
                                return $usuario->nivel==$nivelRegra;
                          return false;
      }
   
              protected function loadUser(){
                          if ($this->_model === null) {
                                     $this->_model = Usuarios::model()->findByPk(array('id'=>$this->id));
                          }
                          return $this->_model;
              }
  }