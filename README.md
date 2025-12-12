# Breeze-Admin

Breeze Admin é um pacote Laravel para adicionar um painel administrativo simples, moderno e totalmente integrado ao **Laravel Breeze**. Ele permite adicionar funcionalidades de adminitração rapidamente em qualquer aplicação Laravel com autenticação Breeze já configurada.

---

## Funcionalidades Principais

* 🔐 Autenticação integrada ao Laravel Breeze

* 📊 Dashboard administrativo

* 👤 Gerenciamento de usuários

* 🔄 Edição de dados dos usuários

* 🗑️ Remoção de usuários

* 🧬 Impersonation (entrar como outro usuário)

* ⚙️ Comandos artisan para instalação automática

* 🔧 Migrations inclusas

* 🖼️ Views personalizadas no Blade

* 🛡️ Proteção de rotas via middleware Auth

---

## Requisitos 

Antes de usar, certifique-se de que seu ambiente atende aos requisitos:

* PHP 8.1 ou superior

* Laravel 10 ou superior

* Composer instalado

* Laravel Breeze configurado no projeto

---

## Instação

Instalar o pacote é simples. Do terminal, no diretório do seu projeto Laravel:

```bash 
Composer require kazuha/adminpainel
```

Se estiver trabalhando com o pacote local (via path), adiciona ao **composer.json**:
```bash
"repositories": [
  {
    "type": "path",
    "url": "packages/kazuha/adminpainel"
  }
]
```

Depois executa:
```bash 
composer update 
```

---

## Configuração do Painel

Uma vez instalado, rode o comando de instalação do painel:
```bash
php artisan adminpainel:install
```
Esse comando irái:

* Rodar migrations necessárias 
* Criar usuários administrativo inicial (com credenciais exibidas no terminal)

---

## Acessando o Painel

Depois da instalação:

1. Acesse **/login** e entre com as credenciais exibidas.

2. Após login, visite a rota /admin para acessar o painel administrativo.

---

## Testes & Desenvolvimentos

Se quiser testar ou desenvolver novas features:

* Faça um **fork**

* Crie uma branch no feature:

```bash
git checkout -b feature/nova-feature
```

* Commit & Push

* Abra um Pull Request

---

# Contribuições
Contribuições são bem-vindas!
Seja com correções, novas funcionalidades, melhorias na documentação ou ajustes gerais — qualquer ajuda conta! 

---

## Licença

Distribuído sob a **MIT License** — veja o arquivo ```LICENSE``` para mais detalhes.