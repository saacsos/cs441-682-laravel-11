<?php

namespace App\Models\Enum;

enum PlaylistAccessibility : string
{
    case PUBLIC = "PUBLIC";
    case PRIVATE = "PRIVATE";
}
