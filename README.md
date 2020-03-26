# MAQE Forums

## 🛠  Installation & Set Up

1. Clone the project

   ```
   $ git clone https://github.com/sarapmax/maqe-forums.git
   ```
   
2. Install composer dependencies
   ````
   $ composer install
   ````
3. Install & Run NPM
   ````
   $ npm install
   $ npm run dev
   ````
4. Config database
   ````
   Create a new database on your local machine.
   
   $ cp .env.example .env
   $ php artisan key:generate
   
   Config your database credentails in .env file.
   ````
5. Run migration
   ````
   $ php artisan migrate --seed
   ````
6. Done
   ````
   browse http://maqe-forums.test (Laravel Valet)
   ````
   
