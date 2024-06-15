## CakePHP Bookmarker

This is a sample bookmarking application built using the CakePHP tutorial.

**Installation**

1. Install or update Composer (package manager).
2. Clone this repository using Git.
3. Install dependencies with `composer install`.
4. Set up your database schema.
5. Configure database credentials in `app.php`.
6. Start the server with `bin/cake server -p 8765`.
7. Access the application at http://localhost:8765.

**Using Vagrant (Optional)**

If you lack a development environment, use Vagrant:

```
vagrant up
```

This creates a virtual machine with the application accessible at http://192.168.33.99.

**Login Credentials (Vagrant)**

Username: user@example.com
Password: password

**Note:** Remove `mysql.dump` before rerunning Ansible to avoid database reset.

