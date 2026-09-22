Open Source Social Network [4.1] 
======================================

Opensource-Socialnetwork (OSSN) is a social networking software written in PHP. It allows you to make a social networking website and helps your members build social relationships, with people who share similar professional or personal interests.

OSSN is released under the GNU General Public License (GPL) Version 2.

Languages
=========
* English
* German
* French

Front-End Features
===================
* User Registration
* User Login
* Profile 
* Profile Photo
* Profile Cover
* Add/Remove Friends
* Live Chat
* Wall posts
* Photos
* Ads
* Groups
* Tag friends in posts
* User block system
* User poke system
* Ajax Comments
* Ajax Likes
* Ajax Photos in comments
* Group cover photos
* Repostion Profile/Group cover
* Notifications
* Friend Requests
* Chat Bar
* Invite Friends
* Embed Videos
* Smilies
* SitePages (terms, privacy, about)
* Site Search
* Reset Password
* Newsfeed page
* Post Edit
* Comment Edit
* Mobile Friendly

Backend Features
================
* Admin Dashboard for site overview
* Online users count (male/female) graph
* Total site users count (by months) graph
* Update Notification
* Add User
* Remove User
* Edit User
* Ads Manager
* Site Cache Settings
* Site Basic Settings
* Unvalidated users
* Manually validate unvalidated users
* and much more components settings

Prerequisites
=============
* PHP 5.4 or higher (PHP 7.x / 8.x supported)
* MySQL 5.x or higher / MariaDB
* Apache with `mod_rewrite` enabled
* PHP Extensions: cURL, GD, ZIP, JSON, XML, MySQLi

Installation & Quick Start
==========================

### Option 1: Docker Compose (Recommended)
Bring up the complete application stack (PHP app + MySQL database) with a single command:
```bash
docker-compose up --build
```
Then access the application at `http://localhost:8080`.

### Option 2: Manual Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/PreCogSecurity/opensource-socialnetwork.git
   cd opensource-socialnetwork
   ```
2. Install dependencies via Composer and npm:
   ```bash
   composer install
   npm install
   ```
3. Configure environment and database:
   Copy `.env.example` to `.env` and configure your database credentials.
   Configure database settings in `configurations/ossn.config.db.php` based on `configurations/ossn.config.db.example.php`.

Running Tests & CI
==================
To run the automated test suite using PHPUnit:
```bash
vendor/bin/phpunit
```

DEMO
====
https://www.opensource-socialnetwork.org/demo/

UPGRADE
=======
https://www.opensource-socialnetwork.org/wiki/view/708/how-to-upgrade-ossn

Copyright 2014-2016 Informatikon Technologies (informatikon.com)
Copyright 2016 SOFTLAB24 (https://www.softlab24.com/)
Copyright 2026 PreCog Security
