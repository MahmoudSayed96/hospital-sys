<?php

namespace App\Models;

class Setting extends BaseModel
{
    protected $fillable = ['site_name', 'site_email', 'site_logo', 'site_phone', 'site_telephone', 'site_address', 'site_fax', 'site_facebook', 'site_twitter', 'site_instagram', 'stablish_date', 'status'];

    /**
     * Get site image attribute value.
     */
    public function getSiteLogoAttribute($value) {
        return isset($this->attributes['site_logo']) != null ? asset($value) : asset('uploads/images/settings/hospital-avatar.png');
    }

    /**
     * Get site logo with full path.
     */
    public function getSiteLogo() {
        return isset($this->attributes['site_logo']) ? $this->attributes['site_logo'] : null;
    }
}
