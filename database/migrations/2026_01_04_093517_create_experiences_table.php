<?php

use App\Enums\EmploymentType;
use App\Enums\LocationType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->string('title');
            $table->enum('employment_type', [
                EmploymentType::Freelance->value,
                EmploymentType::Fulltime->value,
                EmploymentType::Parttime->value,
                EmploymentType::SelfEmployment->value,
                EmploymentType::Internship->value,
            ])->default(EmploymentType::Fulltime->value);
            $table->boolean('is_currently_working')->default(false);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('location')->nullable();
            $table->enum('location_type', [
                LocationType::OnSite->value,
                LocationType::Online->value,
                LocationType::Hybrid->value,
            ])->default(LocationType::OnSite->value);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
