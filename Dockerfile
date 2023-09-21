FROM ubuntu:latest

ENV timezone=America/Sao_Paulo

RUN apt-get update && \
    ln -snf /usr/share/zoneinfo/${timezone} /etc/localtime && echo ${timezone} > /etc/timezone  && \
    apt install -y php-common \
      php-cli \
      php-curl \
      php-json \
      php-mbstring \
      php-xml \
      php-pcov \
      php-xdebug

COPY . /usr/src/myapp

WORKDIR /usr/src/myapp

CMD [ "php", "./index.php" ]