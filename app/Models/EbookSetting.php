<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ebook Settings
 *
 * @property int $id
 * @property string $country
 * @property double $price
 * @property string $currency
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class EbookSetting extends Model
{
    use HasFactory;

    protected $table = 'ebook_settings';

    protected $fillable = [
        'country',
        'price',
        'currency'
    ];
}
