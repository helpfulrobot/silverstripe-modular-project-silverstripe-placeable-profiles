<?php
/**
 * Description
 *
 * @package silverstripe
 * @subpackage mysite
 */
class PlaceableProfile extends DataObject
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Profile';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Profiles';

    /**
     * Database fields
     * @var array
     */
    private static $db = array(
        'Title' => 'Text',
        'Role' => 'Text',
        'Email' => 'Text',
        'Phone' => 'Text',
        'Mobile' => 'Text',
        'Description' => 'HTMLText'
    );

    /**
     * Has_one relationship
     * @var array
     */
    private static $has_one = array(
        'Image' => 'Image'
    );

    /**
     * Defines summary fields commonly used in table columns
     * as a quick overview of the data for this dataobject
     * @var array
     */
    private static $summary_fields = array(
        'Image.CMSThumbnail' => 'Image',
        'Title' => 'Name',
        'Email' => 'Email',
        'Phone' => 'Phone',
        'Mobile' => 'Mobile'
    );

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
                UploadField::create(
                    'Image',
                    _t('Placeable.PROFILEIMAGE', 'Image')
                )->setFolderName('Person'),
                TextField::create(
                    'Title',
                    _t('Placeable.PROFILENAME', 'Name')
                ),
                TextField::create(
                    'Role',
                    _t('Placeable.PROFILEROLE', 'Role')
                ),
                TextField::create(
                    'Email',
                    _t('Placeable.PROFILEEMAIL', 'Email')
                ),
                TextField::create(
                    'Phone',
                    _t('Placeable.PROFILEPHONE', 'Phone')
                ),
                TextField::create(
                    'Mobile',
                    _t('Placeable.PROFILEMOBILE', 'Mobile')
                ),
                HTMLEditorField::create(
                    'Description',
                    _t('Placeable.PROFILEDESCRIPTION', 'Description')
                )
            )
        );
        return $fields;
    }

    /**
     * Creating Permissions
     * @return boolean
     */
    public function canCreate($member = null)
    {
        return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
    }

    /**
     * Editing Permissions
     * @return boolean
     */
    public function canEdit($member = null)
    {
        return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
    }

    /**
     * Deleting Permissions
     * @return boolean
     */
    public function canDelete($member = null)
    {
        return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
    }

    /**
     * Viewing Permissions
     * @return boolean
     */
    public function canView($member = null)
    {
        return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
    }
}
