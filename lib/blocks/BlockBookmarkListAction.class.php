<?php
/**
 * @date Mon Jun 11 09:30:31 CEST 2007
 * @author INTcoutL
 */

class bookmark_BlockBookmarkListAction extends abstractdirectory_BlockListAction
{
	public function initialize($context, $request)
	{
		parent::initialize($context, $request);
		$this->setModuleName('bookmark');
		$this->setComponentName('bookmark');
	}
}