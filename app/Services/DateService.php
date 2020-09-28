<?php

namespace App\Services;

use Carbon\Carbon;

class DateService
{
    public function ago(string $datetime): string
    {
        $date = new Carbon($datetime);
        $now = Carbon::now();

        $diffs = [];

        $diffs['seconds'] = $date->diffInSeconds($now);
        $diffs['minutes'] = $date->diffInMinutes($now);
        $diffs['hours'] = $date->diffInHours($now);
        $diffs['days'] = $date->diffInDays($now);
        $diffs['weeks'] = $date->diffInWeeks($now);
        $diffs['months'] = $date->diffInMonths($now);
        $diffs['years'] = $date->diffInYears($now);

        return $this->getMostRelevantDiff($diffs);
    }

    public function humanReadable(string $datetime): string
    {
        $date = new Carbon($datetime);

        return $date->isoFormat('D MMM Y');
    }

    private function getMostRelevantDiff(array $diffs): string
    {
        //* Removes array indexes that are equals to zero
        $positiveDiffs = array_filter($diffs, function($value) {
            return $value !== 0;
        });

        $minDiff = min($positiveDiffs);

        //! array_keys function returns an array, so we take the first index value
        $unit = array_keys($positiveDiffs, $minDiff)[0];

        //* Get rid of the unit's trailing 's' if difference is equal to 1
        if ($minDiff === 1) {
            $unit = rtrim($unit, 's');
        }

        return $minDiff . ' ' . $unit;
    }
}