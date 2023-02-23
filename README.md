# laxcon

php artisan make:model Grades --all
php artisan make:model Products --all
php artisan make:model SubGrades --all

php artisan make:controller UserController --resource --requests

php artisan migrate

# Run the Vite development server...
npm run dev
 
# Build and version the assets for production...
npm run build