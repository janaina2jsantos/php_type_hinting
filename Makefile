install:
	@echo "--> Installing composer dependencies..."
	@composer install --ignore-platform-reqs

run:
	@php index.php