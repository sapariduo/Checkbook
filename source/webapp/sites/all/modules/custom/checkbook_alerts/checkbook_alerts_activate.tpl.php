Please click the following link to activate your alert:
<?php global $conf; ?>
Alert description : <?=$alert->label ?>
Alert frequency: <?=($alert->minimum_days==1?'Every Day':'Every '.$alert->minimum_days.' days') ?> 
Number of new records that match alert criteria: <?=$alert->new_count ?>
Link to Checkbook NYC alert results: <?=$alert->user_url ?>
To activate to this alert click here: <?=$conf['check_book']['data_feeds']['site_url'].'alert/activate/'.$alert->checkbook_alerts_sysid.md5($alert->checkbook_alerts_sysid.$alert->label.$alert->recipient),array('absolute'=>true); ?>


To unsubscribe to this alert click here: <?=$conf['check_book']['data_feeds']['site_url'].'alert/unsubscribe/'.$alert->checkbook_alerts_sysid.md5($alert->checkbook_alerts_sysid.$alert->label.$alert->recipient),array('absolute'=>true); ?>

To unsubscribe to all alerts sent to this email address click here: <?=$conf['check_book']['data_feeds']['site_url'].'alert/unsubscribe/'.md5($alert->recipient) ?>

Office of the Comptroller - City of New York