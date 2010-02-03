<?php
/**
 * bookmark_persistentdocument_bookmark
 * @package bookmark
 */
class bookmark_persistentdocument_bookmark extends bookmark_persistentdocument_bookmarkbase implements indexer_IndexableDocument
{
	/**
	 * Get the indexable document
	 *
	 * @return indexer_IndexedDocument
	 */
	public function getIndexedDocument()
	{
		$indexedDoc = new indexer_IndexedDocument();
		$indexedDoc->setId($this->getId());
		$indexedDoc->setDocumentModel('modules_bookmark/bookmark');
		$indexedDoc->setLabel($this->getLabel());
		$indexedDoc->setLang(RequestContext::getInstance()->getLang());
		$indexedDoc->setText($this->getTitle() . ' ' . $this->getComment()  . ' ' . $this->getIndexedTextFromImage());
		return $indexedDoc;
	}

	private function getIndexedTextFromImage()
	{
		if (is_null($this->getImage()))
		{
			return '';
		}
		$indexedDocument = $this->getImage()->getIndexedDocument();
		return $indexedDocument->getLabel() . ' ' . $indexedDocument->getText();
	}
	
	public function getImageAltComputed()
	{
		if ($this->getUseImageAlt())
		{
			return $this->getImage()->getTitle();
		}
		return $this->getImageAlt();
	}
}