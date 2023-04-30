<?php

namespace Eeappdev\LaravelExternalId;

use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasExternalId
{
    public function external(): MorphOne
    {
        return $this->morphOne(ExternalId::class, 'externable');
    }

    public function addExternalId(string $externalId): ?string
    {
        $external = $this->external()->updateOrCreate([], [
            'external_id' => $externalId,
        ]);

        return $external->external_id;
    }

    public function removeExternalId(): void
    {
        $this->external()->delete();
    }

    public function getExternalId(): ?string
    {
        return $this->external ? $this->external->external_id : null;
    }
}
