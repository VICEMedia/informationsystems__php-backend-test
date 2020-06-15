.PHONY: test idehelper format shell

up:
	exec docker-compose up nginx mysql operativepostgres

test:
	exec docker-compose run --rm test

idehelper:
	exec docker-compose run --rm idehelper

format:
	exec composer cs-fix

shell:
	exec docker-compose run --rm shell

testshell:
	exec docker-compose run --rm testshell
