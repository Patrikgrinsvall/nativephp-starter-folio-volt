# NativePHP Starter 
- Folio Path based routing
- Livewire Volt components
- Vite And Tailwindcss

## Usage
- composer install
- npm install
- cp .env.example .env
- php artisan key:generate
- php artisan native:install
- npm run dev
- php artisan native:serve

### Adding new views
- Add a new folder in `resources/views/pages/` with a index.blade.php file
- This will create a new route with the name of the directory
- Creating additional blade files in will create sub routes
- Example: If you create "home" folder with an index.blade.php and an edit.blade.php file the routes `/home` and `/home/edit` will be created.

### Adding new components

- Add new components in components folder
- See navigation.blade.php and navigation-item.blade.php for an example component.
