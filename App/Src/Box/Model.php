<?php

namespace Wbengine\Box;

use Wbengine\Box;
use Wbengine\Model\ModelAbstract;

class Model extends ModelAbstract {


    /**
     * Return box information data from Db.
     *
     * @param Box|Box $box
     * @return \mysqli_result
     */
    public function getBoxById( Box $box )
    {
	    $sql = sprintf("SELECT * FROM %s b
			WHERE b.id = %d
			LIMIT 1;"
		, S_TABLE_BOXES,
        $box->getBoxId()
	);

	return $this->getDb()->query($sql);
    }

}
