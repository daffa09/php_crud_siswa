<!-- portfolio -->
<!-- slug: php-crud-siswa -->
<!-- title: PHP CRUD Siswa -->
<!-- description: Student data CRUD application built with native PHP and MySQL for learning basic web development -->
<!-- image: https://github.com/daffa09/php_crud_siswa/assets/68214221/c26e3aa8-0684-4a96-bd30-bae37f9eec63 -->
<!-- tags: php, mysql, crud, bootstrap, student-management -->

# PHP Student CRUD Application (CRUD Siswa)

A simple yet comprehensive student data management system built with native PHP and MySQL. This project demonstrates fundamental CRUD (Create, Read, Update, Delete) operations and was created during my high school learning journey.

## 📋 Overview

This is a student data management application (CRUD Siswa) that allows schools to manage student records efficiently. Built with native PHP without frameworks, it serves as an excellent learning project for understanding web development fundamentals and database operations.

![Application Preview](https://github.com/daffa09/php_crud_siswa/assets/68214221/c26e3aa8-0684-4a96-bd30-bae37f9eec63)

## ✨ Features

- **Student Management (CRUD)**
  - Add new student records
  - View all students in a table
  - Edit existing student information
  - Delete student records

- **Data Management**
  - Student ID (NIS)
  - Student name
  - Class/Grade
  - Address
  - Phone number
  - Date of birth

- **User Interface**
  - Clean, responsive design
  - Bootstrap-based layout
  - Data tables with sorting
  - Form validation
  - Success/error notifications

- **Database Operations**
  - Secure MySQL connections
  - Prepared statements (if used)
  - Data validation
  - Error handling

## 🛠️ Technologies Used

- **PHP** (Native): Server-side programming
- **MySQL**: Database management
- **Bootstrap**: Frontend framework
- **HTML5**: Structure
- **CSS3**: Styling
- **JavaScript**: Client-side interactions

## 📁 Project Structure

```
php_crud_siswa/
├── src/
│   ├── index.php          # Main page (view students)
│   ├── tambah.php         # Add student form
│   ├── edit.php           # Edit student form
│   ├── hapus.php          # Delete student
│   ├── proses_tambah.php  # Process add
│   ├── proses_edit.php    # Process edit
│   └── koneksi.php        # Database connection
├── assets/
│   ├── css/
│   │   └── style.css      # Custom styles
│   └── js/
│       └── script.js      # Custom scripts
├── databases/
│   └── uprakweb2020.sql   # Database schema
├── .gitignore
└── README.md
```

## 🚀 Getting Started

### Prerequisites

- **XAMPP**, **WAMP**, or similar PHP development environment
- PHP 7.0 or higher
- MySQL 5.7 or higher
- Web browser

### Installation Steps

1. **Clone Repository**
   ```bash
   git clone <repository-url>
   ```

2. **Move to htdocs**
   
   Copy project folder to your XAMPP/WAMP htdocs directory:
   ```bash
   # For XAMPP
   cp -r php_crud_siswa C:/xampp/htdocs/

   # For WAMP  
   cp -r php_crud_siswa C:/wamp64/www/
   ```

3. **Create Database**
   
   Open phpMyAdmin (`http://localhost/phpmyadmin`)
   - Create new database named `uprakweb2020`

4. **Import Database**
   - Select the `uprakweb2020` database
   - Click "Import" tab
   - Choose file: `databases/uprakweb2020.sql`
   - Click "Go" to import

5. **Configure Database Connection**
   
   Edit `src/koneksi.php` if needed:
   ```php
   <?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "uprakweb2020";
   
   $conn = mysqli_connect($host, $user, $pass, $db);
   
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
   ?>
   ```

6. **Start XAMPP/WAMP**
   - Start Apache
   - Start MySQL

7. **Access Application**
   
   Open browser and navigate to:
   ```
   http://localhost/php_crud_siswa/src
   ```

## 💻 Usage Guide

### Viewing Students

- Main page displays all students in a table
- Columns show: NIS, Name, Class, Address, Phone, Actions
- Data is fetched from MySQL database

### Adding New Student

1. Click "Add Student" or "Tambah Siswa" button
2. Fill in the form:
   - Student ID (NIS)
   - Full Name
   - Class/Grade
   - Address
   - Phone Number
   - Date of Birth
3. Click "Save" or "Simpan"
4. Student added to database
5. Redirect to main page with success message

### Editing Student Data

1. Click "Edit" button on student row
2. Form pre-filled with current data
3. Modify fields as needed
4. Click "Update" or "Perbarui"
5. Changes saved to database
6. Redirect with success message

### Deleting Student

1. Click "Delete" or "Hapus" button
2. Confirmation dialog appears
3. Confirm deletion
4. Student removed from database
5. Page refreshes with success message

## 🗄️ Database Schema

### Table: `siswa`

```sql
CREATE TABLE `siswa` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nis` varchar(20) NOT NULL,
    `nama` varchar(100) NOT NULL,
    `kelas` varchar(20) NOT NULL,
    `alamat` text,
    `no_telp` varchar(15),
    `tanggal_lahir` date,
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `nis` (`nis`)
);
```

## 🎨 UI Features

- **Responsive Design**: Works on desktop, tablet, and mobile
- **Bootstrap Components**: Cards, tables, forms, buttons
- **Icons**: Font Awesome integration
- **Alerts**: Success and error messages
- **Modals**: Confirmation dialogs

## 🔒 Security Considerations

This is a learning project. For production, consider:
- Input sanitization
- Prepared statements (PDO or mysqli_prepare)
- CSRF protection
- XSS prevention
- Password hashing for admin login
- Session management
- SQL injection prevention

## 🐛 Troubleshooting

**Connection Failed**
- Ensure MySQL is running in XAMPP/WAMP
- Verify database name and credentials
- Check `koneksi.php` settings

**Table Not Found**
- Import `uprakweb2020.sql` properly
- Verify database name matches

**Page Not Loading**
- Check if Apache is running
- Verify project is in htdocs/www folder
- Check file paths in code

**Data Not Saving**
- Check MySQL connection
- Verify form action URLs
- Check for PHP errors (enable error_reporting)

## 🎓 Learning Outcomes

This project taught me:
- Native PHP programming
 - MySQL database operations
- CRUD operation implementation
- Form processing
- Session management
- Bootstrap framework
- Basic security practices
- MVC pattern basics (separation of concerns)

## 🚀 Future Enhancements

Potential improvements:
- User authentication system
- Student photo uploads
- Grade/score management
- Attendance tracking
- Export to PDF/Excel
- Search and filter functionality
- Pagination for large datasets
- Class management module
- Parent information
- Report generation

## 🤝 Contributing

This is a learning project from my high school days. Feel free to fork and enhance for your own learning!

## 📄 License

Open source and available for educational purposes.

## 💭 Personal Note

I built this during high school as one of my early web development projects. It's a simple CRUD application, but it taught me fundamental concepts that I still use today. Every journey starts with simple steps!

---

**Built while learning PHP in High School** 🎓📚  
A foundation project for understanding web development basics
