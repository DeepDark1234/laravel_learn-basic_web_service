การสร้างข้อมูลและยิง api  

หลังจากสร้าง project ด้วยคำสั่ง composer create-project laravel/laravel example-app
สิ่งที่จะเพิ่มเข้ามาคือไฟล์
    - app\Http\Controllers\ProductController.php
    - app\Models\Product.php
    - database\migrations\2025_02_08_103605_create_products_table.php
//โดยทั้ง 3 ไฟล์ สร้างโดยใช้คำสั่ง php artisan make:model Product -mc
    - database\factories\ProductFactory.php
    - routes\api.php
ไฟล์ที่ต้องแก้คือ
    - bootstrap\app.php โดยเพิ่มคำสั่ง api: __DIR__ . '/../routes/api.php',
    - database\seeders\DatabaseSeeder.php โดยเพิ่มคำสั่ง  Product::factory(5)->create();


    คำสั่งที่ใช้คือ
    php artisan route:list ใช้เพื่อเช็ค route

        