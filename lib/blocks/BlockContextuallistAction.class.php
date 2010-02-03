<?php
/**
 * @date Mon Jul 23 17:49:39 CEST 2007
 * @author INTcoutL
 */

class bookmark_BlockContextuallistAction extends abstractdirectory_BlockContextuallistAction
{
	public function initialize($context, $request)
	{
		parent::initialize($context, $request);
		$this->setModuleName('bookmark');
		$this->setComponentName('bookmark');
	}
}