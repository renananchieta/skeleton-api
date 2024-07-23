# Projeto Parquimica - API

Para a instalação do projeto utilize recomenda-se que utilize docker, caso utilize o sistema operacional Windows, utilize o WSL.

## Instalação do projeto localmente:
Clone o projeto
```sh
git clone https://github.com/renananchieta/skeleton-api.git
```
```sh
cd skeleton-api
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Remova a pasta .git
```sh
sudo rm -r .git
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acesse o container
```sh
docker-compose exec app bash
```

Instale as dependências do projeto
```sh
composer install
```
## Possíveis erros:
Caso ocorra um erro na instalação, remova o arquivo package.json que está na raíz do projeto e tente executar o comando anterior novamente.

O servidor SSH não tem o Docker Compose instalado e para acessar o container para executar os comandos php
```sh
docker exec -it Skeleton-app bash
```

# Acessar o serviço
Para verificar se os serviços estão funcionando corretamente acesse

Local:
```sh
localhost:8000
```