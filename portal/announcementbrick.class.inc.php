<?php

namespace Knowitop\Portal\Brick;

use \DOMFormatException;
use \Combodo\iTop\DesignElement;
use \Combodo\iTop\Portal\Brick\PortalBrick;

/**
 * Description of AnnouncementBrick
 *
 * @author Vladimir Kunin
 */
class AnnouncementBrick extends PortalBrick
{
    const DEFAULT_WIDTH = 12;
    const DEFAULT_VISIBLE_HOME = true;
    const DEFAULT_VISIBLE_NAVIGATION_MENU = false;
    const DEFAULT_TILE_TEMPLATE_PATH = 'knowitop-portal-announcement/portal/announcement.html.twig';
    const DEFAULT_OQL = '';

    static $aAlertClasses = array('message_info' => 'info', 'message_error' => 'danger', 'message_ok' => 'success', 'message_warning' => 'warning');
    protected $sOql;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->sOql = static::DEFAULT_OQL;
    }

    /**
     * @return string - Active announcements OQL
     */
    public function GetOql()
    {
        return $this->sOql;
    }

    /**
     * @param string $sOql - Active announcements OQL
     * @return AnnouncementBrick $this
     */
    public function SetOql($sOql)
    {
        $this->sOql = $sOql;
        return $this;
    }

    /**
     * @param \Silex\Application $oApp
     * @return array
     */
    public function GetAnnouncements($oApp) {
        $aData = array();
        $oQuery = \DBSearch::FromOQL($this->GetOql());
        $oScopeQuery = $oApp['scope_validator']->GetScopeFilterForProfiles(\UserRights::ListProfiles(), $oQuery->GetClass(), UR_ACTION_READ);
        if ($oScopeQuery !== null)
        {
            $oQuery = $oQuery->Intersect($oScopeQuery);
            if ($oScopeQuery->IsAllDataAllowed())
            {
                $oQuery->AllowAllData();
            }
        }
        $oSet = new \DBObjectSet($oQuery);
        while ($oAnnouncement = $oSet->Fetch()) {
            $aData[] = array(
                'title' => $oAnnouncement->Get('title'),
                'text' => $oAnnouncement->Get('description'),
                'type' => static::$aAlertClasses[$oAnnouncement->Get('message_type')]
            );
        }
        return $aData;
    }


    /**
     * @param \Combodo\iTop\DesignElement $oMDElement
     * @return AnnouncementBrick $this
     *
     * @throws DOMFormatException
     */
    public function LoadFromXml(DesignElement $oMDElement)
    {
        parent::LoadFromXml($oMDElement);

        foreach ($oMDElement->GetNodes('./*') as $oBrickSubNode)
        {
            switch ($oBrickSubNode->nodeName)
            {
                case 'oql':
                    // Active Announcements Oql
                    $sOql = $oBrickSubNode->GetText(self::DEFAULT_OQL);
                    $this->SetOql($sOql);
                    break;
            }
        }
        if ($this->GetOql() === '')
        {
            throw new DOMFormatException('AnnouncementBrick : must have a valid <oql> tag', null, null, $oMDElement);
        }

        return $this;
    }

}

?>