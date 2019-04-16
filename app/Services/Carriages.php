<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Carriage;
use App\Models\Ticket;

/**
 * Class Carriages
 * @package App\Services
 */
class Carriages
{
    public function getType(int $carriageId): string
    {
        return Carriage::find($carriageId)->type->name;
    }

    public function getPlacesBooking(int $trainId, int $carriageId): string
    {
        $places = Ticket::where('train_id', $trainId)
            ->where('carriage_id', $carriageId)
            ->pluck('place')
            ->toArray();

        return json_encode([1, 2, 12, 16]);
    }
}
