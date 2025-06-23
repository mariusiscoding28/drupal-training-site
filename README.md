
# Drupal Training Course Site

This is a custom Drupal 10 project built as part of a second-round technical interview for the Office of the New York State Comptroller.

The site offers one-day training courses and includes:
- Course listing with filters (topic, date)
- Registration form (planned functionality)
- Mobile-responsive layout with custom theme and styling enhancements
- Homepage hero section and branding

---

## 🚀 How to Run the Site

### Requirements
- PHP 8.1+
- Composer
- SQLite or MariaDB (configured in `settings.php`)

### Quick Setup

```bash
composer install
php -S 0.0.0.0:8000 -t web
```

Then visit the app in the browser:  
👉 http://localhost:8000 (or Gitpod preview - https://gitpod.io/#https://github.com/mariusiscoding28/drupal-training-site
)

---

## 💡 Features Implemented

- Custom content type: `Training Course`
- Views listing with filters for `Topic` and `Date`
- Calendar widget using Better Exposed Filters module
- Hero section on homepage with anchor link to courses
- Responsive, custom-branded layout using a sub-theme
- Logo displayed using a custom block
- Homepage set to display the courses View

---

## 🧩 Notes

- Used Drupal 10.1 to support SQLite in Gitpod
- Cache cleared and asset aggregation disabled for dev stability
- Code hosted on the `drupal-only` branch
- Webform registration planned but not yet attached due to UI limitations

---

## 📂 File Structure

```
/web              # Drupal web root
/web/themes/custom/mytheme  # Custom theme with CSS and assets
/composer.json    # Project dependencies
/sites/default/   # Settings and files
```

---

## 👨‍💻 Author

**Marius Zanou**  
📧 marius.s.zanou@gmail.com  
🌐 https://github.com/mariusiscoding28
