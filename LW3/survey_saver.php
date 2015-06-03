<?php
    require_once(dirname(__FILE__) . '/include/request.inc.php');
    header('Content-Type: text/plain');
    require_once ('include/string.inc.php');
    
    $email= GetSurveyFilePath($email);
    $survey = GetSurveyFromRequest();
    
    if ( $survey['email'] == '')
    {
        exit();
    } 
    
    if (!empty($survey))
    {
         SaveSurveyToFile($survey);
    }
    
    buildLayout('survey_saver_echo.html', $vars); 