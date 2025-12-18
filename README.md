
## Kwaderno

Kwaderno is a minimalist journaling app built with **Laravel** and styled with **TailwindCSS**. It provides a simple and elegant way to capture thoughts, organize notes, and reflect on your day — with a strong focus on privacy and usability.

---

## Features

- Clean WYSIWYG and Markdown editor  
- Categorized notebooks and tags  
- Full-text search  
- Daily journaling timeline  
- Secure authentication using Laravel Breeze  
- Dark mode with TailwindCSS

---

## Tech Stack

- **Backend:** Laravel 10+  
- **Frontend:** Blade + TailwindCSS  
- **Authentication:** Laravel Breeze (or Jetstream)  
- **Database:** MySQL / SQLite  
- **Other Tools:** Alpine.js, Laravel Mix or Vite

---

## Installation

1. **Clone the repository**

```bash
git clone https://github.com/yourusername/kwaderno.git
cd kwaderno
````

2. **Install dependencies**

```bash
composer install
npm install
```

3. **Set up environment**

```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure your `.env`** (database, mail, etc.)

5. **Run migrations**

```bash
php artisan migrate
```

6. **Compile assets**

```bash
npm run dev
# For production:
# npm run build
```

7. **Start the local server**

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

---

## Testing

```bash
php artisan test
```

---

## Folder Structure Overview

* `resources/views/` — Blade templates
* `resources/css/` — TailwindCSS source
* `routes/web.php` — Web routes
* `app/Models/` — Eloquent models
* `app/Http/Controllers/` — Controller logic

---

## Contributing

Pull requests are welcome. For major changes, please open an issue to discuss your proposed updates or improvements.

Author: Philanthropist Jay

---
