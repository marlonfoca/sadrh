<?php 
  class ManageLevel{
        const ADMIN = 04;
        const COMUM = 02;
        
        private $niveisUsuario;
   
        public static function getLevel($nivelUsuario)
        {
            $niveisUsuario['ADMIN'] = 04;
            $niveisUsuario['COMUM'] = 02;
            return isset($niveisUsuario[$nivelUsuario]) ? $niveisUsuario[$nivelUsuario] : null;
        }
  }