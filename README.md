# Create View
- create controller from model fillable (composer require mehradsadeghi/laravel-crud-generator - php artisan make:crud NameController --model=Name --validation)
- create view template (composer require sven/artisan-view --dev - php artisan make:view Name --resource)
- create auto generate view (php artisan generate:crud Name Name_id)

# User access
- login as Administrator can access all routes (roues group middleware)
- login as Management can access his team and player
- login as Team can access his player
- login as player can see his profile
# Login logic
- akun ardiansyah = Super User (dapat pilih siapa admin)
# next update 
- can access the trophy (player and team) and link foto
- login as Team can access his player and if the team was acquisition the data migrate to the management
eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiI5NzkzMTA4NC05NGY0LTRlNDAtYWExNS00NzBmM2FkNDc5ZDQiLCJpc3MiOiJodHRwOlwvXC9zaXN0ZXIudXRzLmFjLmlkXC93cy5waHBcLzEuMFwvYXV0aG9yaXplIiwiaWF0IjoxNjMyOTY5OTE5LCJleHAiOjE2MzI5NzM1MTksIm5iZiI6MTYzMjk2OTkxOSwianRpIjoiYWE2YWJiODMxZjIyZjRmZiJ9.wQi5sKaZIwX8b7G4Hep-bd5t3r23jC4JzfmU4CdA4IU