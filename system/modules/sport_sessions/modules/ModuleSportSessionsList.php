<?php
 
namespace Contao;
 
/**
 * Custom module to manage sports sessions - Class ModuleSportSession
 * @author : Richard Rabillon - richard.rabillon@live.fr - 2016 
 * Lets do the Class :)
 */

/**
 * Class ModuleSportSession
 *
 * Front end module "Sport Sessions".
 */
class ModuleSportSessionsList extends \Module
{
 
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_sport_sessions';
 
 
    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
 
            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['sports_sessions'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;
 
            return $objTemplate->parse();
        }
 
        return parent::generate();
    }
 
 
    /**
     * Generate the module
     */
    protected function compile()
    {
        $objSportSessions = $this->Database->execute("SELECT * FROM tl_sport_sessions");
 
        // Return if no SportSessions were found
        if (!$objSportSessions->numRows)
        {
            return;
        }
 
        $arrSportSessions = array();
 
        // Generate SportsSessions
        while ($objSportSessions->next())
        {
 
            $arrSportSessions[] = array
            (
                'title' => $objSportSessions->title,
                'description' => $objSportSessions->description,
                'begin_date' => $objSportSessions->begin_date,
                'end_date' => $objSportSessions->end_date,
                'nbr_participants' => $objSportSessions->nbr_participants
            );
        }
 
        $this->Template->sportSessions = $arrSportSessions;
    }
}