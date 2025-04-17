# 🛍️ Simple Fashion Eshop

Welcome to **QI & JIN**, a minimalist black & white themed fashion e-commerce website. This is a simple front-end and partially functional back-end prototype built for learning and design purposes.

![Homepage Screenshot](https://github.com/IvannCheah/Simple-Fashion-Eshop/blob/01a51b62cd8841579648e514bc263e8a62860fdb/userinterface.png)

## 📌 Overview

QI & JIN is designed as a stylish online fashion store showcasing products under three main categories:

- 👔 **Men**
- 👗 **Women**
- 👜 **Accessories**

While some features are still in progress, the site currently supports user interaction, a basic authentication system, and a clean shopping interface.

## ✅ Features

- 🔐 **Register & Login System** (with PHP & MySQL)
- 🖼️ **Product Image Slider**
- 🛒 **Add to Cart Button** (UI only, no backend functionality)
- 📞 **Contact Page**
- 🎨 **Minimalist UI** (black & white theme)

> ⚠️ Note: Some functions such as cart checkout and payment are currently **non-functional (UI only)** — this project is mainly focused on design and front-end flow.

## 💻 Technologies Used

- **HTML/CSS** – Structure & styling
- **JavaScript** – Slider, dynamic elements
- **PHP** – Handling registration/login
- **MySQL** – User database
- **XAMPP** – Local server for PHP & MySQL

## 🏁 How to Run Locally

1. **Download** this repository as a `.zip` file and extract it.  
2. **Open the folder** using a text editor like **VS Code**.  
3. Run the project in a browser by right-clicking the main HTML file (e.g. `index.html`) and selecting **"Open with Live Server"** (if using VS Code), or simply open it manually in your browser.  
4. To enable PHP and database functions (like registration/login), continue with the steps below.

### 🗂️ Setting Up the Database (Optional for PHP functions)

To enable registration and login using PHP and MySQL:

1. Install [XAMPP](https://www.apachefriends.org/index.html)
2. Copy the project folder into your `htdocs` directory (usually under `C:\xampp\htdocs`)
3. Open the **XAMPP Control Panel** and start both **Apache** and **MySQL**
4. Visit [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
5. Create a new database (e.g., `project`)
6. Import the provided `.sql` file:
   - Click the new database
   - Go to the **Import** tab
   - Choose the `.sql` file (e.g., `project.sql`) and click **Go**
7. Now, visit the site.
