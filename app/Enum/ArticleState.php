<?php

namespace App\Enum;

use App\Enum\Enum;

class ArticleState extends Enum{
    /** Available for everyone to read */
    const AVAILABLE = "available";
    /** Access to a list of IP addresses */
    const LIMITED_ACCESS = "limited_access";
    /** Access is closed to everyone */
    const ACCESS_CLOSED = "access_closed";
    /** Preparing to be deleted */
    const DELETION_STATUS = "deletion_status";
    /** Deleted */
    const DELETED = "deleted";

    

    
}