<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Train;
use \Illuminate\Support\Collection;

/**
 * Class Trains
 * @package App\Services\
 */
class Trains
{
    public function getCarriagesByTrain(int $trainId, int $typeId): Collection
    {
        return Train::find($trainId)->carriages->where('type_id', $typeId);
    }
}
