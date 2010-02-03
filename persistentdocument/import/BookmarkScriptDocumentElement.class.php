<?php
class bookmark_BookmarkScriptDocumentElement extends import_ScriptDocumentElement
{
    /**
     * @return bookmark_persistentdocument_bookmark
     */
    protected function initPersistentDocument()
    {
        return bookmark_BookmarkService::getInstance()->getNewDocumentInstance();
    }
}