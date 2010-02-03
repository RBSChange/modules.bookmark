<?php
class bookmark_PreferencesScriptDocumentElement extends import_ScriptDocumentElement
{
    /**
     * @return bookmark_persistentdocument_preferences
     */
    protected function initPersistentDocument()
    {
    	$document = ModuleService::getInstance()->getPreferencesDocument('bookmark');
    	return ($document !== null) ? $document : bookmark_PreferencesService::getInstance()->getNewDocumentInstance();
    }
}