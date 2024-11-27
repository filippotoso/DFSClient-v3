<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class BulkTrafficEstimationLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|BulkTrafficEstimationLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}