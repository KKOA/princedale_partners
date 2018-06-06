<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'name',
        'first_name','last_name', 'alias','email', 'password',
        'address1','address2','city','county','postcode',
        'telephone',
        'cv',
        'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function not_blank($element)
    {
        $element = trim($element);
        return (strlen($element) > 0 );
    }

    public function full_name()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function full_address()
    {
        $parts = [
            $this->address1,
            $this->address2,
            $this->city,
            $this->county,
            $this->postcode
        ];
        $address = array_filter($parts, [$this,'not_blank']);
        return implode(', ',$address);
    }


    // DEFINE Mutators --------------------------------------------------
    // Getter

    
    public function getFirstNameAttribute($value)
    {
        return ucwords($value);
    }
    public function getLastNameAttribute($value)
    {
        return ucwords($value);
    }
    public function getAddress1Attribute($value)
    {
        return ucwords($value);
    }
    public function getAddress2Attribute($value)
    {
        return ucwords($value);
    }
    public function getCityAttribute($value)
    {
        return ucwords($value);
    }
    public function getCountyAttribute($value)
    {
        return ucwords($value);
    }
    public function getPostcodeAttribute($value)
    {
        return strtoupper($value);
    }
    // Setter
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucwords($value);
    }
    public function setLastAttribute($value)
    {
        $this->attributes['last_name'] = ucwords($value);
    }
    public function setAddress1Attribute($value)
    {
        $this->attributes['address1'] = ucwords($value);
    }
    public function setAddress2Attribute($value)
    {
        $this->attributes['address2'] = ucwords($value);
    }
    public function setCityAttribute($value)
    {
        $this->attributes['city'] = ucwords($value);
    }
    public function setCountyAttribute($value)
    {
        $this->attributes['county'] = ucwords($value);
    }
    public function setPostcodeAttribute($value)
    {
        $this->attributes['postcode'] = strtoupper($value);
    }



}
