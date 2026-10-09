# Loja PHP

Projeto simples em PHP com Apache e MySQL usando Docker Compose.

## Requisitos

- Docker
- Docker Compose

## Como executar

```bash
docker compose up --build -d
```

A aplicação ficará disponível em:

- http://localhost:8080
- phpMyAdmin: http://localhost:8081

## Banco de dados

- MySQL: `db`
- Banco: `loja`
- Usuário: `root`
- Senha: `root`

## Estrutura

- `src/` - arquivos PHP da aplicação
- `docker-compose.yml` - serviços do ambiente
- `dockerfile` - imagem do PHP/Apache
