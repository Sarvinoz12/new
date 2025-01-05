Talablar
Loyihani ishga tushirish uchun quyidagi dasturlar kerak:
PH >= 8.1
Composer
MySQL yoki boshqa ma'lumotlar bazasi
Laravel>= 10.x
Node.js (npm bilan)

O‘rnatish yo'riqnomas:
1.Loyihani yuklab olish:
GitHub’da kerakli loyihaga kiring.
kok Code tugmasini bosing.
"Download ZIP" tugmasini tanlang.
ZIP faylni o‘z kompyuteringizga yuklab oling va oching.
2.Loyihaga kirib, barcha kerakli kutubxonalarni o’rnatish:
composer install
3..env faylni sozlang:
Loyihada .env fayli mavjud bo‘lmasa, .env.example faylini nusxa ko‘chirib, nomini .env qilib o‘zgartiring:

cp .env.example .env
Keyin .env faylni ochib, ma’lumotlar bazasi (MySQL) bilan bog‘liq quyidagi parametrlarni sozlang:
DB_CONNECTION: mysql (yoki ishlatilayotgan baza turi)
DB_HOST: 127.0.0.1
DB_PORT: 3306
DB_DATABASE: Ma’lumotlar bazasi nomi (masalan: comment_db)
DB_USERNAME: MySQL foydalanuvchisi (masalan: root)
DB_PASSWORD: MySQL foydalanuvchi paroli (agar mavjud bo‘lsa).
Ma’lumotlar bazasi migratsiyasi
php artisan migrate
php artisan db:seed
Frontend fayllarini o‘rnatish (npm)
npm install
npm run dev
Lokal serverni ishga tushirish
php artisan serve
Agar muammo yuzaga kelsa, quyidagi buyruqlar yordamida Laravel keshlarini tozalang:
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear