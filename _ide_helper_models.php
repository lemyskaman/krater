<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Crater\Models{
/**
 * Crater\Models\Address
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $address_street_1
 * @property string|null $address_street_2
 * @property string|null $city
 * @property string|null $state
 * @property int|null $country_id
 * @property string|null $zip
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $type
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $company_id
 * @property int|null $customer_id
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\Country|null $country
 * @property-read \Crater\Models\Customer|null $customer
 * @property-read mixed $country_name
 * @property-read \Crater\Models\User|null $user
 * @method static \Database\Factories\AddressFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressStreet1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressStreet2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereZip($value)
 */
	class Address extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string|null $logo
 * @property string|null $unique_hash
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $slug
 * @property int|null $owner_id
 * @property-read \Crater\Models\Address|null $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $customFieldValues
 * @property-read int|null $custom_field_values_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomField[] $customFields
 * @property-read int|null $custom_fields_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Customer[] $customers
 * @property-read int|null $customers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Estimate[] $estimates
 * @property-read int|null $estimates_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\ExchangeRateLog[] $exchangeRateLogs
 * @property-read int|null $exchange_rate_logs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\ExchangeRateProvider[] $exchangeRateProviders
 * @property-read int|null $exchange_rate_providers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\ExpenseCategory[] $expenseCategories
 * @property-read int|null $expense_categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Expense[] $expenses
 * @property-read int|null $expenses_count
 * @property-read mixed $logo_path
 * @property-read mixed $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Invoice[] $invoices
 * @property-read int|null $invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Item[] $items
 * @property-read int|null $items_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Crater\Models\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\PaymentMethod[] $paymentMethods
 * @property-read int|null $payment_methods_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\RecurringInvoice[] $recurringInvoices
 * @property-read int|null $recurring_invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CompanySetting[] $settings
 * @property-read int|null $settings_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\TaxType[] $taxTypes
 * @property-read int|null $tax_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Unit[] $units
 * @property-read int|null $units_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\CompanyFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUniqueHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 */
	class Company extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\CompanySetting
 *
 * @property int $id
 * @property string $option
 * @property string $value
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company|null $company
 * @method static \Database\Factories\CompanySettingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanySetting whereValue($value)
 */
	class CompanySetting extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Country
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $phonecode
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Address[] $address
 * @property-read int|null $address_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhonecode($value)
 */
	class Country extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Currency
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string|null $symbol
 * @property int $precision
 * @property string $thousand_separator
 * @property string $decimal_separator
 * @property int $swap_currency_symbol
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereDecimalSeparator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency wherePrecision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSwapCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereThousandSeparator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 */
	class Currency extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\CustomField
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $label
 * @property string $model_type
 * @property string $type
 * @property string|null $placeholder
 * @property array|null $options
 * @property int|null $boolean_answer
 * @property \Illuminate\Support\Carbon|null $date_answer
 * @property string|null $time_answer
 * @property string|null $string_answer
 * @property int|null $number_answer
 * @property \Illuminate\Support\Carbon|null $date_time_answer
 * @property int $is_required
 * @property int $order
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $customFieldValues
 * @property-read int|null $custom_field_values_count
 * @property-read mixed $default_answer
 * @property-read mixed $in_use
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField applyFilters(array $filters)
 * @method static \Database\Factories\CustomFieldFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereBooleanAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereDateAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereDateTimeAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereNumberAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField wherePlaceholder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereStringAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereTimeAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereUpdatedAt($value)
 */
	class CustomField extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\CustomFieldValue
 *
 * @property int $id
 * @property string $custom_field_valuable_type
 * @property int $custom_field_valuable_id
 * @property string $type
 * @property int|null $boolean_answer
 * @property \Illuminate\Support\Carbon|null $date_answer
 * @property string|null $time_answer
 * @property string|null $string_answer
 * @property int|null $number_answer
 * @property \Illuminate\Support\Carbon|null $date_time_answer
 * @property int $custom_field_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company $company
 * @property-read \Crater\Models\CustomField $customField
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $customFieldValuable
 * @property-read mixed $default_answer
 * @method static \Database\Factories\CustomFieldValueFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereBooleanAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCustomFieldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCustomFieldValuableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCustomFieldValuableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereDateAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereDateTimeAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereNumberAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereStringAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereTimeAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereUpdatedAt($value)
 */
	class CustomFieldValue extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Customer
 *
 * @property int $id
 * @property string|null $prefix
 * @property string $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $password
 * @property string|null $remember_token
 * @property string|null $facebook_id
 * @property string|null $google_id
 * @property string|null $github_id
 * @property string|null $contact_name
 * @property string|null $company_name
 * @property string|null $website
 * @property bool|null $enable_portal
 * @property int|null $currency_id
 * @property int|null $company_id
 * @property int|null $creator_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $rif
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Ability[] $abilities
 * @property-read int|null $abilities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read \Crater\Models\Address|null $billingAddress
 * @property-read \Crater\Models\Company|null $company
 * @property-read Customer|null $creator
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Estimate[] $estimates
 * @property-read int|null $estimates_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Expense[] $expenses
 * @property-read int|null $expenses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $avatar
 * @property-read mixed $formatted_created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Invoice[] $invoices
 * @property-read int|null $invoices_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\RecurringInvoice[] $recurringInvoices
 * @property-read int|null $recurring_invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Crater\Models\Address|null $shippingAddress
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Customer applyFilters(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer applyInvoiceFilters(array $filters)
 * @method static \Database\Factories\CustomerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer invoicesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCustomer($customer_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDisplayName($displayName)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEnablePortal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereGithubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereGoogleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereIs($role)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereIsAll($role)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereIsNot($role)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereRif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereWebsite($value)
 */
	class Customer extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\EmailLog
 *
 * @property int $id
 * @property string $from
 * @property string $to
 * @property string $subject
 * @property string $body
 * @property string $mailable_type
 * @property string $mailable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $token
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $mailable
 * @method static \Database\Factories\EmailLogFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereMailableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereMailableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailLog whereUpdatedAt($value)
 */
	class EmailLog extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Estimate
 *
 * @property int $id
 * @property int|null $sequence_number
 * @property int|null $customer_sequence_number
 * @property \Illuminate\Support\Carbon $estimate_date
 * @property \Illuminate\Support\Carbon|null $expiry_date
 * @property string $estimate_number
 * @property string $status
 * @property string|null $reference_number
 * @property string $tax_per_item
 * @property string $discount_per_item
 * @property string|null $notes
 * @property float|null $discount
 * @property string|null $discount_type
 * @property int|null $discount_val
 * @property int $sub_total
 * @property int $total
 * @property int $tax
 * @property string|null $unique_hash
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property string|null $template_name
 * @property int|null $customer_id
 * @property float|null $exchange_rate
 * @property int|null $base_discount_val
 * @property int|null $base_sub_total
 * @property int|null $base_total
 * @property int|null $base_tax
 * @property int|null $currency_id
 * @property string|null $sales_tax_type
 * @property string|null $sales_tax_address_type
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Crater\Models\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $estimate_pdf_url
 * @property-read mixed $formatted_estimate_date
 * @property-read mixed $formatted_expiry_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\EstimateItem[] $items
 * @property-read int|null $items_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate applyFilters(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate estimatesBetween($start, $end)
 * @method static \Database\Factories\EstimateFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereBaseDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereBaseSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereBaseTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereBaseTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCustomer($customer_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereCustomerSequenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereDiscountPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereEstimate($estimate_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereEstimateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereEstimateNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereSalesTaxAddressType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereSalesTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereSequenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereTaxPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereTemplateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereUniqueHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimate whereUpdatedAt($value)
 */
	class Estimate extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\EstimateItem
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $discount_type
 * @property float $quantity
 * @property string|null $unit_name
 * @property float|null $discount
 * @property int|null $discount_val
 * @property int $price
 * @property int $tax
 * @property int $total
 * @property int|null $item_id
 * @property int $estimate_id
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $exchange_rate
 * @property int|null $base_discount_val
 * @property int|null $base_price
 * @property int|null $base_tax
 * @property int|null $base_total
 * @property-read \Crater\Models\Estimate $estimate
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read \Crater\Models\Item|null $item
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @method static \Database\Factories\EstimateItemFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereBaseDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereBaseTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereBaseTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereEstimateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereUnitName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstimateItem whereUpdatedAt($value)
 */
	class EstimateItem extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\ExchangeRateLog
 *
 * @property int $id
 * @property int|null $company_id
 * @property int|null $base_currency_id
 * @property int|null $currency_id
 * @property float|null $exchange_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\Currency|null $currency
 * @method static \Database\Factories\ExchangeRateLogFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog whereBaseCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateLog whereUpdatedAt($value)
 */
	class ExchangeRateLog extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\ExchangeRateProvider
 *
 * @property int $id
 * @property string $driver
 * @property string $key
 * @property array|null $currencies
 * @property array|null $driver_config
 * @property bool $active
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company|null $company
 * @method static \Database\Factories\ExchangeRateProviderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereCurrencies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereDriver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereDriverConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRateProvider whereUpdatedAt($value)
 */
	class ExchangeRateProvider extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Expense
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $expense_date
 * @property string|null $attachment_receipt
 * @property int $amount
 * @property string|null $notes
 * @property int $expense_category_id
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property int|null $customer_id
 * @property float|null $exchange_rate
 * @property int|null $base_amount
 * @property int|null $currency_id
 * @property int|null $payment_method_id
 * @property-read \Crater\Models\ExpenseCategory $category
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Crater\Models\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $formatted_created_at
 * @property-read mixed $formatted_expense_date
 * @property-read mixed $receipt
 * @property-read mixed $receipt_meta
 * @property-read mixed $receipt_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Crater\Models\PaymentMethod|null $paymentMethod
 * @method static \Illuminate\Database\Eloquent\Builder|Expense applyFilters(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense expensesAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense expensesBetween($start, $end)
 * @method static \Database\Factories\ExpenseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAttachmentReceipt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereBaseAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCategory($categoryId)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCategoryName($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpense($expense_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUser($customer_id)
 */
	class Expense extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\ExpenseCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Expense[] $expenses
 * @property-read int|null $expenses_count
 * @property-read mixed $amount
 * @property-read mixed $formatted_created_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory applyFilters(array $filters)
 * @method static \Database\Factories\ExpenseCategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCategory($category_id)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereUpdatedAt($value)
 */
	class ExpenseCategory extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\FileDisk
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $driver
 * @property bool $set_as_default
 * @property string $credentials
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk applyFilters(array $filters)
 * @method static \Database\Factories\FileDiskFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk fileDisksBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk query()
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereCredentials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereDriver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereSetAsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileDisk whereUpdatedAt($value)
 */
	class FileDisk extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Invoice
 *
 * @property int $id
 * @property int|null $sequence_number
 * @property int|null $customer_sequence_number
 * @property \Illuminate\Support\Carbon $invoice_date
 * @property \Illuminate\Support\Carbon|null $due_date
 * @property string $invoice_number
 * @property string|null $reference_number
 * @property string $status
 * @property string $paid_status
 * @property string $tax_per_item
 * @property string $discount_per_item
 * @property string|null $notes
 * @property string|null $discount_type
 * @property float|null $discount
 * @property int|null $discount_val
 * @property int $sub_total
 * @property int $total
 * @property int $tax
 * @property int $due_amount
 * @property int $sent
 * @property int $viewed
 * @property string|null $unique_hash
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property string|null $template_name
 * @property int|null $customer_id
 * @property int|null $recurring_invoice_id
 * @property float|null $exchange_rate
 * @property int|null $base_discount_val
 * @property int|null $base_sub_total
 * @property int|null $base_total
 * @property int|null $base_tax
 * @property int|null $base_due_amount
 * @property int|null $currency_id
 * @property string|null $sales_tax_type
 * @property string|null $sales_tax_address_type
 * @property int $overdue
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Crater\Models\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $allow_edit
 * @property-read mixed $formatted_created_at
 * @property-read mixed $formatted_due_date
 * @property-read mixed $formatted_invoice_date
 * @property-read mixed $formatted_notes
 * @property-read mixed $invoice_pdf_url
 * @property-read mixed $payment_module_enabled
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\InvoiceItem[] $items
 * @property-read int|null $items_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \Crater\Models\RecurringInvoice|null $recurringInvoice
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Transaction[] $transactions
 * @property-read int|null $transactions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice applyFilters(array $filters)
 * @method static \Database\Factories\InvoiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice invoicesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBaseDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBaseDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBaseSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBaseTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBaseTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCustomer($customer_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCustomerSequenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDiscountPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueStatus($status)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoice($invoice_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereOverdue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice wherePaidStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereRecurringInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSalesTaxAddressType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSalesTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSequenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTaxPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTemplateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUniqueHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereViewed($value)
 */
	class Invoice extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\InvoiceItem
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $discount_type
 * @property int $price
 * @property float $quantity
 * @property string|null $unit_name
 * @property float|null $discount
 * @property int $discount_val
 * @property int $tax
 * @property int $total
 * @property int|null $invoice_id
 * @property int|null $item_id
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $recurring_invoice_id
 * @property int|null $base_price
 * @property string|null $exchange_rate
 * @property int|null $base_discount_val
 * @property int|null $base_tax
 * @property int|null $base_total
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read \Crater\Models\Invoice|null $invoice
 * @property-read \Crater\Models\Item|null $item
 * @property-read \Crater\Models\RecurringInvoice|null $recurringInvoice
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem applyInvoiceFilters(array $filters)
 * @method static \Database\Factories\InvoiceItemFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem invoicesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem itemAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereBaseDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereBaseTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereBaseTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereRecurringInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereUnitName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereUpdatedAt($value)
 */
	class InvoiceItem extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Item
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $price
 * @property int|null $company_id
 * @property int|null $unit_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property int|null $currency_id
 * @property int $tax_per_item
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\EstimateItem[] $estimateItems
 * @property-read int|null $estimate_items_count
 * @property-read mixed $formatted_created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\InvoiceItem[] $invoiceItems
 * @property-read int|null $invoice_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @property-read \Crater\Models\Unit|null $unit
 * @method static \Illuminate\Database\Eloquent\Builder|Item applyFilters(array $filters)
 * @method static \Database\Factories\ItemFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItem($item_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Item wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereTaxPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUnit($unit_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUpdatedAt($value)
 */
	class Item extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Module
 *
 * @property int $id
 * @property string $name
 * @property string $version
 * @property int $installed
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereInstalled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereVersion($value)
 */
	class Module extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Note
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $company_id
 * @property-read \Crater\Models\Company|null $company
 * @method static \Illuminate\Database\Eloquent\Builder|Note applyFilters(array $filters)
 * @method static \Database\Factories\NoteFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note query()
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUpdatedAt($value)
 */
	class Note extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Payment
 *
 * @property int $id
 * @property int|null $sequence_number
 * @property int|null $customer_sequence_number
 * @property string $payment_number
 * @property \Illuminate\Support\Carbon $payment_date
 * @property string|null $notes
 * @property int $amount
 * @property string|null $unique_hash
 * @property int|null $invoice_id
 * @property int|null $company_id
 * @property int|null $payment_method_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property int|null $customer_id
 * @property float|null $exchange_rate
 * @property int|null $base_amount
 * @property int|null $currency_id
 * @property int|null $transaction_id
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Crater\Models\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $formatted_created_at
 * @property-read mixed $formatted_payment_date
 * @property-read mixed $payment_pdf_url
 * @property-read \Crater\Models\Invoice|null $invoice
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Crater\Models\PaymentMethod|null $paymentMethod
 * @property-write mixed $settings
 * @property-read \Crater\Models\Transaction|null $transaction
 * @method static \Illuminate\Database\Eloquent\Builder|Payment applyFilters(array $filters)
 * @method static \Database\Factories\PaymentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment paymentMethod($paymentMethodId)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment paymentNumber($paymentNumber)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment paymentsBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBaseAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCustomer($customer_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCustomerSequenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePayment($payment_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereSequenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUniqueHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 */
	class Payment extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\PaymentMethod
 *
 * @property int $id
 * @property string $name
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $driver
 * @property string $type
 * @property array|null $settings
 * @property int $active
 * @property bool $use_test_env
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Expense[] $expenses
 * @property-read int|null $expenses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod applyFilters(array $filters)
 * @method static \Database\Factories\PaymentMethodFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereDriver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod wherePaymentMethod($payment_id)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUseTestEnv($value)
 */
	class PaymentMethod extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\RecurringInvoice
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $starts_at
 * @property bool $send_automatically
 * @property int|null $customer_id
 * @property int|null $company_id
 * @property string $status
 * @property string|null $next_invoice_at
 * @property int|null $creator_id
 * @property string $frequency
 * @property string $limit_by
 * @property int|null $limit_count
 * @property string|null $limit_date
 * @property int|null $currency_id
 * @property float|null $exchange_rate
 * @property string $tax_per_item
 * @property string $discount_per_item
 * @property string|null $notes
 * @property string|null $discount_type
 * @property string|null $discount
 * @property int|null $discount_val
 * @property int $sub_total
 * @property int $total
 * @property int $tax
 * @property string|null $template_name
 * @property int $due_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $sales_tax_type
 * @property string|null $sales_tax_address_type
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\User|null $creator
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Crater\Models\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $formatted_created_at
 * @property-read mixed $formatted_limit_date
 * @property-read mixed $formatted_next_invoice_at
 * @property-read mixed $formatted_starts_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Invoice[] $invoices
 * @property-read int|null $invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\InvoiceItem[] $items
 * @property-read int|null $items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice applyFilters(array $filters)
 * @method static \Database\Factories\RecurringInvoiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice recurringInvoicesStartBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereCustomer($customer_id)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereDiscountPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereDiscountVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereLimitBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereLimitCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereLimitDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereNextInvoiceAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereSalesTaxAddressType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereSalesTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereSendAutomatically($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereTaxPerItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereTemplateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecurringInvoice whereUpdatedAt($value)
 */
	class RecurringInvoice extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Setting
 *
 * @property int $id
 * @property string $option
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Tax
 *
 * @property int $id
 * @property int $tax_type_id
 * @property int|null $invoice_id
 * @property int|null $estimate_id
 * @property int|null $invoice_item_id
 * @property int|null $estimate_item_id
 * @property int|null $item_id
 * @property int|null $company_id
 * @property string $name
 * @property int $amount
 * @property float $percent
 * @property int $compound_tax
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $exchange_rate
 * @property int|null $base_amount
 * @property int|null $currency_id
 * @property int|null $recurring_invoice_id
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Crater\Models\Estimate|null $estimate
 * @property-read \Crater\Models\EstimateItem|null $estimateItem
 * @property-read \Crater\Models\Invoice|null $invoice
 * @property-read \Crater\Models\InvoiceItem|null $invoiceItem
 * @property-read \Crater\Models\Item|null $item
 * @property-read \Crater\Models\RecurringInvoice|null $recurringInvoice
 * @property-read \Crater\Models\TaxType $taxType
 * @method static \Database\Factories\TaxFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax invoicesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax taxAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereBaseAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCompany($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCompoundTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereEstimateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereEstimateItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereInvoiceItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereInvoicesFilters(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereRecurringInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereTaxTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereUpdatedAt($value)
 */
	class Tax extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\TaxType
 *
 * @property int $id
 * @property string $name
 * @property float $percent
 * @property bool $compound_tax
 * @property int $collective_tax
 * @property string|null $description
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType applyFilters(array $filters)
 * @method static \Database\Factories\TaxTypeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCollectiveTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCompoundTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereTaxType($tax_type_id)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereUpdatedAt($value)
 */
	class TaxType extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Transaction
 *
 * @property int $id
 * @property string|null $transaction_id
 * @property string|null $unique_hash
 * @property string|null $type
 * @property string $status
 * @property \Illuminate\Support\Carbon $transaction_date
 * @property int|null $company_id
 * @property int $invoice_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Crater\Models\Invoice $invoice
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTransactionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUniqueHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedAt($value)
 */
	class Transaction extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\Unit
 *
 * @property int $id
 * @property string $name
 * @property int|null $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Item[] $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Unit applyFilters(array $filters)
 * @method static \Database\Factories\UnitFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCompany()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUnit($unit_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
}

namespace Crater\Models{
/**
 * Crater\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $password
 * @property string $role
 * @property string|null $remember_token
 * @property string|null $facebook_id
 * @property string|null $google_id
 * @property string|null $github_id
 * @property string|null $contact_name
 * @property string|null $company_name
 * @property string|null $website
 * @property int|null $enable_portal
 * @property int|null $currency_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $creator_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Ability[] $abilities
 * @property-read int|null $abilities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read \Crater\Models\Address|null $billingAddress
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Company[] $companies
 * @property-read int|null $companies_count
 * @property-read User|null $creator
 * @property-read \Crater\Models\Currency|null $currency
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Customer[] $customers
 * @property-read int|null $customers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Estimate[] $estimates
 * @property-read int|null $estimates_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Expense[] $expenses
 * @property-read int|null $expenses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\CustomFieldValue[] $fields
 * @property-read int|null $fields_count
 * @property-read mixed $avatar
 * @property-read mixed $formatted_created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Invoice[] $invoices
 * @property-read int|null $invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Item[] $items
 * @property-read int|null $items_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\RecurringInvoice[] $recurringInvoices
 * @property-read int|null $recurring_invoices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Crater\Models\UserSetting[] $settings
 * @property-read int|null $settings_count
 * @property-read \Crater\Models\Address|null $shippingAddress
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User applyFilters(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|User applyInvoiceFilters(array $filters)
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User invoicesBetween($start, $end)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User paginateData($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDisplayName($displayName)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEnablePortal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGithubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIs($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAll($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsNot($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOrder($orderByField, $orderBy)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSearch($search)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSuperAdmin()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWebsite($value)
 */
	class User extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace Crater\Models{
/**
 * Crater\Models\UserSetting
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Crater\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereValue($value)
 */
	class UserSetting extends \Eloquent {}
}

