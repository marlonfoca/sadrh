<?php

class Func {

    public static function converteDataToMysql($data) {

        $new_data = explode("/", $data);
        if (count($new_data) == 3) {

            $new_data = array_reverse($new_data);
            $new_data = implode("-", $new_data);
            return $new_data;
        }
        return $data;
    }

    public static function somaColuna($array, $coluna) {
        $valor = 0;
         foreach ($array as $value) {
        if (isset($value[$coluna])) {
           
                $valor+=$value[$coluna];
            }
           
        }
         return $valor;
    }

    public static function converteDataFromMysql($data) {

        $new_data = explode("-", $data);
        if (count($new_data) == 3) {
            $new_data = array_reverse($new_data);
            $new_data = implode("/", $new_data);
            return $new_data;
        }
        return $data;
    }

    public static function converteMoedaBrToPhp($valor) {
        $v = str_replace(".", "", $valor);
        $v = str_replace(",", ".", $v);
        return $v;
    }

    public static function converteDateTimeToMysql($data) {
        $new_data = explode(" ", $data);
        $new_data[0] = explode("/", $new_data[0]);
        $new_data[0] = array_reverse($new_data[0]);
        $new_data[0] = implode("-", $new_data[0]);
        $new_data = implode(" ", $new_data);
        return $new_data;
    }

    public static function converteDateTimeFromMysql($data) {
        $new_data = explode(" ", $data);
        $new_data[0] = explode("-", $new_data[0]);
        $new_data[0] = array_reverse($new_data[0]);
        $new_data[0] = implode("/", $new_data[0]);
        $new_data = implode(" ", $new_data);
        return $new_data;
    }

    public static function converteDateTimeToDateFromMysql($data) {
        $new_data = explode(" ", $data);
        $new_data[0] = explode("-", $new_data[0]);
        $new_data[0] = array_reverse($new_data[0]);
        $new_data[0] = implode("/", $new_data[0]);

        return $new_data[0];
    }

    /**
     * 
     * @param type $data
     * @return string com dia da seman
     */
    public static function nomeDiaSemanaPorData($data) {

        $data = Func::converteDataToMysql($data);
        switch (date('w', strtotime($data))) {
            case 0: return 'Domingo';
                break;
            case 1: return 'Segunda-feira';
                break;
            case 2: return 'Terça-feira';
                break;
            case 3: return 'Quarta-feira';
                break;
            case 4: return 'Quinta-feira';
                break;
            case 5: return 'Sexta-feira';
                break;
            case 6: return 'Sábado';
                break;
        }
    }

    public static function nomeDiaSemanaAbrevPorData($data) {
        $data = Func::converteDataToMysql($data);
        switch (date('w', strtotime($data))) {
            case 0: return 'Dom';
                break;
            case 1: return 'Seg';
                break;
            case 2: return 'Ter';
                break;
            case 3: return 'Qua';
                break;
            case 4: return 'Qui';
                break;
            case 5: return 'Sex';
                break;
            case 6: return 'Sáb';
                break;
        }
    }

    /**
     * 
     * @param int $dia ( 0 a 6)
     * @return string com nome Domingo a Sábado
     * 
     */
    /*
      public static function GetDiaSemana($dia) {

      switch($dia) {
      case 0: return 'Domingo'; break;
      case 1: return 'Segunda'; break;
      case 2: return 'Terça'; break;
      case 3: return 'Quarta'; break;
      case 4: return 'Quinta'; break;
      case 5: return 'Sexta';break;
      case 6: return 'Sábado'; break;
      }
      }
     */
    public static function getList($type, $code = NULL) {
        $_items = array(
            'dia' => array(
                '0' => 'Domingo',
                '1' => 'Segunda',
                '2' => 'Terça',
                '3' => 'Quarta',
                '4' => 'Quinta',
                '5' => 'Sexta',
                '6' => 'Sábado',
            ),
            'diaAbrev' => array(
                '0' => 'Dom',
                '1' => 'Seg',
                '2' => 'Ter',
                '3' => 'Qua',
                '4' => 'Qui',
                '5' => 'Sex',
                '6' => 'Sáb',
            ),
            'tipoAgenda' => array(
                '0' => 'Horário definido',
                '1' => 'Livre demanda',
            ),
            'ativoSimNao' => array(
                '0' => 'NÃO',
                '1' => 'SIM',
            ),
            'simNao' => array(
                '0' => 'NÃO',
                '1' => 'SIM',
            ),
            'manhaTarde' => array(
                '< 12:00' => 'Manhã',
                '>= 12:00' => 'Tarde',
            )
        );
        if (isset($code))
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        else
            return isset($_items[$type]) ? $_items[$type] : false;
    }

    public static function getSimNao($type, $code = NULL) {
        $_items = array(
            'ativoSimNao' => array(
                '0' => 'NÃO',
                '1' => 'SIM',
            ),
        );
        if (isset($code))
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        else
            return isset($_items[$type]) ? $_items[$type] : false;
    }

    public static function limpaCPF_CNPJ($valor){
        $valor = trim($valor);
        $valor = str_replace(".", "", $valor);
        $valor = str_replace(",", "", $valor);
        $valor = str_replace("-", "", $valor);
        $valor = str_replace("/", "", $valor);
        $valor = str_replace(" ", "", $valor);
        return $valor;
    }

    public static function mask($val, $mask){
        $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++){
            if($mask[$i] == '#'){
                if(isset($val[$k]))
                    $maskared .= $val[$k++];
            }
            else{
                if(isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }

    public static function conveteSimNao($i){
        switch ($i) {
            case 0:
                $i = 'Não';
                return $i;
                break;
            case 1:
                $i = 'Sim';
                return $i;
                break;
        }
    }

    public static function getGenderOptions(){
                return array('1' => 'Sim', '0' => 'Não');
            }   


    public static function isAjaxRequest(){
                if (Yii::app()->request->isAjaxRequest) {
                    $cs = Yii::app()->clientScript;
                    $cs->scriptMap['jquery.js'] = false;
                    $cs->scriptMap['jquery.min.js'] = false;
                    $cs->scriptMap['jquery.yiigridview.js'] = false;
                    $cs->scriptMap['bootstrap.js'] = false;
                }
            }
}