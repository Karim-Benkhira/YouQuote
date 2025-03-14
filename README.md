# YouQuotes API

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/JWT-000000?style=for-the-badge&logo=JSON%20web%20tokens&logoColor=white" alt="JWT">
</p>

## 📖 About YouQuotes

**YouQuotes** is a powerful API designed for managing quotes. Users can create, read, update, and delete quotes, fetch random quotes, and filter quotes based on length. The API also tracks quote popularity and includes an optional authentication system to allow users to securely manage their quotes.

## ✨ Features

### 🔹 Core Features
- **Quote Management (CRUD)** – Create, read, update, and delete quotes.
- **Random Quotes** – Retrieve random quotes.
- **Quote Filtering** – Filter quotes based on word count.
- **Popularity Tracking** – Track how frequently each quote is requested.

### 🎁 Bonus Features
- **Quote Image Generation** – Generate images for popular quotes.
- **User Authentication** – Securely register, log in, and manage personal quotes using JWT.

## ⚙️ Tech Stack & Requirements

### 🏛 Architecture
- Built using Laravel (Monolithic Architecture).

### 💾 Database
- Supports **MySQL** or **PostgreSQL**.

### 🖼 Image Processing
- Uses **Intervention Image** for quote image generation.

### 🔐 Authentication
- Utilizes **JWT (JSON Web Tokens)** for secure authentication.

## 🚀 Installation & Setup

1. **Clone the Repository:**
   ```sh
   git clone https://github.com/yourusername/YouQuotes.git
   ```
2. **Navigate to the Project Directory:**
   ```sh
   cd YouQuotes
   ```
3. **Install Dependencies:**
   ```sh
   composer install
   ```
4. **Configure Environment:**
   ```sh
   cp .env.example .env
   ```
5. **Generate Application Key:**
   ```sh
   php artisan key:generate
   ```
6. **Run Migrations and Seed Database:**
   ```sh
   php artisan migrate --seed
   ```
7. **Start the Development Server:**
   ```sh
   php artisan serve
   ```

## 🌐 API Endpoints

### 📌 Quote Management
- `GET /api/quotes` – Retrieve all quotes.
- `GET /api/quotes/{id}` – Retrieve a specific quote.
- `POST /api/quotes` – Create a new quote.
- `PUT /api/quotes/{id}` – Update a quote.
- `DELETE /api/quotes/{id}` – Delete a quote.

### 🎲 Random Quotes
- `GET /api/quotes/random` – Get a random quote.
- `GET /api/quotes/random/{count}` – Get multiple random quotes.

### 📊 Popularity & Filtering
- `GET /api/quotes/filter?min_words={min}&max_words={max}` – Filter quotes by word count.
- `GET /api/quotes/popular` – Retrieve the most popular quotes.

### 🖼 Image Generation
- `GET /api/quotes/{id}/image` – Generate an image for a specific quote.
- `GET /api/quotes/popular/images` – Generate images for popular quotes.

### 🔑 Authentication
- `POST /api/register` – Register a new user.
- `POST /api/login` – Log in and receive a JWT token.
- `GET /api/user` – Retrieve authenticated user details.
- `POST /api/logout` – Logout and invalidate token.

## 📌 Usage Examples

### ➕ Creating a Quote
```http
POST /api/quotes
Content-Type: application/json
Authorization: Bearer your_jwt_token

{
  "text": "The only limit to our realization of tomorrow is our doubts of today.",
  "author": "Franklin D. Roosevelt"
}
```

### 🔄 Getting Random Quotes
```http
GET /api/quotes/random/3
Authorization: Bearer your_jwt_token
```

### 🔍 Filtering Quotes by Length
```http
GET /api/quotes/filter?min_words=5&max_words=10
Authorization: Bearer your_jwt_token
```

### 🖼 Generating an Image for a Quote
```http
GET /api/quotes/5/image
Authorization: Bearer your_jwt_token
```

## 📜 License
This project is open-source and licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

🚀 **Contributions are welcome!** If you’d like to enhance this project, feel free to submit a pull request! 🎉


