<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksData;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResult;

#[\AllowDynamicProperties]
class BingRankedKeywordsLiveEntityMainTasks 
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
    * @var null|double $cost;
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
    * @var null|BingRankedKeywordsLiveEntityMainTasksData $data;
    */
    public $data = null;

    /**
    * @var array|BingRankedKeywordsLiveEntityMainTasksResult[] $result;
    */
    public $result = [];
 
}