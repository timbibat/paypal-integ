# paypal-integ

# Galaxy S25 Ultra - Product Landing Page with PayPal Integration

A responsive product landing page for the Samsung Galaxy S25 Ultra, featuring a 3D model viewer and a fully functional PayPal Sandbox payment integration using PHP and the PayPal REST API.

## 🚀 Features

* **Responsive UI:** Built with **Bootstrap 5** for mobile-responsive layout.
* **Interactive 3D Model:** Users can rotate and view the phone in 3D using `<model-viewer>`.
* **PayPal Integration:**
    * **Smart Buttons:** Integrated via PayPal JavaScript SDK.
    * **REST API Backend:** Server-side payment creation and capture using PHP & cURL.
    * **Secure:** Client Secrets are stored securely on the backend, not exposed to the client.
    * **Console Logging:** Transaction details are logged to the browser console for debugging.

## 🛠️ Tech Stack

* **Frontend:** HTML5, CSS3, Bootstrap 5.3, JavaScript
* **Backend:** PHP (Native cURL requests)
* **Server:** XAMPP (Apache)
* **APIs:** PayPal REST API (v2), Google Model Viewer

## ⚙️ Prerequisites

* **XAMPP** (or any PHP local server environment)
* **PayPal Developer Account** (for Sandbox credentials)
* **Git**

## 📥 Installation & Setup

### 1. Clone the Repository
Go to your XAMPP `htdocs` folder and clone the project:
```bash
cd C:\xampp\htdocs
git clone [https://github.com/yourusername/galaxy-s25-paypal.git](https://github.com/yourusername/galaxy-s25-paypal.git)
```
### 2. Configure API Credentials
For security, the config.php file is ignored by Git. You must create it manually.

Locate config.sample.php in the root directory.

Rename it to config.php.

Open config.php and add your PayPal Sandbox Credentials:
<?php
// PayPal Sandbox Configuration
define('PAYPAL_CLIENT_ID', 'PASTE_YOUR_SANDBOX_CLIENT_ID_HERE');
define('PAYPAL_SECRET', 'PASTE_YOUR_SANDBOX_SECRET_HERE');
define('PAYPAL_URL', '[https://api-m.sandbox.paypal.com](https://api-m.sandbox.paypal.com)');
?>

### 3. Update Frontend Client ID
Open index.html and ensure the script tag matches your Sandbox Client ID:
<script src="[https://www.paypal.com/sdk/js?client-id=PASTE_YOUR_SANDBOX_CLIENT_ID_HERE&currency=PHP](https://www.paypal.com/sdk/js?client-id=PASTE_YOUR_SANDBOX_CLIENT_ID_HERE&currency=PHP)"></script>
