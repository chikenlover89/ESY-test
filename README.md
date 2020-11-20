# ESY-test

Palaišanas instrukcija:

1. Noklonēt repozitoriju ar konsoles komandu: git clone https://github.com/chikenlover89/ESY-test.git
2. Atrodoties ESY-test mapē ieinstalēt dependancies ar konsoles komandu - composer install
3. Rediģēt .env.example faila nosaukumu uz .env
4. .env failā aizpildīt konfigurāciju DB_HOST=localhost, DB_USER=root vai cits mysql lietotājs,
DB_PASSWORD= lietotāja parole, DB_DATABASE= datubāzes nosaukums
5. Datubāzē izveidot 2 tabulas "users" un "products"
6. Products tabulā izveidot kolonnas (id (int, autoincrement, primary key), name(char(255)), amount(char(255)), unit_price(char(255))) manuāli vai izmantot DBexport mapē atrodamās mysql komandas
7. Users tabulā izveidot kollonas (id(int, autoincrement, primary key), user(char(255)), password(char(255))) manuāli vai izmantot DBexport mapē atrodamās mysql komandas
8. Palaist projektu ar konsoles komandu: php -S localhost:8000
9. Atvērt lapu localhost:8000 interneta pārlūkā
