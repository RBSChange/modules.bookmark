<?php
/**
 * @date Thu, 07 Jun 2007 09:19:57 +0200
 * @author intcoutl
 */
class bookmark_PreferencesService extends f_persistentdocument_DocumentService
{
	/**
	 * @var bookmark_PreferencesService
	 */
	private static $instance;

	/**
	 * @return bookmark_PreferencesService
	 */
	public static function getInstance()
	{
		if (self::$instance === null)
		{
			self::$instance = self::getServiceClassInstance(get_class());
		}
		return self::$instance;
	}

	/**
	 * @return bookmark_persistentdocument_preferences
	 */
	public function getNewDocumentInstance()
	{
		return $this->getNewDocumentInstanceByModelName('modules_bookmark/preferences');
	}

	/**
	 * Create a query based on 'modules_bookmark/preferences' model
	 * @return f_persistentdocument_criteria_Query
	 */
	public function createQuery()
	{
		return $this->pp->createQuery('modules_bookmark/preferences');
	}
	
	/**
	 * @param bookmark_persistentdocument_preferences $document
	 * @param Integer $parentNodeId Parent node ID where to save the document (optionnal => can be null !).
	 * @return void
	 */
	protected function preSave($document, $parentNodeId)
	{
		$document->setLabel('&modules.bookmark.bo.general.Module-name;');
	}
}