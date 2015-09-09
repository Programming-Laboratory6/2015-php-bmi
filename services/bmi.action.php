<?php
    class BMIService{
        public static function getIndex($weigth, $height){
            return $weigth / ($height * $height);
        }
    }
?>