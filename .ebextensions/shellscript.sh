  #!/bin/sh
      echo Defaults:root \!requiretty >> /etc/sudoers
      sudo cp /var/www/html/.ebextensions/some_cron_job.txt /etc/cron.d/hello-cron
