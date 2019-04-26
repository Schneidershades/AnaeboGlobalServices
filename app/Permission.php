<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
	{
	    return [
	        'view_users',
	        'add_users',
	        'edit_users',
	        'delete_users',

	        'view_transactions',
	        'add_transactions',
	        'edit_transactions',
	        'delete_transactions',

	        'view_stocks',
	        'add_stocks',
	        'edit_stocks',
	        'delete_stocks',

	        'view_supplier',
	        'add_supplier',
	        'edit_supplier',
	        'delete_supplier',

	        'view_customers',
	        'add_customers',
	        'edit_customers',
	        'delete_customers',

	        'view_walletTransactions',
	        'add_walletTransactions',
	        'edit_walletTransactions',
	        'delete_walletTransactions',

	        'view_receipt',
	        'add_receipt',
	        'edit_receipt',
	        'delete_receipt',

	        'view_roles',
	        'add_roles',
	        'edit_roles',
	        'delete_roles',

	        'view_userApproval',
	        'add_userApproval',
	        'edit_userApproval',

	        'view_stockApproval',
	        'add_stockApproval',
	        'edit_stockApproval',
	    ];
	}
}
