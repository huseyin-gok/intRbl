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
   chmod 755 *.txt
   chmod 755 *.log

## Requirements

- PHP 7.4 or higher
- Web server (Apache/Nginx)

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
## Images
![Image](https://github.com/user-attachments/assets/51066d5e-3a2c-4e37-8c0f-4f60b9132ca5)

![Image](https://github.com/user-attachments/assets/e831a2b2-844a-45df-9e61-38986c6ebc52)
