<?php
/**
 * bookmark_persistentdocument_preferences
 * @package bookmark
 */
class bookmark_persistentdocument_preferences extends bookmark_persistentdocument_preferencesbase 
{
	/**
	 * @see f_persistentdocument_PersistentDocumentImpl::getLabel()
	 *
	 * @return String
	 */
	public function getLabel()
	{
		return f_Locale::translateUI(parent::getLabel());
	}
}