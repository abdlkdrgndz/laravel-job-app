Faker kütüphanesi ile 100.000 adet rastgele datalar oluşturuldu.

Cron üzerinden <b>php artisan schedule:run</b> komutu ile UpdateStatusProcess Job'ı tetiklenerek job içerisinde yer alan kurallara göre işlem yapıldı.

Cron ile her bir dakikada bir işlem kontrolü yapacak şekilde ayarlandı. 

{ Laravel Job/Task Worker App on Cron }
