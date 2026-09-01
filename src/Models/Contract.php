<?php

declare(strict_types=1);

namespace Liberu\CRM\Contracts\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $owner_id
 * @property string $status
 * @property int $version
 * @property array<string, mixed> $parties
 * @property array<string, mixed> $terms
 */
final class Contract extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_contracts';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['parties' => 'array', 'terms' => 'array', 'clauses' => 'array', 'obligations' => 'array', 'repository_links' => 'array', 'starts_on' => 'date', 'ends_on' => 'date', 'renewal_on' => 'date', 'next_notice_on' => 'date'];
    }
}
