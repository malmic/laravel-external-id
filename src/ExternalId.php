<?php

namespace Eeappdev\ExternalId;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ExternalId extends Model
{
    protected $fillable = ['external_id'];

    public function external(): MorphTo
    {
        return $this->moprhTo();
    }
}
