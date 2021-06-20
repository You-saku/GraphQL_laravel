# GraphQL(lighthouse)

<h2>Summary</h2>
I practice GraphQL with Laravel. I start lighthouse. This is special query for API.<br>
This is sample for GraphQL Begginers.
<h2>How to start</h2>
1. git clone 
   
2.composer install
   
```
1:cd GraphQL_Laravel
2:composer install
```
3.Setting DB<br>
You must set .env(about DB).
For example, MySQL sqlite.
<br>
>.env<br>
"DB_CONNECTION=mysql" => "DB_CONNECTION=sqlite"
<br>

4.Migration and Seeding
```
php artisan migrate:fresh --seed
```
5.Access graphql-playground
```
php artisan serve
```

Access "http://127.0.0.1:8000/graphql-playground" 