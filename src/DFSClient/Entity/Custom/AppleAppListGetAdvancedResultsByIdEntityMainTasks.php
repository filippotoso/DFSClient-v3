<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppListGetAdvancedResultsByIdEntityMainTasksData;
use DFSClientV3\Entity\Custom\AppleAppListGetAdvancedResultsByIdEntityMainTasksResult;

#[\AllowDynamicProperties]
class AppleAppListGetAdvancedResultsByIdEntityMainTasks 
{    
    /**
    * @var null|string $id;
    */
    public $id = null;

    /**
    * @var null|integer $status_code;
    */
    public $status_code = null;

    /**
    * @var null|string $status_message;
    */
    public $status_message = null;

    /**
    * @var null|string $time;
    */
    public $time = null;

    /**
    * @var null|integer $cost;
    */
    public $cost = null;

    /**
    * @var null|integer $result_count;
    */
    public $result_count = null;

    /**
    * @var null|array $path;
    */
    public $path = null;

    /**
    * @var null|AppleAppListGetAdvancedResultsByIdEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * @var array|AppleAppListGetAdvancedResultsByIdEntityMainTasksResult[] $result;
    */
    public $result = [];
 
}