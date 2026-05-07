# MyWebsite — Web Project

A clean, professional web project with HTML, PHP, CSS, JavaScript, and an images folder — ready to push to GitHub and deploy on any PHP server.

## Project Structure

```
my-web-project/
├── css/
│   ├── style.css          # Main stylesheet
│   └── responsive.css     # Mobile/tablet media queries
├── js/
│   ├── main.js            # Core interactions
│   └── utils.js           # Reusable helper functions & form validation
├── images/
│   └── logo.png           # Place your images here
├── index.html             # Home page
├── about.html             # About page
├── contact.php            # Contact page with PHP mail handler
├── config.php             # DB configuration (add to .gitignore!)
├── .gitignore
└── README.md
```

## Pages

| File | Description |
|------|-------------|
| `index.html` | Home page with hero section and feature cards |
| `about.html` | About page with team section |
| `contact.php` | Contact form with PHP validation and `mail()` |
| `config.php` | PDO database connection — **never commit real credentials** |

## Getting Started

### 1. Clone the repository
```bash
git clone https://github.com/your-username/my-web-project.git
cd my-web-project
```

### 2. Run locally
- **HTML/CSS/JS only**: Open `index.html` directly in a browser
- **PHP features**: Use XAMPP, WAMP, or a local PHP server:
  ```bash
  php -S localhost:8000
  ```
  Then visit `http://localhost:8000`

### 3. Configure email (contact form)
Edit `contact.php` and update the `$to` address to your own email.
On a live server, make sure PHP's `mail()` function is enabled or swap it for PHPMailer/SMTP.

### 4. Configure database (optional)
Copy `config.php` to a safe location, update the credentials, and **add it to `.gitignore`**.

## Deployment

Upload all files to your web hosting (Apache/Nginx with PHP support) via FTP or Git.

For **static hosting** (GitHub Pages, Netlify): HTML, CSS, and JS work fine — PHP will not execute.

## Technologies Used

- HTML5 (semantic markup)
- CSS3 (custom properties, Flexbox, Grid)
- Vanilla JavaScript (ES6+)
- PHP 7.4+ (form handling, PDO)

## License

MIT — free to use and modify.
