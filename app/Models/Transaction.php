<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 *
 * @property string $invoice_id
 * @property int|null $order_id
 * @property int $store_id
 * @property bool $test_mode
 * @property float $amount
 * @property string $description
 * @property string $success_url
 * @property string $canceled_url
 * @property string $declined_url
 * @property string|null $billing_fname
 * @property string|null $billing_sname
 * @property string|null $billing_address_1
 * @property string|null $billing_address_2
 * @property string|null $billing_city
 * @property string|null $billing_region
 * @property string|null $billing_zip
 * @property string|null $billing_country
 * @property string|null $billing_email
 * @property string|null $lang_code
 * @property string|null $trx_reference
 * @property bool|null $approved
 * @property string|null $response
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transaction';

	protected $casts = [
		'order_id' => 'int',
		'store_id' => 'int',
		'amount' => 'float',
		'approved' => 'bool',
	];

	protected $fillable = [
		'order_id',
		'invoice_id',
		'store_id',
		'user_id',
        'package_id',
        'package_name',
        'package_sanctions',
        'vat_amount',
        'package_amount',
        'total_amount',
		'test_mode',
		'description',
		'success_url',
		'canceled_url',
		'declined_url',
		'billing_fname',
		'billing_sname',
		'billing_address_1',
		'billing_address_2',
		'billing_city',
		'billing_region',
		'billing_zip',
		'billing_country',
		'billing_email',
		'lang_code',
		'trx_reference',
		'approved',
		'response',
		'status',
        'pdf',
        'card_last4',
        'card_first6',
        'card_type',
        'cancelled_at'
	];

	public function package(){
	    return $this->belongsTo(Package::class);
    }
	public function user(){
	    return $this->belongsTo(Package::class);
    }
}
