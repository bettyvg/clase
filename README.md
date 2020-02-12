#Instrucccions
#build container 

docker build -t my-php-clase .

#run docker container unix
docker run -d -v "$PWD":/var/www/html -p 80:80 --name my-php-apache-clase my-php-clase

#run docker container windows power shell
docker run -d -v ${PWD}:/var/www/html -p 80:80 --name my-php-apache-clase my-php-clase