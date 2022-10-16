<?php

namespace App\Enums;

enum ProgressStatus: string
{
    case Next = 'next';
    case Progress = 'progress';
    case Finish = 'finish';
}
