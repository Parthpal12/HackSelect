# HackSelect

HackSelect is a full-stack **prototype/academic portfolio project** for demonstrating a hackathon-style problem statement selection workflow. It is not affiliated with, or currently used by, any real hackathon, event, institution, or organization.

## Live Demo

**Website:** http://parthpal3305.gt.tc

> The hosted site is a demonstration deployment. Please use test/demo information only.

## What it does

HackSelect provides separate student and administrator workflows for managing events, teams, problem statements, and selections. Application data is persisted in a MySQL database rather than being stored only in the browser.

### Features

- Student registration and login
- Admin authentication and dashboard
- Event and problem-statement management
- Searchable problem statements
- Difficulty, domain, technology, capacity, and availability information
- Team creation and team-member management
- Problem-statement selection and status tracking
- Selection history
- Responsive student and admin interfaces
- MySQL-backed persistent data

## Tech Stack

- PHP 8+
- MySQL / MariaDB
- HTML5
- CSS3
- JavaScript
- PDO with prepared database access

## Project Structure

```text
HackSelect/
├── actions/
├── admin/
├── assets/
├── config/
│   └── database.php
├── includes/
├── student/
├── admin-login.php
├── index.php
├── login.php
├── logout.php
└── register.php
```

## Local Setup

1. Install PHP 8+ and MySQL.
2. Create/import a database named `hackselect_db` using the HackSelect schema.
3. Configure database access using environment variables `DB_HOST`, `DB_NAME`, `DB_USER`, and `DB_PASS`, or edit `config/database.php` for your local development environment.
4. From the project directory run:

```bash
php -S localhost:8000
```

5. Open `http://localhost:8000`.

## Database

HackSelect persists relevant application information in MySQL, including students, teams and team members, events, problem statements, selections, selection statuses, and selection history according to the database schema used by the project.

## Security Note

No production database passwords or hosting credentials are included in this repository. Do not commit real passwords, tokens, or private credentials.

## Disclaimer

This repository is a **trial/prototype project created for learning, demonstration, and portfolio purposes**. It is not a production system for a real hackathon or event. Any records used in the demo should be sample/test data.
