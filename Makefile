start:
	docker-compose build app
	docker-compose up -d

delete:
	docker-compose down