# TestEnv
## About
Some Web, FTP and SSH services with weak usernames and passwords that can be deployed using docker-compose.

The services are used as test environment for a Powershell module, which scans for services, tests them for access with default credentials and more!
* __AnonFtp__: ProFTPd with anonymous login and write access
* __SimpleWeb__: Apache2 webserver with Basic Authentication (credentials: admin:admin) protecting the root directory
* __SimpleWebTls__: Same as the one above, but this one is running over TLS (HTTPS)
* __VulnSsh__: OpenSSH Server (on Ubuntu image) configured to allow password auth, empty passwords, root login. Some users with weak passwords have been added.
* __WebLoginForm__: PHP Website using form-based authentication. (credentials: admin:123456789)

## Setup


