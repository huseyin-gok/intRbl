# intRbl - Internal RBL System

Internal RBL (Realtime Blacklist) System is a web-based management tool developed for company-wide IP and URL blocking.

## Features

- IP Blocking Management
  - Add/Remove IP addresses
  - Bulk IP address import
  - View IP details
  - MXToolbox integration

- URL Blocking Management
  - Add/Remove URLs
  - Bulk URL import
  - View URL details
  - URL validation

- Reporting
  - Date-based filtering
  - IP/URL based filtering
  - Activity graph
  - Export to Excel
  - Statistical summary

## Installation

1. Upload files to your web server
2. Set required permissions:
   ```bash
   chmod 755 .
   chmod 644 *.html
   chmod 644 *.php
   chmod 666 *.txt
   chmod 666 *.log
   ```

## Requirements

- PHP 7.4 or higher
- Web server (Apache/Nginx)
- Modern browser with JavaScript support

## Technologies Used

- Bootstrap 5.3.0
- jQuery 3.6.0
- Chart.js
- Moment.js
- DataTables
- XLSX.js

## Security

- XSS protection
- CSRF protection
- File path validation
- Error handling and logging

## File Structure

### Data Files
- `blacklist_ips.txt`: List of blocked IP addresses
- `blacklist_ips_detailed.txt`: Detailed information about blocked IPs
- `blacklist_urls.txt`: List of blocked URLs
- `blacklist_urls_detailed.txt`: Detailed information about blocked URLs

### Log Files
- `debug.log`: System logs and error tracking

### Documentation
- `README.md`: Turkish documentation
- `README.en.md`: English documentation
ory.
