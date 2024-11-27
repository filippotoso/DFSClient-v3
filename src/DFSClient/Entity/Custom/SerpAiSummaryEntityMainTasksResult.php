<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class SerpAiSummaryEntityMainTasksResult 
{    
    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|SerpAiSummaryEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}