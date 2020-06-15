<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\DeliveredRevenue
 *
 * @property int $id
 * @property int $order_id
 * @property string $order_name
 * @property \Illuminate\Support\Carbon $month_of_service
 * @property int $delivered_impressions
 * @property float $revenue
 * @property int $job_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Job $job
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue whereDeliveredImpressions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue whereMonthOfService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue whereOrderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue whereRevenue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DeliveredRevenue whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DeliveredRevenue extends Model
{
    protected $casts = [
        "month_of_service" => "date",
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
}
