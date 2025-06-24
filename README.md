---

## 🌟 Funcionalidades

### 🔹 **Frontend**
- ⚡ **Suporte a Progressive Web App (PWA)**
- 🎨 **Design moderno e responsivo**
- 🛒 **Carrinho de compras, lista de desejos e rastreamento de pedidos**
- 🔎 **URLs e metadados otimizados para SEO**
- 💳 **Integração com gateway de pagamento PayPal**
- 📢 **Login social (Google, Facebook, Github)**
- 💬 **Comentários e avaliações em vários níveis**

### 🔹 **Painel Administrativo**
- 🎛️ **Gerenciamento de funções**
- 📊 **Análises avançadas e relatórios**
- 🛍️ **Gestão de produtos e pedidos**
- 🔔 **Notificações e mensagens em tempo real**
- 🏷️ **Sistema de cupons e descontos**
- 📰 **Gestão de blog e categorias**
- 📸 **Gerenciador de mídias e banners**

### 🔹 **Painel do Usuário**
- 📦 **Histórico e rastreamento de pedidos**
- 💬 **Sistema de comentários e avaliações**
- 🔧 **Personalização de perfil**

---

## 🛠️ Guia de Instalação

### 🔹 **Passo 1: Clone o Repositório**
```sh
cd ecommecer
```

### 🔹 **Passo 2: Instale as Dependências**
```sh
composer install
npm install
```

### 🔹 **Passo 3: Configuração do Ambiente**
```sh
cp .env.example .env
php artisan key:generate
```
Atualize o arquivo `.env` com as credenciais do banco de dados.

### 🔹 **Passo 4: Configuração do Banco de Dados**
```sh
php artisan migrate --seed
```
Importe manualmente o arquivo `database/e-shop.sql` para seu banco de dados (se necessário).

### 🔹 **Passo 5: Configurar o Storage**
```sh
php artisan storage:link
```

### 🔹 **Passo 6: Execute a Aplicação**
```sh
php artisan serve
```
🔗 Abra `http://localhost:8000`

### **Credenciais de Acesso do Administrador:**
📧 **Email:** `admin@gmail.com`  
🔑 **Senha:** `1111`

---


---


---
