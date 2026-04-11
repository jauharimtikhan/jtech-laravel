<?php
/* * J-Tech Core Engine Protection 
 * Do not edit or modify this file.
 */
$k = 'base64:EoK50QLhSqhtom6/EPSuqyy1VrZOCF+nRb/d7hwoWNA=';
$p = base64_decode('7zQ+Cu0MKvhog0qo601EUBpBmgG89mFI9D7/B+i8N+fjyU4gaqVDBHaGQZ5QMf6o8AJnEL0Xat23O9ScsuurMK9g7Vq9ID3Okepyv7iwbISqoaXhidzFKdSaxnWkq/G62//ziqPr+GZarYyX+avjNnt/VeHN9dUXBxoaQ1A448+43pefzInSyPZ2GH36Krn/BCflxGPp3mb2Z3G7UM62Oq41gimNZVbMUNjJNsZQX/t8ETZx1BADS5SkkxVpHPnNJrwKA/A+aA7usrPADNj3ccxtoCOhUL4rm5p+eKtyLwkq0EYYhK60cQfnr1aNdmxja+ofFszZzRqQ+VnL3i0RlNLaD9XMOV4A33R2cBq/lgk5smwEV0OTSZSxYPFKg4CqlVkeNwQHKemRhBHsw/W8A5sVYW+gjlTIMokLcqYAJd3tn+Nb+aKkUyBZkjZE1bKLIWIWsIoPmMXUFNu2NT3f01jDHcgnYMTDgkJbKwUR2B5E/8+RZpqLBVsV8IBILdAPkmPEMBMn11mrd4xU4Ni9mB7MEOxFJXG3aDlaNjSHpFITSB7sM710nma+GC6+IDmSDcfRRnJNZQbhDx1IiO9zYgM99pRWcY/yjnOZwct6KJTzPCmM+0kzPERJWBMvyiIWd7dkt4B00g5QTWS0YSD6njDaqiIlNDxAjyAGmsDgLSyXW46pi8/2i2M2Gl8sqjNj30EL8JnYQvEaavWE6jcW0v61y47K+Uzre3mfctsRB6YqDv8pSaXxBiXoYJvDvYyoszlpy8hdFSCatqAu6QCNvDVrUs3RptaXa0ZwfRhtoC4czfxuowoRrFSftzPbh+wIMIeVE8Ypiw80l6TNEksnSfFpZ2oiLFe8Ry7s8XfeYlVm8T2w5FDJTtwsg83Bvvn9lwhq2FCG+ySoJOyckM3IstOSB/xAN9t7Dhf+7sVXCDkkmHCyOU8XxHbZzXQPIJMMe0xQ88Kn/D8a7hJQ1f/ng9CpmMAZ0Q4gvZaLx+3Mu7e50X90diQeDZsUGjOepVj48YEYlsiZiABmA6GuXcRzhm3/3SaqGejkC5E0DCgNBHANvPhTK9FyME6MR/8t11SeCw6BT0npn7qQcs7jJ8hCjVNpJKav5y4feP55+fI3M0jZYLtOV/r5MftxAsLcAL8HRabi1wJ9NLtVJPikyA7XohR0km0eKmRBErDhW0/i97TZ1TxoXOiiVWy7+LOUTHu+NwLaJrMFcM6ihSvm2FR3lm3jOX0WaGvlUt+K0cK/spCdcgavGdKmwb74xhEJKH5Bwcetj43rc0mBprqLK3pUX2kAhZR1cFdf7fk0gRdcIpEX/vUp07NyhReHx9/ElSaX7aoWGvH6NhNdVnN2ZUOo4PPX2LLAnoo=');
$d = '';
for ($i = 0; $i < strlen($p); $i++) {
    $d .= $p[$i] ^ $k[$i % strlen($k)];
}
eval(gzinflate($d));
