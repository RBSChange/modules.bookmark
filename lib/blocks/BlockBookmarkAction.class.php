<?php
/**
 * @date Mon Jun 11 09:30:31 CEST 2007
 * @author INTcoutL
 */

class bookmark_BlockBookmarkAction extends abstractdirectory_BlockItemAction
{
	public function initialize($context, $request)
	{
		parent::initialize($context, $request);
		$this->setModuleName('bookmark');
		$this->setComponentName('bookmark');
		$this->setViewModuleName('bookmark');
	}
}

class bookmark_BlockItemSuccessView extends abstractdirectory_BlockItemSuccessView
{

}
