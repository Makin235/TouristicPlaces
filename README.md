# TouristicPlaces
A platform where everyone can  find touristic places. They can add, like and review and  a touristic place.
The platform is done using:
	Laravel 10.x
	Php 8.0.28
	npm 10.2.4

# Useful Links:
Laravel Documentation: https://laravel.com/docs/10.x
Jetstream Livewire Documentation: https://jetstream.laravel.com/stacks/livewire.html

# Step 1: Download and install the followings:
1: Xampp: PHP, Apache and MySql
2: Composer: https://getcomposer.org/download/
3: Git: https://git-scm.com/download/win
4: IDE: https://www.jetbrains.com/idea/download/?section=windows
5: NodeJs (to use npm): https://nodejs.org/en/download

# Step 2: Download Laravel Installer by running the following command:
	composer global require laravel/installer --with-all-dependencies

# Step 3: Create the project
	composer create-project laravel/laravel TouristicPlaces

# Note: For the following steps you should navigate to the project directory before running the commands

# Step 4: Add Jetstream to the project:
	composer require laravel/jetstream

# Step 5: Add Livewire to the project:
	php artisan jetstream:install livewire

# Step 6: Navigate to project path and run the server
	php artisan serve

# Step 7: Configure the DB:
1: in .env (within project): set the database name
	DB_DATABASE=TouristicPlacesDB
2: in Xampp, open Apache and MySql
3: Open phpMyadmin and create a database with the name "TouristicPlacesDB"
4: migrate the DB by running the command:
	php artisan migrate

# Step 8: Configure npm:
	npm run dev

# Step 9: Go to the browser and open the home page (note that the port number may be different):
	http://localhost:8000/

# Step 10: Configure git
1: Create a repository in Github: TouristicPlaces
	git init
	git config --global user.name 'yourUsername'
	git config --global user.email 'yourEmail@gmail.com'
	git remote add origin https://github.com/Makin235/TouristicPlaces.git

# Step 11: Git usage
	git checkout main
	git pull origin main
	git pull origin main --allow-unrelated-histories
	git add --all
	git commit -m "Message"
	git branch -M main
	git push -u origin main
	git status
