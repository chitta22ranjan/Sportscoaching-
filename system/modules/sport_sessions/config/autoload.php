<?php
 
/**
 * Custom module to manage sports sessions - autoloader
 * @author : Richard Rabillon - richard.rabillon@live.fr - 2016 
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Contao\ModuleSportSessionsList' => 'system/modules/sport_sessions/modules/ModuleSportSessionsList.php'
));
 
 
/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_sport_sessions' => 'system/modules/sport_sessions/templates/modules'
));