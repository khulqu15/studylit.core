<?php

namespace App\Enums;

enum TaskTypes: string
{
    case Book = 'book';
    case Practice = 'practice';
    case Quiz = 'quiz';
    case Video = 'video';
}
