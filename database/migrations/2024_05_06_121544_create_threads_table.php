<?php

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
        Schema::create('threads', function (Blueprint $table) {
            $table->id(); // สร้างฟิลด์ id ในตาราง threads
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // สร้างฟิลด์ user_id เป็น foreign key และสร้างความสัมพันธ์กับตาราง users
            // โดยใช้ constrained() เพื่อสร้าง foreign key constraint
            // และกำหนดการลบข้อมูล cascade เพื่อให้ข้อมูลในตาราง threads ถูกลบด้วยเมื่อข้อมูลในตาราง users ถูกลบไปด้วย
            $table->string('title'); // สร้างฟิลด์ title ในตาราง threads เป็น string
            $table->text('content'); // สร้างฟิลด์ content ในตาราง threads เป็น text
            $table->timestamps(); // สร้างฟิลด์ created_at และ updated_at ในตาราง threads เพื่อบันทึกวันที่และเวลาที่สร้างและปรับปรุง
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threads');
    }
};
