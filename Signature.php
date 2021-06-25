<?php
class Signature{
    const MAJOR = 'major';
    const MINOR = 'minor';

    public static function fullKeyName(string $_fullName)
    {
        $diviseName = explode('in', $_fullName);
        $lenth = count($diviseName);
        $wordToTest = trim($diviseName[$lenth-1]);
        if (ctype_lower($wordToTest)) {
            echo $diviseName[0] . ' in '  .  ucfirst($wordToTest)  .  self::MINOR;
            return $diviseName[0] . ' in '  .  ucfirst($wordToTest)  .  self::MINOR;
         }else {
            echo $diviseName[0] . ' in '  .  ucfirst($wordToTest)  .  self::MAJOR;
            return $diviseName[0] . ' in '  .  ucfirst($wordToTest)  .  self::MAJOR;
         }
    }
}
$names = 'Sonata in eb';
Signature::fullKeyName($names);