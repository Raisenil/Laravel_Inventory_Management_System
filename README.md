# Inventory Management System Technical Documentation

## Table of Contents

1\. **Introduction**

2\. **System Overview**

3\. **System Features**

4\. **Technology Stack**

5\. **Getting Started**

6\. **User Roles and Authentication**

7\. **Managing Inventory**

    - 7.1. **Purchase Management**

    - 7.2. **Invoice Management**

    - 7.3. **Reports**

8\. **Installation and Setup**

---

## 1. Introduction

Welcome to the Inventory Management System Documentation. This document provides an in-depth guide to the features and functionalities of the Inventory Management System developed using Laravel 10.

## 2. System Overview

The Inventory Management System is a comprehensive project that allows users to manage their inventory, track purchases, create invoices, and generate various reports. It also includes features like dynamic website creation, theming, and contact form setup.

## 3. System Features

The Inventory Management System offers a wide range of features, including:

- **Purchase Management**: Record and manage purchases of products.

- **Invoice Management**: Create and manage invoices for customers.

- **Reports**: Generate various reports, including daily invoice reports, working stock reports, supplier-wise stock reports, and customer credit/paid reports.

- **Theming**: Customized the system's appearance with professional themes.

- **Contact Form Setup**: Enable contact forms on your website for communication with clients.

- **Authentication**: Laravel 10 authentication using Breeze for user access control.

- **Image Upload System**: Allows multiple image uploads for products.

## 4. Technology Stack

The Inventory Management System is built using the following technologies:

- **Laravel 10**: A PHP web application framework.

- **Laravel Breeze**: For authentication.

- **Database**: MySQL or any compatible database system.

- **Frontend**: HTML, CSS, JavaScript.

- **Theming**: Professional themes for frontend and backend customization.

## 5. User Roles and Authentication

The system includes user roles and authentication features. Users can register, log in, and access different sections of the application based on their roles.

## 6. Managing Inventory

### 6.1. Purchase Management

This feature allows you to record and manage product purchases.

### 6.2. Invoice Management

Create, manage, and generate invoices for your customers.

### 6.3. Reports

Generate various reports, including daily invoice reports, working stock reports, supplier-wise stock reports, and customer credit/paid reports.

## 7. Getting Started

To Properly Run it on local system make sure Laravel 10 installed. Clone the project repository and follow the setup instructions as provided.

## 8. Installation and Setup

To set up the Invento. on your local machine, follow these steps:

1\. Clone the repository from GitHub: `git clone https://github.com/Raisenil/Laravel_Inventory_Management_System.git`

2\. Download and install XAMPP from the official website `(https://www.apachefriends.org/index.html)`. Follow the installation instructions for your operating system.

3\. Make sure XAMPP is up and running. Start the Apache and MySQL modules from the XAMPP control panel.

4\. Create a New Database by going On the `phpMyAdmin` interface, click on "New" in the left sidebar to create a new database.
Enter name as `invento` and choose the appropriate collation (usually utf8_general_ci).

5\. Import the Backup by selecting it from the left sidebar. Click on the "Import" tab in the top menu. Click the "Choose File" button to select the .sql backup file from `Database Backup\invento.sql`.Choose the default settings or adjust them based on your needs.Click the "Go" button to start the import process.

6\. Update Configuration from `invento\.env`

7\. Run the Development Server:
Use Laravel's built-in development server to run your project locally. Start the server with the following command in terminal:

    cd Invento
    php artisan serve

By default, it will run on `http://localhost:8000`.

8\. Access Your Laravel Project:
Open a web browser and navigate to `http://localhost:8000` (or the URL provided when starting the server).

## Additional Documents

[Reports](Doc/Inventory_Management_System_Documentation.pdf)
