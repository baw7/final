<?php
class homepage extends http\controller
{
    public static function show()
    {
        $templateData['site_name'] = 'Brianna Wong - IS 601 Final Project';
        self::getTemplate('homepage', $templateData);
    }
    public static function create()
    {
        print_r($_POST);
    }
}
?>
