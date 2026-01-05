<?php

namespace App\Enums;

enum EmploymentType: string
{
    case Fulltime = "full-time";
    case Parttime = "part-time";
    case Freelance = "freelance";
    case SelfEmployment = "self-employment";
    case Internship = "internship";
}
