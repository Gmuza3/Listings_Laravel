# LaraGigs

LaraGigs is a job listing application built with Laravel. Users can browse, post, and manage job offers.

## ⚙️ Installation

Clone the repository:

```bash
git clone https://github.com/your-username/laragigs.git
cd laragigs

Install dependencies:
composer install
npm install
npm run dev

Styles are compiled via TailwindCSS using Laravel Mix.

If you change styles, re-run:

bash
Copy
Edit
npm run dev

Copy .env file and generate app key:
cp .env.example .env
php artisan key:generate

Update your .env file with correct DB credentials, then run migrations::
php artisan migrate

Seed the database with demo data:
php artisan db:seed

Start local server:

http://localhost:8000