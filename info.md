# Quevent

Quevent/
│
├── 📁 admin/ → Admin dashboard and pages
│ ├── dashboard.php
│ ├── manage-users.php
│ ├── manage-events.php
│ └── ...
│
├── 📁 user/ → User dashboard and pages
│ ├── dashboard.php
│ ├── register-event.php
│ ├── view-events.php
│ └── ...
│
├── 📁 assets/ → CSS, JS, images
│ ├── css/
│ ├── js/
│ └── images/
│
├── 📁 includes/ → Reusable PHP files
│ ├── db.php → DB connection
│ ├── functions.php → Common functions
│ ├── auth.php → Authentication functions
│ └── session.php → Session management
│
├── 📁 config/ → Configuration files
│ └── config.php
│
├── 📁 sql/ → SQL scripts for creating and populating the database
│ └── event_db.sql
│
├── 📁 uploads/ → Uploaded files (images, documents, etc.)
│ └── ...
│
├── 📁 templates/ → Header, footer, etc.
│ ├── header.php
│ ├── footer.php
│ └── navbar.php
│
├── 📁 auth/ → Login, registration, logout
│ ├── login.php
│ ├── register.php
│ ├── logout.php
│ └── forgot-password.php
│
├── index.php → Landing page
├── .htaccess → Security and URL rewriting
└── README.md → Project documentation

# admin/ and user/ are separated to manage different roles easily.

# includes/ keeps your logic modular and reusable.

# config/ stores app settings (like DB constants).

# sql/ holds .sql files to set up the DB easily on other systems.

# auth/ handles registration/login logic securely.
