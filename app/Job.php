<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Job
 *
 * @property int $id
 * @property string $name
 * @property string $job_code
 * @property float|null $expected_revenue
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\DeliveredRevenue[] $deliveredRevenue
 * @property-read int|null $delivered_revenue_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereExpectedRevenue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereJobCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Job extends Model
{
    public function deliveredRevenue(): HasMany
    {
        return $this->hasMany(DeliveredRevenue::class);
    }
}
