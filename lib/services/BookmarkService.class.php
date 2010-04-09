<?php
/**
 * @date Wed, 06 Jun 2007 17:53:40 +0200
 * @author intcoutl
 */
class bookmark_BookmarkService extends f_persistentdocument_DocumentService
{
	/**
	 * @var bookmark_BookmarkService
	 */
	private static $instance;
	
	/**
	 * @return bookmark_BookmarkService
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
	 * @return bookmark_persistentdocument_bookmark
	 */
	public function getNewDocumentInstance()
	{
		return $this->getNewDocumentInstanceByModelName('modules_bookmark/bookmark');
	}

	/**
	 * Create a query based on 'modules_bookmark/bookmark' model
	 * @return f_persistentdocument_criteria_Query
	 */
	public function createQuery()
	{
		return $this->pp->createQuery('modules_bookmark/bookmark');
	}

	/**
	 * @see f_persistentdocument_DocumentService::getResume()
	 *
	 * @param bookmark_persistentdocument_bookmark $document
	 * @param string $forModuleName
	 * @param array $allowedSections
	 * @return array
	 */
	public function getResume($document, $forModuleName, $allowedSections = null)
	{
		$data = parent::getResume($document, $forModuleName, $allowedSections);
		$data['properties']['url'] = $document->getUrl();
		return $data;
	}
}