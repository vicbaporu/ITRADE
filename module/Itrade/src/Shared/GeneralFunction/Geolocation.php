<?php 

namespace Shared\GeneralFunction;
 
class Geolocation
{
    
  public $mx_options = array(         
        array('id' => 'MEX-AGS','value' => 'AGS', 'label' => 'Aguascalientes'),
        array('id' => 'MEX-BCN','value' => 'BCN', 'label' => 'Baja California Norte'),
        array('id' => 'MEX-BCS','value' => 'BCS', 'label' => 'Baja California Sur'),
        array('id' => 'MEX-CAM','value' => 'CAM', 'label' => 'Campeche'),
        array('id' => 'MEX-CHIS','value' => 'CHIS', 'label' => 'Chiapas'),
        array('id' => 'MEX-CHIH','value' => 'CHIH', 'label' => 'Chihuahua'),
        array('id' => 'MEX-COAH','value' => 'COAH', 'label' => 'Coahuila'),
        array('id' => 'MEX-COL','value' => 'COL', 'label' => 'Colima'),
        array('id' => 'MEX-DF','value' => 'DF', 'label' => 'Distrito Federal'),
        array('id' => 'MEX-DGO','value' => 'DGO', 'label' => 'Durango'),
        array('id' => 'MEX-GTO','value' => 'GTO', 'label' => 'Guanajuato'),
        array('id' => 'MEX-GRO','value' => 'GRO', 'label' => 'Guerrero'),
        array('id' => 'MEX-HGO','value' => 'HGO', 'label' => 'Hidalgo'),
        array('id' => 'MEX-JAL','value' => 'JAL', 'label' => 'Jalisco'),
        array('id' => 'MEX-EDM','value' => 'EDM', 'label' => 'Estado de México'),
        array('id' => 'MEX-MICH','value' => 'MICH', 'label' => 'Michoacán'),
        array('id' => 'MEX-MOR','value' => 'MOR', 'label' => 'Morelos'),
        array('id' => 'MEX-NAY','value' => 'NAY', 'label' => 'Nayarit'),
        array('id' => 'MEX-NL','value' => 'NL', 'label' => 'Nuevo León'),
        array('id' => 'MEX-OAX','value' => 'OAX', 'label' => 'Oaxaca'),
        array('id' => 'MEX-PUE','value' => 'PUE', 'label' => 'Puebla'),
        array('id' => 'MEX-QRO','value' => 'QRO', 'label' => 'Querétaro'),
        array('id' => 'MEX-QROO','value' => 'QROO', 'label' => 'Quintana Roo'),
        array('id' => 'MEX-SLP','value' => 'SLP', 'label' => 'San Luis Potosí'),
        array('id' => 'MEX-SIN','value' => 'SIN', 'label' => 'Sinaloa'),
        array('id' => 'MEX-SON','value' => 'SON', 'label' => 'Sonora'),
        array('id' => 'MEX-TAB','value' => 'TAB', 'label' => 'Tabasco'),
        array('id' => 'MEX-TAMPS','value' => 'TAMPS', 'label' => 'Tamaulipas'),
        array('id' => 'MEX-TLAX','value' => 'TLAX', 'label' => 'Tlaxcala'),
        array('id' => 'MEX-VER','value' => 'VER', 'label' => 'Veracruz'),
        array('id' => 'MEX-YUC','value' => 'YUC', 'label' => 'Yucatán'),
        array('id' => 'MEX-ZAC','value' => 'ZAC', 'label' => 'Zacatecas'),
  );
   
    public static function getMexicoStates(){
        
        $gelocation = new Geolocation();
        
        $states = $gelocation->mx_options;
        
        $mexico_states = array();
        foreach ($states as $state){
            $key = strtolower($state['label']);
            $mexico_states[$key] = $state['label'];
        }
        
        return $mexico_states;
        
        
    }
      
}