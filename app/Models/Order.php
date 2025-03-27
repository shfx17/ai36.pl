<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Orders
 *
 * @property int $id
 * @property string $link
 * @property int $status
 * @property string $email
 * @property string $country
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Order extends Model
{
    use HasFactory;

    public const STATUS_ACTIVE = 1;
    public const STATUS_UNACTIVE = 2;

    protected $table = 'orders';

    protected $fillable = [
        'link',
        'status',
        'email',
        'country'
    ];
}
