<?php
/**
 * Description
 *
 * @package silverstripe
 * @subpackage mysite
 */
class ProfilesBlock extends BlockObject
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Profiles';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Profiles';

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab(
            'Root.Main',
            array(

            )
        );
        return $fields;
    }
}
class PreviewsBlock_Controller extends BlockObject_Controller
{
    public function init() {
        parent::init();
    }
}
class PreviewsBlock_Preset extends BlockObject_Preset
{

}
