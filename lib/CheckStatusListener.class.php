<?php
/**
 * @date Mon Jun 25 15:15:36 CEST 2007
 * @author INTcoutL
 */
class bookmark_listener_CheckStatusListener
{

	/**
	 * @param f_persistentdocument_DocumentService $sender
	 * @param array $params
	 */
	public function onPersistentDocumentPublished($sender, $params)
	{
		/*
		$document = $params['document'];
		
		if ( $document->getDocumentModelName() == 'modules_website/page' || $document->getDocumentModelName() == 'modules_website/pageexternal' )
		{
			
			$pp = f_persistentdocument_PersistentProvider::getInstance();
			
			$relations = $pp->getChildRelationBySlaveDocumentId($document->getId(), 'url', 'modules_bookmark/bookmark');
					
			foreach ( $relations as $relation)
			{
				$bookmark = DocumentHelper::getDocumentInstance($relation->getDocumentId1());
				$bookmark->getDocumentService()->publishDocument($bookmark);
			}
			
		}
		*/
	}
	
	/**
	 * @param f_persistentdocument_DocumentService $sender
	 * @param array $params
	 */
	public function onPersistentDocumentUnpublished($sender, $params)
	{
		/*
		$document = $params['document'];
		
		if ( $document->getDocumentModelName() == 'modules_website/page' || $document->getDocumentModelName() == 'modules_website/pageexternal' )
		{
			
			$pp = f_persistentdocument_PersistentProvider::getInstance();
			
			$relations = $pp->getChildRelationBySlaveDocumentId($document->getId(), 'url', 'modules_bookmark/bookmark');
			
			foreach ( $relations as $relation)
			{
				$bookmark = DocumentHelper::getDocumentInstance($relation->getDocumentId1());
				$bookmark->getDocumentService()->publishDocument($bookmark);
			}
			
		}
		*/
		
	}
	

}