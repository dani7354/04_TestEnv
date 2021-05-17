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
1. Clone the repository:
   ```
$ git clone --single-branch  https://github.com/dani7354/04_TestEnv.git
   ```
2. Open docker-compose.yml
3. Add the services you wish to run. Make sure that the open TCP port from each service/container is forwarded to a TCP port on your host system

## Run
cd to the 04_TestEnv directory and run:
```
$ docker-compose up --build
```


