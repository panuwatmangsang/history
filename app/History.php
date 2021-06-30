<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'resumePhoto',
        'namePrefix',
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
        'birthday',
        'yearOld',
        'university',
        'faculty',
        'branch',
        'gpa',
        'educational',
        'experience',
        'dominantLanguage',
        'languageLearned',
        'charisma',
        'nameVillage',
        'homeNumber',
        'alley',
        'road',
        'district',
        'canton',
        'province',
        'postalCode',
        'myNameVillage',
        'myHomeNumber',
        'myAlley',
        'myRoad',
        'myDistrict',
        'myCanton',
        'myProvince',
        'myPostalCode'
    ];

}
