<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeletedInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            DB::statement('
CREATE TABLE `deleted_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `sequence_number` mediumint(8) UNSIGNED DEFAULT NULL,
  `customer_sequence_number` mediumint(8) UNSIGNED DEFAULT NULL,
  `invoice_date` date NOT NULL,
  `due_date` date DEFAULT NULL,
  `invoice_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reference_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paid_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax_per_item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_per_item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` decimal(15,2) DEFAULT NULL,
  `discount_val` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_total` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) UNSIGNED NOT NULL,
  `tax` bigint(20) UNSIGNED NOT NULL,
  `due_amount` bigint(20) UNSIGNED NOT NULL,
  `sent` tinyint(1) NOT NULL DEFAULT 0,
  `viewed` tinyint(1) NOT NULL DEFAULT 0,
  `unique_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `creator_id` int(10) UNSIGNED DEFAULT NULL,
  `template_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `recurring_invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `exchange_rate` decimal(19,6) DEFAULT NULL,
  `base_discount_val` bigint(20) UNSIGNED DEFAULT NULL,
  `base_sub_total` bigint(20) UNSIGNED DEFAULT NULL,
  `base_total` bigint(20) UNSIGNED DEFAULT NULL,
  `base_tax` bigint(20) UNSIGNED DEFAULT NULL,
  `base_due_amount` bigint(20) UNSIGNED DEFAULT NULL,
  `currency_id` int(10) UNSIGNED DEFAULT NULL,
  `sales_tax_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sales_tax_address_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overdue` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `deleted_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deleted_invoices_company_id_foreign` (`company_id`),
  ADD KEY `deleted_invoices_creator_id_foreign` (`creator_id`),
  ADD KEY `deleted_invoices_customer_id_foreign` (`customer_id`),
  ADD KEY `deleted_invoices_recurring_invoice_id_foreign` (`recurring_invoice_id`),
  ADD KEY `deleted_invoices_currency_id_foreign` (`currency_id`);


ALTER TABLE `deleted_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `deleted_invoices`
  ADD CONSTRAINT `deleted_invoices_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deleted_invoices_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deleted_invoices_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`),
  ADD CONSTRAINT `deleted_invoices_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `deleted_invoices_recurring_invoice_id_foreign` FOREIGN KEY (`recurring_invoice_id`) REFERENCES `recurring_invoices` (`id`);
COMMIT;
');


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deleted_invoices');
    }
}
