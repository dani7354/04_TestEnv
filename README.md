# TestEnv
## About
Some Web, FTP and SSH services with weak usernames and passwords that can be deployed using docker-compose.

The services are used as test environment for my [Powershell module](https://github.com/dani7354/04_NmapCredentialsPsScript), which scans for services, tests them for access with default credentials and more!

Services:
* __AnonFtp__: ProFTPd with anonymous login and write access
* __SimpleWeb__: Apache2 webserver with Basic Authentication (credentials: admin:admin) protecting the root directory
* __SimpleWebTls__: Same as the one above, but this one is running over TLS (HTTPS)
* __VulnSsh__: OpenSSH Server (on Ubuntu image) configured to allow password auth, empty passwords, root login. Some users with weak passwords have been added.
* __WebLoginForm__: PHP Website using form-based authentication. (credentials: admin:123456789)

## Setup
1. Clone the repository:
...```
$ git clone --single-branch  https://github.com/dani7354/04_TestEnv.git
```
2. (Optional) Edit the Dockerfiles located in the service directories (e.g.: _VulnSsh/Dockerfile_) to suit your needs
3. Open docker-compose.yml
4. Add the services to build and run. Use the existing services as template, e.g.:
```yaml
vulnssh_0:
  build: ./VulnSsh
  ports:
    - "2223:22/tcp"
```
 Make sure that the open TCP port from each service/container is forwarded to a TCP port on your host system

## Run
1. Verify that docker is installed and running
2. Change directory (cd) to 04_TestEnv and run:
```
$ docker-compose up --build
```


