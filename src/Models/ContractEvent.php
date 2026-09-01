<?php

declare(strict_types=1);

namespace Liberu\CRM\Contracts\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $contract_id @property int $actor_id @property string $type @property string $status */
final class ContractEvent extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_contract_events';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['payload' => 'array'];
    }
}
