<?php
class IpAdressValidation
{
    const ERROR_IP_NON_VALID = 'the specified IP adress isn\'t valid'; 
    const ERROR_IP_OUT_OF_RANGE = 'the specified IP IS OUT OF RANGE'; 
    const ERROR_IP_LENTH = 'the specified IP not valid'; 
    /**
     * test if its really IPV4
     */
    public static function isIpv4(string $_params)
    {
     
        
        $ipParams = explode('.',$_params);
        // test la taille de l'adresse IPv4
        if(count($ipParams) == 4){
        foreach($ipParams as $numbers){
           if (IpAdressValidation::checkValidIpSequences($numbers) == false) {

            return false;
           }
        }
        }else{
            echo IpAdressValidation::ERROR_IP_LENTH;
            return false;
        }


        return true;
    }

    /**
     * check if number in range 0-255
     * check if number is an ip valid
     */
    public static function checkValidIpSequences($_ipParams)
    {
        $validIpNumbers = range(0,255);

        if (in_array($_ipParams, $validIpNumbers)) {
            if (strlen($_ipParams)>1 && $_ipParams[0] == 0){
                echo IpAdressValidation::ERROR_IP_NON_VALID;

                return false;
            }
            echo $_ipParams;
            echo '<br>';

        }else{
            echo IpAdressValidation::ERROR_IP_OUT_OF_RANGE;
            
            return false;
        }

        return true;
    }
    
}

//test function
// $ip = "1.2.3.4.5";
$ip = "123.45.67.89";
// $ip = "123.156.78";
IpAdressValidation::isIpv4($ip);