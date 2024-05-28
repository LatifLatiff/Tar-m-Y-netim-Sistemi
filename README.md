# Tarim-Yonetim-Sistemi
Bu uygulamada PHP,Mysql,Html ve Boostrap kullanılarak web tabanlı bir tarım yönetim uygulaması geliştirilmiştir.<br>
Uygulama şifreli giriş ve oturum,bilgi girişi ve kaydetme ve girilen bilgileri listeleme,düzenleme ve silme işlemlerini yapmaktadır.<br>
Uygulamayı kullanmak için aşağıdaki link'e tıklayınız<br>
http://95.130.171.20/~st22360859306
## Uygulamanın XAAMPP üzerinde çalıştırılması
Uygulamayı XAAMPP üzerinde çalıştırmak için öncelikle yukarıdaki dosyaları indirmeniz ve zip dosyasından çıkarmalısınız.<br>
Sonrasında XAAMPP da Apache ve MySQL modullerini çalıştırmalısınız ve http://localhost/phpmyadmin/ adresine gidip yeni bir veritabanı oluşturmalısınız veritabanına istediğiniz ismi verebilirsiniz.Veritabanını oluşturduktan sonra  indirdiğiniz dosyalar içerisinde bulunan .sql uzantılı dosyanın içerisinde bulunan sql sorgusunu kopyalayıp phpMyadminde bulunan sql alanına yapıştırıp git butonuna basmalısınız böylece uygulama için gerekli veritabanını oluşturmuş olacaksınız<br>
Ardından indirdiğiniz dosyaların içerisindeki config.php dosyasını bir kod editöründe açarak (uygulama geliştirilirken Visual Studio Code kullanılmıştır) $db değişkenine oluşturduğunuz veritabanının ismini atamalısınız,$user değişkenine root değerini atamalısınız (root MySQL deki default veritabanı kullanıcı adıdır eğer özel olarak bir kullanıcı adı koymuş iseniz onu atamalısınız) ve son olarak $pass değişkenine boşluk atamalısınız '' ların içini boş bırakmalısınız (boşluk MySQL deki default veritabanı şifresidir eğer özel olarak bir şifre  koymuş iseniz onu atamalısınız) $host değişkeninde herhangi bir düzenleme yapmanıza gerek yoktur.<br>
Son olarak  XAAMPP programının kurulu olduğu klasörde htdocs adlı alt-klasöre .sql uzantılı olan dosya hariç diğer tüm dosyaları atmalısınız(sürükle bırak yapabilirsiniz).Bu işlemi yaptıktan sonra kurulumunuz tamamlanmış olacaktır ve artık bu dosyada bulunan sayfalara http://localhost veya http://127.0.0.1 adresinden ulaşabilirsiniz.<br>
Eğer kurulumu doğru bir şekilde yapmış iseniz http://localhost veya http://127.0.0.1 adresinde sizi bir giriş ekranı karşılayacaktır.Giriş yapmak için önce kayıt olmalısınız kayıt olmak için giriş yap butonunun altında bulunan kayıt ol butonuna tıklayarak kullanıcı adı ve şifre oluşturmalısınız ardından kayıt ekranında bulunan giriş yap butonuna tıklayarak oluşturduğunuz şifreler ile giriş yapabilirsiniz.
## Uygulamanın Kullanım videosu
Uygulamanın kullanım videosuna aşağıdaki linkten ulaşabilirsiniz<br>
https://www.youtube.com/watch?v=mdQKkOQDv_w
