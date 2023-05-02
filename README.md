Vika Valencia Susanto - 2440062123

Frameworks Used
--------------------------------------
- Laravel
- Tailwind
- Awesome Font

Description
--------------------------------------
Program starbuck dibuat dengan menggunakan CSS framework Tailwind. Untuk screenshot/video/penjelasan tertera pada jawaban. Tolong ikuti langkah berikut jika ingin menjalankan codenya. Ada sedikit bug dari tailwind untuk custom color pada saat pertama kali menjalankan karena css harus direfresh setiap saat. Jadi untuk mentrigger warnanya bisa dengan mengubah salah satu text-{{$u['colorCode'}} dan bg-{{$u['colorCode'}} menjadi bg/text-goldLevel atau bg/text-greenLevel kemudian mengubahnya kembali ke text-{{$u['colorCode'}} dan bg-{{$u['colorCode'}} saat warna sudah muncul.
(Simulasi & penjelasan UI: https://youtu.be/4Rg3hEjplbY)
(Penjelasan Code: https://youtu.be/gjOzmbDSPfo)

Installation
--------------------------------------
1. Pastikan node.js dan laravel sudah tersedia

2. Pastikan vite sudah terinstall dan sudah dijalankan\
    Untuk menginstall vite
    ```
    vite install 
    ```
    atau
    ```
    npm install
    ```

    Untuk menjalankan vite
    ```
    npm run dev
    ```

3. Menjalankan laravel
    ```
    php artisan serve
    ```
    
    - Jika terdapat error saat menjalankan kode, berikut penyelesaian dari error tersebut:
      ```
      composer install
      ```
    
    - jika terdapat error "key not generated" atau "500|server error" pada web
      ```
      php artisan key:generate
      ```
    
    - Jika pada saat menjalankan syntax ini terdapat error tidak dapat menemukan file .env, maka rename dahulu file .env.example menjadi .env kemudian jalankan kembali syntax tersebut
    
    - Jika terdapat error "vite manifest not found" pada web, lakukan:
      1. ```
         npm install --save-dev vite laravel-vite-plugin
         ```
      2. Lalu update package.json file "scripts": { "dev": "vite", "build": "vite build" }
      3. ```
         npm run build
         ```
    
    - Menjalankan laravel
      ```
      php artisan serve
      ```

Migration and Seeding
--------------------------------------
1. ```php artisan migrate```
2. ```php artisan db:seed --class=UserSeeder```
3. ```php artisan db:seed --class=CoffeeSeeder```
4. ```php artisan db:seed --class=TransactionSeeder```
