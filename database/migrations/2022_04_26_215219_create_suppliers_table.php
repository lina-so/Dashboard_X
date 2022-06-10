<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_organization_name')->nullable();
            $table->string('supplier_contact_name')->nullable();
            $table->string('supplier_contact_position')->nullable();
            $table->string('supplier_contact_number')->nullable();
            $table->string('supplier_contact_whatsaap')->nullable();
            $table->string('email')->nullable();
            $table->string('supplier_contact_name2')->nullable();
            $table->string('supplier_contact2_position')->nullable();
            $table->string('supplier_contact2_number')->nullable();
            $table->string('supplier_catelouge')->nullable();
            $table->string('supplier_webSite')->nullable();
            $table->string('supplier_fixed_quotation1')->nullable();
            $table->string('supplier_fixed_quotation2')->nullable();
            $table->string('social_media_accounts')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('street')->nullable();
            $table->string('building_number')->nullable();
            $table->string('secondary_number')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('supplier_attatchment_CR')->nullable();
            $table->string('supplier_vat_certificate')->nullable();
            $table->string('user_comments')->nullable();
            $table->string('supplier_IBAN1')->nullable();
            $table->string('supplier_IBAN2')->nullable();
            $table->string('factory_location')->nullable();
            $table->string('office_location')->nullable();
            $table->string('supplier_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
