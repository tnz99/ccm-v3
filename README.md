# CCM Deployment on Serv00

### Prerequisite

> 1. Git
> 2. Ssh Client

### On your local machine:

> 1. Make neccessary changes
> 2. Run `npm run build`
> 3. Commit your changes
> 4. Push your changes
> 5. `ssh Group10@s0.serv00.com`
>     - You will be prompted to enter you password for user `Group10`

### This command needs to be ran inside the serv00

> 6. `cd /home/Group10/domains/ccmv1.group10.serv00.net/`
> 7. `cd ccm-v3`
> 8. `git pull`
> 9. `cd ..`
> 10. `cp -r ccm-v3/public/build/ public_html/build/`
