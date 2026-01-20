# Dummy Restaurant Management System (Laravel)

This is a minimal/dummy Laravel scaffold for a Restaurant Management System. It demonstrates:
- A MenuItem model and migration
- A MenuController with index/show actions
- Simple Blade views to list and show menu items
- A seeder to populate sample menu items

Setup (quick):
1. Create a new Laravel project or place these files into an existing Laravel app.
2. Run:
   - composer install
   - cp .env.example .env
   - php artisan key:generate
   - Set DB credentials in `.env`
   - php artisan migrate --seed
   - php artisan serve
3. Open http://127.0.0.1:8000 to see the menu listing.

Notes:
- This is a dummy scaffold intended for quick testing and prototyping.
- Extend controllers, models, views, and add authentication or admin dashboard as needed.
