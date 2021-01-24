Faker/Factory ile 100.000 adet rastgele datalar oluşturuldu.

Cron üzerinden <b>php artisan schedule:run</b> veya <b>php artisan minute:updater</b> komutu ile UpdateStatusProcess Jobs işlemi tetiklenerek job içerisinde yer alan kurallara göre işlemler yapıldı.

Cron ile her bir dakikada bir işlem kontrolü yapacak şekilde ayarlandı. { Console > Commands > everyMinute.php }

{ Laravel Job/Task Worker App on Cron }
